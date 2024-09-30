<?php
/*
Template Name: Contact Us
*/
get_header(); ?>

<section id="contact-us">
    <h1>Contact Us</h1>
    <?php echo do_shortcode('[contact-form-7 id="123" title="Contact form 1"]'); ?>
    <p>Address: 123 Company St, City, Country</p>
    <p>Phone: +123-456-7890</p>
    <p>Email: info@company.com</p>
</section>

<?php get_footer(); ?>