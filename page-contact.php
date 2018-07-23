<?php
/*
    Template Name: Contact Page
*/ 

// Custom Fields

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
            <form class="web-form">
              
              <div class="form-group">
                <label for="swimmer-name">Swimmer's Name</label>
                <input type="text" class="form-control" id="swimmer-name" placeholder="Swimmer">
              </div>
              
              <div class="form-group">
                <label for="swimmer-dob">Swimmer's Date of Birth</label>
                <input type="date" class="form-control" id="swimmer-dob">
              </div>
              
              <div class="form-group">
                <label for="parent-name">Parent's Name</label>
                <input type="text" class="form-control" id="parent-name" placeholder="Parent">
              </div>
              
              <div class="form-group">
                <label for="email">Contact Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email">
              </div>
              
              <div class="form-group">
                <label for="experience">Swimmer's Experience</label>
                <textarea class="form-control" id="experience" rows="3" placeholder="Experience"></textarea>          
              </div>
              
              <button type="submit" class="btn btn-primary btn-block entries-form-btn">Submit</button>
              <small class="text-muted">The information you provide will be used solely for correspondence and will be stored securely on a password protected server and device. We will not share your information with any other party. This information will be securely disposed once we no longer need to contact you or upon your request.</small>
            </form>
        </div>
    </div>
</section>

<?php get_footer(); ?>