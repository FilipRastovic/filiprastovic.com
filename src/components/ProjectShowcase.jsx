import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import PhoneFrame from './PhoneFrame.jsx'
import { colors, fonts } from '../theme.js'

const projects = [
  {
    href: 'https://stargazerstudio.net/portfolio',
    label: 'Web Development Portfolio',
    description: 'Client web builds and project case studies.',
    screenshot: '/images/link-previews/web-portfolio.png',
  },
  {
    href: 'https://stargazerstudio.net/case-studies',
    label: 'Case Studies (CRO)',
    description: 'Conversion-rate optimization results and breakdowns.',
    screenshot: '/images/link-previews/case-studies.png',
  },
  {
    href: 'https://www.newgrounds.com/portal/view/713592',
    label: 'My Video Game - Trial And Terror',
    description: 'Unity game built solo and published on Newgrounds.',
    screenshot: '/images/link-previews/video-game.png',
  },
  {
    href: 'https://pdfflipbook.app/',
    label: 'PDF Flipbook',
    description: 'Shopify app that turns PDFs into interactive flipbooks.',
    screenshot: '/images/link-previews/pdf-flipbook.png',
  },
  {
    href: 'https://www.behance.net/rastovicfilip',
    label: '3D Art Portfolio',
    description: 'Cinema 4D renders and 3D art portfolio.',
    screenshot: '/images/link-previews/3d-art.png',
  },
  {
    href: 'https://filiprastovic.itch.io/leap-of-faith',
    label: 'Leap of Faith',
    description: 'Student project - a minimalist 2D memory puzzle game, self-published on itch.io in 2016.',
    screenshot: '/images/link-previews/leap-of-faith.png',
  },
]

function ProjectCard({ href, label, description, screenshot }) {
  return (
    <Animator>
      <Animated animated={[fade(), transition('y', 12, 0)]} className="project-card" style={{
        border: `1px solid ${colors.border}`,
        background: 'rgba(0,20,20,0.4)',
        padding: '1.5rem 1.25rem 1.75rem',
      }}>
        <div style={{ fontFamily: fonts.body, fontSize: '17px', fontWeight: 700, color: colors.text, marginBottom: '0.5rem', lineHeight: 1.3 }}>
          {label}
        </div>
        <div style={{ fontFamily: fonts.body, fontSize: '13px', color: colors.textMuted, marginBottom: '1.5rem', lineHeight: 1.5 }}>
          {description}
        </div>
        <PhoneFrame src={screenshot} alt={label} />
        <a
          href={href}
          target="_blank"
          rel="noopener noreferrer"
          style={{
            display: 'block',
            textAlign: 'center',
            marginTop: '1.5rem',
            fontFamily: fonts.mono,
            fontSize: '12px',
            fontWeight: 700,
            letterSpacing: '0.08em',
            textTransform: 'uppercase',
            color: colors.primary,
            border: `1px solid ${colors.primaryMuted}`,
            padding: '10px 14px',
            textDecoration: 'none',
          }}
        >
          Learn more →
        </a>
      </Animated>
    </Animator>
  )
}

export default function ProjectShowcase() {
  return (
    <section id="projects" style={{ marginBottom: '5rem' }}>
      <SectionLabel>Projects</SectionLabel>
      <div className="project-grid" style={{
        display: 'grid',
        gridTemplateColumns: 'repeat(auto-fit, minmax(240px, 1fr))',
        gap: '1.25rem',
      }}>
        {projects.map(p => <ProjectCard key={p.href} {...p} />)}
      </div>
    </section>
  )
}
