<?php
/*
    Template Name: Leagues & Teams Page
*/ 

// Custom Fields
$leagues_teams_text = get_field('leagues_teams_text');

get_header();
?>

<section id="page-header">
  <div class="container">
    <h1><?php the_title(); ?></h1>
  </div>
</section>

<section id="leagues-teams">
  <div class="container">
    <?php echo $leagues_teams_text; ?>
  </div>
</section>

<section id="league-tables">
    <div class="container">
        <?php $loop = new WP_Query( array( 'post_type' => 'leagues_teams', 'orderby' => 'post_id', 'order' => 'ASC', 'posts_per_page' => -1 ) ); ?>
        
        <?php while( $loop->have_posts() ) : $loop->the_post(); ?>
          
          <?php
            $league_year = get_field('league_year');
            $league_division = get_field('league_division');
            $event_one_date = get_field('event_one_date');
            $event_two_date = get_field('event_two_date');
            $event_three_date = get_field('event_three_date');
            $event_four_date = get_field('event_four_date');
            $event_one_location = get_field('event_one_location');
            $event_two_location = get_field('event_two_location');
            $event_three_location = get_field('event_three_location');
            $event_four_location = get_field('event_four_location');
            $event_one_results = get_field('event_one_results');
            $event_two_results = get_field('event_two_results');
            $event_three_results = get_field('event_three_results');
            $event_four_results = get_field('event_four_results');
            $pos_one_team = get_field('pos_one_team');
            $pos_one_pl = get_field('pos_one_pl');
            $pos_one_pts = get_field('pos_one_pts');
            $pos_two_team = get_field('pos_two_team');
            $pos_two_pl = get_field('pos_two_pl');
            $pos_two_pts = get_field('pos_two_pts');
            $pos_three_team = get_field('pos_three_team');
            $pos_three_pl = get_field('pos_three_pl');
            $pos_three_pts = get_field('pos_three_pts');
            $pos_four_team = get_field('pos_four_team');
            $pos_four_pl = get_field('pos_four_pl');
            $pos_four_pts = get_field('pos_four_pts');
            
          ?>
        <h2><?php echo $league_year; ?> - Division <?php echo $league_division; ?></h2>
        <hr class="hr">
        <div class="row">
            <div class="col-xl-12">
                <h3>Events, Dates and Results</h3>
                <br>
                <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Date</th>
                        <th scope="col">Location</th>
                        <th scope="col">Result/Info</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td><?php echo $event_one_date; ?></td>
                        <td><?php echo $event_one_location; ?></td>
                        <td><?php echo $event_one_results; ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $event_two_date; ?></td>
                        <td><?php echo $event_two_location; ?></td>
                        <td><?php echo $event_two_results; ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $event_three_date; ?></td>
                        <td><?php echo $event_three_location; ?></td>
                        <td><?php echo $event_three_results; ?></td>
                      </tr>
                      <tr>
                        <td><?php echo $event_four_date; ?></td>
                        <td><?php echo $event_four_location; ?></td>
                        <td><?php echo $event_four_results; ?></td>
                      </tr>
                    </tbody>
                </table>
                <br>
            </div> 
            <div class="col-xl-12">
                <h3>League Table</h3>
                <br>
                <table class="table table-bordered table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Pos</th>
                        <th scope="col">Team</th>
                        <th scope="col">Pl</th>
                        <th scope="col">Pts</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>1</td>
                        <td><?php echo $pos_one_team; ?></td>
                        <td><?php echo $pos_one_pl; ?></td>
                        <td><?php echo $pos_one_pts; ?></td>
                      </tr>
                      <tr>
                        <td>2</td>
                        <td><?php echo $pos_two_team; ?></td>
                        <td><?php echo $pos_two_pl; ?></td>
                        <td><?php echo $pos_two_pts; ?></td>
                      </tr>
                      <tr>
                        <td>3</td>
                        <td><?php echo $pos_three_team; ?></td>
                        <td><?php echo $pos_three_pl; ?></td>
                        <td><?php echo $pos_three_pts; ?></td>
                      </tr>
                      <tr>
                        <td>4</td>
                        <td><?php echo $pos_four_team; ?></td>
                        <td><?php echo $pos_four_pl; ?></td>
                        <td><?php echo $pos_four_pts; ?></td>
                      </tr>
                    </tbody>
                </table>
                <br>
            </div>
        </div>
        <?php endwhile; ?>
    </div>
</section>

<?php get_footer(); ?>