<?php
/**
 * Template Name: Contact Template
 *
 *
 * @package filiprastovic
 */

get_header();
?>

<header class="header">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto text-center">
        <h1 class="section-heading">Contact me</h1>
        <hr class="my-4">
        <p><?php _e( 'Let\'s get in touch', 'filiprastovic' ); ?></p>
      </div>
    </div>
  </div>
</header>

<!-- Contact -->
<section id="contact mb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <form action="https://stargazerstudio.us17.list-manage.com/subscribe/post?u=efb61a9e2a6a0b8523d778d7c&amp;id=fc04893671" method="post" 
              id="contactForm" name="sentMessage" >  
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input class="form-control" name="EMAIL" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" name="FNAME" id="first-name" type="text" placeholder="Your First Name *" required="required" data-validation-required-message="Please enter your first name.">
                <p class="help-block text-danger"></p>
              </div>
              <div class="form-group">
                <input class="form-control" name="LNAME" id="last-name" type="text" placeholder="Your Last Name *" required="required" data-validation-required-message="Please enter your last name.">
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea rows="6" class="form-control" name="MMERGE3" id="message" placeholder="Please describe what you need me for *" required="required" data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-lg-12 text-center">
              <div id="success"></div>
              <button id="sendMessageButton" class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>