import { Link, NavLink } from 'react-router-dom'
import { Animator, Animated, Text, aaVisibility, aa } from '@arwes/react'
import { colors } from '../theme.js'
import { useState, useEffect } from 'react'

const navLinks = [
  { to: '/', label: 'Home' },
  { to: '/blog', label: 'Blog' },
]

const tickerItems = [
  'Senior Shopify Developer',
  'Full-Stack Software Engineer',
  'Novi Sad, Serbia',
  'CRO Specialist',
  'Available Remotely',
  'Shopify Plus',
  'Hydrogen / Remix',
  'Laravel / PHP',
  '10+ Years Experience',
]

export default function Nav() {
  const [active, setActive] = useState(true)
  const [menuOpen, setMenuOpen] = useState(false)

  return (
    <nav style={{ position: 'sticky', top: 0, zIndex: 100 }}>
      {/* Ticker */}
      <div style={{
        background: 'linear-gradient(90deg, #000a0a 0%, #020c0c 50%, #000510 100%)',
        borderBottom: `1px solid ${colors.border}`,
        overflow: 'hidden',
        height: '28px',
        display: 'flex',
        alignItems: 'center',
      }}>
        <div style={{
          display: 'flex',
          gap: 0,
          animation: 'ticker 32s linear infinite',
          whiteSpace: 'nowrap',
        }}>
          {[...tickerItems, ...tickerItems].map((item, i) => (
            <span key={i} style={{
              display: 'inline-flex',
              alignItems: 'center',
              gap: '10px',
              padding: '0 28px',
              fontSize: '10px',
              fontWeight: 600,
              letterSpacing: '0.1em',
              textTransform: 'uppercase',
              color: colors.primaryDim,
              fontFamily: "'Share Tech Mono', monospace",
            }}>
              <span style={{ color: colors.primary, opacity: 0.6 }}>◆</span>
              {item}
            </span>
          ))}
        </div>
      </div>

      {/* Nav bar */}
      <div style={{
        background: 'rgba(2,12,12,0.92)',
        backdropFilter: 'blur(20px)',
        borderBottom: `1px solid ${colors.border}`,
        padding: '0 max(1.5rem, calc((100% - 900px)/2))',
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'space-between',
        height: '52px',
      }}>
        <Link to="/" style={{ textDecoration: 'none' }}>
          <span style={{
            fontFamily: "'Share Tech Mono', monospace",
            fontSize: '14px',
            fontWeight: 700,
            color: colors.primary,
            letterSpacing: '0.05em',
          }}>FR://</span>
          <span style={{ color: colors.text, fontSize: '13px', marginLeft: '6px' }}>Filip Rastovic</span>
        </Link>
        <div style={{ display: 'flex', gap: '2rem', alignItems: 'center' }}>
          {navLinks.map(l => (
            <NavLink key={l.to} to={l.to} end style={({ isActive }) => ({
              textDecoration: 'none',
              fontSize: '12px',
              fontWeight: 600,
              letterSpacing: '0.08em',
              textTransform: 'uppercase',
              color: isActive ? colors.primary : colors.textMuted,
              borderBottom: isActive ? `1px solid ${colors.primary}` : '1px solid transparent',
              paddingBottom: '2px',
              transition: 'color 0.2s',
            })}>
              {l.label}
            </NavLink>
          ))}
          <a href="mailto:filiporastovic@gmail.com" style={{
            textDecoration: 'none',
            fontSize: '11px',
            fontWeight: 600,
            letterSpacing: '0.08em',
            textTransform: 'uppercase',
            color: colors.accent,
            border: `1px solid ${colors.accent}`,
            padding: '4px 12px',
            fontFamily: "'Share Tech Mono', monospace",
          }}>
            Contact
          </a>
        </div>
      </div>
      <style>{`
        @keyframes ticker { from { transform: translateX(0) } to { transform: translateX(-50%) } }
      `}</style>
    </nav>
  )
}
