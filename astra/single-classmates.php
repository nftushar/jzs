<?php
/**
 * Template Name:single classmate
 *
 */
?>



<?php

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}  ?>

<?php get_header(); ?>

<div class="single-card">
    <!--<img src="img.jpeg" alt="John" style="width:60%" height="50%">-->
    <div class="timg">
        <?php 
    if ( has_post_thumbnail() ) {
 
             the_post_thumbnail('medium');
     
         }  
?>
    </div>
    <div class="data">
        <label class="name" for="">Full Name ( IN ENGLISH ):</label>
        <p class="para"><?php the_title()?></p>

        <label class="name" for="">Full Name ( IN BANGALI ):</label>
        <p class="para"><?php the_field('full_name_in_bangla');?></p>
        
                <label class="name" for="">Nick Name:</label>
        <p class="para"><?php the_field('full_name_in_english');?></p>

        <label for="">Time To Study:</label>
        <p class="para"><?php the_field('time_to_study');?> </p>

        <label for="">Phone Number:</label>
        <p class="para"><?php the_field('phone_number');?></p>
        
              <label for="">Phone Number 2:</label>
        <p class="para"><?php the_field('phone_number_2');?></p>

        <label for="">Emergency Contact:</label>
        <p class="para"><?php the_field('emergency_contact');?></p>

        <label for="">Email:</label>
        <p class="para"><?php the_field('email');?></p>
        
         <label for="">Email 2:</label>
        <p class="para"><?php the_field('email_2');?></p>

        <label for="">Social Link:</label>
        <p class="para"><?php the_field('social_link');?></p>

        <label for="">Ocupation:</label>
        <p class="para"><?php the_field('ocupation');?></p>

        <label for="">Blood Group:</label>
        <p class="para"><?php the_field('blood_group');?></p>

        <label for="">Birth Date:</label>
        <p class="para"><?php the_field('birth_date');?></p>

        <label for="">Wedding Anniversary:</label>
        <p class="para"><?php the_field('wedding_anniversary');?></p>

        <label for="">Current Address:</label>
        <p class="para"><?php the_field('current_address');?></p>

        <label for="">Permanent Address:</label>
        <p class="para"><?php the_field('current_address');?></p>

        <label for="">Those who live abroad:</label>
        <p class="para"><?php the_field('those_who_live_abroad');?></p>

        <label for="">Hobby/ Interest:</label>
        <p class="para"><?php the_field('hobby_interest');?></p>

        <label for="">Favorite food of school life:</label>
        <p class="para"><?php the_field('favorite_food_of_school_life');?></p>

        <label for="">Family identity:</label>
        <p class="para"><?php the_field('family_identity');?></p>

        <label for="">Wife's identity:</label>
        <p class="para"><?php the_field('wifes_identity');?></p>

        <label for="">About Parents, Siblings (Present Status) (Optional):</label>
        <p class="para"><?php the_field('about_parents_siblings_present_status_optional');?></p>

        <label for="">Birthday with names of boys and girls:</label>
        <p class="para"><?php the_field('boys_and_girls_detail');?></p>

        <label for="">Special acclamation-achievement that you would like to share with friends: (yourself, spouse or
            children):</label>
        <p class="para"><?php the_field('children_achievement');?></p>

        <label for="">Something about school memories:</label>
        <p class="para"><?php the_field('something_about_school_memories');?></p>



        <label for="">A current photo of yourself and another photo of school life with a clear face:</label>

<?php 
$images = get_field('photos');
if( $images ): ?>

 <div class="gallery" > 
   
        <?php foreach( $images as $image ): ?>
            <a href="<?php echo $image ?>";>
            
                     <img src="<?php echo $image; ?>" class="img-thm"  />
            </a>            
        <?php endforeach; ?>
    
</div>

<?php endif; ?>






        <label for="">Family photo (at least one photo of husband and wife together, photo with children):</label>

<?php 
$images = get_field('family_photo');
if( $images ): ?>

 <div class="gallery" > 
   
        <?php foreach( $images as $image ): ?>
            <a href="<?php echo $image ?>";>
            
                     <img src="<?php echo $image; ?>" class="img-thm"  />
            </a>            
        <?php endforeach; ?>
    
</div>

<?php endif; ?>




        <label for="">Memories of district school, there are old photos with friends:</label>

<?php 
$images = get_field('old_photos_with_friends');
if( $images ): ?>

 <div class="gallery" > 
   
        <?php foreach( $images as $image ): ?>
            <a href="<?php echo $image ?>";>
            
                     <img src="<?php echo $image; ?>" class="img-thm"  />
            </a>            
        <?php endforeach; ?>
    
</div>

<?php endif; ?>




        <label for="">Trophies/medals/ momento/ etc. of the district school. Even cane, pen, :</label>

<?php 
$images = get_field('photos_trophiesmedals');
if( $images ): ?>

 <div class="gallery" > 
   
        <?php foreach( $images as $image ): ?>
            <a href="<?php echo $image ?>";>
            
                     <img src="<?php echo $image; ?>" class="img-thm"  />
            </a>            
        <?php endforeach; ?>
    
</div>

<?php endif; ?>




        <label for="">Common memories school life include photos of bicycles, mother's beating weapon/weapons, dungs, marbles or other playthings, photos of radio-television sets:</label>

<?php 
$images = get_field('common_memories_photos');
if( $images ): ?>

 <div class="gallery" > 
   
        <?php foreach( $images as $image ): ?>
            <a href="<?php echo $image ?>";>
            
                     <img src="<?php echo $image; ?>" class="img-thm"  />
            </a>            
        <?php endforeach; ?>
    
</div>

<?php endif; ?>

</div>

  <?php get_footer(); ?>


