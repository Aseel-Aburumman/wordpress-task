<?php
/*
Template Name: Landing Page
*/
get_header(); ?>

<!-- Slider Section -->
<div id="home-slider" class="slider">
    <?php echo do_shortcode('[smartslider3 slider=1]'); ?>
</div>

<!-- Services Section -->
<section id="services">
    <h2>Our Services</h2>
    <div class="service-item">
        <h3>Service 1</h3>
        <p>Description of Service 1.</p>
    </div>
    <div class="service-item">
        <h3>Service 2</h3>
        <p>Description of Service 2.</p>
    </div>
</section>

<!-- Testimonials Section -->
<section id="testimonials">
    <h2>What Our Clients Say</h2>
    <blockquote>
        <p>"Great service!"</p>
        <cite>– Client Name</cite>
    </blockquote>
</section>

<?php get_footer(); ?>