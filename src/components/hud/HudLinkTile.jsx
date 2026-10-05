import { Animator } from '@arwes/react'
import { Link } from 'react-router-dom'
import HudCard from './HudCard.jsx'
import { colors, fonts } from '../../theme.js'

export default function HudLinkTile({ href, label, domain, description, external, ascii }) {
  const content = (
    <HudCard shape="octagon" style={{ padding: '1.2rem 1.4rem' }}>
      <div style={{ display: 'flex', alignItems: 'center', gap: '1rem' }}>
        {ascii && <pre aria-hidden="true" className="link-tile__icon" style={{
          margin: 0,
          width: '40px',
          flexShrink: 0,
          fontFamily: fonts.mono,
          fontSize: '9px',
          lineHeight: 1.15,
          whiteSpace: 'pre',
          textAlign: 'center',
        }}>{ascii}</pre>}
        <div style={{ flex: 1, minWidth: 0 }}>
          <div className="link-tile__label" style={{ fontFamily: fonts.body, fontSize: '16px', fontWeight: 600, marginBottom: '3px' }}>
            {label}
          </div>
          {description && (
            <div style={{ fontFamily: fonts.body, fontSize: '13px', color: colors.textMuted, marginBottom: '3px', lineHeight: 1.4 }}>
              {description}
            </div>
          )}
          <div style={{ fontFamily: fonts.mono, fontSize: '11px', color: colors.primaryDim, overflow: 'hidden', textOverflow: 'ellipsis', whiteSpace: 'nowrap' }}>
            {domain}
          </div>
        </div>
        <svg className="link-tile__arrow" viewBox="0 0 16 16" fill="none" stroke="currentColor" strokeWidth="1.5" aria-hidden="true" style={{ width: '16px', height: '16px', flexShrink: 0 }}>
          <path d="M3 13L13 3M13 3H7M13 3v6"/>
        </svg>
      </div>
    </HudCard>
  )

  return (
    <Animator duration={{ enter: 0.7, exit: 0.3 }}>
      {external
        ? <a href={href} target="_blank" rel="noopener noreferrer" className="hud-card-link link-tile" style={{ height: '100%' }}>{content}</a>
        : <Link to={href} className="hud-card-link link-tile" style={{ height: '100%' }}>{content}</Link>}
    </Animator>
  )
}
