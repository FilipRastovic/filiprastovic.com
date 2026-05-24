import ArticleLayout from '../../components/blog/ArticleLayout.jsx'
import { colors } from '../../theme.js'

const images = ['structure-3d-1.png','structure-3d-2.png','structure-3d-3.png','structure-3d-4.png','structure-3d-5.png','structure-3d-6.png','structure-3d-7.png','structure-3d-8.png','structure-3d-9.png']

export default function Structure3dAbstract() {
  return (
    <ArticleLayout title="Structure – 3D Abstract Geometric Composition" date="2022" tags={['3D Art', 'Cinema 4D', 'Abstract']}>
      <p style={{ marginBottom: '1.5rem' }}>Some 3D renders I did in 2022.</p>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(220px, 1fr))', gap: '0.75rem' }}>
        {images.map((img, i) => (
          <a key={img} href={`/images/blog/${img}`} target="_blank" rel="noopener noreferrer" style={{ display: 'block', border: `1px solid ${colors.border}`, overflow: 'hidden' }}>
            <img src={`/images/blog/${img}`} alt={`Structure 3D render ${i+1}`} loading="lazy" style={{ width: '100%', height: 'auto', display: 'block' }} />
          </a>
        ))}
      </div>
    </ArticleLayout>
  )
}
