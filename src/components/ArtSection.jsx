import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const artImages = [
  { src: '/images/art-1.png', alt: 'Isometric sci-fi city render', w: 819, h: 1024 },
  { src: '/images/art-2.png', alt: 'Stylised 3D abstract geometric composition', w: 819, h: 1024 },
  { src: '/images/art-3.png', alt: '3D abstract retro futuristic render', w: 1024, h: 1024 },
  { src: '/images/art-4.png', alt: 'Cinema 4D octane render 4', w: 819, h: 1024 },
  { src: '/images/art-5.png', alt: 'Cinema 4D octane render 5', w: 819, h: 1024 },
  { src: '/images/art-6.png', alt: 'Cinema 4D octane render 6', w: 819, h: 1024 },
  { src: '/images/art-7.png', alt: 'Cinema 4D octane render 7', w: 819, h: 1024 },
  { src: '/images/art-8.png', alt: 'Cinema 4D octane render 8', w: 819, h: 1024 },
  { src: '/images/art-9.png', alt: 'Cinema 4D octane render 9', w: 819, h: 1024 },
  { src: '/images/art-10.png', alt: 'Cinema 4D octane render 10', w: 819, h: 1024 },
]

export default function ArtSection() {
  return (
    <section id="art" style={{ marginBottom: '3rem' }}>
      <SectionLabel>3D Art</SectionLabel>
      <p style={{ fontSize: '13px', lineHeight: 1.7, color: colors.textMuted, marginBottom: '1.25rem' }}>
        Rendered in <strong style={{ color: colors.text }}>Cinema 4D</strong> using <strong style={{ color: colors.text }}>Octane Render</strong> from 2020–2023. Google and Microsoft reached out off the back of this work. Traditional lighting &amp; composition throughout — one half lit, the other in shadow. <strong style={{ color: colors.primary }}>Free to download</strong> — if you print it, send me a photo.
      </p>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(220px, 1fr))', gap: '0.75rem' }}>
        {artImages.map((img, i) => (
          <Animator key={img.src}>
            <Animated animated={[fade(), transition('y', 12, 0)]}>
              <div style={{ border: `1px solid ${colors.border}`, overflow: 'hidden', background: 'rgba(0,20,20,0.5)' }}>
                <img
                  src={img.src}
                  alt={img.alt}
                  loading="lazy"
                  width={img.w}
                  height={img.h}
                  style={{ width: '100%', height: 'auto', display: 'block', filter: 'brightness(0.9) contrast(1.05)' }}
                />
              </div>
            </Animated>
          </Animator>
        ))}
      </div>
    </section>
  )
}
