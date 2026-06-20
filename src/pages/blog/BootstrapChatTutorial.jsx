import ArticleLayout from '../../components/blog/ArticleLayout.jsx'

export default function BootstrapChatTutorial() {
  return (
    <ArticleLayout title="Bootstrap Chat App UI - Code-Along Tutorial" date="2019" tags={['Tutorial', 'Bootstrap', 'HTML/CSS']}>
      <p style={{ marginBottom: '1.5rem' }}>
        A coding video lesson I shot on June 30, 2019. Code is available on{' '}
        <a href="https://codepen.io/FilipRastovic/pen/pXgqKK" target="_blank" rel="noopener noreferrer">CodePen</a>{' '}and{' '}
        <a href="https://github.com/FilipRastovic/whatsapp-chat-app-ui" target="_blank" rel="noopener noreferrer">GitHub</a>.
      </p>
      <div style={{ position: 'relative', width: '100%', maxWidth: '720px', paddingTop: '56.25%', background: '#000' }}>
        <iframe
          src="https://www.youtube.com/embed/fCpw5i_2IYU"
          title="Bootstrap Chat App UI Codealong/Tutorial[ HTML, CSS, SCSS, Web Design, Development ]"
          style={{ position: 'absolute', top: 0, left: 0, width: '100%', height: '100%', border: 0 }}
          allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
          referrerPolicy="strict-origin-when-cross-origin"
          allowFullScreen
        />
      </div>
    </ArticleLayout>
  )
}
