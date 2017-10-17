<?php get_header(); ?>

<?php if ( have_posts() ) : ?>

<?php include('page-header.php'); ?>

<?php while ( have_posts() ) : the_post(); ?>



	<section id="mission-vision-values">
		
		<div class="wrapper">
			<div class="mission">
				<h3>Our Mission</h3>
				<p>The Point Church is all about pointing people to Jesus.</p>
			</div>
			<div class="vision">
				<h3>Our Vision</h3>
				<p>To plant 30 churches in the triangle area in the next 15 years (2025) through making disciples that disciple others and planting churches that plant churches.</p>
			</div>
			<div class="values">
				<h3>Our Values</h3>
				<ul class="styled-list">
					<li>We are<strong>Made To Worship</strong> God created us to worship and we experience maximum joy when we worship him with all we are.</li>
	
					<li>We are<strong>Better Together</strong> We were created to do life with others, so we are more effective when we follow Jesus together.</li>
	
					<li>We are<strong>Here To Help</strong> Jesus gives every Christian spiritual gifts and places us here to help others.</li>
	
					<li>We will<strong>Grow Daily</strong> We grow spiritually when we are connected with God so we prioritize daily time with Him.</li>
	
					<li>We will<strong>Lead The Way</strong> We have a mission to point people to Jesus, so we lead others to take their next step with Him.</li>
				</ul>
			</div>
		</div>
	</section>

	


<?php endwhile; ?>
	</div>
</section>
<?php else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>


<?php get_footer(); ?>