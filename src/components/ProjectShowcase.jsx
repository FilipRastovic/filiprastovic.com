import { useRef } from 'react'
import { Animator, Animated, Text, FrameCorners, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { useInView } from './hud/HudCard.jsx'
import { colors, fonts } from '../theme.js'

const projects = [
  {
    href: 'https://stargazerstudio.net/portfolio',
    label: 'Web Development Portfolio',
    type: 'Client work',
    description: 'Shopify stores, headless builds and platform migrations delivered for clients through Stargazer Studio.',
  },
  {
    href: 'https://stargazerstudio.net/case-studies',
    label: 'Case Studies (CRO)',
    type: 'Conversion optimization',
    description: 'A/B tests and UX experiments with the results and the reasoning behind each one.',
  },
  {
    href: 'https://rezonanca.art/',
    label: 'Rezonanca',
    type: 'Generative art',
    description: 'Art prints where every piece is written in JavaScript, then printed in Novi Sad.',
  },
  {
    href: 'https://www.newgrounds.com/portal/view/713592',
    label: 'Trial And Terror',
    type: 'Video game',
    description: 'A Unity game built with a friend and published on Newgrounds.',
  },
  {
    href: 'https://pdfflipbook.app/',
    label: 'PDF Flipbook',
    type: 'Shopify app',
    description: 'Turns PDF catalogues and lookbooks into interactive flipbooks inside Shopify stores.',
  },
  {
    href: 'https://www.behance.net/rastovicfilip',
    label: '3D Art Portfolio',
    type: '3D art',
    description: 'Cinema 4D renders and 3D artwork.',
  },
  {
    href: 'https://filiprastovic.itch.io/leap-of-faith',
    label: 'Leap of Faith',
    type: 'Student game · 2016',
    description: 'A minimalist 2D memory puzzle game, self-published on itch.io.',
  },
]

const host = href => new URL(href).hostname.replace(/^www\./, '')

function ProjectRow({ index, href, label, type, description }) {
  return (
    <Animator duration={{ enter: 0.6, exit: 0.2 }}>
      <Animated as="li" animated={[fade(), transition('y', 12, 0)]} className="project-row">
        <a href={href} target="_blank" rel="noopener noreferrer" className="project-link" aria-label={`${label}: ${description} (opens in new tab)`}>
          <FrameCorners strokeWidth={1} cornerLength={14} />
          <span className="project-index" aria-hidden="true">{String(index + 1).padStart(2, '0')}</span>
          <span className="project-head">
            <span className="project-type">{type}</span>
            <Animator>
              <Text as="span" manager="decipher" className="project-title">{label}</Text>
            </Animator>
          </span>
          <span className="project-desc">{description}</span>
          <span className="project-host" aria-hidden="true">{host(href)} <span className="project-arrow">↗</span></span>
        </a>
      </Animated>
    </Animator>
  )
}

export default function ProjectShowcase() {
  const sectionRef = useRef(null)
  const inView = useInView(sectionRef)

  return (
    <section id="projects" ref={sectionRef} className="projects-wide">
      <SectionLabel>Projects</SectionLabel>
      <Animator root active={inView} manager="stagger" combine duration={{ stagger: 0.08 }}>
        <ul className="project-list">
          {projects.map((p, i) => <ProjectRow key={p.href} index={i} {...p} />)}
        </ul>
      </Animator>
      <style>{`
        .projects-wide {
          --w: min(1180px, calc(100vw - 3rem));
          width: var(--w);
          margin: 0 0 6rem calc(50% - var(--w) / 2);
        }
        .project-list { list-style: none; border-bottom: 1px solid hsl(165 60% 20% / 60%); }
        .project-link {
          position: relative;
          display: grid;
          grid-template-columns: 3rem minmax(0, 1.1fr) minmax(0, 1.4fr) 13rem;
          align-items: baseline;
          column-gap: 2.5rem;
          padding: 2.5rem 2rem;
          color: inherit;
          text-decoration: none;
          border-top: 1px solid hsl(165 60% 20% / 60%);
          transition: background 0.3s;
          --arwes-frames-bg-color: transparent;
          --arwes-frames-line-color: hsl(165, 100%, 50%);
        }
        a.project-link:hover { opacity: 1; }
        .project-link svg { opacity: 0; transition: opacity 0.3s; }
        .project-link:hover, .project-link:focus-visible { background: hsl(165 100% 50% / 3.5%); }
        .project-link:hover svg, .project-link:focus-visible svg { opacity: 0.8; }
        .project-link:focus-visible { outline: 1px dashed ${colors.primary}; outline-offset: 4px; }
        .project-head { display: flex; flex-direction: column; }
        .project-index {
          font-family: ${fonts.mono};
          font-size: 13px;
          color: ${colors.primaryDim};
          padding-top: 2px;
        }
        .project-type {
          font-family: ${fonts.mono};
          font-size: 11.5px;
          letter-spacing: 0.14em;
          text-transform: uppercase;
          color: ${colors.textMuted};
          margin-bottom: 0.6rem;
        }
        .project-title {
          font-family: ${fonts.body};
          font-size: 22px;
          font-weight: 700;
          line-height: 1.25;
          color: ${colors.text};
          transition: color 0.25s, text-shadow 0.25s;
        }
        .project-link:hover .project-title { color: ${colors.primary}; text-shadow: 0 0 10px hsl(165 100% 50% / 35%); }
        .project-desc {
          font-family: ${fonts.body};
          font-size: 15.5px;
          line-height: 1.6;
          color: ${colors.textMuted};
        }
        .project-host {
          font-family: ${fonts.mono};
          font-size: 12.5px;
          letter-spacing: 0.06em;
          color: ${colors.primaryDim};
          text-align: right;
          transition: color 0.25s;
        }
        .project-arrow { display: inline-block; transition: transform 0.25s; }
        .project-link:hover .project-host { color: ${colors.primary}; }
        .project-link:hover .project-arrow { transform: translate(3px, -3px); }
        @media (max-width: 900px) {
          .project-link { grid-template-columns: 2.25rem minmax(0, 1fr); column-gap: 1rem; row-gap: 0.75rem; padding: 2rem 1.25rem; }
          .project-index { grid-row: 1 / span 3; }
          .project-desc, .project-host { grid-column: 2; text-align: left; }
        }
        @media (max-width: 600px) {
          .projects-wide { --w: 100%; margin-left: 0; margin-bottom: 4rem; }
          .project-link { padding: 1.5rem 0.75rem 1.4rem; column-gap: 0.9rem; row-gap: 0.6rem; }
          .project-title { font-size: 19px; }
          .project-desc { font-size: 14.5px; }
        }
      `}</style>
    </section>
  )
}
