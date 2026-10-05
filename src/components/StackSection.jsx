import { useRef } from 'react'
import { Animator, Text } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import HudCard, { useInView } from './hud/HudCard.jsx'
import { colors } from '../theme.js'

const stack = [
  { name: 'Shopify', tag: 'Platform' }, { name: 'Shopify Apps', tag: 'Node / Remix' },
  { name: 'Liquid', tag: 'Templating' }, { name: 'React', tag: 'Hydrogen' },
  { name: 'GraphQL', tag: 'Storefront API' }, { name: 'Remix', tag: 'Framework' },
  { name: 'Patchworks', tag: 'iPaaS / Integrations' }, { name: 'PIM', tag: 'Product Data' },
  { name: 'ERP', tag: 'Orders / Inventory' }, { name: 'Salesforce', tag: 'CRM' },
  { name: 'TypeScript', tag: 'Language' }, { name: 'JavaScript', tag: 'Language' },
  { name: 'Node.js', tag: 'Runtime' }, { name: 'CSS / Tailwind', tag: 'Styling' },
  { name: 'AWS', tag: 'Cloud' }, { name: 'PHP', tag: 'Backend' },
  { name: 'Laravel', tag: 'Framework' }, { name: 'SQL', tag: 'Database' },
  { name: 'Python / Pandas', tag: 'Data' }, { name: 'WordPress', tag: 'CMS' },
  { name: 'Figma', tag: 'Design' }, { name: 'Photoshop', tag: 'Design' },
  { name: 'Cinema 4D', tag: '3D / Render' },
]

export default function StackSection() {
  const sectionRef = useRef(null)
  const inView = useInView(sectionRef)

  return (
    <section id="stack" ref={sectionRef} style={{ marginBottom: '5rem' }}>
      <SectionLabel>Stack</SectionLabel>
      <Animator root active={inView} manager="stagger" combine duration={{ stagger: 0.03 }}>
        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(min(150px, 42vw), 1fr))', gap: '0.75rem' }}>
          {stack.map((item) => (
            <Animator key={item.name} duration={{ enter: 0.6, exit: 0.2 }}>
              <HudCard shape="corners" style={{ padding: '1.1rem 1.25rem' }}>
                <Animator>
                  <Text as="div" manager="decipher" style={{ fontFamily: "'Titillium Web', sans-serif", fontSize: '20px', fontWeight: 700, color: colors.text, marginBottom: '5px', lineHeight: 1.15 }}>
                    {item.name}
                  </Text>
                </Animator>
                <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '12px', color: colors.primary, letterSpacing: '0.08em' }}>{item.tag}</div>
              </HudCard>
            </Animator>
          ))}
        </div>
      </Animator>
    </section>
  )
}
