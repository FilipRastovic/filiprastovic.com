import ArticleLayout from '../../components/blog/ArticleLayout.jsx'

export default function LeapOfFaith() {
  return (
    <ArticleLayout title="Leap of Faith - My Video Game" date="2016" tags={['Game Dev', 'Unity', 'Puzzle']}>
      <p>
        One of the first games I self-published. Made in 2016. Based on a dream I had, it is a minimalist 2D "memory puzzle". Every level has a unique pattern. Available for Windows - download it on{' '}
        <a href="https://filiprastovic.itch.io/leap-of-faith" target="_blank" rel="noopener noreferrer">itch.io</a>.
      </p>
    </ArticleLayout>
  )
}
