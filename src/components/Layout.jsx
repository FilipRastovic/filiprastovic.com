import { Outlet, useLocation } from 'react-router-dom'
import { Animator, Animated, Dots, GridLines, MovingLines, Puffs, fade, transition } from '@arwes/react'
import Nav from './Nav.jsx'
import Footer from './Footer.jsx'
import ScrollManager from './ScrollManager.jsx'
import { SoundEffects } from './sound/SoundProvider.jsx'
import { colors } from '../theme.js'

const reducedMotion = typeof window !== 'undefined' && window.matchMedia?.('(prefers-reduced-motion: reduce)').matches

export default function Layout() {
  const { pathname } = useLocation()

  return (
    <div style={{ minHeight: '100vh', background: colors.bg, display: 'flex', flexDirection: 'column' }}>
      <ScrollManager />
      <SoundEffects />

      {/* Fixed background */}
      <div style={{ position: 'fixed', inset: 0, zIndex: 0, overflow: 'hidden', pointerEvents: 'none' }}>
        <Animator duration={{ interval: 12 }}>
          <Animated animated={[]}>
            <GridLines lineColor='hsl(165, 80%, 8%)' />
            <Dots color='hsl(165, 80%, 18%)' size={1} distance={30} />
            {!reducedMotion && <MovingLines lineColor='hsl(165 100% 50% / 7%)' distance={60} sets={18} />}
          </Animated>
        </Animator>
        {!reducedMotion && (
          <Animator duration={{ interval: 4, intervalPause: 1 }}>
            <Puffs color='hsl(165 100% 50% / 12%)' quantity={14} />
          </Animator>
        )}
      </div>

      {/* Content */}
      <div style={{ position: 'relative', zIndex: 1, flex: 1, display: 'flex', flexDirection: 'column' }}>
        <Nav />
        <main style={{ flex: 1 }}>
          <Animator key={pathname} root duration={{ enter: 0.45, exit: 0.2 }}>
            <Animated animated={reducedMotion ? [fade()] : [fade(), transition('y', 14, 0)]}>
              <Outlet />
            </Animated>
          </Animator>
        </main>
        <Footer />
      </div>
    </div>
  )
}
