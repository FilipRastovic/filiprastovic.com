import { useRef } from 'react'
import { Animator, Text } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import HudCard, { useInView } from './hud/HudCard.jsx'
import { colors } from '../theme.js'

function NowCard({ label, value, sub, accent }) {
  return (
    <Animator duration={{ enter: 0.9, exit: 0.3 }}>
      <HudCard accent={accent} style={{ padding: '2rem 1.75rem' }}>
        <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '12px', letterSpacing: '0.12em', textTransform: 'uppercase', color: accent ? colors.primary : colors.textMuted, marginBottom: '0.75rem' }}>
          {label}
        </div>
        <Animator>
          <Text
            as="div"
            manager="decipher"
            style={{ fontFamily: "'Titillium Web', sans-serif", fontSize: '30px', fontWeight: 700, color: accent ? colors.primary : colors.text, marginBottom: '0.5rem', lineHeight: 1.1 }}
          >
            {value}
          </Text>
        </Animator>
        <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '14px', color: accent ? 'rgba(0,255,180,0.6)' : colors.textMuted }}>
          {sub}
        </div>
      </HudCard>
    </Animator>
  )
}

export default function NowSection() {
  const sectionRef = useRef(null)
  const inView = useInView(sectionRef)

  return (
    <section id="now" ref={sectionRef} style={{ marginBottom: '5rem' }}>
      <SectionLabel>Now</SectionLabel>
      <Animator root active={inView} manager="stagger" combine>
        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(280px, 1fr))', gap: '1rem' }}>
          <NowCard label="Current Role" value="Head of Web Development" sub="Perform Digital Media · UK agency" accent />
          <NowCard label="Location" value="Serbia" sub="GMT+2 · Available remotely" />
        </div>
      </Animator>
    </section>
  )
}
