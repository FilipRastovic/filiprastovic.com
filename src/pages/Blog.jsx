import { Animator, Text, fade } from '@arwes/react'
import BlogCard from '../components/blog/BlogCard.jsx'
import SectionLabel from '../components/SectionLabel.jsx'
import { colors } from '../theme.js'

const articles = [
  { to: '/blog/dtc-ecommerce-cro', title: 'DTC E-Commerce Conversion Optimization - Usability', date: 'March 2024', tags: ['CRO', 'Design', 'Usability'], description: 'How an e-commerce UI can be redesigned for greater usability - increasing conversion rates without increasing ad spend.' },
  { to: '/blog/funky-town', title: 'Funky Town - 3D Stylized House City', date: '2024', tags: ['3D Art', 'Cinema 4D', 'Octane Render'], description: '18 renders of a stylized house city.' },
  { to: '/blog/isometric-houses', title: 'Isometric Houses 3D Art', date: '2024', tags: ['3D Art', 'Isometric', 'Cinema 4D'], description: 'Isometric 3D house renders.' },
  { to: '/blog/silvermoon-town', title: 'Silvermoon Town - Abstract 3D Compositions', date: '2024', tags: ['3D Art', 'Cinema 4D', 'Design'], description: 'Abstract composition renders inspired by Peter Tarka and Omar Aqil.' },
  { to: '/blog/daily-ui', title: '100 Daily UI Challenge', date: '2024', tags: ['UI Design', 'Design'], description: '100 daily UI design exercises.' },
  { to: '/blog/scifi-pi-enclosure', title: 'Sci-Fi Raspberry Pi Enclosure', date: '2024', tags: ['3D Modeling', 'CAD', 'Cinema 4D'], description: 'A sci-fi Raspberry Pi enclosure - CAD modeling in Cinema 4D.' },
  { to: '/blog/retro-loop', title: 'Retro Loop Music Visual', date: '2024', tags: ['Motion Graphics', 'Cinema 4D', 'Octane Render'], description: 'Music visual made following the Kidmograph course.' },
  { to: '/blog/perlin-flow', title: 'Generative Perlin Flow - Programmer Art', date: '2024', tags: ['Generative Art', 'Processing'], description: 'Generative Perlin flow art - an old Processing sketch.' },
  { to: '/blog/generative-animation', title: 'Generative Animation [Unity 2D]', date: '2024', tags: ['Generative Art', 'Unity 2D'], description: 'A generative animation done in Unity 2D.' },
  { to: '/blog/bootstrap-resume-tutorial', title: 'Resume Portfolio Bootstrap 4 - Code-Along Tutorial', date: '2024', tags: ['Tutorial', 'Bootstrap', 'HTML/CSS'], description: 'Resume/portfolio website tutorial in Bootstrap 4, HTML, SCSS, JavaScript.' },
  { to: '/blog/structure-3d-abstract', title: 'Structure - 3D Abstract Geometric Composition', date: '2022', tags: ['3D Art', 'Cinema 4D', 'Abstract'], description: '9 abstract geometric 3D renders made in Cinema 4D in 2022.' },
  { to: '/blog/trial-and-terror', title: 'Trial And Terror - My Video Game', date: '2019', tags: ['Game Dev', 'Unity', 'Steam'], description: 'Puzzle-platformer 2D game published on Steam, Newgrounds and Armor Games.' },
  { to: '/blog/bootstrap-chat-tutorial', title: 'Bootstrap Chat App UI - Code-Along Tutorial', date: '2019', tags: ['Tutorial', 'Bootstrap', 'HTML/CSS'], description: 'Chat app UI code-along tutorial in HTML, CSS and SCSS.' },
  { to: '/blog/leap-of-faith', title: 'Leap of Faith - My Video Game', date: '2016', tags: ['Game Dev', 'Unity'], description: 'A minimalist 2D memory puzzle game, self-published in 2016.' },
]

export default function Blog() {
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
          Blog
        </Text>
      </Animator>
      <p style={{ fontSize: '14px', color: colors.textMuted, marginBottom: '2.5rem', fontFamily: "'Share Tech Mono', monospace" }}>
        Projects, experiments, and creative work.
      </p>
      <div style={{ display: 'flex', flexDirection: 'column', gap: '1rem' }}>
        {articles.map(a => <BlogCard key={a.to} {...a} />)}
      </div>
    </div>
  )
}
