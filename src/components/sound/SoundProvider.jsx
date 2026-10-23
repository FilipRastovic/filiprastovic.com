import { createContext, useContext, useEffect, useMemo, useRef, useState } from 'react'
import { useLocation } from 'react-router-dom'
import { BleepsProvider, useBleeps } from '@arwes/react'

const STORAGE_KEY = 'fr-sound'

const src = (name) => [
  { src: `/sounds/${name}.webm`, type: 'audio/webm' },
  { src: `/sounds/${name}.mp3`, type: 'audio/mpeg' },
]

const bleeps = {
  hover: { sources: src('hover'), category: 'interaction', volume: 0.35 },
  click: { sources: src('click'), category: 'interaction', volume: 0.6 },
  transition: { sources: src('transition'), category: 'transition', volume: 0.18 },
}

const SoundContext = createContext({ enabled: false, toggle: () => {} })
export const useSound = () => useContext(SoundContext)

function readStored() {
  try { return localStorage.getItem(STORAGE_KEY) === 'on' } catch { return false }
}

export function SoundProvider({ children }) {
  const [enabled, setEnabled] = useState(readStored)
  const common = useMemo(() => ({ muted: !enabled, preload: false }), [enabled])
  const master = useMemo(() => ({ volume: 0.7 }), [])

  const value = useMemo(() => ({
    enabled,
    toggle: () => setEnabled(on => {
      const next = !on
      try { localStorage.setItem(STORAGE_KEY, next ? 'on' : 'off') } catch {}
      return next
    }),
  }), [enabled])

  return (
    <SoundContext.Provider value={value}>
      <BleepsProvider master={master} common={common} bleeps={bleeps}>
        {children}
      </BleepsProvider>
    </SoundContext.Provider>
  )
}

// Arwes bleeps have no built-in DOM hooks; delegated listeners cover nav hovers and all clicks.
const INTERACTIVE = 'a, button, [role="button"]'
const NAV_HOVER = '.main-nav a, .main-nav button'

export function SoundEffects() {
  const { enabled } = useSound()
  const sounds = useBleeps()
  const { pathname } = useLocation()
  const firstRender = useRef(true)
  const lastHover = useRef(null)

  useEffect(() => {
    if (!enabled) return
    const onOver = (e) => {
      const el = e.target.closest?.(NAV_HOVER)
      if (!el || el === lastHover.current || e.pointerType === 'touch') return
      lastHover.current = el
      sounds.hover?.play()
    }
    const onOut = (e) => {
      const el = e.target.closest?.(NAV_HOVER)
      if (el && !el.contains(e.relatedTarget)) lastHover.current = null
    }
    const onClick = (e) => { if (e.target.closest?.(INTERACTIVE)) sounds.click?.play() }
    document.addEventListener('pointerover', onOver)
    document.addEventListener('pointerout', onOut)
    document.addEventListener('click', onClick)
    return () => {
      document.removeEventListener('pointerover', onOver)
      document.removeEventListener('pointerout', onOut)
      document.removeEventListener('click', onClick)
    }
  }, [enabled, sounds])

  useEffect(() => {
    if (firstRender.current) { firstRender.current = false; return }
    if (enabled) sounds.transition?.play()
  }, [pathname])

  return null
}

export function SoundToggle({ style }) {
  const { enabled, toggle } = useSound()
  return (
    <button
      type="button"
      onClick={toggle}
      className={`sound-toggle${enabled ? ' is-on' : ''}`}
      aria-pressed={enabled}
      aria-label={enabled ? 'Turn sound effects off' : 'Turn sound effects on'}
      title={enabled ? 'Sound on' : 'Sound off'}
      style={style}
    >
      <svg viewBox="0 0 24 24" width="18" height="18" fill="none" stroke="currentColor" strokeWidth="1.6" aria-hidden="true">
        <path d="M4 9h4l5-4v14l-5-4H4z" />
        {enabled
          ? <><path d="M16.5 8.5a5 5 0 0 1 0 7" /><path d="M19 6a8.5 8.5 0 0 1 0 12" /></>
          : <path d="M17 9l5 6M22 9l-5 6" />}
      </svg>
    </button>
  )
}
