import { Animator, Animated, fade, transition } from '@arwes/react'
import SectionLabel from './SectionLabel.jsx'
import { colors } from '../theme.js'

const projects = [
  { src: '/images/behance-1.jpg', title: 'Isometric 3D City / Town Illustration', href: 'https://www.behance.net/gallery/131241285/Isometric-3D-City-Town-Illustration' },
  { src: '/images/behance-2.png', title: 'Abstract Compositions', href: 'https://www.behance.net/gallery/150431597/Abstract-Compositions' },
  { src: '/images/behance-3.png', title: 'Isometric 3D Houses and Buildings', href: 'https://www.behance.net/gallery/122126973/Isometric-3D-Houses-and-Buildings' },
  { src: '/images/behance-4.png', title: 'Cute Candy House Isometric 3D', href: 'https://www.behance.net/gallery/161489371/Cute-Candy-House-Isometric-3D' },
  { src: '/images/behance-5.png', title: 'Metaverse NFT Gallery - Unity 3D Environment App', href: 'https://www.behance.net/gallery/143078671/Metaverse-NFT-Gallery-Unity-3D-Environment-App' },
  { src: '/images/behance-6.png', title: 'Structure - Abstract Compositions', href: 'https://www.behance.net/gallery/158141553/Structure-Abstract-Compositions' },
  { src: '/images/behance-7.jpg', title: 'Sci-Fi Raspberry Pi Enclosure', href: 'https://www.behance.net/gallery/193172329/Sci-Fi-Raspberry-Pi-Enclosure' },
  { src: '/images/behance-8.jpg', title: 'Abstract Compositions - Silvermoon - Set Design', href: 'https://www.behance.net/gallery/114279937/Abstract-Compositions-Silvermoon-Set-Design' },
  { src: '/images/behance-9.png', title: '3D Landing Page Design and Development UI/UX - City 3D', href: 'https://www.behance.net/gallery/161063841/3D-Landing-Page-Design-and-Development-UI-UX-City-3D' },
  { src: '/images/behance-10.png', title: 'Ourboro - Real Estate Isometric Illustrations', href: 'https://www.behance.net/gallery/145408185/Ourboro-Real-Estate-Isometric-Illustrations' },
  { src: '/images/behance-11.jpg', title: 'Isometric Smart Home Building Web Animation', href: 'https://www.behance.net/gallery/146165817/Isometric-Smart-Home-Building-Web-Animation' },
  { src: '/images/behance-12.png', title: 'Random Daily Renders', href: 'https://www.behance.net/gallery/158142133/Random-Daily-Renders' },
  { src: '/images/behance-13.jpg', title: 'Stylized 3D Illustration for a Fitness App', href: 'https://www.behance.net/gallery/122127393/Stylized-3D-Illustration-for-a-Fitness-App' },
  { src: '/images/behance-14.png', title: 'Pastel Shrine - Generative Abstract Compositions', href: 'https://www.behance.net/gallery/166344753/Pastel-Shrine-Generative-Abstract-Compositions' },
  { src: '/images/behance-15.png', title: 'Stack Overflow - Generative Abstract Compositions', href: 'https://www.behance.net/gallery/166344897/Stack-Overflow-Generative-Abstract-Compositions' },
  { src: '/images/behance-16.png', title: 'Mo Cube - Abstract Compositions', href: 'https://www.behance.net/gallery/159952293/Mo-Cube-Abstract-Compositions' },
  { src: '/images/behance-17.png', title: 'Unity Realtime Sci-Fi Corridor / Metaverse Showroom', href: 'https://www.behance.net/gallery/155030199/Unity-Realtime-Sci-Fi-Corridor-Metaverse-Showroom' },
  { src: '/images/behance-18.jpg', title: 'Computer Composition', href: 'https://www.behance.net/gallery/102801145/Computer-composition' },
]

export default function BehanceSection() {
  return (
    <section id="behance-3d-art" style={{ marginBottom: '5rem', scrollMarginTop: '140px' }}>
      <SectionLabel>3D Art</SectionLabel>
      <p style={{ fontSize: '17px', lineHeight: 1.8, color: colors.textMuted, marginBottom: '1.75rem' }}>
        Case studies from my <a href="https://www.behance.net/rastovicfilip" target="_blank" rel="noopener noreferrer" style={{ color: colors.primary }}>Behance</a> portfolio. Click any piece to view the full project.
      </p>
      <div className="photo-grid" style={{ '--grid-min': '260px', '--grid-gap': '1rem' }}>
        {projects.map((p) => (
          <Animator key={p.src}>
            <Animated animated={[fade(), transition('y', 12, 0)]}>
              <a
                href={p.href}
                target="_blank"
                rel="noopener noreferrer"
                style={{ textDecoration: 'none', display: 'block' }}
              >
                <div style={{ border: `1px solid ${colors.border}`, overflow: 'hidden', background: 'rgba(0,20,20,0.5)' }}>
                  <img
                    src={p.src}
                    alt={p.title}
                    loading="lazy"
                    width={808}
                    height={632}
                    style={{ width: '100%', height: 'auto', display: 'block', filter: 'brightness(0.9) contrast(1.05)' }}
                  />
                </div>
                <div style={{
                  marginTop: '0.5rem',
                  fontSize: '13px',
                  fontFamily: "'Share Tech Mono', monospace",
                  color: colors.textMuted,
                }}>
                  {p.title}
                </div>
              </a>
            </Animated>
          </Animator>
        ))}
      </div>
    </section>
  )
}
