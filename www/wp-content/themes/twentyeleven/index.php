<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); /*if(empty($_GET['calendar']) != 1) {
    $calendar = 1;
} else  { 
    $calendar = 0; }*/?>

		<div id="primary">
			<div id="content" role="main">

			<?php 
            if(!empty($calendar)) { 
                include("test.php");
                } else { 
                    if ( have_posts() ) : 
                    ?>

				<?php //twentyeleven_content_nav( 'nav-above' ); ?>

				<?php 
                //method which make page view
                checkCatPage(); /* Start the Loop */ ?>
				<?php
   $args = array(
  'orderby' => 'name',
  'parent' => 2
  );
  
    $cats = get_categories($args);
    $nowDate = date('Y');
    
    foreach ($cats as $cat) {
        
        // Get the cateogory ID
        $cat_id= $cat->term_id;    
        
        //Header for the cateogry
        echo "<p><font style='font-size: 25pt; color:#D2691E'>".$cat->name."</font></p>";
        echo "<br />";        
        define("AID",1);
        $author_id = AID;  
        
        // Make a custom wordpress query       
        query_posts("author=$author_id&cat=$cat_id&paged=$tempArrCat[$cat_id]");     
    
        // start wordpress loop
        if (have_posts()) : while (have_posts()) : the_post(); 
?>
    <a href="<?php the_permalink();?>" style="font-size:15pt; color:#000080; text-decoration:none"><?php the_title(); ?></a>
<?php 
    echo content(25);    
    echo '<hr/>'; 
    endwhile;    
    endif; // End of WordPress loop      
        
        
    echo "<a href='http://task.net/?calendar=".$nowDate."&category=".$cat_id."'><<<</a>";
    
        //using method of pagination
        if(function_exists('pagination')) pagination($cat_id, $newUrl);        
        wp_reset_query();  
  
    } 
    
?>

				<?php //wp_reset_query();//twentyeleven_content_nav( 'nav-below' ); ?>

			<?php else : ?>

				<article id="post-0" class="post no-results not-found">
					<header class="entry-header">
						<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentyeleven' ); ?></h1>
					</header><!-- .entry-header -->

					<div class="entry-content">
						<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyeleven' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				</article><!-- #post-0 -->

			<?php endif; }?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>