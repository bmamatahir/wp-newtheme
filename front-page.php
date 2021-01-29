<?php get_header(); 

get_header();
 
if (have_posts() ) : 
    while ( have_posts() ) : the_post();
    the_title( '<h2>', '</h2>' ); 
    the_post_thumbnail(); 
    the_excerpt();
    endwhile;
else :
    _e( 'Sorry, no posts matched your criteria.' );
endif;

_e(get_theme_file_uri( 'images/logo.png' ));
?>

<div>
    <a href="<?php echo get_permalink($ID); ?>">This is a link</a>
</div>
<br>
<br>
<button class="btn btn-secondary mb-3">Get Started</button>

<div class="dropdown">
  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    Dropdown button
  </button>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <a class="dropdown-item" href="#">Action</a>
    <a class="dropdown-item" href="#">Another action</a>
    <a class="dropdown-item" href="#">Something else here</a>
  </div>
</div>

<?php
 
// get_sidebar();
get_footer();
