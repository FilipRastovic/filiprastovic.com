import ArticleLayout from '../../components/blog/ArticleLayout.jsx'
import { colors } from '../../theme.js'

const images = ['silvermoon-1.jpg','silvermoon-2.jpg','silvermoon-3.jpg','silvermoon-4.jpg','silvermoon-5.jpg','silvermoon-6.jpg','silvermoon-7.jpg','silvermoon-8.jpg','silvermoon-9.jpg','silvermoon-10.jpg','silvermoon-11.jpg','silvermoon-12.jpg','silvermoon-13.jpg','silvermoon-14.jpg','silvermoon-14b.jpg','silvermoon-15.jpg','silvermoon-16.jpg','silvermoon-17.jpg','silvermoon-18.jpg','silvermoon-19.jpg','silvermoon-20.jpg','silvermoon-21.jpg','silvermoon-22.jpg','silvermoon-23.jpg','silvermoon-24.jpg','silvermoon-25.jpg']

export default function SilvermoonTown() {
  return (
    <ArticleLayout title="Silvermoon Town - Abstract 3D Compositions" date="2024" tags={['3D Art', 'Cinema 4D', 'Design']}>
      <p style={{ marginBottom: '1.5rem' }}>Some renders I did inspired by Peter Tarka and Omar Aqil.</p>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(220px, 1fr))', gap: '0.75rem' }}>
        {images.map((img, i) => (
          <a key={img} href={`/images/blog/${img}`} target="_blank" rel="noopener noreferrer" style={{ display: 'block', border: `1px solid ${colors.border}`, overflow: 'hidden' }}>
            <img src={`/images/blog/${img}`} alt={`Silvermoon Town render ${i+1}`} loading="lazy" style={{ width: '100%', height: 'auto', display: 'block' }} />
          </a>
        ))}
      </div>
    </ArticleLayout>
  )
}
