import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { useGalleryLightbox } from './GalleryLightboxContext.jsx'
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

export const images = photos.map((p, i) => ({ src: `/images/${p.file}`, alt: `Bread baking photo ${i + 1}` }))

export default function BreadSection({ offset }) {
  const { open } = useGalleryLightbox()

  return (
    <section id="bread" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>Bread Baking</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        More to come.
      </p>
      <div className="instagram-grid">
        {photos.map((p, i) => (
          <div
            key={p.file}
            className="grid-item"
            style={{ border: `1px solid ${colors.border}`, background: 'rgba(0,20,20,0.5)' }}
            onClick={() => open(offset + i)}
          >
            <Animator>
              <Animated animated={[fade(), transition('y', 12, 0)]} style={{ width: '100%', height: '100%', display: 'block' }}>
                <img
                  src={`/images/${p.file}`}
                  alt={`Bread baking photo ${i + 1}`}
                  loading="lazy"
                  width={p.w}
                  height={p.h}
                />
              </Animated>
            </Animator>
          </div>
        ))}
      </div>
    </section>
  )
}
