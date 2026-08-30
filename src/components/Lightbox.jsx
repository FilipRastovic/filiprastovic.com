import { useEffect, useCallback } from 'react'
import { colors, fonts } from '../theme.js'

function navButtonStyle(side) {
  return {
    position: 'absolute',
    [side]: '12px',
    top: '50%',
    transform: 'translateY(-50%)',
    width: '44px',
    height: '44px',
    borderRadius: '50%',
    background: 'rgba(3,20,20,0.7)',
    border: `1px solid ${colors.border}`,
    color: colors.primary,
    fontSize: '26px',
    lineHeight: 1,
    display: 'flex',
    alignItems: 'center',
    justifyContent: 'center',
    cursor: 'pointer',
    zIndex: 2001,
  }
}

export default function Lightbox({ images, index, onClose, onNavigate }) {
  const image = images[index]

  const handleKeyDown = useCallback((e) => {
    if (e.key === 'Escape') onClose()
    else if (e.key === 'ArrowLeft') onNavigate(-1)
    else if (e.key === 'ArrowRight') onNavigate(1)
  }, [onClose, onNavigate])

  useEffect(() => {
    document.addEventListener('keydown', handleKeyDown)
    const prevOverflow = document.body.style.overflow
    document.body.style.overflow = 'hidden'
    return () => {
      document.removeEventListener('keydown', handleKeyDown)
      document.body.style.overflow = prevOverflow
    }
  }, [handleKeyDown])

  if (!image) return null

  return (
    <div
      role="dialog"
      aria-modal="true"
      aria-label={image.alt || 'Image viewer'}
      onClick={onClose}
      style={{
        position: 'fixed',
        inset: 0,
        zIndex: 2000,
        background: 'rgba(0,5,5,0.92)',
        display: 'flex',
        alignItems: 'center',
        justifyContent: 'center',
        padding: '3rem 1rem',
      }}
    >
      <button
        onClick={onClose}
        aria-label="Close"
        style={{
          position: 'absolute',
          top: '14px',
          right: '18px',
          background: 'none',
          border: 'none',
          color: colors.textMuted,
          fontSize: '30px',
          lineHeight: 1,
          cursor: 'pointer',
          zIndex: 2001,
        }}
      >
        ✕
      </button>

      {images.length > 1 && (
        <button
          onClick={(e) => { e.stopPropagation(); onNavigate(-1) }}
          aria-label="Previous image"
          style={navButtonStyle('left')}
        >
          ‹
        </button>
      )}

      <img
        src={image.src}
        alt={image.alt || ''}
        onClick={(e) => e.stopPropagation()}
        style={{
          maxWidth: '90vw',
          maxHeight: '85vh',
          objectFit: 'contain',
          border: `1px solid ${colors.border}`,
          boxShadow: '0 0 60px rgba(0,200,160,0.15)',
        }}
      />

      {images.length > 1 && (
        <button
          onClick={(e) => { e.stopPropagation(); onNavigate(1) }}
          aria-label="Next image"
          style={navButtonStyle('right')}
        >
          ›
        </button>
      )}

      {images.length > 1 && (
        <div
          style={{
            position: 'absolute',
            bottom: '18px',
            left: '50%',
            transform: 'translateX(-50%)',
            fontFamily: fonts.mono,
            fontSize: '12px',
            color: colors.textMuted,
            letterSpacing: '0.1em',
          }}
        >
          {index + 1} / {images.length}
        </div>
      )}
    </div>
  )
}
