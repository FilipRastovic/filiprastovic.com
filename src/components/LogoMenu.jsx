import { useState, useEffect, useRef } from 'react'
import { Link } from 'react-router-dom'
import { colors, fonts } from '../theme.js'

export default function LogoMenu() {
  const [menu, setMenu] = useState(null)
  const [copied, setCopied] = useState(false)
  const menuRef = useRef(null)

  useEffect(() => {
    if (!menu) return
    const close = (e) => {
      if (menuRef.current && !menuRef.current.contains(e.target)) setMenu(null)
    }
    const onKey = (e) => { if (e.key === 'Escape') setMenu(null) }
    document.addEventListener('mousedown', close)
    document.addEventListener('keydown', onKey)
    return () => {
      document.removeEventListener('mousedown', close)
      document.removeEventListener('keydown', onKey)
    }
  }, [menu])

  const handleContextMenu = (e) => {
    e.preventDefault()
    setCopied(false)
    const menuWidth = 200
    const x = Math.min(e.clientX, window.innerWidth - menuWidth - 8)
    setMenu({ x, y: e.clientY })
  }

  const copySvg = async () => {
    try {
      const res = await fetch('/images/logo.svg')
      const text = await res.text()
      await navigator.clipboard.writeText(text)
      setCopied(true)
      setTimeout(() => setMenu(null), 900)
    } catch {
      setMenu(null)
    }
  }

  return (
    <span style={{ display: 'inline-flex' }}>
      <Link to="/" style={{ display: 'block', flexShrink: 0 }}>
        <img
          src="/images/logo.svg"
          alt=""
          width={20}
          height={20}
          onContextMenu={handleContextMenu}
          style={{ display: 'block', cursor: 'context-menu' }}
        />
      </Link>

      {menu && (
        <div
          ref={menuRef}
          style={{
            position: 'fixed',
            top: menu.y,
            left: menu.x,
            zIndex: 2000,
            background: colors.bgCard,
            border: `1px solid ${colors.border}`,
            boxShadow: '0 0 30px rgba(0,0,0,0.6)',
            minWidth: '200px',
            fontFamily: fonts.mono,
            fontSize: '13px',
          }}
        >
          <button
            onClick={copySvg}
            style={{
              display: 'flex',
              alignItems: 'center',
              justifyContent: 'space-between',
              width: '100%',
              padding: '10px 14px',
              background: 'none',
              border: 'none',
              borderBottom: `1px solid ${colors.border}`,
              color: copied ? colors.primary : colors.text,
              cursor: 'pointer',
              textAlign: 'left',
            }}
          >
            {copied ? 'Copied' : 'Copy Logo as SVG'}
            {copied && <span>✓</span>}
          </button>
          <a
            href="/images/logo.svg"
            target="_blank"
            rel="noopener noreferrer"
            onClick={() => setMenu(null)}
            style={{
              display: 'block',
              padding: '10px 14px',
              color: colors.text,
              textDecoration: 'none',
            }}
          >
            Media Kit
          </a>
        </div>
      )}
    </span>
  )
}
