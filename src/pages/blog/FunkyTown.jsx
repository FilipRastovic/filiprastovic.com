import ArticleLayout from '../../components/blog/ArticleLayout.jsx'
import { colors } from '../../theme.js'

const images = ['funky-town-1.jpg','funky-town-2.png','funky-town-3.png','funky-town-4.jpg','funky-town-5.jpg','funky-town-6.jpg','funky-town-7.jpg','funky-town-8.jpg','funky-town-9.jpg','funky-town-10.jpg','funky-town-11.jpg','funky-town-12.jpg','funky-town-13.jpg','funky-town-14.png','funky-town-15.jpg','funky-town-16.jpg','funky-town-17.png','funky-town-18.png']

export default function FunkyTown() {
  return (
    <ArticleLayout title="Funky Town - 3D Stylized House City" date="2024" tags={['3D Art', 'Cinema 4D', 'Octane Render']}>
      <p style={{ marginBottom: '1.5rem' }}>Personal project. Took some house ideas from Angelo Fernandez. Modeled in Cinema 4D, rendered in Octane Render.</p>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(220px, 1fr))', gap: '0.75rem' }}>
        {images.map((img, i) => (
          <a key={img} href={`/images/blog/${img}`} target="_blank" rel="noopener noreferrer" style={{ display: 'block', border: `1px solid ${colors.border}`, overflow: 'hidden' }}>
            <img src={`/images/blog/${img}`} alt={`Funky Town render ${i+1}`} loading="lazy" style={{ width: '100%', height: 'auto', display: 'block' }} />
          </a>
        ))}
      </div>
    </ArticleLayout>
  )
}
