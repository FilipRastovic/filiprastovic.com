import { useRef } from 'react'
import { Animator } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { useInView } from './hud/HudCard.jsx'
import HudImage from './hud/HudImage.jsx'
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
  const sectionRef = useRef(null)
  const inView = useInView(sectionRef)

  return (
    <section id="art" ref={sectionRef} style={{ marginBottom: '5rem' }}>
      <SectionLabel>3D Art</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        Rendered in <strong style={{ color: colors.text }}>Cinema 4D</strong> using <strong style={{ color: colors.text }}>Octane Render</strong> from 2020-2023. Google and Microsoft reached out off the back of this work. Traditional lighting &amp; composition throughout - one half lit, the other in shadow. <strong style={{ color: colors.primary }}>Free to download</strong> - if you print it, send me a photo.
      </p>
      <Animator root active={inView} manager="stagger" combine duration={{ stagger: 0.06 }}>
        <div className="photo-grid" style={{ '--grid-min': '220px', '--grid-gap': '1rem' }}>
          {artImages.map((img, i) => (
            <Animator key={img.src} duration={{ enter: 0.8, exit: 0.3 }}>
              <HudImage src={img.src} alt={img.alt} width={img.w} height={img.h} label={`R-${String(i + 1).padStart(2, "0")}`} aspectRatio="4 / 5" />
            </Animator>
          ))}
        </div>
      </Animator>
    </section>
  )
}
