import { Animator, Animated, fade, transition, FrameKranox } from '@arwes/react'
import { colors } from '../theme.js'

export default function ArwesCard({ children, style = {}, accent = false }) {
  return (
    <Animator>
      <Animated
        animated={[fade(), transition('y', 12, 0)]}
        style={{
          position: 'relative',
          padding: '1.25rem 1.5rem',
          background: accent ? 'rgba(0,255,180,0.04)' : 'rgba(2,20,20,0.6)',
          color: accent ? colors.primary : colors.border,
          ...style,
        }}
      >
        <FrameKranox strokeWidth={1} />
        <div style={{ position: 'relative', zIndex: 1 }}>
          {children}
        </div>
      </Animated>
    </Animator>
  )
}
