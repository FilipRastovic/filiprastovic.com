import { Link } from 'react-router-dom'
import { Animator, Animated, fade, transition, FrameKranox } from '@arwes/react'
import { colors } from '../../theme.js'

export default function BlogCard({ to, title, date, tags = [], description }) {
  return (
    <Animator>
      <Animated animated={[fade(), transition('y', 12, 0)]}>
        <Link to={to} style={{ textDecoration: 'none', display: 'block' }}>
          <div style={{ position: 'relative', padding: '1.25rem 1.5rem', cursor: 'pointer', color: colors.border }}>
            <FrameKranox strokeWidth={1} />
            <div style={{ position: 'relative', zIndex: 1 }}>
              <div style={{ display: 'flex', gap: '0.4rem', flexWrap: 'wrap', marginBottom: '0.6rem' }}>
                {tags.map(t => (
                  <span key={t} style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '9px', letterSpacing: '0.1em', textTransform: 'uppercase', color: colors.primary, border: `1px solid ${colors.primaryMuted}`, padding: '1px 6px' }}>
                    {t}
                  </span>
                ))}
              </div>
              <div style={{ fontFamily: "'Titillium Web', sans-serif", fontSize: '16px', fontWeight: 600, color: colors.text, textDecoration: 'underline', textDecorationColor: colors.border, marginBottom: '0.4rem', lineHeight: 1.3 }}>
                {title}
              </div>
              {description && (
                <div style={{ fontFamily: "'Titillium Web', sans-serif", fontSize: '13px', color: colors.textMuted, lineHeight: 1.6, marginBottom: '0.6rem' }}>
                  {description}
                </div>
              )}
              <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '10px', color: colors.primaryDim }}>
                {date}
              </div>
            </div>
          </div>
        </Link>
      </Animated>
    </Animator>
  )
}
