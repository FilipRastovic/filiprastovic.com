import { FrameOctagon, Illuminator, styleFrameClipOctagon } from '@arwes/react'
import './hud.css'

const CORNERS = { leftTop: true, rightTop: false, rightBottom: true, leftBottom: false, squareSize: 10 }

export default function HudButton({ as: As = 'a', variant = 'secondary', size, className, children, ...rest }) {
  return (
    <As className={`hud-button hud-button--${variant}${size ? ` hud-button--${size}` : ''}${className ? ` ${className}` : ''}`} {...rest}>
      <FrameOctagon strokeWidth={1} {...CORNERS} />
      {variant !== 'primary' && (
        <div style={{ position: 'absolute', inset: 0, clipPath: styleFrameClipOctagon(CORNERS), pointerEvents: 'none' }}>
          <Illuminator color={variant === 'accent' ? 'hsl(45 100% 60% / 20%)' : 'hsl(165 100% 50% / 18%)'} size={160} />
        </div>
      )}
      <span className="hud-button__label">{children}</span>
    </As>
  )
}
