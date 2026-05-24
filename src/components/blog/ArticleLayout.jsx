import { Link } from 'react-router-dom'
import { Animator, Animated, Text, aaVisibility, aa } from '@arwes/react'
import { colors } from '../../theme.js'

export default function ArticleLayout({ title, date, tags = [], children }) {
  return (
    <article style={{ padding: '2.5rem max(1.5rem, calc((100% - 800px)/2))' }}>
      <Animator>
        <Animated animated={[aaVisibility()]}>
          <Link to="/blog" style={{
            display: 'inline-flex',
            alignItems: 'center',
            gap: '6px',
            fontFamily: "'Share Tech Mono', monospace",
            fontSize: '11px',
            letterSpacing: '0.1em',
            textTransform: 'uppercase',
            color: colors.primaryDim,
            textDecoration: 'none',
            marginBottom: '2rem',
          }}>
            ← Back to Blog
          </Link>
        </Animated>
      </Animator>

      <header style={{ marginBottom: '2.5rem' }}>
        <Animator>
          <Animated animated={[aaVisibility()]}>
            <div style={{ display: 'flex', gap: '0.5rem', flexWrap: 'wrap', marginBottom: '1rem' }}>
              {tags.map(tag => (
                <span key={tag} style={{
                  fontFamily: "'Share Tech Mono', monospace",
                  fontSize: '10px',
                  letterSpacing: '0.1em',
                  textTransform: 'uppercase',
                  color: colors.primary,
                  border: `1px solid ${colors.primaryMuted}`,
                  padding: '2px 8px',
                  background: 'rgba(0,200,160,0.05)',
                }}>
                  {tag}
                </span>
              ))}
            </div>
          </Animated>
        </Animator>
        <Animator>
          <Text
            as="h1"
            manager="decipher"
            style={{
              fontFamily: "'Titillium Web', sans-serif",
              fontSize: 'clamp(1.4rem, 3.5vw, 1.9rem)',
              fontWeight: 700,
              color: colors.primary,
              lineHeight: 1.3,
              marginBottom: '0.75rem',
            }}
          >
            {title}
          </Text>
        </Animator>
        <Animator>
          <Animated animated={[aaVisibility()]}>
            <time style={{
              fontFamily: "'Share Tech Mono', monospace",
              fontSize: '11px',
              color: colors.textMuted,
              letterSpacing: '0.08em',
            }}>
              {date}
            </time>
          </Animated>
        </Animator>
      </header>

      <div style={{
        fontSize: '15px',
        lineHeight: 1.8,
        color: colors.text,
      }}>
        {children}
      </div>
    </article>
  )
}
