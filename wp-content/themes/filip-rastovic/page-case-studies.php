<?php
/**
 * Template Name: Case Studies Template
 *
 * @package filiprastovic
 */

get_header();
?>

<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 mx-auto text-center">
        <h1 class="section-heading">Case studies</h1>
        <hr class="my-4">
        <p class="mb-5">Read about my latest projects</p>
      </div>
    </div>
  </div>
</header>

<section class="case-studies grey-bordered">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-6 mb-5">
       
        <h2>Customr.app</h2>
        <p>Customr.app is a Budapest based AI analytics survey app developer.
          The company CEO wanted a modern looking landing page to help him explain what the application is about and
          start collecting leads with a form where visitors can sign up for the demo of the app.

          Robert, the company CEO got in touch with me after searching for a single person to both develop and design
          him
          a landing page. We got in touch on skype and after a nice chat he sent me over the pdf abstract document he
          has
          put together. It was a complex document that I had to simplify and turn into a website presentation that is
          user friendly. I than began desining the page following my standard
          workflow process and sent him over the image files of the initial
          design. We iterated a few times and eventually created a design that we both liked. I then started coding by
          forking a bootstrap template with pre built gulpjs configuration and scss partials for efficient development.
          I coded the static page and then turned it into a WordPress theme, utilizing the Custom Field plugin to
          allow Robert to change all the content on the page: images that were in the sliders, text in every section
          and social urls. Robert and I moved into another project after this one, design and development of his
          personal analytics services company.
        </p>
        <p>
          <i>Client review:
          Filip has a unique combo of skills, design and development. He proactively suggested some great ideas on how
          to make the website not just functional but esthetic. He created awesome visual mocks, iterated quickly based
          on my input and then coded all of it into a superb website. Throughout the process Filip was a charm to work
          with. All in all, great designer-developer with an outstanding sense for client
          service.-Customr.app</i>
        </p>
        
      </div>
      <div class="col-md-6  mb-5">
        <img class="img-fluid shadow mb-5" src="<?php bloginfo('template_url'); ?>/assets/img/case-studies/customr-case-study.jpg"
          alt="Portfolio image">
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-6 mb-5">
       
        <h2>IB</h2>
        <p>IB is a custom browser solution I've worked on. As a part of the global team my responsibilities were closely working with the UI deisnger 
          to come up with a usable and modern UI using Sketch app and InVision, then the implementation with the reusable SCSS/HTML componenets.

        </p>
        <p>
        </p>
        
      </div>
      <div class="col-md-6  mb-5">
        <img class="img-fluid shadow mb-5" src="<?php bloginfo('template_url'); ?>/assets/img/portfolio/ib.jpg"
          alt="Portfolio image">
      </div>
    </div>
    <div class="row mb-5">
      <div class="col-md-6 mb-5">
        
        <h2>Justo.ca</h2>
        <p>
          Justo is a Toronto based real estate agent company that helps its customers buy and sell property easily and
          with a discount. They needed a landing page for their marketing campaign.

          Justo team sent me over their website to draw design inspiration from and sent me over a wireframe of the
          landing page they desired. The landing page had a savings calculator that would allow visitors to preview how
          much they would save by buying or selling a property with Justo. I developed a calculator by hand using
          jQuery and designed a page that would capture their leads and easily allow its visitors to get in touch with
          a contact person from Justo team.
        </p>
        <p> Client review:

          I needed someone who can design AND develop a landing page and upload it to my website. Filip did a great
          work in doing the above. It is pleasure working with Filip, he understands what needs to be done and does it
          in very quick and efficient way.
          For my next projects for landing pages I would work with him again.
          Thank you Filip! -Justo</p>
      
        </div>
      <div class="col-md-6 mb-5">
        <img class="img-fluid shadow mb-5" src="<?php bloginfo('template_url'); ?>/assets/img/case-studies/justo-case-study.jpg"
          alt="Justo landing page">
      </div>
      <div class="row">
        <div class="col-md-6">
         
          <h2>Seniorly</h2>
          <p>Seniorly is a San Francisco based company that helps families and individuals find the right senior living
            options.

            Seniorly CEO got in touch with me because he and his designer needed help building six landing pages using
            Unbounce platform. They had wireframes made out of piecing together section screenshots of other websites.
            I followed the element positioning and layout with a special focus on making the page properly architecture
            on mobile (wireframes were desktop only) because most of Seniorly prefer mobile. After few iterations where
            I tried to match their existing design system we came up with something we both liked.</p>
          <p><i>Client review: <br>Working with Filip has been a very smooth process. He is quick and clear with communication and works
            through revisions easily and without any hiccups.</i></p>
        
          </div>
        <div class="col-md-6 mb-5">
          <img class="img-fluid shadow mb-5" src="<?php bloginfo('template_url'); ?>/assets/img/case-studies/seniorly-case-study.jpg"
            alt="Seniorly landing page">
        </div>
      </div>
    </div>
  </div>
</section>

<?php
get_footer();