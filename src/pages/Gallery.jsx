import { Animator, Text } from '@arwes/react'
import GallerySubNav from '../components/GallerySubNav.jsx'
import PhotographySection, { images as photographyImages } from '../components/PhotographySection.jsx'
import LandscapingSection, { images as landscapingImages } from '../components/LandscapingSection.jsx'
import GardeningSection, { images as gardeningImages } from '../components/GardeningSection.jsx'
import BehanceSection from '../components/BehanceSection.jsx'
import BreadSection, { images as breadImages } from '../components/BreadSection.jsx'
import { GalleryLightboxProvider } from '../components/GalleryLightboxContext.jsx'
import { colors } from '../theme.js'

const allImages = [...photographyImages, ...landscapingImages, ...gardeningImages, ...breadImages]

const photographyOffset = 0
const landscapingOffset = photographyOffset + photographyImages.length
const gardeningOffset = landscapingOffset + landscapingImages.length
const breadOffset = gardeningOffset + gardeningImages.length

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
      <GalleryLightboxProvider images={allImages}>
        <PhotographySection offset={photographyOffset} />
        <LandscapingSection offset={landscapingOffset} />
        <GardeningSection offset={gardeningOffset} />
        <BehanceSection />
        <BreadSection offset={breadOffset} />
      </GalleryLightboxProvider>
    </div>
  )
}
