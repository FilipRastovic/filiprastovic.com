import { Animator, Animated, Text, fade, transition } from '@arwes/react'
import { colors } from '../theme.js'

const reviews = [
  '/images/testimonial-1.webp',
  '/images/testimonial-2.webp',
  '/images/testimonial-3.webp',
  '/images/testimonial-4.webp',
  '/images/testimonial-5.webp',
  '/images/testimonial-6.webp',
  '/images/testimonial-7.webp',
  '/images/testimonial-8.webp',
  '/images/testimonial-9.webp',
  '/images/testimonial-10.webp',
]

export default function Testimonials() {
  return (
    <div style={{ padding: '2.5rem max(1.5rem, calc((100% - 900px)/2))' }}>
      <Animator>
        <Text
          as="h1"
          manager="decipher"
          style={{
            fontFamily: "'Titillium Web', sans-serif",
            fontSize: 'clamp(1.6rem, 4vw, 2.2rem)',
            fontWeight: 700,
            color: colors.primary,
            marginBottom: '0.5rem',
          }}
        >
          Testimonials
        </Text>
      </Animator>
      <p style={{ fontSize: '14px', color: colors.textMuted, marginBottom: '2rem', fontFamily: "'Share Tech Mono', monospace" }}>
        Screenshots of real reviews from my Upwork profile. Real clients, real projects.
      </p>

      <div style={{ border: `1px solid ${colors.border}`, overflow: 'hidden', marginBottom: '2.5rem' }}>
        <img
          src="/images/testimonial-profile.webp"
          alt="Filip Rastovic's Upwork profile — Shopify Data Engineer, $100K+ total earnings, 98 total jobs, 2,608 total hours, Expert-Vetted"
          width={2200}
          height={1113}
          style={{ width: '100%', height: 'auto', display: 'block' }}
        />
      </div>

      <div style={{ display: 'grid', gridTemplateColumns: 'repeat(auto-fit, minmax(340px, 1fr))', gap: '1.125rem' }}>
        {reviews.map((src) => (
          <Animator key={src}>
            <Animated animated={[fade(), transition('y', 12, 0)]}>
              <div style={{ border: `1px solid ${colors.border}`, overflow: 'hidden', background: '#fff' }}>
                <img
                  src={src}
                  alt="Upwork client review screenshot"
                  loading="lazy"
                  style={{ width: '100%', height: 'auto', display: 'block' }}
                />
              </div>
            </Animated>
          </Animator>
        ))}
      </div>
    </div>
  )
}
