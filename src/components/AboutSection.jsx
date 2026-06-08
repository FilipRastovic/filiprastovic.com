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
    <section id="about" style={{ marginBottom: '5rem' }}>
      <SectionLabel>About</SectionLabel>
      <Animator>
        <Animated animated={[fade()]}>
          <div style={{ display: 'grid', gridTemplateColumns: '1fr', gap: '1.75rem' }}>
            <p style={{ fontSize: '19px', lineHeight: 1.85, color: colors.text }}>
              Software Engineer and Head of Web Development with a <strong style={{ color: colors.primary }}>Bachelor's degree in Software Engineering</strong> and <strong style={{ color: colors.primary }}>10+ years of professional web development experience</strong>. I currently lead a team of developers and designers at a UK digital agency, architecting Shopify and WooCommerce solutions for global clients. I've worked with brands including Wholesome Goods, Cosy House Collection, Bare Home, Linjer, and Hey Nutrition, and freelanced for Google as a designer. My work blends engineering, CRO principles, and product thinking, focusing on reliability, performance, and revenue impact.
            </p>
            <p style={{ fontSize: '19px', lineHeight: 1.85, color: colors.text }}>
              I work full-stack across the modern Shopify ecosystem (Liquid, Hydrogen, Remix, Storefront &amp; Admin GraphQL APIs) as well as PHP/Laravel, Node, SQL, and Python for tooling, migrations, and data work. Used to live in the World of Warcraft as a teenager, defeating the Lich King with the guild &lt;Digital Crew&gt; that I led.
            </p>
            <ul style={{ listStyle: 'none', display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(290px, 1fr))', gap: '0.6rem' }}>
              {skills.map(s => (
                <li key={s} style={{
                  fontFamily: "'Share Tech Mono', monospace",
                  fontSize: '15px',
                  color: colors.textMuted,
                  padding: '0.75rem 1rem',
                  borderLeft: `2px solid ${colors.primaryDim}`,
                  background: 'rgba(0,200,160,0.03)',
                  lineHeight: 1.5,
                }}>
                  <span style={{ color: colors.primary, marginRight: '8px' }}>›</span>{s}
                </li>
              ))}
            </ul>
          </div>
        </Animated>
      </Animator>
    </section>
  )
}
