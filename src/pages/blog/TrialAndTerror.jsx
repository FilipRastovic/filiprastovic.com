import ArticleLayout from '../../components/blog/ArticleLayout.jsx'

export default function TrialAndTerror() {
  return (
    <ArticleLayout title="Trial And Terror - My Video Game" date="2019" tags={['Game Dev', 'Unity', 'Steam']}>
      <p style={{ marginBottom: '1.5rem' }}>
        A puzzle-platformer 2D video game I co-developed and designed with my friend Jan Sulja while studying computer science at the University of Novi Sad. The game is self-published on{' '}
        <a href="https://store.steampowered.com/app/1131520/Trial_And_Terror/" target="_blank" rel="noopener noreferrer">Steam</a>{' '}and{' '}
        <a href="https://www.newgrounds.com/portal/view/713592" target="_blank" rel="noopener noreferrer">Newgrounds</a>, and was also published by{' '}
        <a href="https://armorgames.com/trial-and-terror-game/18409" target="_blank" rel="noopener noreferrer">Armor Games</a>. We were invited to showcase the game at an expo at the Yugoslav Movie Museum. Here's the game trailer.
      </p>
      <video controls preload="metadata" src="/images/blog/trial-terror-trailer.mp4" style={{ width: '100%', maxWidth: '720px', display: 'block', background: '#000' }} />
    </ArticleLayout>
  )
}
