import ArticleLayout from '../../components/blog/ArticleLayout.jsx'
import { colors } from '../../theme.js'

export default function ScifiPiEnclosure() {
  return (
    <ArticleLayout title="Sci-Fi Raspberry Pi Enclosure" date="2024" tags={['3D Modeling', 'CAD', 'Cinema 4D']}>
      <p style={{ marginBottom: '1.5rem' }}>My take on CAD modeling.</p>
      {['scifi-pi-1.jpg','scifi-pi-2.jpg','scifi-pi-3.jpg'].map((img, i) => (
        <figure key={img} style={{ margin: '1.5rem 0', border: `1px solid ${colors.border}` }}>
          <img src={`/images/blog/${img}`} alt={`Sci-fi Raspberry Pi enclosure render ${i+1}`} loading={i === 0 ? 'eager' : 'lazy'} style={{ width: '100%', height: 'auto', display: 'block' }} />
        </figure>
      ))}
    </ArticleLayout>
  )
}
