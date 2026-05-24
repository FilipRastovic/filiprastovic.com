import ArticleLayout from '../../components/blog/ArticleLayout.jsx'

export default function PerlinFlow() {
  return (
    <ArticleLayout title="Generative Perlin Flow – Programmer Art" date="2024" tags={['Generative Art', 'Processing', 'Creative Code']}>
      <p style={{ marginBottom: '1.5rem' }}>One of my old sketches.</p>
      <video controls preload="metadata" src="/images/blog/perlin-flow.mp4" style={{ width: '100%', maxWidth: '720px', display: 'block', background: '#000' }} />
    </ArticleLayout>
  )
}
