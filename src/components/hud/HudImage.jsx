import { Animated, fade, transition } from '@arwes/react'
import HudFrame from './HudFrame.jsx'

export default function HudImage({ src, alt, width, height, label, aspectRatio }) {
  return (
    <Animated animated={[fade(), transition('y', 12, 0)]}>
      <HudFrame>
        <img
          src={src}
          alt={alt}
          loading="lazy"
          width={width}
          height={height}
          style={{ width: '100%', height: 'auto', aspectRatio, objectFit: 'cover', display: 'block', filter: 'brightness(0.9) contrast(1.05)' }}
        />
        {label && <span className="hud-image__label">{label}</span>}
      </HudFrame>
    </Animated>
  )
}
