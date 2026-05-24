import { colors } from '../theme.js'

export default function SectionLabel({ children }) {
  return (
    <div style={{
      display: 'flex',
      alignItems: 'center',
      gap: '12px',
      marginBottom: '1.25rem',
    }}>
      <span style={{
        fontFamily: "'Share Tech Mono', monospace",
        fontSize: '10px',
        fontWeight: 700,
        letterSpacing: '0.15em',
        textTransform: 'uppercase',
        color: colors.primary,
      }}>
        ◈ {children}
      </span>
      <div style={{ flex: 1, height: '1px', background: `linear-gradient(90deg, ${colors.border}, transparent)` }} />
    </div>
  )
}
