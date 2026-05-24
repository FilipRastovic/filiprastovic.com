import ArticleLayout from '../../components/blog/ArticleLayout.jsx'
import { colors } from '../../theme.js'

const images = [['iso-houses-1.png',1],['iso-houses-2.png',2],['iso-houses-3.png',3],['iso-houses-4.png',4],['iso-houses-5.jpg',5],['iso-houses-6.png',6],['iso-houses-7.jpg',7],['iso-houses-8.png',8],['iso-houses-9.png',9]]

export default function IsometricHouses() {
  return (
    <ArticleLayout title="Isometric Houses 3D Art" date="2024" tags={['3D Art', 'Isometric', 'Cinema 4D']}>
      <p style={{ marginBottom: '1.5rem' }}>Some houses.</p>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(220px, 1fr))', gap: '0.75rem' }}>
        {images.map(([img, n]) => (
          <a key={img} href={`/images/blog/${img}`} target="_blank" rel="noopener noreferrer" style={{ display: 'block', border: `1px solid ${colors.border}`, overflow: 'hidden' }}>
            <img src={`/images/blog/${img}`} alt={`Isometric house ${n}`} loading="lazy" style={{ width: '100%', height: 'auto', display: 'block' }} />
          </a>
        ))}
      </div>
    </ArticleLayout>
  )
}
