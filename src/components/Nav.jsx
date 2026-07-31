import { Link, NavLink, useLocation } from 'react-router-dom'
import { colors, fonts } from '../theme.js'
import { useState, useEffect } from 'react'
import LogoMenu from './LogoMenu.jsx'

const CONTACT_EMAIL = 'filiporastovic@gmail.com'

const navLinks = [
  { to: '/', label: 'Home' },
  { to: '/gallery', label: 'Gallery' },
  { to: '/testimonials', label: 'Testimonials' },
  { to: '/blog', label: 'Blog' },
]

const tickerItems = [
  'Full-Stack Software Engineer',
  'Novi Sad, Serbia',
  'E-Commerce Solutions Architect',
  'Available Remotely',
  'Shopify',
  'AI Agents',
  'Custom Ecommerce Integrations',
  'Data Migrations',
  '10+ Years Experience',
]

export default function Nav() {
  const [menuOpen, setMenuOpen] = useState(false)
  const [contactOpen, setContactOpen] = useState(false)
  const location = useLocation()

  useEffect(() => { setMenuOpen(false) }, [location])

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
              fontSize: '11px',
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
        padding: '0 max(1.5rem, calc((100% - 740px)/2))',
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'space-between',
        height: '52px',
      }}>
        <div style={{ display: 'flex', alignItems: 'center', whiteSpace: 'nowrap', flexShrink: 0 }}>
          <LogoMenu />
          <Link to="/" style={{ textDecoration: 'none', display: 'flex', alignItems: 'center' }}>
            <span style={{
              fontFamily: "'Share Tech Mono', monospace",
              fontSize: '15px',
              fontWeight: 700,
              color: colors.primary,
              letterSpacing: '0.05em',
              marginLeft: '8px',
            }}>FR://</span>
            <span style={{ color: colors.text, fontSize: '14px', marginLeft: '6px' }}>Filip Rastovic</span>
          </Link>
        </div>

        {/* Desktop nav */}
        <div className="nav-desktop" style={{ display: 'flex', gap: '2rem', alignItems: 'center' }}>
          {navLinks.map(l => (
            <NavLink key={l.to} to={l.to} end style={({ isActive }) => ({
              textDecoration: 'none',
              fontSize: '13px',
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
          <button onClick={() => setContactOpen(true)} style={{
            fontSize: '12px',
            fontWeight: 600,
            letterSpacing: '0.08em',
            textTransform: 'uppercase',
            color: colors.accent,
            border: `1px solid ${colors.accent}`,
            padding: '4px 12px',
            fontFamily: "'Share Tech Mono', monospace",
            background: 'none',
            cursor: 'pointer',
          }}>
            Contact
          </button>
        </div>

        {/* Hamburger button - mobile only */}
        <button
          className="nav-hamburger"
          aria-label={menuOpen ? 'Close menu' : 'Open menu'}
          onClick={() => setMenuOpen(o => !o)}
          style={{
            display: 'none',
            background: 'none',
            border: 'none',
            cursor: 'pointer',
            padding: '6px',
            color: colors.primary,
          }}
        >
          {menuOpen
            ? <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" style={{ width: 22, height: 22 }}><path d="M18 6L6 18M6 6l12 12"/></svg>
            : <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" style={{ width: 22, height: 22 }}><path d="M3 6h18M3 12h18M3 18h18"/></svg>
          }
        </button>
      </div>

      {/* Mobile dropdown */}
      {menuOpen && (
        <div className="nav-mobile-menu" style={{
          background: 'rgba(2,12,12,0.97)',
          backdropFilter: 'blur(20px)',
          borderBottom: `1px solid ${colors.border}`,
          padding: '0.5rem max(1.5rem, calc((100% - 740px)/2)) 1rem',
        }}>
          {navLinks.map(l => (
            <NavLink key={l.to} to={l.to} end style={({ isActive }) => ({
              display: 'block',
              textDecoration: 'none',
              fontSize: '15px',
              fontWeight: 600,
              letterSpacing: '0.08em',
              textTransform: 'uppercase',
              color: isActive ? colors.primary : colors.text,
              padding: '0.85rem 0',
              borderBottom: `1px solid ${colors.border}`,
              fontFamily: "'Share Tech Mono', monospace",
            })}>
              {l.label}
            </NavLink>
          ))}
          <button onClick={() => { setMenuOpen(false); setContactOpen(true) }} style={{
            display: 'block',
            width: '100%',
            marginTop: '0.85rem',
            fontSize: '13px',
            fontWeight: 600,
            letterSpacing: '0.1em',
            textTransform: 'uppercase',
            color: colors.accent,
            border: `1px solid ${colors.accent}`,
            padding: '10px 0',
            fontFamily: "'Share Tech Mono', monospace",
            background: 'none',
            cursor: 'pointer',
            textAlign: 'center',
          }}>
            Contact
          </button>
        </div>
      )}

      <style>{`
        @keyframes ticker { from { transform: translateX(0) } to { transform: translateX(-50%) } }
        @media (max-width: 600px) {
          .nav-desktop { display: none !important; }
          .nav-hamburger { display: flex !important; }
        }
      `}</style>

      {contactOpen && (
        <div
          role="dialog"
          aria-modal="true"
          aria-label="Contact"
          onClick={() => setContactOpen(false)}
          style={{
            position: 'fixed',
            inset: 0,
            zIndex: 1000,
            background: 'rgba(0,5,5,0.75)',
            display: 'flex',
            alignItems: 'center',
            justifyContent: 'center',
            padding: '1.5rem',
          }}
        >
          <div onClick={(e) => e.stopPropagation()} style={{
            position: 'relative',
            width: '100%',
            maxWidth: '360px',
            background: colors.bgCard,
            border: `1px solid ${colors.border}`,
            boxShadow: '0 0 40px rgba(0,200,160,0.15)',
            padding: '2rem',
            textAlign: 'center',
          }}>
            <button onClick={() => setContactOpen(false)} aria-label="Close" style={{
              position: 'absolute',
              top: '10px',
              right: '10px',
              background: 'none',
              border: 'none',
              color: colors.textMuted,
              fontSize: '18px',
              lineHeight: 1,
              cursor: 'pointer',
            }}>✕</button>
            <div style={{
              fontFamily: fonts.mono,
              fontSize: '11px',
              letterSpacing: '0.1em',
              textTransform: 'uppercase',
              color: colors.primaryDim,
              marginBottom: '0.75rem',
            }}>
              Get in touch
            </div>
            <a href={`mailto:${CONTACT_EMAIL}`} style={{
              display: 'block',
              fontFamily: fonts.mono,
              fontSize: '17px',
              color: colors.primary,
              textDecoration: 'none',
              wordBreak: 'break-all',
            }}>
              {CONTACT_EMAIL}
            </a>
          </div>
        </div>
      )}
    </nav>
  )
}
