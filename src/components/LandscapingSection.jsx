import { useState } from 'react'
import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import Lightbox from './Lightbox.jsx'
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

const images = photos.map((p, i) => ({ src: `/images/${p.file}`, alt: `Landscaping progress photo ${i + 1}` }))

export default function LandscapingSection() {
  const [openIndex, setOpenIndex] = useState(null)

  return (
    <section id="landscaping" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>Landscaping</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        My own backyard, start to finish - from bare dirt to a finished yard. Shown oldest to newest.
      </p>
      <div className="instagram-grid">
        {photos.map((p, i) => (
          <div
            key={p.file}
            className="grid-item"
            style={{ border: `1px solid ${colors.border}`, background: 'rgba(0,20,20,0.5)' }}
            onClick={() => setOpenIndex(i)}
          >
            <Animator>
              <Animated animated={[fade(), transition('y', 12, 0)]} style={{ width: '100%', height: '100%', display: 'block' }}>
                <img
                  src={`/images/${p.file}`}
                  alt={`Landscaping progress photo ${i + 1}`}
                  loading="lazy"
                  width={p.w}
                  height={p.h}
                  style={{ filter: 'brightness(0.95) contrast(1.03)' }}
                />
              </Animated>
            </Animator>
          </div>
        ))}
      </div>
      {openIndex !== null && (
        <Lightbox
          images={images}
          index={openIndex}
          onClose={() => setOpenIndex(null)}
          onNavigate={(delta) => setOpenIndex((i) => (i + delta + images.length) % images.length)}
        />
      )}
    </section>
  )
}
