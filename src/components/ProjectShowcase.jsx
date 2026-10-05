import { useRef } from 'react'
import { Animator } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import PhoneFrame from './PhoneFrame.jsx'
import HudCard, { useInView } from './hud/HudCard.jsx'
import HudButton from './hud/HudButton.jsx'
import { colors, fonts } from '../theme.js'

const projects = [
  {
    href: 'https://stargazerstudio.net/portfolio',
    label: 'Web Development Portfolio',
    description: 'Client web builds and project case studies.',
    screenshot: '/images/link-previews/web-portfolio.webp',
  },
  {
    href: 'https://stargazerstudio.net/case-studies',
    label: 'Case Studies (CRO)',
    description: 'Conversion-rate optimization results and breakdowns.',
    screenshot: '/images/link-previews/case-studies.webp',
  },
  {
    href: 'https://www.newgrounds.com/portal/view/713592',
    label: 'My Video Game - Trial And Terror',
    description: 'Unity game built with a friend and published on Newgrounds.',
    screenshot: '/images/link-previews/video-game.webp',
  },
  {
    href: 'https://pdfflipbook.app/',
    label: 'PDF Flipbook',
    description: 'Shopify app that turns PDFs into interactive flipbooks.',
    screenshot: '/images/link-previews/pdf-flipbook.webp',
  },
  {
    href: 'https://www.behance.net/rastovicfilip',
    label: '3D Art Portfolio',
    description: 'Cinema 4D renders and 3D art portfolio.',
    screenshot: '/images/link-previews/3d-art.webp',
  },
  {
    href: 'https://filiprastovic.itch.io/leap-of-faith',
    label: 'Leap of Faith',
    description: 'Student project - a minimalist 2D memory puzzle game, self-published on itch.io in 2016.',
    screenshot: '/images/link-previews/leap-of-faith.webp',
  },
]

function ProjectCard({ href, label, description, screenshot }) {
  return (
    <Animator duration={{ enter: 0.9, exit: 0.3 }}>
      <a href={href} target="_blank" rel="noopener noreferrer" className="hud-card-link" aria-label={`${label} (opens in new tab)`} style={{ height: '100%' }}>
        <HudCard>
          <div className="project-card-body">
            <div className="project-card-title" style={{ fontFamily: fonts.body, fontWeight: 700, color: colors.text, marginBottom: '0.5rem', lineHeight: 1.3 }}>
              {label}
            </div>
            <div className="project-card-desc" style={{ fontFamily: fonts.body, color: colors.textMuted, lineHeight: 1.5 }}>
              {description}
            </div>
            <PhoneFrame src={screenshot} alt="" />
            <div className="project-card-cta" style={{ display: 'flex', justifyContent: 'center' }}>
              <HudButton as="span" aria-hidden="true">Learn more →</HudButton>
            </div>
          </div>
        </HudCard>
      </a>
    </Animator>
  )
}

export default function ProjectShowcase() {
  const sectionRef = useRef(null)
  const inView = useInView(sectionRef)

  return (
    <section id="projects" ref={sectionRef} style={{ marginBottom: '5rem' }}>
      <SectionLabel>Projects</SectionLabel>
      <Animator root active={inView} manager="stagger" combine>
        <div className="project-grid" style={{
          display: 'grid',
          gridTemplateColumns: 'repeat(auto-fit, minmax(min(240px, 40vw), 1fr))',
          gap: '1.25rem',
        }}>
          {projects.map(p => <ProjectCard key={p.href} {...p} />)}
        </div>
      </Animator>
      <style>{`
        .project-card-body { padding: 1.75rem 1.5rem; }
        .project-card-title { font-size: 17px; }
        .project-card-desc { font-size: 13px; margin-bottom: 1.5rem; }
        .project-card-cta { margin-top: 1.5rem; }
        @media (max-width: 600px) {
          .project-grid { gap: 0.75rem !important; }
          .project-card-body { padding: 1.1rem 0.85rem; }
          .project-card-title { font-size: 14px; }
          .project-card-desc { font-size: 11.5px; margin-bottom: 1rem; }
          .project-card-cta { margin-top: 1rem; }
          .project-card-cta .hud-button { padding: 6px 10px; font-size: 10.5px; letter-spacing: 0.05em; }
        }
      `}</style>
    </section>
  )
}
