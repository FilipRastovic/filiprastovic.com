import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const stack = [
  { name: 'Shopify', tag: 'Platform' }, { name: 'Shopify Apps', tag: 'Node / Remix' },
  { name: 'Liquid', tag: 'Templating' }, { name: 'React', tag: 'Hydrogen' },
  { name: 'TypeScript', tag: 'Language' }, { name: 'Node.js', tag: 'Runtime' },
  { name: 'CSS / Tailwind', tag: 'Styling' }, { name: 'GraphQL', tag: 'Storefront API' },
  { name: 'Remix', tag: 'Framework' }, { name: 'AWS', tag: 'Cloud' },
  { name: 'Kubernetes', tag: 'Orchestration' },
  { name: 'PHP', tag: 'Backend' }, { name: 'Laravel', tag: 'Framework' },
  { name: 'SQL', tag: 'Database' }, { name: 'Python / Pandas', tag: 'Data' },
  { name: 'Figma', tag: 'Design' }, { name: 'Cinema 4D', tag: '3D / Render' },
  { name: 'WordPress', tag: 'CMS' }, { name: 'JavaScript', tag: 'Language' },
  { name: 'Photoshop', tag: 'Design' },
]

export default function StackSection() {
  return (
    <section id="stack" style={{ marginBottom: '5rem' }}>
      <SectionLabel>Stack</SectionLabel>
      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fill, minmax(180px, 1fr))', gap: '0.75rem' }}>
        {stack.map((item) => (
          <Animator key={item.name}>
            <Animated animated={[fade(), transition('y', 8, 0)]}>
              <div style={{
                padding: '1.1rem 1.25rem',
                border: `1px solid ${colors.border}`,
                background: 'rgba(0,200,160,0.03)',
                display: 'flex',
                flexDirection: 'column',
                gap: '5px',
              }}>
                <span style={{ fontFamily: "'Titillium Web', sans-serif", fontSize: '20px', fontWeight: 700, color: colors.text }}>{item.name}</span>
                <span style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '12px', color: colors.primary, letterSpacing: '0.08em' }}>{item.tag}</span>
              </div>
            </Animated>
          </Animator>
        ))}
      </div>
    </section>
  )
}
