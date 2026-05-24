import { Outlet } from 'react-router-dom'
import { Animator, Animated, Dots, GridLines } from '@arwes/react'
import Nav from './Nav.jsx'
import Footer from './Footer.jsx'
import { colors } from '../theme.js'

export default function Layout() {
  return (
    <div style={{ minHeight: '100vh', background: colors.bg, display: 'flex', flexDirection: 'column' }}>
      {/* Fixed background */}
      <div style={{ position: 'fixed', inset: 0, zIndex: 0, overflow: 'hidden', pointerEvents: 'none' }}>
        <Animator>
          <Animated animated={[]}>
            <GridLines lineColor='hsl(165, 80%, 8%)' />
            <Dots color='hsl(165, 80%, 18%)' size={1} distance={30} />
          </Animated>
        </Animator>
      </div>

      {/* Content */}
      <div style={{ position: 'relative', zIndex: 1, flex: 1, display: 'flex', flexDirection: 'column' }}>
        <Nav />
        <main style={{ flex: 1 }}>
          <Outlet />
        </main>
        <Footer />
      </div>
    </div>
  )
}
