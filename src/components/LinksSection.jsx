import { Animator, Animated, fade, transition } from '@arwes/react'
import { Link } from 'react-router-dom'
import SectionLabel from './SectionLabel.jsx'
import { colors, fonts } from '../theme.js'

const appLinks = [
  {
    href: 'https://pdfflipbook.app/',
    label: 'PDF Flipbook',
    domain: 'pdfflipbook.app',
    description: 'Shopify app that turns PDFs into interactive flipbooks.',
    external: true,
    ascii: '▛▀▜▛▀▜\n▙▄▟▙▄▟',
  },
  {
    href: 'https://www.newgrounds.com/portal/view/713592',
    label: 'My Video Game',
    domain: 'newgrounds.com',
    description: 'Unity game built solo and published on Newgrounds.',
    external: true,
    ascii: '▗▄▄▄▖\n▐●○●▌\n▝▀▀▀▘',
  },
]

const otherLinks = [
  {
    href: 'https://stargazerstudio.net/portfolio',
    label: 'Web Development Portfolio',
    domain: 'stargazerstudio.net/portfolio',
    description: 'Client web builds and project case studies.',
    external: true,
    ascii: ' <  />',
  },
  {
    href: 'https://stargazerstudio.net/case-studies',
    label: 'Case Studies (CRO)',
    domain: 'stargazerstudio.net/case-studies',
    description: 'Conversion-rate optimization results and breakdowns.',
    external: true,
    ascii: '  ▄█\n ▄██\n▄███',
  },
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
    href: 'https://www.behance.net/rastovicfilip',
    label: '3D Art Portfolio',
    domain: 'behance.net/rastovicfilip',
    description: 'Cinema 4D renders and 3D art portfolio.',
    external: true,
    ascii: ' △ \n△□△\n ▽ ',
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

function AsciiIcon({ art }) {
  return (
    <div aria-hidden="true" style={{
      width: '40px',
      height: '36px',
      display: 'flex',
      alignItems: 'center',
      justifyContent: 'center',
      flexShrink: 0,
    }}>
      <pre style={{
        margin: 0,
        fontFamily: fonts.mono,
        fontSize: '9px',
        lineHeight: 1.15,
        color: colors.primaryDim,
        whiteSpace: 'pre',
        textAlign: 'center',
      }}>{art}</pre>
    </div>
  )
}

function LinkRow({ href, label, domain, description, external, ascii }) {
  const inner = (
    <Animator>
      <Animated
        animated={[fade(), transition('x', -12, 0)]}
        style={{
          display: 'flex',
          alignItems: 'center',
          gap: '0.9rem',
          padding: '1.1rem 1.25rem',
          borderBottom: `1px solid ${colors.border}`,
          textDecoration: 'none',
          color: 'inherit',
          cursor: 'pointer',
        }}
        className="link-item"
      >
        <AsciiIcon art={ascii} />
        <div style={{ flex: 1, minWidth: 0 }}>
          <div style={{ fontFamily: fonts.body, fontSize: '16px', fontWeight: 600, color: colors.text, marginBottom: '3px' }}>
            {label}
          </div>
          <div style={{ fontFamily: fonts.body, fontSize: '13px', color: colors.textMuted, marginBottom: '3px', lineHeight: 1.4 }}>
            {description}
          </div>
          <div style={{ fontFamily: fonts.mono, fontSize: '11px', color: colors.primaryDim }}>
            {domain}
          </div>
        </div>
        <svg viewBox="0 0 16 16" fill="none" stroke="currentColor" strokeWidth="1.5" style={{ width: '16px', height: '16px', color: colors.primary, flexShrink: 0 }}>
          <path d="M3 13L13 3M13 3H7M13 3v6"/>
        </svg>
      </Animated>
    </Animator>
  )

  if (external) return <a href={href} target="_blank" rel="noopener noreferrer" style={{ textDecoration: 'none', display: 'block' }}>{inner}</a>
  return <Link to={href} style={{ textDecoration: 'none', display: 'block' }}>{inner}</Link>
}

const columnHeaderStyle = {
  fontFamily: fonts.mono,
  fontSize: '12px',
  fontWeight: 700,
  letterSpacing: '0.15em',
  textTransform: 'uppercase',
  color: colors.primary,
  marginBottom: '0.9rem',
}

export default function LinksSection() {
  return (
    <section id="links" style={{ marginBottom: '5rem' }}>
      <SectionLabel>Links</SectionLabel>
      <div className="links-columns" style={{ display: 'grid', gridTemplateColumns: '1fr', gap: '2.5rem' }}>
        <div>
          <div style={columnHeaderStyle}>◇ Links</div>
          <div style={{ border: `1px solid ${colors.border}`, borderBottom: 'none' }}>
            {otherLinks.map(l => <LinkRow key={l.href} {...l} />)}
          </div>
        </div>
        <div>
          <div style={columnHeaderStyle}>◇ My Apps</div>
          <div style={{ border: `1px solid ${colors.border}`, borderBottom: 'none' }}>
            {appLinks.map(l => <LinkRow key={l.href} {...l} />)}
          </div>
        </div>
      </div>
      <style>{`
        .link-item:hover { background: rgba(0,255,180,0.03) !important; }
        @media (min-width: 700px) {
          .links-columns { grid-template-columns: 1fr 1fr; }
        }
      `}</style>
    </section>
  )
}
