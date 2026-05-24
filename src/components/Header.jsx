import { Animator, Animated, Text, aaVisibility, aa } from '@arwes/react'
import { colors } from '../theme.js'

export default function Header() {
  return (
    <header style={{ marginBottom: '3rem' }}>
      <div style={{ display: 'flex', alignItems: 'center', gap: '1.5rem', marginBottom: '1.25rem', flexWrap: 'wrap' }}>
        {/* Avatar */}
        <Animator>
          <Animated animated={[aaVisibility(), aa('scale', 0.9, 1)]}>
            <div style={{
              width: '88px',
              height: '88px',
              borderRadius: '50%',
              border: `2px solid ${colors.primary}`,
              overflow: 'hidden',
              flexShrink: 0,
              boxShadow: `0 0 20px ${colors.primaryDim}`,
            }}>
              <picture>
                <source srcSet="/images/filip.webp" type="image/webp" />
                <img
                  src="/images/filip.png"
                  alt="Filip Rastovic"
                  width="88" height="88"
                  style={{ width: '100%', height: '100%', objectFit: 'cover' }}
                  fetchPriority="high"
                />
              </picture>
            </div>
          </Animated>
        </Animator>

        {/* Name + role */}
        <div>
          <Animator>
            <Text
              as="h1"
              manager="decipher"
              style={{
                fontFamily: "'Titillium Web', sans-serif",
                fontSize: 'clamp(1.6rem, 4vw, 2.2rem)',
                fontWeight: 700,
                color: colors.primary,
                letterSpacing: '0.02em',
                lineHeight: 1.2,
                marginBottom: '0.35rem',
              }}
            >
              Filip Rastovic
            </Text>
          </Animator>
          <Animator>
            <Animated animated={[aaVisibility()]}>
              <span style={{
                fontFamily: "'Share Tech Mono', monospace",
                fontSize: '12px',
                color: colors.textMuted,
                letterSpacing: '0.08em',
              }}>
                Senior Shopify Developer · Novi Sad, Serbia
              </span>
            </Animated>
          </Animator>
        </div>
      </div>

      {/* Role chips */}
      <Animator>
        <Animated animated={[aaVisibility()]}>
          <div style={{ display: 'flex', gap: '0.5rem', flexWrap: 'wrap', marginBottom: '1.25rem' }}>
            {['Senior Shopify Developer', 'Full-Stack Software Engineer', 'CRO Specialist'].map(role => (
              <span key={role} style={{
                fontFamily: "'Share Tech Mono', monospace",
                fontSize: '10px',
                fontWeight: 600,
                letterSpacing: '0.1em',
                textTransform: 'uppercase',
                color: colors.secondary,
                border: `1px solid ${colors.primaryMuted}`,
                padding: '3px 10px',
                background: 'rgba(0,200,180,0.05)',
              }}>
                {role}
              </span>
            ))}
          </div>
        </Animated>
      </Animator>

      {/* Bio */}
      <Animator>
        <Animated animated={[aaVisibility()]}>
          <p style={{ fontSize: '15px', lineHeight: 1.7, color: colors.text, maxWidth: '720px' }}>
            I'm a <strong style={{ color: colors.primary }}>Senior Shopify Developer</strong> and{' '}
            <strong style={{ color: colors.primary }}>Full-Stack Software Engineer</strong> based in{' '}
            <strong style={{ color: colors.primary }}>Novi Sad, Serbia</strong>, with{' '}
            <strong style={{ color: colors.primary }}>10+ years of professional web development experience</strong> and a{' '}
            <strong style={{ color: colors.primary }}>Bachelor's degree in Software Engineering</strong>. I build high-converting
            Shopify stores, Shopify Plus implementations, headless Shopify (Hydrogen / Remix) builds, and custom web
            applications for global brands — working remotely worldwide. Outside of work I enjoy reading, music, guitar,
            gaming, gym, gardening &amp; landscaping.
          </p>
        </Animated>
      </Animator>
    </header>
  )
}
