import { colors } from '../theme.js'

export default function SectionLabel({ children }) {
  return (
    <div style={{
      display: 'flex',
      alignItems: 'center',
      gap: '16px',
      marginBottom: '2rem',
    }}>
      <span style={{
        fontFamily: "'Share Tech Mono', monospace",
        fontSize: '16px',
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
