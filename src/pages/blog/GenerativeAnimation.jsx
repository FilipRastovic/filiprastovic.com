import ArticleLayout from '../../components/blog/ArticleLayout.jsx'

export default function GenerativeAnimation() {
  return (
    <ArticleLayout title="Generative Animation [Unity 2D]" date="2024" tags={['Generative Art', 'Unity 2D', 'Creative Code']}>
      <p style={{ marginBottom: '1.5rem' }}>A generative animation done in Unity 2D using the tools we've developed for our game Trial and Terror.</p>
      <video controls preload="metadata" src="/images/blog/generative-animation.mp4" style={{ width: '100%', maxWidth: '720px', display: 'block', background: '#000' }} />
    </ArticleLayout>
  )
}
