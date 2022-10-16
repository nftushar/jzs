<?php
/**
 * Template Name:classmates
 *
 */
?>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header(); 



// Search

$searchDeta=" ";
if($_GET['title']!=" "){
  $searchDeta = $_GET['title'];
  
}


// Pagination
 $paged ['paged'] = (get_query_var( "paged" )) ? get_query_var( "paged" ) : 1;



$args = array(
    
  'post_type' => 'classmates',
  'post_status' => 'publish',
  's' => $searchDeta,
  'posts_per_page' => 9,
  
  'paged' => $paged
);

// print_r($args);
 
// // The Query
$the_query = new WP_Query( $args );



?>



<div class="container">
    
  <div class="middle_container">
            <form method="get">
                <input type="text" placeholder="Search By Full Name" value="<?php echo $_GET['full_name_in_english']; ?>" name="title" style="width:250px;padding:10px"/>
                
                   <input type="submit" value="Search" name=" style="padding:12px;">
            </form>
    </div>
    
<div class="row">
 
        <?php if( $the_query->have_posts() ): ?>
        <?php while( $the_query->have_posts() ) : $the_query->the_post(); ?>
<!--<h1>Hello</h1>-->
        <div class="card1s col-12 col-sm-4  ">
        
            <?php 
		            if ( has_post_thumbnail() ) {
                    	the_post_thumbnail('medium');
                    } 
	         ?>

            <a href="<?php the_permalink() ?>">
                <h5><?php the_title()?></h5>
            </a>

            <p class="stitle"> <strong>Phone:</strong> </strong><?php the_field('phone_number'); ?></p>


            <p class="stitle"><strong>Email:</strong> <?php the_field('email') ?></p> 

            <a href="<?php the_permalink() ?>"><button>Read More</button></a>
        </div>  
        
        <?php endwhile; ?> 
        <?php endif; ?>

        <?php wp_reset_query();	 ?> 
        <!--// Restore global post data stomped by the_post().-->
  
</div>

    <div class="pagi">

        <?php echo  wp_pagenavi(array('query'=>$the_query)); ?>

    </div>



 <?php get_footer(); ?>


