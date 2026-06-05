import ArticleLayout from '../../components/blog/ArticleLayout.jsx'

export default function BootstrapResumeTutorial() {
  return (
    <ArticleLayout title="Resume Portfolio Bootstrap 4 - Code-Along Tutorial" date="2024" tags={['Tutorial', 'Bootstrap', 'HTML/CSS']}>
      <p style={{ marginBottom: '1.5rem' }}>
        Resume / Portfolio website code-along tutorial written in Bootstrap 4, HTML, SCSS, JavaScript and jQuery. Code is available on{' '}
        <a href="https://codepen.io/FilipRastovic/pen/bGGwmjv" target="_blank" rel="noopener noreferrer">CodePen</a>{' '}and{' '}
        <a href="https://github.com/FilipRastovic/clean-resume" target="_blank" rel="noopener noreferrer">GitHub</a>.
      </p>
      <video controls preload="metadata" src="https://filiprastovic.com/wp-content/uploads/2024/03/Resume-Portfolio-Bootstrap-4-Website-CodeAlong-Tutorial-1_2.mp4" style={{ width: '100%', maxWidth: '720px', display: 'block', background: '#000' }} />
    </ArticleLayout>
  )
}
