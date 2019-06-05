<?php
if ( ! defined( 'ABSPATH' ) ) exit; //Exit is accessed directly

class RecipeDisplay {
	function __construct() {
		add_shortcode("breakfast", [$this, "fp_recipe_display"]);
		add_shortcode("brunch", [$this, "fp_recipe_display_brunch"]);
		add_shortcode("lunch", [$this, "fp_recipe_display_lunch"]);
		add_shortcode("dinner", [$this, "fp_recipe_display_dinner"]);
		add_shortcode("dessert", [$this, "fp_recipe_display_dessert"]);
	}


	function fp_recipe_display ($atts, $content = null){
	
	
	$args = [
		'post_type'=>'fp_recipe',
		'post_status'=>'publish',
		'tax_query' => [[
						'taxonomy'=>'fp_meal_type',
						'terms' => 'breakfast',
						'field' => 'slug'
						]],
		'posts_per_page'=> -1
	]; 
	
	$recipes = get_posts($args);
	
	?><h1 class="fp_recipe_title"> Breakfast </h1> <?php
	foreach ($recipes as $recipe): ?>
		<div class= "fp_post_title">
		<div>
			<a href="<?php echo get_the_permalink($recipe); ?>"><?php echo get_the_post_thumbnail($recipe, "thumbnail", $attr); ?></a>
		</div>
		<div class="fp_post_description"><?php echo $recipe->post_title; // Title ?></div></div>
		
		
		<?php 
		// error_log(print_r(get_the_permalink($recipe)));
		// error_log(print_r(get_the_post_thumbnail($recipe, "thumbnail")));
		
	endforeach;
		
	 
	wp_reset_postdata();


	
	}
	function fp_recipe_display_brunch ($atts, $content = null){
	
	
	$args = [
		'post_type'=>'fp_recipe',
		'post_status'=>'publish',
		'tax_query' => [[
						'taxonomy'=>'fp_meal_type',
						'terms' => 'brunch',
						'field' => 'slug'
						]],
		'posts_per_page'=> -1
	]; 
	
	$recipes = get_posts($args);
	
	?><h1 class="fp_recipe_title"> Brunch </h1> <?php
	foreach ($recipes as $recipe): ?>
		<div class= "fp_post_title">
		<div>
			<a href="<?php echo get_the_permalink($recipe); ?>"><?php echo get_the_post_thumbnail($recipe, "thumbnail", $attr); ?></a>
		</div>
		<div class="fp_post_description"><?php echo $recipe->post_title; // Title ?></div></div>
		
		
		<?php 
		// error_log(print_r(get_the_permalink($recipe)));
		// error_log(print_r(get_the_post_thumbnail($recipe, "thumbnail")));
		
	endforeach;
		
	 
	wp_reset_postdata();


	
	}
	
	
	function fp_recipe_display_lunch ($atts, $content = null){
	
	
	$args = [
		'post_type'=>'fp_recipe',
		'post_status'=>'publish',
		'tax_query' => [[
						'taxonomy'=>'fp_meal_type',
						'terms' => 'lunch',
						'field' => 'slug'
						]],
		'posts_per_page'=> -1
	]; 
	
	$recipes = get_posts($args);
	
	?><h1 class="fp_recipe_title"> Lunch </h1> <?php
	foreach ($recipes as $recipe): ?>
		<div class= "fp_post_title">
		<div>
			<a href="<?php echo get_the_permalink($recipe); ?>"><?php echo get_the_post_thumbnail($recipe, "thumbnail", $attr); ?></a>
		</div>
		<div class="fp_post_description"><?php echo $recipe->post_title; // Title ?></div></div>
		
		
		<?php 
		// error_log(print_r(get_the_permalink($recipe)));
		// error_log(print_r(get_the_post_thumbnail($recipe, "thumbnail")));
		
	endforeach;
		
	 
	wp_reset_postdata();


	
	}
	
	function fp_recipe_display_dinner ($atts, $content = null){
	
	
	$args = [
		'post_type'=>'fp_recipe',
		'post_status'=>'publish',
		'tax_query' => [[
						'taxonomy'=>'fp_meal_type',
						'terms' => 'dinner',
						'field' => 'slug'
						]],
		'posts_per_page'=> -1
	]; 
	
	$recipes = get_posts($args);
	
	?><h1 class="fp_recipe_title"> Dinner </h1> <?php
	foreach ($recipes as $recipe): ?>
		<div class= "fp_post_title">
		<div>
			<a href="<?php echo get_the_permalink($recipe); ?>"><?php echo get_the_post_thumbnail($recipe, "thumbnail", $attr); ?></a>
		</div>
		<div class="fp_post_description"><?php echo $recipe->post_title; // Title ?></div></div>
		
		
		<?php 
		// error_log(print_r(get_the_permalink($recipe)));
		// error_log(print_r(get_the_post_thumbnail($recipe, "thumbnail")));
		
	endforeach;
		
	 
	wp_reset_postdata();


	
	}
	
	function fp_recipe_display_dessert ($atts, $content = null){
	
	
	$args = [
		'post_type'=>'fp_recipe',
		'post_status'=>'publish',
		'tax_query' => [[
						'taxonomy'=>'fp_meal_type',
						'terms' => 'dessert',
						'field' => 'slug'
						]],
		'posts_per_page'=> -1
	]; 
	
	$recipes = get_posts($args);
	
	?><h1 class="fp_recipe_title"> Dessert </h1> <?php
	foreach ($recipes as $recipe): ?>
		<div class= "fp_post_title">
		<div>
			<a href="<?php echo get_the_permalink($recipe); ?>"><?php echo get_the_post_thumbnail($recipe, "thumbnail", $attr); ?></a>
		</div>
		<div class="fp_post_description"><?php echo $recipe->post_title; // Title ?></div></div>
		
		
		<?php 
		// error_log(print_r(get_the_permalink($recipe)));
		// error_log(print_r(get_the_post_thumbnail($recipe, "thumbnail")));
		
	endforeach;
		
	 
	wp_reset_postdata();


	
	}
}
new RecipeDisplay();




