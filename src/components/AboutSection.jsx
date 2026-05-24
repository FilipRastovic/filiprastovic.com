import { Animator, Animated, fade } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const skills = [
  'HTML, CSS, JavaScript, Liquid, Laravel, Next',
  'Python / JS scripting for migrations + tooling',
  'Database development + complex SQL',
  'Speed & Performance Optimization',
  'CRO & A/B Testing fundamentals',
  'UX/UI implementation from Figma',
  'Data-driven problem solving',
]

export default function AboutSection() {
  return (
    <section id="about" style={{ marginBottom: '3rem' }}>
      <SectionLabel>About</SectionLabel>
      <Animator>
        <Animated animated={[fade()]}>
          <div style={{ display: 'grid', gridTemplateColumns: '1fr', gap: '1.25rem' }}>
            <p style={{ fontSize: '14px', lineHeight: 1.75, color: colors.text }}>
              Senior Shopify Developer and full-stack software engineer with a <strong style={{ color: colors.primary }}>Bachelor's degree in Software Engineering</strong> and <strong style={{ color: colors.primary }}>10+ years of professional web development experience</strong>. I've worked with global brands including Google, Johnson &amp; Johnson, Cosy House Collection, Bare Home, Linjer, and Hey Nutrition. My work blends engineering, CRO principles, and product thinking — focusing on reliability, performance, and revenue impact.
            </p>
            <p style={{ fontSize: '14px', lineHeight: 1.75, color: colors.text }}>
              I work full-stack across the modern Shopify ecosystem (Liquid, Hydrogen, Remix, Storefront &amp; Admin GraphQL APIs) as well as PHP/Laravel, Node, SQL, and Python for tooling, migrations, and data work.
            </p>
            <ul style={{ listStyle: 'none', display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(260px, 1fr))', gap: '0.5rem' }}>
              {skills.map(s => (
                <li key={s} style={{
                  fontFamily: "'Share Tech Mono', monospace",
                  fontSize: '12px',
                  color: colors.textMuted,
                  padding: '0.5rem 0.75rem',
                  borderLeft: `2px solid ${colors.primaryDim}`,
                  background: 'rgba(0,200,160,0.03)',
                  lineHeight: 1.5,
                }}>
                  <span style={{ color: colors.primary, marginRight: '6px' }}>›</span>{s}
                </li>
              ))}
            </ul>
          </div>
        </Animated>
      </Animator>
    </section>
  )
}
