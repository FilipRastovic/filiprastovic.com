import { BrowserRouter, Routes, Route } from 'react-router-dom'
import { AnimatorGeneralProvider } from '@arwes/react'
import { BleepsProvider } from '@arwes/react'
import Layout from './components/Layout.jsx'
import Home from './pages/Home.jsx'
import Blog from './pages/Blog.jsx'
import DtcEcommerceCro from './pages/blog/DtcEcommerceCro.jsx'
import Structure3dAbstract from './pages/blog/Structure3dAbstract.jsx'
import ScifiPiEnclosure from './pages/blog/ScifiPiEnclosure.jsx'
import FunkyTown from './pages/blog/FunkyTown.jsx'
import IsometricHouses from './pages/blog/IsometricHouses.jsx'
import SilvermoonTown from './pages/blog/SilvermoonTown.jsx'
import RetroLoop from './pages/blog/RetroLoop.jsx'
import DailyUi from './pages/blog/DailyUi.jsx'
import BootstrapResumeTutorial from './pages/blog/BootstrapResumeTutorial.jsx'
import BootstrapChatTutorial from './pages/blog/BootstrapChatTutorial.jsx'
import PerlinFlow from './pages/blog/PerlinFlow.jsx'
import TrialAndTerror from './pages/blog/TrialAndTerror.jsx'
import GenerativeAnimation from './pages/blog/GenerativeAnimation.jsx'
import LeapOfFaith from './pages/blog/LeapOfFaith.jsx'

export default function App() {
  return (
    <AnimatorGeneralProvider duration={{ enter: 0.2, exit: 0.1, stagger: 0.04 }}>
      <BleepsProvider master={{ volume: 0 }} bleeps={{}}>
        <BrowserRouter>
          <Routes>
            <Route element={<Layout />}>
              <Route path="/" element={<Home />} />
              <Route path="/blog" element={<Blog />} />
              <Route path="/blog/dtc-ecommerce-cro" element={<DtcEcommerceCro />} />
              <Route path="/blog/structure-3d-abstract" element={<Structure3dAbstract />} />
              <Route path="/blog/scifi-pi-enclosure" element={<ScifiPiEnclosure />} />
              <Route path="/blog/funky-town" element={<FunkyTown />} />
              <Route path="/blog/isometric-houses" element={<IsometricHouses />} />
              <Route path="/blog/silvermoon-town" element={<SilvermoonTown />} />
              <Route path="/blog/retro-loop" element={<RetroLoop />} />
              <Route path="/blog/daily-ui" element={<DailyUi />} />
              <Route path="/blog/bootstrap-resume-tutorial" element={<BootstrapResumeTutorial />} />
              <Route path="/blog/bootstrap-chat-tutorial" element={<BootstrapChatTutorial />} />
              <Route path="/blog/perlin-flow" element={<PerlinFlow />} />
              <Route path="/blog/trial-and-terror" element={<TrialAndTerror />} />
              <Route path="/blog/generative-animation" element={<GenerativeAnimation />} />
              <Route path="/blog/leap-of-faith" element={<LeapOfFaith />} />
            </Route>
          </Routes>
        </BrowserRouter>
      </BleepsProvider>
    </AnimatorGeneralProvider>
  )
}
