import { colors } from '../theme.js'

export default function PhoneFrame({ src, alt }) {
  return (
    <div style={{
      position: 'relative',
      width: '210px',
      aspectRatio: '390 / 844',
      margin: '0 auto',
      borderRadius: '30px',
      border: `9px solid ${colors.bgCard}`,
      outline: `1px solid ${colors.border}`,
      boxShadow: `0 0 28px ${colors.primaryDim}, 0 12px 30px rgba(0,0,0,0.5)`,
      overflow: 'hidden',
      background: '#000',
    }}>
      <div style={{
        position: 'absolute',
        top: 0,
        left: '50%',
        transform: 'translateX(-50%)',
        width: '84px',
        height: '16px',
        background: colors.bgCard,
        borderRadius: '0 0 10px 10px',
        zIndex: 2,
      }} />
      <img
        src={src}
        alt={alt}
        loading="lazy"
        style={{ width: '100%', height: '100%', objectFit: 'cover', objectPosition: 'top' }}
      />
    </div>
  )
}
