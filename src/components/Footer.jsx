import { colors } from '../theme.js'

export default function Footer() {
  return (
    <footer style={{
      borderTop: `1px solid ${colors.border}`,
      padding: '1.5rem max(1.5rem, calc((100% - 740px)/2))',
      display: 'flex',
      justifyContent: 'space-between',
      alignItems: 'center',
      flexWrap: 'wrap',
      gap: '0.5rem',
    }}>
      <span style={{ fontFamily: "'Share Tech Mono', monospace", fontSize: '12px', color: colors.textMuted }}>
        Filip Rastovic · Novi Sad, Serbia
      </span>
      <a href="mailto:filiporastovic@gmail.com" style={{
        fontFamily: "'Share Tech Mono', monospace",
        fontSize: '12px',
        color: colors.primary,
        textDecoration: 'none',
      }}>
        filiporastovic@gmail.com
      </a>
    </footer>
  )
}
