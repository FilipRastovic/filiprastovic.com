import { Animator, Animated, fade } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const skills = [
  'Shopify App Development (Node.js, Remix, Admin API)',
  'OAuth, Webhooks & App Bridge',
  'Shopify Plus, Liquid & Checkout Extensibility',
  'AWS (EC2, Lambda, S3)',
  'Kubernetes & Container Orchestration',
  'ETL pipelines',
  'Python / php - APIs & ERP/PIM/CRM integrations',
  'GraphQL (Shopify Admin & Storefront APIs)',
  'CI/CD pipelines & Shopify Oxygen deployments',
  'Speed & Performance Optimization',
  'CRO & A/B Testing',
  'UX/UI implementation from Figma',
]

export default function AboutSection() {
  return (
    <section id="about" style={{ marginBottom: '5rem' }}>
      <SectionLabel>About</SectionLabel>
      <Animator>
        <Animated animated={[fade()]}>
          <div style={{ display: 'grid', gridTemplateColumns: '1fr', gap: '1.75rem' }}>
            <p style={{ fontSize: '19px', lineHeight: 1.85, color: colors.text }}>
              Software Engineer and Head of Web Development with a <strong style={{ color: colors.primary }}>Bachelor's degree in Software Engineering</strong> and <strong style={{ color: colors.primary }}>10+ years of professional web development experience</strong>. My background is full-stack engineering, but my day-to-day sits at the intersection of <strong style={{ color: colors.primary }}>Shopify Plus development</strong>, engineering management, and conversion optimization. I've worked with brands including Google, Johnson &amp; Johnson, Cosy House Collection, Bare Home, Hey Nutrition, Linjer, Lucy Pittaway, and eTech Mobility.
            </p>
            <p style={{ fontSize: '19px', lineHeight: 1.85, color: colors.text }}>
              The work ranges from custom Shopify storefronts and headless builds to custom backend integrations, complex catalog migrations, checkout extensibility, B2B/wholesale features, and CI/CD & ETL pipelines. While coding is my main craft, 3D art is my hobby (Cinema 4D, Octane Render) - which gives me a real edge on design-heavy, cross-functional projects.
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
