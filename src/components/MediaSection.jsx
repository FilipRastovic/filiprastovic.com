import { useRef } from 'react'
import { Animator } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { useInView } from './hud/HudCard.jsx'
import HudLinkTile from './hud/HudLinkTile.jsx'
import { colors } from '../theme.js'

const mentions = [
  { href: 'https://www.growthsuite.net/conversion_masters/filip-rastovic', label: 'Conversion Masters Interview', sub: 'growthsuite.net' },
  { href: 'https://www.huntlancer.com/isometric-artists/#Filip_Rastovic_Serbia', label: '26 Best Isometric Artists Across the Globe', sub: 'huntlancer.com' },
  { href: 'https://everydaymonkey.com/serbian-artist-creates-3d-illustrations-that-look-like-they-were-made-in-the-60s/', label: "Serbian Artist Creates 3D Illustrations That Look Like They Were Made in the '60s", sub: 'everydaymonkey.com' },
  { href: 'https://startit.rs/moderan-web-dizajn-workflow-u-sabackom-startit-centru/', label: 'Kako izgleda proces rada modernog veb dizajnera?', sub: 'startit.rs' },
  { href: 'https://loop.rs/glas-trzista/ko-su-frilenseri-i-kako-uspeti-u-frilensingu-successstory-by-filip/60dc6b8330370', label: 'Ko Su Frilenseri i Kako Uspeti u Frilensingu?', sub: 'loop.rs' },
  { href: 'https://youtu.be/TRkVCAeisJk', label: 'Kako do prvog klijenta na freelance platformama?', sub: 'youtube.com' },
]

export default function MediaSection() {
  const sectionRef = useRef(null)
  const inView = useInView(sectionRef)

  return (
    <section id="media" ref={sectionRef} style={{ marginBottom: '5rem' }}>
      <SectionLabel>Mentions in Media</SectionLabel>
      <p style={{ fontSize: '17px', color: colors.textMuted, marginBottom: '1.5rem', fontStyle: 'italic' }}>
        I used to do 3D art a bit - it got kind of viral. Got offers from Google &amp; Microsoft.
      </p>
      <Animator root active={inView} manager="stagger" combine>
        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(300px, 1fr))', gap: '1rem' }}>
          {mentions.map(m => <HudLinkTile key={m.href} href={m.href} label={m.label} domain={m.sub} external />)}
        </div>
      </Animator>
    </section>
  )
}
