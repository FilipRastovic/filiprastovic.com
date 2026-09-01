import { createContext, useContext, useState } from 'react'
import Lightbox from './Lightbox.jsx'

const GalleryLightboxContext = createContext(null)

export function GalleryLightboxProvider({ images, children }) {
  const [index, setIndex] = useState(null)

  const open = (i) => setIndex(i)
  const close = () => setIndex(null)
  const navigate = (delta) => setIndex((i) => (i + delta + images.length) % images.length)

  return (
    <GalleryLightboxContext.Provider value={{ open }}>
      {children}
      {index !== null && (
        <Lightbox images={images} index={index} onClose={close} onNavigate={navigate} />
      )}
    </GalleryLightboxContext.Provider>
  )
}

export function useGalleryLightbox() {
  const ctx = useContext(GalleryLightboxContext)
  if (!ctx) throw new Error('useGalleryLightbox must be used within GalleryLightboxProvider')
  return ctx
}
