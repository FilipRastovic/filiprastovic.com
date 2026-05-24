import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
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
  return (
    <section id="media" style={{ marginBottom: '3rem' }}>
      <SectionLabel>Mentions in Media</SectionLabel>
      <p style={{ fontSize: '13px', color: colors.textMuted, marginBottom: '1rem', fontStyle: 'italic' }}>
        I used to do 3D art a bit — it got kind of viral. Got offers from Google &amp; Microsoft.
      </p>
      <div style={{ border: `1px solid ${colors.border}`, borderBottom: 'none' }}>
        {mentions.map(m => (
          <Animator key={m.href}>
            <Animated animated={[fade(), transition('x', -8, 0)]}>
              <a href={m.href} target="_blank" rel="noopener noreferrer" style={{ display: 'flex', alignItems: 'center', justifyContent: 'space-between', padding: '0.85rem 1rem', borderBottom: `1px solid ${colors.border}`, textDecoration: 'none', color: 'inherit' }}>
                <div>
                  <div style={{ fontSize: '14px', fontWeight: 600, color: colors.text, marginBottom: '2px', textDecoration: 'underline', textDecorationColor: colors.border }}>{m.label}</div>
                  <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '11px', color: colors.textMuted }}>{m.sub}</div>
                </div>
                <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" strokeWidth="1.5" style={{ width: '13px', height: '13px', color: colors.primary, flexShrink: 0 }}>
                  <path d="M3 13L13 3M13 3H7M13 3v6"/>
                </svg>
              </a>
            </Animated>
          </Animator>
        ))}
      </div>
    </section>
  )
}
