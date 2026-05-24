import { Animator } from '@arwes/react'
import Header from '../components/Header.jsx'
import NowSection from '../components/NowSection.jsx'
import LinksSection from '../components/LinksSection.jsx'
import AboutSection from '../components/AboutSection.jsx'
import StackSection from '../components/StackSection.jsx'
import MediaSection from '../components/MediaSection.jsx'
import ArtSection from '../components/ArtSection.jsx'
import { colors } from '../theme.js'

function Divider() {
  return <div style={{ height: '1px', background: `linear-gradient(90deg, transparent, ${colors.border}, transparent)`, margin: '2.5rem 0' }} />
}

export default function Home() {
  return (
    <div style={{ padding: '2.5rem max(1.5rem, calc((100% - 900px)/2))' }}>
      <Animator>
        <Header />
      </Animator>
      <Divider />
      <NowSection />
      <Divider />
      <LinksSection />
      <Divider />
      <AboutSection />
      <Divider />
      <StackSection />
      <Divider />
      <MediaSection />
      <Divider />
      <ArtSection />
    </div>
  )
}
