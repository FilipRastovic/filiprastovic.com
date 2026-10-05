import { colors, fonts } from '../theme.js'

export default function SectionLabel({ children }) {
  return (
    <div style={{
      display: 'flex',
      alignItems: 'center',
      gap: '16px',
      marginBottom: '2rem',
    }}>
      <span style={{
        fontFamily: fonts.display,
        fontSize: '15px',
        fontWeight: 600,
        letterSpacing: '0.18em',
        textShadow: '0 0 10px hsl(165 100% 50% / 35%)',
        textTransform: 'uppercase',
        color: colors.primary,
      }}>
        ◈ {children}
      </span>
      <div style={{ flex: 1, height: '1px', background: `linear-gradient(90deg, ${colors.border}, transparent)` }} />
    </div>
  )
}
