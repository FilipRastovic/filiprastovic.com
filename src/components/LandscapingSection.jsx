import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const photos = [
  { file: 'landscaping-1.webp', w: 960, h: 1280 },
  { file: 'landscaping-2.webp', w: 960, h: 1280 },
  { file: 'landscaping-3.webp', w: 1280, h: 960 },
  { file: 'landscaping-4.webp', w: 960, h: 1280 },
  { file: 'landscaping-5.webp', w: 602, h: 1280 },
  { file: 'landscaping-6.webp', w: 960, h: 1280 },
  { file: 'landscaping-7.webp', w: 960, h: 1280 },
  { file: 'landscaping-8.webp', w: 960, h: 1280 },
  { file: 'landscaping-9.webp', w: 1280, h: 960 },
  { file: 'landscaping-10.webp', w: 960, h: 1280 },
  { file: 'landscaping-11.webp', w: 1280, h: 960 },
  { file: 'landscaping-12.webp', w: 960, h: 1280 },
  { file: 'landscaping-13.webp', w: 960, h: 1280 },
  { file: 'landscaping-14.webp', w: 960, h: 1280 },
  { file: 'landscaping-15.webp', w: 960, h: 1280 },
  { file: 'landscaping-16.webp', w: 960, h: 1280 },
  { file: 'landscaping-17.webp', w: 1280, h: 960 },
  { file: 'landscaping-18.webp', w: 960, h: 1280 },
  { file: 'landscaping-19.webp', w: 960, h: 1280 },
  { file: 'landscaping-20.webp', w: 1280, h: 960 },
  { file: 'landscaping-21.webp', w: 960, h: 1280 },
  { file: 'landscaping-22.webp', w: 960, h: 1280 },
  { file: 'landscaping-23.webp', w: 1280, h: 960 },
  { file: 'landscaping-24.webp', w: 1280, h: 960 },
  { file: 'landscaping-25.webp', w: 1280, h: 960 },
  { file: 'landscaping-26.webp', w: 960, h: 1280 },
  { file: 'landscaping-27.webp', w: 1280, h: 960 },
  { file: 'landscaping-28.webp', w: 1280, h: 960 },
  { file: 'landscaping-29.webp', w: 960, h: 1280 },
  { file: 'landscaping-30.webp', w: 1280, h: 960 },
]

export default function LandscapingSection() {
  return (
    <section id="landscaping" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>Landscaping</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        My own backyard, start to finish - from bare dirt to a finished yard. Shown oldest to newest.
      </p>
      <div className="photo-grid" style={{ '--grid-min': '200px', '--grid-gap': '0.75rem' }}>
        {photos.map((p, i) => (
          <Animator key={p.file}>
            <Animated
              animated={[fade(), transition('y', 12, 0)]}
              style={{
                border: p.highlight ? `1px solid ${colors.primary}` : `1px solid ${colors.border}`,
                boxShadow: p.highlight ? `0 0 24px rgba(0,200,160,0.25)` : 'none',
                overflow: 'hidden',
                background: 'rgba(0,20,20,0.5)',
                gridColumn: p.highlight ? 'span 2' : 'span 1',
                gridRow: p.highlight ? 'span 2' : 'span 1',
                aspectRatio: '3 / 4',
              }}
            >
              <img
                src={`/images/${p.file}`}
                alt={p.highlight ? 'Finished landscaping project - relaxing in the finished yard' : `Landscaping progress photo ${i + 1}`}
                loading="lazy"
                width={p.w}
                height={p.h}
                style={{ width: '100%', height: '100%', objectFit: 'cover', display: 'block', filter: 'brightness(0.95) contrast(1.03)' }}
              />
            </Animated>
          </Animator>
        ))}
      </div>
    </section>
  )
}
