import { Animator, Animated, fade, transition } from '@arwes/react'
import { Link } from 'react-router-dom'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const links = [
  { href: 'https://stargazerstudio.net/portfolio', label: 'Web Development Portfolio', sub: 'stargazerstudio.net/portfolio', external: true },
  { href: 'https://stargazerstudio.net/case-studies', label: 'Case Studies (CRO)', sub: 'stargazerstudio.net/case-studies', external: true },
  { href: 'https://lander.rs/', label: 'Lander.rs', sub: 'My no-code website builder app (Serbian)', external: true },
  { href: 'https://github.com/FilipRastovic', label: 'GitHub', sub: 'github.com/FilipRastovic', external: true },
  { href: 'https://www.linkedin.com/in/rastovicfilip/', label: 'LinkedIn', sub: 'linkedin.com/in/rastovicfilip', external: true },
  { href: 'https://codepen.io/FilipRastovic', label: 'Front-End Code Samples', sub: 'codepen.io/FilipRastovic — Bootstrap experiments', external: true },
  { href: 'https://www.newgrounds.com/portal/view/713592', label: 'My Video Game', sub: 'newgrounds.com — Unity game dev', external: true },
  { href: 'https://www.behance.net/rastovicfilip', label: '3D Art Portfolio', sub: 'behance.net/rastovicfilip — Cinema 4D work', external: true },
  { href: '/blog', label: 'Blog', sub: 'filiprastovic.com/blog', external: false },
]

function LinkItem({ href, label, sub, external }) {
  const inner = (
    <Animator>
      <Animated
        animated={[fade(), transition('x', -12, 0)]}
        style={{
          display: 'flex',
          alignItems: 'center',
          justifyContent: 'space-between',
          padding: '0.9rem 1rem',
          borderBottom: `1px solid ${colors.border}`,
          textDecoration: 'none',
          color: 'inherit',
          cursor: 'pointer',
          transition: 'background 0.2s',
        }}
        className="link-item"
      >
        <div>
          <div style={{ fontFamily: "'Titillium Web', sans-serif", fontSize: '15px', fontWeight: 600, color: colors.text, textDecoration: 'underline', textDecorationColor: colors.border, marginBottom: '2px' }}>
            {label}
          </div>
          <div style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '11px', color: colors.textMuted }}>
            {sub}
          </div>
        </div>
        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" strokeWidth="1.5" style={{ width: '14px', height: '14px', color: colors.primary, flexShrink: 0 }}>
          <path d="M3 13L13 3M13 3H7M13 3v6"/>
        </svg>
      </Animated>
    </Animator>
  )

  if (external) return <a href={href} target="_blank" rel="noopener noreferrer" style={{ textDecoration: 'none', display: 'block' }}>{inner}</a>
  return <Link to={href} style={{ textDecoration: 'none', display: 'block' }}>{inner}</Link>
}

export default function LinksSection() {
  return (
    <section id="links" style={{ marginBottom: '3rem' }}>
      <SectionLabel>Links</SectionLabel>
      <div style={{ border: `1px solid ${colors.border}`, borderBottom: 'none' }}>
        {links.map(l => <LinkItem key={l.href} {...l} />)}
      </div>
      <style>{`.link-item:hover { background: rgba(0,255,180,0.03) !important; }`}</style>
    </section>
  )
}
