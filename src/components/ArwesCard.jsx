import { useRef } from 'react'
import { Animator, Animated, aaVisibility, aa, FrameSVGKranox, useFrameSVGAssemblingAnimation } from '@arwes/react'
import { colors } from '../theme.js'

export default function ArwesCard({ children, style = {}, accent = false }) {
  const svgRef = useRef(null)
  const { onRender } = useFrameSVGAssemblingAnimation(svgRef)

  return (
    <Animator>
      <Animated
        animated={[aaVisibility(), aa('y', 12, 0)]}
        style={{
          position: 'relative',
          padding: '1.25rem 1.5rem',
          background: accent ? 'rgba(0,255,180,0.04)' : 'rgba(2,20,20,0.6)',
          ...style,
        }}
      >
        <FrameSVGKranox
          elementRef={svgRef}
          onRender={onRender}
          style={{ position: 'absolute', inset: 0 }}
          strokeWidth={1}
          color={accent ? colors.primary : colors.border}
        />
        <div style={{ position: 'relative', zIndex: 1 }}>
          {children}
        </div>
      </Animated>
    </Animator>
  )
}
