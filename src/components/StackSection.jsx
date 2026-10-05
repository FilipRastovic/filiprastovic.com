import { useRef } from 'react'
import { Animator } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import HudCard, { useInView } from './hud/HudCard.jsx'
import { colors, fonts } from '../theme.js'
import { MerchantPanel } from './AboutSection.jsx'

const groups = [
  {
    title: 'Shopify',
    items: [
      { name: 'Shopify Plus', tag: 'Platform' },
      { name: 'Shopify Apps', tag: 'Node · Remix · Admin API' },
      { name: 'Liquid', tag: 'Themes · Checkout Extensibility' },
      { name: 'Hydrogen', tag: 'React storefronts' },
      { name: 'GraphQL', tag: 'Admin & Storefront API' },
      { name: 'App Bridge', tag: 'OAuth · Webhooks' },
    ],
  },
  {
    title: 'Integrations',
    items: [
      { name: 'Patchworks', tag: 'iPaaS' },
      { name: 'PIM', tag: 'Product data' },
      { name: 'ERP', tag: 'Orders · Inventory' },
      { name: 'Salesforce', tag: 'CRM' },
    ],
  },
  {
    title: 'Languages & Backend',
    items: [
      { name: 'TypeScript', tag: 'Language' },
      { name: 'JavaScript', tag: 'Language' },
      { name: 'Node.js', tag: 'Runtime' },
      { name: 'PHP', tag: 'Laravel' },
      { name: 'Python', tag: 'Pandas · ETL' },
      { name: 'SQL', tag: 'Database' },
    ],
  },
  {
    title: 'Cloud & DevOps',
    items: [
      { name: 'AWS', tag: 'EC2 · Lambda · S3' },
      { name: 'CI/CD', tag: 'Shopify Oxygen' },
    ],
  },
  {
    title: 'Frontend & Design',
    items: [
      { name: 'CSS / Tailwind', tag: 'Styling' },
      { name: 'WordPress', tag: 'CMS' },
      { name: 'Figma', tag: 'UI design' },
      { name: 'Photoshop', tag: 'Design' },
      { name: 'Cinema 4D', tag: '3D · Octane' },
    ],
  },
]

function StackGroup({ title, items }) {
  const ref = useRef(null)
  const inView = useInView(ref)

  return (
    <div ref={ref}>
      <h3 style={{ display: 'flex', alignItems: 'baseline', gap: '0.6rem', fontFamily: fonts.body, fontSize: '18px', fontWeight: 700, color: colors.text, marginBottom: '0.85rem' }}>
        {title}
        <span style={{ fontFamily: fonts.mono, fontSize: '12px', fontWeight: 400, color: colors.textMuted, letterSpacing: '0.08em' }}>
          {String(items.length).padStart(2, '0')}
        </span>
      </h3>
      <Animator root active={inView} manager="stagger" combine duration={{ stagger: 0.04 }}>
        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(min(170px, 42vw), 1fr))', gap: '0.65rem' }}>
          {items.map(item => (
            <Animator key={item.name} duration={{ enter: 0.5, exit: 0.2 }}>
              <HudCard shape="corners" subtle style={{ padding: '0.85rem 1rem' }}>
                <div style={{ fontFamily: fonts.body, fontSize: '17px', fontWeight: 700, color: colors.text, lineHeight: 1.2, marginBottom: '3px' }}>
                  {item.name}
                </div>
                <div style={{ fontFamily: fonts.body, fontSize: '13px', color: colors.textMuted, lineHeight: 1.35 }}>
                  {item.tag}
                </div>
              </HudCard>
            </Animator>
          ))}
        </div>
      </Animator>
    </div>
  )
}

export default function StackSection() {
  return (
    <section id="stack" style={{ marginBottom: '5rem' }}>
      <SectionLabel>Technical Stack</SectionLabel>
      <div style={{ display: 'grid', gap: '2.25rem' }}>
        {groups.map(g => <StackGroup key={g.title} {...g} />)}
        <MerchantPanel />
      </div>
    </section>
  )
}
