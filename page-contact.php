<?php
/*
    Template Name: Contact Page
*/ 

// Custom Fields
$contact_form_shortcode  = get_field('contact_form_shortcode');

get_header();
?>

<section id="page-header">
  <div class="container">
    <h1>Contact</h1>
  </div>
</section>

<section id="contact">
    <div class="container">
        <p>If you, or your child, are interested in competitive swimming there are a couple of things you need to do.</p>
        <p>The minimum requirement is to have successfully completed Level 7 of the ASA Learn to Swim Framework or have proven competitive swimming experience.</p>
        <p>If you fit the criteria and would like to continue into a competitive swimming environment you can contact us by filling in the form below. We'll get back to your as soon as possible.</p>
        <p><strong>Already a member?</strong> - If you are already a CoW member please contact us through the Member Dashboard. You can <a href="/member-dashboard/member-contact">find it here.</a></p>
        <br>
        <div class="col-lg-8 offset-lg-2">
            <?php echo $contact_form_shortcode; ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>