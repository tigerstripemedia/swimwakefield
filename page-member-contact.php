<?php
/*
    Template Name: Member Contact Page
*/ 

get_header();
?>

<?php if ( post_password_required() ) {
 
  echo get_the_password_form();
 
} else { ?>

    <section id="page-header">
      <div class="container">
        <div class="member-dash-icon">
          <i class="fas fa-tachometer-alt fa-5x"></i>
        </div>
        <h1>Contact the Club</h1>
      </div>
    </section>

    <section id="contact-club">
      <div class="container">
        <h2>Have you got a question you wish to contact the club about?</h2>
        <p>Select the option that best suits your query below and fill in the form.</p>
        <hr class="hr">
        <br>
        <h3>My question is related to...</h3>
        <br>
        <div class="col-md-8 offset-md-2">
          <div class="accordion" id="accordionExample">
            
            <div class="card question-card">

              <a class="contact-club-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                <div class="card-header" id="headingOne">
                  <h5 class="mb-0">
                    <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                      Squads and Training
                    </button>
                  </h5>
                </div>
              </a>

              <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body bg-light">
                  <p class="text-muted">Question about squads and training? Fill in the form below to send a message to Paul Braithwaite.</p>
                  <form>
                    <div class="form-group">
                      <label for="name" class="sr-only">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="email" class="sr-only">Email address</label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="message" class="sr-only">Message</label>
                      <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="button">Send</button>
                    <small class="form-text text-muted">The information you provide will be used solely for correspondence and will be stored securely on a password protected server and device. We will not share your information with any other party. This information will be securely disposed once we no longer need to contact you or upon your request.</small>
                  </form>
                </div>
              </div>
            </div>

            <div class="card question-card">

              <a class="contact-club-link" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                <div class="card-header" id="headingTwo">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      Club Shop
                    </button>
                  </h5>
                </div>
              </a>

              <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body bg-light">
                  <p class="text-muted">Question about the club shop? Fill in the form below to send a message to Neil Barker.</p>
                  <form>
                    <div class="form-group">
                      <label for="name" class="sr-only">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="email" class="sr-only">Email address</label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="message" class="sr-only">Message</label>
                      <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="button">Send</button>
                    <small class="form-text text-muted">The information you provide will be used solely for correspondence and will be stored securely on a password protected server and device. We will not share your information with any other party. This information will be securely disposed once we no longer need to contact you or upon your request.</small>
                  </form>
                </div>
              </div>
            </div>

            <div class="card question-card">

              <a class="contact-club-link" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                <div class="card-header" id="headingThree">
                  <h5 class="mb-0">
                    <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                      Competitions and Entries
                    </button>
                  </h5>
                </div>
              </a>

              <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                <div class="card-body bg-light">
                  <p class="text-muted">Question about competitions and entries? Fill in the form below to send a message to Jayne Thorpe.</p>
                  <form>
                    <div class="form-group">
                      <label for="name" class="sr-only">Name</label>
                      <input type="text" class="form-control" id="name" placeholder="Name">
                    </div>
                    <div class="form-group">
                      <label for="email" class="sr-only">Email address</label>
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                      <label for="message" class="sr-only">Message</label>
                      <textarea class="form-control" id="message" rows="3" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="button">Send</button>
                    <small class="form-text text-muted">The information you provide will be used solely for correspondence and will be stored securely on a password protected server and device. We will not share your information with any other party. This information will be securely disposed once we no longer need to contact you or upon your request.</small>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php } ?>

<?php get_footer(); ?>