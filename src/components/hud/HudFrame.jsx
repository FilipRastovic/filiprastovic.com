import { FrameOctagon, styleFrameClipOctagon } from '@arwes/react'
import './hud.css'

const CORNERS = { leftTop: true, rightTop: false, rightBottom: true, leftBottom: false }

export default function HudFrame({ as: As = 'div', interactive, squareSize = 20, background, padding, className, style, children, ...rest }) {
  const shape = { ...CORNERS, squareSize }
  return (
    <As
      className={`hud-image${interactive ? ' hud-image--interactive' : ''}${className ? ` ${className}` : ''}`}
      style={{ position: 'relative', display: 'block', ...style }}
      {...rest}
    >
      <div className="hud-image__clip" style={{ position: 'relative', height: '100%', clipPath: styleFrameClipOctagon(shape), background: background ?? 'rgba(0,20,20,0.5)', padding }}>
        {children}
      </div>
      <FrameOctagon strokeWidth={1.5} {...shape} />
    </As>
  )
}
