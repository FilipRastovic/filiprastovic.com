import { defineConfig } from 'vite'
import react from '@vitejs/plugin-react'
import path from 'path'
import fs from 'fs'

function mimeType(filePath) {
  const ext = path.extname(filePath).toLowerCase()
  const map = { '.png': 'image/png', '.jpg': 'image/jpeg', '.jpeg': 'image/jpeg', '.gif': 'image/gif', '.webp': 'image/webp', '.mp4': 'video/mp4', '.svg': 'image/svg+xml' }
  return map[ext] || 'application/octet-stream'
}

export default defineConfig({
  plugins: [
    react(),
    {
      name: 'serve-images',
      configureServer(server) {
        server.middlewares.use('/images', (req, res, next) => {
          const filePath = path.join(process.cwd(), 'images', req.url === '/' ? '' : req.url)
          if (fs.existsSync(filePath) && fs.statSync(filePath).isFile()) {
            res.setHeader('Content-Type', mimeType(filePath))
            fs.createReadStream(filePath).pipe(res)
          } else next()
        })
      }
    }
  ],
  publicDir: false,
  build: {
    outDir: 'dist',
  }
})
