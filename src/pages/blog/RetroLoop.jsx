import ArticleLayout from '../../components/blog/ArticleLayout.jsx'

export default function RetroLoop() {
  return (
    <ArticleLayout title="Retro Loop Music Visual" date="2024" tags={['Motion Graphics', 'Cinema 4D', 'Octane Render']}>
      <p style={{ marginBottom: '1.5rem' }}>Made in Cinema 4D and Octane Render following the course from Kidmograph.</p>
      <video controls preload="metadata" src="/images/blog/retro-loop.mp4" style={{ width: '100%', maxWidth: '720px', display: 'block', background: '#000' }} />
    </ArticleLayout>
  )
}
