import { Animator, Animated, fade } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const merchantSkills = [
  'Conversion Rate Optimization & Split Testing',
  'AOV, PPV & EPV Growth Strategies',
  'Google Analytics, GA4 & Data-Driven Reporting',
  'Page Speed & Performance Optimization',
  'UX/UI Design Implementation (Figma to Shopify)',
  'Shopify Theme Customization & New Feature Builds',
]

const techSkills = [
  'Shopify App Development (Node.js, Remix, Admin API)',
  'OAuth, Webhooks & App Bridge',
  'Shopify Plus, Liquid & Checkout Extensibility',
  'AWS (EC2, Lambda, S3)',
  'Kubernetes & Container Orchestration',
  'ETL pipelines',
  'Python / php - APIs & ERP/PIM/CRM integrations',
  'GraphQL (Shopify Admin & Storefront APIs)',
  'CI/CD pipelines & Shopify Oxygen deployments',
]

const skillGroupHeaderStyle = {
  fontFamily: "'Share Tech Mono', monospace",
  fontSize: '12px',
  fontWeight: 700,
  letterSpacing: '0.15em',
  textTransform: 'uppercase',
  color: colors.primary,
  marginBottom: '0.6rem',
}

function SkillGrid({ items }) {
  return (
    <ul style={{ listStyle: 'none', display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(290px, 1fr))', gap: '0.6rem' }}>
      {items.map(s => (
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
  )
}

export default function AboutSection() {
  return (
    <section id="about" style={{ marginBottom: '5rem' }}>
      <SectionLabel>About</SectionLabel>
      <Animator>
        <Animated animated={[fade()]}>
          <div style={{ display: 'grid', gridTemplateColumns: '1fr', gap: '1.75rem' }}>
            <p style={{ fontSize: 'clamp(15px, 4vw, 19px)', lineHeight: 1.7, color: colors.text }}>
              These days for clients I mainly work on <strong style={{ color: colors.primary }}>e-commerce stores built on Shopify</strong> - new themes, new functionality, migrations from old systems, development of apps, and integration of multiple APIs and distributed systems related to Shopify. I have lots of experience in <strong style={{ color: colors.primary }}>CRO and split testing</strong> in e-commerce as well.
            </p>
            <p style={{ fontSize: 'clamp(15px, 4vw, 19px)', lineHeight: 1.7, color: colors.text }}>
              Outside of work I enjoy reading, music, guitar, gaming, gym, gardening &amp; landscaping.
            </p>
            <div>
              <div style={skillGroupHeaderStyle}>◇ For Merchants</div>
              <SkillGrid items={merchantSkills} />
            </div>
            <div>
              <div style={skillGroupHeaderStyle}>◇ Technical Stack</div>
              <SkillGrid items={techSkills} />
            </div>
          </div>
        </Animated>
      </Animator>
    </section>
  )
}
