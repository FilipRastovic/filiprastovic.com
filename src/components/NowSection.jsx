import { Animator, Animated, Text, aaVisibility, aa } from '@arwes/react'
import { useRef } from 'react'
import { FrameSVGKranox, useFrameSVGAssemblingAnimation } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

function NowCard({ label, value, sub, accent }) {
  const svgRef = useRef(null)
  const { onRender } = useFrameSVGAssemblingAnimation(svgRef)
  return (
    <Animator>
      <Animated
        animated={[aaVisibility(), aa('y', 16, 0)]}
        style={{
          position: 'relative',
          padding: '1.25rem',
          background: accent ? 'rgba(0,255,180,0.05)' : 'rgba(2,20,20,0.5)',
          minWidth: 0,
        }}
      >
        <FrameSVGKranox
          elementRef={svgRef}
          onRender={onRender}
          style={{ position: 'absolute', inset: 0 }}
          strokeWidth={1}
          color={accent ? colors.primary : colors.border}
        />
        <div style={{ position: 'relative', zIndex: 1 }}>
          <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '10px', letterSpacing: '0.12em', textTransform: 'uppercase', color: accent ? colors.primary : colors.textMuted, marginBottom: '0.4rem' }}>
            {label}
          </div>
          <div style={{ fontFamily: "'Titillium Web', sans-serif", fontSize: '18px', fontWeight: 700, color: accent ? colors.primary : colors.text, marginBottom: '0.3rem' }}>
            {value}
          </div>
          <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '11px', color: accent ? 'rgba(0,255,180,0.6)' : colors.textMuted }}>
            {sub}
          </div>
        </div>
      </Animated>
    </Animator>
  )
}

export default function NowSection() {
  return (
    <section id="now" style={{ marginBottom: '3rem' }}>
      <SectionLabel>Now</SectionLabel>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(200px, 1fr))', gap: '1rem' }}>
        <NowCard label="Independent Contractor" value="Head of Web Dev" sub="Web dev & CRO" accent />
        <NowCard label="Building" value="Lander.rs" sub="AI landing page builder for lead gen" accent />
        <NowCard label="Location" value="Serbia" sub="GMT+2 · Available remotely" />
        <NowCard label="Status" value="Open to projects" sub="Custom Shopify work" />
      </div>
    </section>
  )
}
