import { useRef } from 'react'
import { Animator } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { useInView } from './hud/HudCard.jsx'
import HudLinkTile from './hud/HudLinkTile.jsx'

const otherLinks = [
  {
    href: 'https://github.com/FilipRastovic',
    label: 'GitHub',
    domain: 'github.com/FilipRastovic',
    description: 'Open-source code and personal projects.',
    external: true,
    ascii: 'o─┐\n  o\no─┘',
  },
  {
    href: 'https://www.linkedin.com/in/rastovicfilip/',
    label: 'LinkedIn',
    domain: 'linkedin.com/in/rastovicfilip',
    description: 'Professional background and work history.',
    external: true,
    ascii: '┌──┐\n│in│\n└──┘',
  },
  {
    href: 'https://codepen.io/FilipRastovic',
    label: 'Front-End Code Samples',
    domain: 'codepen.io/FilipRastovic',
    description: 'CodePen experiments and Bootstrap UI snippets.',
    external: true,
    ascii: '  ╱\n ╱\n╱',
  },
  {
    href: '/blog',
    label: 'Blog',
    domain: 'filiprastovic.com/blog',
    description: 'Writing on web dev, e-commerce, and building software.',
    external: false,
    ascii: '≡≡≡\n≡≡\n≡≡≡',
  },
]

export default function LinksSection() {
  const sectionRef = useRef(null)
  const inView = useInView(sectionRef)

  return (
    <section id="links" ref={sectionRef} style={{ marginBottom: '5rem' }}>
      <SectionLabel>Links</SectionLabel>
      <Animator root active={inView} manager="stagger" combine>
        <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(300px, 1fr))', gap: '1rem' }}>
          {otherLinks.map(l => <HudLinkTile key={l.href} {...l} />)}
        </div>
      </Animator>
    </section>
  )
}
