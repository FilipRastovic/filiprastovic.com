import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const photos = [
  { file: 'bread-1.webp', w: 960, h: 1280 },
  { file: 'bread-2.webp', w: 960, h: 1280 },
  { file: 'bread-3.webp', w: 960, h: 1280 },
  { file: 'bread-4.webp', w: 960, h: 1280 },
  { file: 'bread-5.webp', w: 1280, h: 960 },
  { file: 'bread-6.webp', w: 960, h: 1280 },
  { file: 'bread-7.webp', w: 1280, h: 960 },
  { file: 'bread-8.webp', w: 1280, h: 1280 },
  { file: 'bread-9.webp', w: 721, h: 1280 },
  { file: 'bread-10.webp', w: 591, h: 1280 },
]

export default function BreadSection() {
  return (
    <section id="bread" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>Bread Baking</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        More to come.
      </p>
      <div className="photo-grid" style={{ '--grid-min': '200px', '--grid-gap': '0.75rem' }}>
        {photos.map((p, i) => (
          <Animator key={p.file}>
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
                src={`/images/${p.file}`}
                alt={`Bread baking photo ${i + 1}`}
                loading="lazy"
                width={p.w}
                height={p.h}
                style={{ width: '100%', height: '100%', objectFit: 'cover', display: 'block' }}
              />
            </Animated>
          </Animator>
        ))}
      </div>
    </section>
  )
}
