import { Animator, Animated, fade, transition, FrameKranox } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

function NowCard({ label, value, sub, accent, href }) {
  const inner = (
    <Animated
      animated={[fade(), transition('y', 16, 0)]}
      style={{
        position: 'relative',
        padding: '2rem 1.75rem',
        background: accent ? 'rgba(0,255,180,0.05)' : 'rgba(2,20,20,0.5)',
        color: accent ? colors.primary : colors.border,
        '--arwes-frames-bg-color': 'transparent',
        minWidth: 0,
      }}
    >
      <FrameKranox strokeWidth={1} />
      <div style={{ position: 'relative', zIndex: 1 }}>
        <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '12px', letterSpacing: '0.12em', textTransform: 'uppercase', color: accent ? colors.primary : colors.textMuted, marginBottom: '0.75rem' }}>
          {label}
        </div>
        <div style={{ fontFamily: "'Titillium Web', sans-serif", fontSize: '30px', fontWeight: 700, color: accent ? colors.primary : colors.text, marginBottom: '0.5rem', lineHeight: 1.1 }}>
          {href
            ? <a href={href} target="_blank" rel="noopener noreferrer" style={{ color: 'inherit', textDecoration: 'underline', textDecorationColor: colors.primaryMuted }}>{value}</a>
            : value}
        </div>
        <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '14px', color: accent ? 'rgba(0,255,180,0.6)' : colors.textMuted }}>
          {sub}
        </div>
      </div>
    </Animated>
  )

  return <Animator>{inner}</Animator>
}

export default function NowSection() {
  return (
    <section id="now" style={{ marginBottom: '5rem' }}>
      <SectionLabel>Now</SectionLabel>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(280px, 1fr))', gap: '1rem' }}>
        <NowCard label="Current Role" value="Head of Web Development" sub="Perform Digital Media · UK agency" accent />
        <NowCard label="Building" value="Lander.rs" sub="AI landing page builder for lead gen" accent href="https://lander.rs" />
        <NowCard label="Location" value="Serbia" sub="GMT+2 · Available remotely" />
        <NowCard label="Status" value="Open to projects" sub="Custom Shopify work" />
      </div>
    </section>
  )
}
