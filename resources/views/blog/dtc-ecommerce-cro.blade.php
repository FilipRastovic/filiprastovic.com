@extends('layouts.app')

@section('description', 'How an e-commerce UI can be redesigned for greater usability - increasing conversion rates and lowering cost per acquisition without increasing ad spend.')

@section('content')

<article class="article">

  <header class="article-header">
    <div class="article-tags">
      <span class="article-tag">CRO</span>
      <span class="article-tag">Design</span>
      <span class="article-tag">Usability</span>
    </div>
    <h1 class="article-title">DTC E-Commerce Conversion Optimization – Usability</h1>
    <time class="article-date" datetime="2024-03-01">March 2024</time>
  </header>

  <div class="article-body">

    <p class="article-intro">In the following four screenshots I want to demonstrate how an e-commerce UI can be redesigned for greater usability. Changes like these increase profit margins, conversion rates and lower cost per acquisition, without increasing the ad spend.</p>

    <figure class="article-figure">
      <img src="/images/blog/dtc-landing-1.png" alt="Landing page redesign – before and after" />
    </figure>

    <ol class="article-list">
      <li>Added a top header with some sale information.</li>
      <li>Added a logo and a call to action below it - a common mental model; pages that lack it seem suspicious.</li>
      <li>Made the main heading much smaller but still readable on mobile devices.</li>
      <li>Added a short and concise subheading, with reviews and a call to action that feature a discount.</li>
      <li>Added a related image with a customer testimonial.</li>
      <li>The new page is much easier to scan, features sale elements, and has a clear call to action that makes it easier for the user to navigate and decide.</li>
    </ol>

    <figure class="article-figure">
      <img src="/images/blog/dtc-pdp.png" alt="Product detail page redesign" />
    </figure>

    <ol class="article-list">
      <li>Added a top banner - it adds contrast, attracts attention, and features the sale end date.</li>
      <li>Moved the product image just below the navbar. The product title is now below the image.</li>
      <li>Added an element on the image that attracts the eye featuring the sale, along with a few supporting details.</li>
      <li>The title is the biggest typographic element - it attracts the eye and explains what the product is all about.</li>
      <li>Added the stars and reviews widget that scrolls the page to the reviews section.</li>
      <li>Discount pill.</li>
      <li>Strong contrast for the subscribe / one-time purchase component.</li>
      <li>Quantity selector next to the CTA.</li>
      <li>Prominent free shipping component.</li>
    </ol>

    <figure class="article-figure">
      <img src="/images/blog/dtc-cart.jpg" alt="Cart page redesign" />
    </figure>

    <ul class="article-list">
      <li>Clearly state that the current page is "Your Cart".</li>
      <li>Clearly show items in the cart and highlight savings.</li>
      <li>Reduce the product image size - save on screen real estate.</li>
      <li>Remove the quantity picker for jewelry products.</li>
      <li>Remove the option to edit the cart; allowing users to remove an item is enough.</li>
      <li>Move the promo code form into checkout.</li>
      <li>Incentivize the purchase with a free gift.</li>
      <li>Strong, prominent checkout button.</li>
      <li>Offer a bundle discount on the cart page to increase AOV.</li>
    </ul>

    <figure class="article-figure">
      <img src="/images/blog/dtc-landing-2.jpg" alt="Second landing page redesign" />
    </figure>

    <ol class="article-list">
      <li>Added a top header that features free shipping.</li>
      <li>Added a logo and cart icons that improve customer brand trust.</li>
      <li>Added a reviews link that scrolls the page to customer reviews when clicked.</li>
      <li>Increased contrast by making the hero section background white and moving the product photo down.</li>
      <li>Added bullet points that simply explain the product features and benefits.</li>
      <li>Added a clean, prominent call to action button with free shipping callout.</li>
    </ol>

  </div>

  <div class="article-footer">
    <a href="/" class="article-back">← Back to home</a>
    <div class="article-tags">
      <span class="article-tag">dtc</span>
      <span class="article-tag">e-commerce</span>
    </div>
  </div>

</article>

@endsection
