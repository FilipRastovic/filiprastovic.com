import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const photos = Array.from({ length: 24 }, (_, i) => `gardening-${i + 1}.webp`)

export default function GardeningSection() {
  return (
    <section id="gardening" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>Gardening</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        Chilis, tomatoes, and sunflowers - July 2026. Shown oldest to newest.
      </p>
      <div className="photo-grid" style={{ '--grid-min': '200px', '--grid-gap': '0.75rem' }}>
        {photos.map((file, i) => (
          <Animator key={file}>
            <Animated
              animated={[fade(), transition('y', 12, 0)]}
              style={{
                border: `1px solid ${colors.border}`,
                overflow: 'hidden',
                background: 'rgba(0,20,20,0.5)',
                aspectRatio: '3 / 4',
              }}
            >
              <img
                src={`/images/${file}`}
                alt={`Gardening progress photo ${i + 1}`}
                loading="lazy"
                style={{ width: '100%', height: '100%', objectFit: 'cover', display: 'block', filter: 'brightness(0.95) contrast(1.03)' }}
              />
            </Animated>
          </Animator>
        ))}
      </div>
    </section>
  )
}
