import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const photos = [
  { file: 'photography-2.webp', ratio: '1999 / 1125', alt: 'Adriatic bay framed by trees, with an island visible offshore' },
  { file: 'photography-1.webp', ratio: '9 / 16', alt: 'Coastal view over the Adriatic sea with a garden and surfboard in the foreground', small: true },
]

export default function PhotographySection() {
  return (
    <section id="photography" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>Photography</SectionLabel>
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
                maxWidth: p.small ? '220px' : '640px',
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
