import { useRef } from 'react'
import { Animator, Animated, fade } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import HudCard, { useInView } from './hud/HudCard.jsx'
import { colors, fonts } from '../theme.js'

const merchantSkills = [
  'Conversion rate optimization & split testing',
  'AOV, PPV & EPV growth strategies',
  'Google Analytics, GA4 & data-driven reporting',
  'Page speed & performance optimization',
  'UX/UI implementation (Figma to Shopify)',
  'Shopify theme customization & new features',
]

export function MerchantPanel() {
  const ref = useRef(null)
  const inView = useInView(ref)

  return (
    <div ref={ref}>
      <Animator root active={inView} duration={{ enter: 0.6, exit: 0.2 }}>
        <HudCard shape="corners" subtle style={{ padding: 'clamp(1.25rem, 3vw, 1.75rem)' }}>
          <h3 style={{ fontFamily: fonts.body, fontSize: 'clamp(18px, 3.5vw, 21px)', fontWeight: 700, color: colors.text, marginBottom: '0.35rem' }}>
            What I do for merchants
          </h3>
          <p style={{ fontSize: '15px', color: colors.textMuted, marginBottom: '1.25rem', lineHeight: 1.6 }}>
            Outcomes I work on with store owners and e-commerce teams.
          </p>
          <ul className="merchant-list" style={{ listStyle: 'none', display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(min(260px, 100%), 1fr))', gap: '0.85rem 2rem' }}>
            {merchantSkills.map(s => (
              <li key={s} style={{ display: 'flex', gap: '0.65rem', alignItems: 'baseline', fontFamily: fonts.body, fontSize: '16px', lineHeight: 1.5, color: colors.text }}>
                <span aria-hidden="true" style={{ color: colors.primary, fontSize: '10px', flexShrink: 0, transform: 'translateY(-1px)' }}>◆</span>
                {s}
              </li>
            ))}
          </ul>
        </HudCard>
      </Animator>
    </div>
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
              Serbia-based <strong style={{ color: colors.primary }}>software engineer &amp; Shopify e-commerce solutions architect</strong> specializing in Shopify Plus, the Shopify API, headless &amp; distributed Shopify architectures, system migrations and relational databases. Vetted by the Upwork team as <strong style={{ color: colors.primary }}>top 1%</strong> of their global talent pool. Extensive experience in e-commerce <strong style={{ color: colors.primary }}>A/B testing, experimentation and conversion optimization</strong>. Currently in the role of <strong style={{ color: colors.primary }}>Head of Web Development</strong> - leading development of internal company tooling, automations and development workflows, and translating clients' business needs into developer specs.
            </p>
            <p style={{ fontSize: 'clamp(15px, 4vw, 19px)', lineHeight: 1.7, color: colors.text }}>
              Outside of work I enjoy reading, music, guitar, gaming, gym, gardening &amp; landscaping.
            </p>
          </div>
        </Animated>
      </Animator>
    </section>
  )
}
