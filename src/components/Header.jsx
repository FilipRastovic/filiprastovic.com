import { Animator, Animated, Text, fade, transition } from '@arwes/react'
import { Link } from 'react-router-dom'
import { colors } from '../theme.js'

export default function Header() {
  return (
    <header className="header-root" style={{ marginBottom: '5rem' }}>
      <style>{`
        @media (max-width: 600px) {
          .header-root { margin-top: -90px; position: relative; z-index: 2; }
          .header-intro { background: rgba(2,10,10,0.88) !important; padding: 1rem !important; gap: 1.25rem !important; margin-bottom: 1rem !important; flex-wrap: nowrap !important; }
          .header-photo { width: 90px !important; height: 90px !important; box-shadow: 0 0 24px rgba(0,200,160,0.4) !important; }
          .header-name { font-size: clamp(1.4rem, 7vw, 2rem) !important; margin-bottom: 0.25rem !important; }
          .header-subtitle { font-size: 13px !important; }
        }
      `}</style>
      <div className="header-intro" style={{ display: 'flex', alignItems: 'center', gap: '3rem', marginBottom: '2.5rem', flexWrap: 'wrap' }}>
        <Animator>
          <Animated animated={[fade(), transition('scale', 0.9, 1)]}>
            <div className="header-photo" style={{
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
              className="header-name"
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
              <span className="header-subtitle" style={{
                fontFamily: "'Share Tech Mono', monospace",
                fontSize: '17px',
                color: colors.textMuted,
                letterSpacing: '0.04em',
              }}>
                Software Engineer · Novi Sad, Serbia
              </span>
            </Animated>
          </Animator>
        </div>
      </div>

      <Animator>
        <Animated animated={[fade()]}>
          <div style={{ display: 'flex', gap: '0.75rem', flexWrap: 'wrap', marginBottom: '2.25rem' }}>
            {['Shopify Consultant', 'Full-Stack Web Developer', 'E-Commerce Solutions Architect'].map(role => (
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
          <p style={{ fontSize: 'clamp(15px, 4vw, 19px)', lineHeight: 1.85, color: colors.text, maxWidth: '720px' }}>
            My name is Filip and this is my personal website where I share my work. It's mostly software, but
            there's some interesting photos and 3D graphics you'll find if you browse as well. I'm a{' '}
            <strong style={{ color: colors.primary }}>software engineer</strong> from{' '}
            <strong style={{ color: colors.primary }}>Novi Sad, Serbia</strong> with{' '}
            <strong style={{ color: colors.primary }}>10+ years of professional web development experience</strong>.
            As a remote freelancer I have had the pleasure to collaborate with{' '}
            <strong style={{ color: colors.primary }}>over 100 clients</strong> from around the globe (see the{' '}
            <Link to="/testimonials" style={{ color: colors.primary }}>testimonials page</Link> and my Upwork
            profile). My biggest clients were <strong style={{ color: colors.primary }}>Google</strong> and{' '}
            <strong style={{ color: colors.primary }}>Johnson &amp; Johnson</strong>.
          </p>
        </Animated>
      </Animator>
    </header>
  )
}
