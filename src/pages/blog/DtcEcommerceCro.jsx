import ArticleLayout from '../../components/blog/ArticleLayout.jsx'
import { colors } from '../../theme.js'

export default function DtcEcommerceCro() {
  return (
    <ArticleLayout title="DTC E-Commerce Conversion Optimization – Usability" date="March 2024" tags={['CRO', 'Design', 'Usability']}>
      <p>In the following four screenshots I want to demonstrate how an e-commerce UI can be redesigned for greater usability. Changes like these increase profit margins, conversion rates and lower cost per acquisition, without increasing the ad spend.</p>

      <figure style={{ margin: '2rem 0', border: `1px solid ${colors.border}` }}>
        <img src="/images/blog/dtc-landing-1.png" alt="Landing page redesign – before and after" style={{ width: '100%', height: 'auto', display: 'block' }} />
      </figure>

      <ol style={{ paddingLeft: '1.5rem', marginBottom: '1.5rem', display: 'flex', flexDirection: 'column', gap: '0.5rem' }}>
        <li>Added a top header with some sale information.</li>
        <li>Added a logo and a call to action below it — a common mental model.</li>
        <li>Made the main heading much smaller but still readable on mobile.</li>
        <li>Added a short subheading with reviews and a discount CTA.</li>
        <li>Added a related image with a customer testimonial.</li>
        <li>The new page is much easier to scan, features sale elements, and has a clear call to action.</li>
      </ol>

      <figure style={{ margin: '2rem 0', border: `1px solid ${colors.border}` }}>
        <img src="/images/blog/dtc-pdp.png" alt="Product detail page redesign" style={{ width: '100%', height: 'auto', display: 'block' }} />
      </figure>

      <ol style={{ paddingLeft: '1.5rem', marginBottom: '1.5rem', display: 'flex', flexDirection: 'column', gap: '0.5rem' }}>
        <li>Added a top banner featuring the sale end date.</li>
        <li>Moved the product image just below the navbar.</li>
        <li>Added an element on the image attracting the eye to the sale.</li>
        <li>The title is the biggest typographic element.</li>
        <li>Added stars and reviews widget.</li>
        <li>Discount pill.</li>
        <li>Strong contrast for subscribe / one-time purchase.</li>
        <li>Quantity selector next to the CTA.</li>
        <li>Prominent free shipping component.</li>
      </ol>

      <figure style={{ margin: '2rem 0', border: `1px solid ${colors.border}` }}>
        <img src="/images/blog/dtc-cart.jpg" alt="Cart page redesign" style={{ width: '100%', height: 'auto', display: 'block' }} />
      </figure>

      <ul style={{ paddingLeft: '1.5rem', marginBottom: '1.5rem', display: 'flex', flexDirection: 'column', gap: '0.5rem' }}>
        <li>Clearly state the current page is "Your Cart".</li>
        <li>Show items in cart and highlight savings.</li>
        <li>Reduce the product image size.</li>
        <li>Remove the quantity picker for jewelry products.</li>
        <li>Remove the option to edit the cart.</li>
        <li>Move the promo code form into checkout.</li>
        <li>Incentivize the purchase with a free gift.</li>
        <li>Strong, prominent checkout button.</li>
        <li>Offer a bundle discount to increase AOV.</li>
      </ul>

      <figure style={{ margin: '2rem 0', border: `1px solid ${colors.border}` }}>
        <img src="/images/blog/dtc-landing-2.jpg" alt="Second landing page redesign" style={{ width: '100%', height: 'auto', display: 'block' }} />
      </figure>

      <ol style={{ paddingLeft: '1.5rem', display: 'flex', flexDirection: 'column', gap: '0.5rem' }}>
        <li>Added a top header featuring free shipping.</li>
        <li>Added a logo and cart icons to improve trust.</li>
        <li>Added a reviews link that scrolls to customer reviews.</li>
        <li>Increased contrast by making the hero background white.</li>
        <li>Added bullet points explaining product features.</li>
        <li>Added a clean, prominent CTA with free shipping callout.</li>
      </ol>
    </ArticleLayout>
  )
}
