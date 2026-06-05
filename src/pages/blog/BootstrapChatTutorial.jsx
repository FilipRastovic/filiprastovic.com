import ArticleLayout from '../../components/blog/ArticleLayout.jsx'

export default function BootstrapChatTutorial() {
  return (
    <ArticleLayout title="Bootstrap Chat App UI - Code-Along Tutorial" date="2019" tags={['Tutorial', 'Bootstrap', 'HTML/CSS']}>
      <p style={{ marginBottom: '1.5rem' }}>
        A coding video lesson I shot on June 30, 2019. Code is available on{' '}
        <a href="https://codepen.io/FilipRastovic/pen/pXgqKK" target="_blank" rel="noopener noreferrer">CodePen</a>{' '}and{' '}
        <a href="https://github.com/FilipRastovic/whatsapp-chat-app-ui" target="_blank" rel="noopener noreferrer">GitHub</a>.
      </p>
      <video controls preload="metadata" src="https://filiprastovic.com/wp-content/uploads/2024/03/Bootstrap-Chat-App-UI-Codealong_Tutorial-HTML-CSS-SCSS-Web-Design-Development-.mp4" style={{ width: '100%', maxWidth: '720px', display: 'block', background: '#000' }} />
    </ArticleLayout>
  )
}
