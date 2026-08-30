import { useState } from 'react'
import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import Lightbox from './Lightbox.jsx'
import { colors } from '../theme.js'

const photos = [
  { file: 'photography-2.webp', alt: 'Adriatic bay framed by trees, with an island visible offshore' },
  { file: 'photography-1.webp', alt: 'Coastal view over the Adriatic sea with a garden and surfboard in the foreground' },
]

const images = photos.map((p) => ({ src: `/images/${p.file}`, alt: p.alt }))

export default function PhotographySection() {
  const [openIndex, setOpenIndex] = useState(null)

  return (
    <section id="photography" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>Photography</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        More to come.
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
                <img src={`/images/${p.file}`} alt={p.alt} loading="lazy" />
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
