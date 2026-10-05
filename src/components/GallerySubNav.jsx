import { FrameCorners } from '@arwes/react'
import HudButton from './hud/HudButton.jsx'

const sections = [
  { id: 'photography', label: 'Photography' },
  { id: 'landscaping', label: 'Landscaping' },
  { id: 'gardening', label: 'Gardening' },
  { id: 'behance-3d-art', label: '3D Art' },
  { id: 'bread', label: 'Bread Baking' },
]

export default function GallerySubNav() {
  return (
    <nav className="gallery-subnav hud-panel" style={{
      zIndex: 50,
      display: 'flex',
      flexWrap: 'wrap',
      gap: '0.5rem',
      background: 'rgba(2,12,12,0.92)',
      backdropFilter: 'blur(20px)',
      padding: '0.75rem 0.9rem',
      marginBottom: '2.5rem',
    }}>
      <FrameCorners strokeWidth={1.5} cornerLength={12} />
      {sections.map((s) => (
        <HudButton key={s.id} href={`#${s.id}`} size="sm" style={{ position: 'relative', whiteSpace: 'nowrap' }}>
          {s.label}
        </HudButton>
      ))}
      <style>{`
        .gallery-subnav { position: relative; }
        @media (min-width: 700px) {
          .gallery-subnav { position: sticky; top: 80px; }
        }
      `}</style>
    </nav>
  )
}
