import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { useGalleryLightbox } from './GalleryLightboxContext.jsx'
import { colors } from '../theme.js'

const photoNumbers = [25, ...Array.from({ length: 24 }, (_, i) => 24 - i)]
const photos = photoNumbers.map((n) => `gardening-${n}.webp`)

export const images = photos.map((file, i) => ({ src: `/images/${file}`, alt: `Gardening progress photo ${photoNumbers[i]}` }))

export default function GardeningSection({ offset }) {
  const { open } = useGalleryLightbox()

  return (
    <section id="gardening" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>Gardening</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        Chilis, tomatoes, and sunflowers - July 2026. Shown newest to oldest.
      </p>
      <div className="instagram-grid">
        {photos.map((file, i) => (
          <div
            key={file}
            className="grid-item"
            style={{ border: `1px solid ${colors.border}`, background: 'rgba(0,20,20,0.5)' }}
            onClick={() => open(offset + i)}
          >
            <Animator>
              <Animated animated={[fade(), transition('y', 12, 0)]} style={{ width: '100%', height: '100%', display: 'block' }}>
                <img
                  src={`/images/${file}`}
                  alt={`Gardening progress photo ${photoNumbers[i]}`}
                  loading="lazy"
                  style={{ filter: 'brightness(0.95) contrast(1.03)' }}
                />
              </Animated>
            </Animator>
          </div>
        ))}
      </div>
    </section>
  )
}
