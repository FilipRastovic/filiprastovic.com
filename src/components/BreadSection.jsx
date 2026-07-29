import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const photos = [
  { file: 'bread-1.webp', ratio: '3 / 4', alt: 'Fresh baked sourdough bread with caraway seeds in a Dutch oven' },
]

export default function BreadSection() {
  return (
    <section id="bread" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>Bread Baking</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        More to come.
      </p>
      <div style={{ display: 'flex', flexDirection: 'column', gap: '1rem' }}>
        {photos.map((p) => (
          <Animator key={p.file}>
            <Animated
              animated={[fade(), transition('y', 12, 0)]}
              style={{
                border: `1px solid ${colors.border}`,
                overflow: 'hidden',
                background: 'rgba(0,20,20,0.5)',
                aspectRatio: p.ratio,
                maxWidth: '420px',
              }}
            >
              <img
                src={`/images/${p.file}`}
                alt={p.alt}
                loading="lazy"
                style={{ width: '100%', height: '100%', objectFit: 'cover', display: 'block' }}
              />
            </Animated>
          </Animator>
        ))}
      </div>
    </section>
  )
}
