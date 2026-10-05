import { useEffect, useState } from 'react'
import {
  Animated,
  fade,
  transition,
  FrameKranox,
  FrameOctagon,
  FrameCorners,
  Illuminator,
  styleFrameClipKranox,
  styleFrameClipOctagon,
} from '@arwes/react'
import './hud.css'

const KRANOX = { strokeWidth: 1.5, squareSize: 16, smallLineLength: 16, largeLineLength: 64 }
const OCTAGON = { leftTop: true, rightTop: false, rightBottom: true, leftBottom: false, squareSize: 14 }

// Arwes has no viewport trigger; this activates a root <Animator> once the section scrolls into view.
// Triggers on any overlap (not a ratio) so very tall sections still fire on short viewports.
export function useInView(ref) {
  const [inView, setInView] = useState(() => typeof IntersectionObserver === 'undefined')
  useEffect(() => {
    const el = ref.current
    if (!el || inView) return
    const observer = new IntersectionObserver(([entry]) => {
      if (entry.isIntersecting) {
        setInView(true)
        observer.disconnect()
      }
    }, { threshold: 0, rootMargin: '0px 0px -10% 0px' })
    observer.observe(el)
    return () => observer.disconnect()
  }, [ref, inView])
  return inView
}

// shape: 'kranox' | 'octagon' are interactive cards; 'corners' is a static info panel.
export default function HudCard({ accent, shape = 'kranox', style, children }) {
  const panel = shape === 'corners'
  const clipPath = shape === 'octagon' ? styleFrameClipOctagon(OCTAGON) : styleFrameClipKranox(KRANOX)

  return (
    <Animated
      animated={[fade(), transition('y', panel ? 10 : 16, 0)]}
      className={`${panel ? 'hud-panel' : 'hud-card'}${accent ? ' hud-card--accent' : ''}`}
      style={{ position: 'relative', minWidth: 0, height: '100%', ...style }}
    >
      {shape === 'octagon' && <FrameOctagon strokeWidth={1.5} {...OCTAGON} />}
      {shape === 'kranox' && <FrameKranox bgStrokeWidth={1} {...KRANOX} />}
      {panel && <FrameCorners strokeWidth={1.5} cornerLength={12} />}
      {!panel && (
        <div style={{ position: 'absolute', inset: 0, clipPath, pointerEvents: 'none' }}>
          <Illuminator color={accent ? 'hsl(165 100% 50% / 12%)' : 'hsl(165 80% 60% / 7%)'} size={380} />
        </div>
      )}
      <div style={{ position: 'relative', zIndex: 1 }}>{children}</div>
    </Animated>
  )
}
