import { colors } from '../theme.js'

const sections = [
  { id: 'photography', label: 'Photography' },
  { id: 'landscaping', label: 'Landscaping' },
  { id: 'gardening', label: 'Gardening' },
  { id: 'behance-3d-art', label: '3D Art' },
  { id: 'bread', label: 'Bread Baking' },
]

export default function GallerySubNav() {
  return (
    <nav style={{
      position: 'sticky',
      top: '80px',
      zIndex: 50,
      display: 'flex',
      flexWrap: 'wrap',
      gap: '0.5rem',
      background: 'rgba(2,12,12,0.92)',
      backdropFilter: 'blur(20px)',
      border: `1px solid ${colors.border}`,
      padding: '0.65rem 0.85rem',
      marginBottom: '2.5rem',
    }}>
      {sections.map((s) => (
        <a
          key={s.id}
          href={`#${s.id}`}
          style={{
            textDecoration: 'none',
            fontSize: '12px',
            fontWeight: 600,
            letterSpacing: '0.08em',
            textTransform: 'uppercase',
            color: colors.textMuted,
            border: `1px solid ${colors.border}`,
            padding: '5px 12px',
            fontFamily: "'Share Tech Mono', monospace",
            whiteSpace: 'nowrap',
          }}
        >
          {s.label}
        </a>
      ))}
    </nav>
  )
}
