import { Animator } from '@arwes/react'
import Header from '../components/Header.jsx'
import NowSection from '../components/NowSection.jsx'
import LinksSection from '../components/LinksSection.jsx'
import ProjectShowcase from '../components/ProjectShowcase.jsx'
import AboutSection from '../components/AboutSection.jsx'
import StackSection from '../components/StackSection.jsx'
import MediaSection from '../components/MediaSection.jsx'
import ArtSection from '../components/ArtSection.jsx'
import { colors } from '../theme.js'

function Divider() {
  return <div style={{ height: '1px', background: `linear-gradient(90deg, transparent, ${colors.border}, transparent)`, margin: '2.5rem 0' }} />
}

export default function Home() {
  return (
    <div>
      {/* Full-width cinematic cover */}
      <style>{`
        .hero-cover { height: clamp(192px, 25vw, 384px); }
        @media (max-width: 600px) { .hero-cover { height: 220px; } }
      `}</style>
      <div className="hero-cover" style={{ position: 'relative', width: '100%', overflow: 'hidden' }}>
        <img
          src="/images/hero-cover.webp"
          alt="Generative pyramid city"
          style={{ width: '100%', height: '100%', objectFit: 'cover', objectPosition: 'center center', display: 'block' }}
        />
        <div style={{ position: 'absolute', inset: 0, background: 'linear-gradient(to bottom, transparent 50%, #020c0c 100%)' }} />
      </div>

      <div style={{ padding: '2.5rem max(1.5rem, calc((100% - 740px)/2))' }}>
      <Animator>
        <Header />
      </Animator>
      <Divider />
      <NowSection />
      <Divider />
      <ProjectShowcase />
      <Divider />
      <LinksSection />
      <Divider />
      <AboutSection />
      <Divider />
      <StackSection />
      <Divider />
      <MediaSection />
      <Divider />
      <ArtSection />
      </div>
    </div>
  )
}
