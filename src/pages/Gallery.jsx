import { Animator, Text } from '@arwes/react'
import GallerySubNav from '../components/GallerySubNav.jsx'
import PhotographySection from '../components/PhotographySection.jsx'
import LandscapingSection from '../components/LandscapingSection.jsx'
import GardeningSection from '../components/GardeningSection.jsx'
import BehanceSection from '../components/BehanceSection.jsx'
import BreadSection from '../components/BreadSection.jsx'
import { colors } from '../theme.js'

export default function Gallery() {
  return (
    <div style={{ padding: '2.5rem max(1.5rem, calc((100% - 740px)/2))' }}>
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
          Gallery
        </Text>
      </Animator>
      <p style={{ fontSize: '14px', color: colors.textMuted, marginBottom: '2.5rem', fontFamily: "'Share Tech Mono', monospace" }}>
        Photography, landscaping, gardening, 3D art, and bread baking.
      </p>
      <GallerySubNav />
      <PhotographySection />
      <LandscapingSection />
      <GardeningSection />
      <BehanceSection />
      <BreadSection />
    </div>
  )
}
