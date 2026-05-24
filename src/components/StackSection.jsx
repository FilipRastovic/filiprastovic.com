import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const stack = [
  { name: 'Shopify', tag: 'Platform' }, { name: 'Liquid', tag: 'Templating' },
  { name: 'React', tag: 'Hydrogen' }, { name: 'CSS / Tailwind', tag: 'Styling' },
  { name: 'GraphQL', tag: 'Storefront API' }, { name: 'Remix', tag: 'Framework' },
  { name: 'PHP', tag: 'Backend' }, { name: 'Laravel', tag: 'Framework' },
  { name: 'SQL', tag: 'Database' }, { name: 'Python / Pandas', tag: 'Data' },
  { name: 'Figma', tag: 'Design' }, { name: 'Cinema 4D', tag: '3D / Render' },
  { name: 'WordPress', tag: 'CMS' }, { name: 'JavaScript', tag: 'Language' },
  { name: 'Shopify Apps', tag: 'Extensions' }, { name: 'Photoshop', tag: 'Design' },
]

export default function StackSection() {
  return (
    <section id="stack" style={{ marginBottom: '3rem' }}>
      <SectionLabel>Stack</SectionLabel>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(150px, 1fr))', gap: '0.6rem' }}>
        {stack.map((item, i) => (
          <Animator key={item.name}>
            <Animated animated={[fade(), transition('y', 8, 0)]}>
              <div style={{
                padding: '0.6rem 0.75rem',
                border: `1px solid ${colors.border}`,
                background: 'rgba(0,200,160,0.03)',
                display: 'flex',
                flexDirection: 'column',
                gap: '2px',
              }}>
                <span style={{ fontFamily: "'Titillium Web', sans-serif", fontSize: '13px', fontWeight: 600, color: colors.text }}>{item.name}</span>
                <span style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '10px', color: colors.primary, letterSpacing: '0.08em' }}>{item.tag}</span>
              </div>
            </Animated>
          </Animator>
        ))}
      </div>
    </section>
  )
}
