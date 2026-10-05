import { useEffect, useRef } from 'react'
import { useLocation, useNavigationType } from 'react-router-dom'

// BrowserRouter has no built-in scroll handling (<ScrollRestoration> needs a data router).
export default function ScrollManager() {
  const { pathname, hash, key } = useLocation()
  const navigationType = useNavigationType()
  const prevPathname = useRef(pathname)

  useEffect(() => {
    const samePage = prevPathname.current === pathname
    prevPathname.current = pathname
    if (navigationType === 'POP') return

    if (hash) {
      const target = document.getElementById(decodeURIComponent(hash.slice(1)))
      if (target) {
        target.scrollIntoView({ behavior: samePage ? 'smooth' : 'instant' })
        return
      }
    }
    window.scrollTo({ top: 0, behavior: samePage ? 'smooth' : 'instant' })
  }, [pathname, hash, key, navigationType])

  return null
}
