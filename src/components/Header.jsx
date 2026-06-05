import { Animator, Animated, Text, fade, transition } from '@arwes/react'
import { colors } from '../theme.js'

export default function Header() {
  return (
    <header style={{ marginBottom: '5rem' }}>
      <div style={{ display: 'flex', alignItems: 'center', gap: '3rem', marginBottom: '2.5rem', flexWrap: 'wrap' }}>
        <Animator>
          <Animated animated={[fade(), transition('scale', 0.9, 1)]}>
            <div style={{
              width: '200px',
              height: '200px',
              borderRadius: '50%',
              border: `3px solid ${colors.primary}`,
              overflow: 'hidden',
              flexShrink: 0,
              boxShadow: `0 0 60px ${colors.primaryDim}`,
            }}>
              <picture>
                <source srcSet="/images/filip.webp" type="image/webp" />
                <img
                  src="/images/filip.png"
                  alt="Filip Rastovic"
                  width="200" height="200"
                  style={{ width: '100%', height: '100%', objectFit: 'cover' }}
                  fetchPriority="high"
                />
              </picture>
            </div>
          </Animated>
        </Animator>

        <div>
          <Animator>
            <Text
              as="h1"
              manager="decipher"
              style={{
                fontFamily: "'Titillium Web', sans-serif",
                fontSize: 'clamp(3rem, 8vw, 5rem)',
                fontWeight: 700,
                color: colors.primary,
                letterSpacing: '-0.01em',
                lineHeight: 1.0,
                marginBottom: '0.75rem',
              }}
            >
              Filip Rastovic
            </Text>
          </Animator>
          <Animator>
            <Animated animated={[fade()]}>
              <span style={{
                fontFamily: "'Share Tech Mono', monospace",
                fontSize: '17px',
                color: colors.textMuted,
                letterSpacing: '0.04em',
              }}>
                Senior Shopify Developer · Novi Sad, Serbia
              </span>
            </Animated>
          </Animator>
        </div>
      </div>

      <Animator>
        <Animated animated={[fade()]}>
          <div style={{ display: 'flex', gap: '0.75rem', flexWrap: 'wrap', marginBottom: '2.25rem' }}>
            {['Senior Shopify Developer', 'Full-Stack Software Engineer', 'CRO Specialist'].map(role => (
              <span key={role} style={{
                fontFamily: "'Share Tech Mono', monospace",
                fontSize: '13px',
                fontWeight: 700,
                letterSpacing: '0.1em',
                textTransform: 'uppercase',
                color: colors.secondary,
                border: `1px solid ${colors.primaryMuted}`,
                padding: '8px 18px',
                background: 'rgba(0,200,180,0.05)',
              }}>
                {role}
              </span>
            ))}
          </div>
        </Animated>
      </Animator>

      <Animator>
        <Animated animated={[fade()]}>
          <p style={{ fontSize: '20px', lineHeight: 1.85, color: colors.text, maxWidth: '720px' }}>
            I'm a <strong style={{ color: colors.primary }}>Senior Shopify Developer</strong> and{' '}
            <strong style={{ color: colors.primary }}>Full-Stack Software Engineer</strong> based in{' '}
            <strong style={{ color: colors.primary }}>Novi Sad, Serbia</strong>, with{' '}
            <strong style={{ color: colors.primary }}>10+ years of professional web development experience</strong> and a{' '}
            <strong style={{ color: colors.primary }}>Bachelor's degree in Software Engineering</strong>. I build high-converting
            Shopify stores, Shopify Plus implementations, headless Shopify (Hydrogen / Remix) builds, and custom web
            applications for global brands, working remotely worldwide. Outside of work I enjoy reading, music, guitar,
            gaming, gym, gardening &amp; landscaping.
          </p>
        </Animated>
      </Animator>
    </header>
  )
}
