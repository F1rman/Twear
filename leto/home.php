<?php
/**
 * Home template file
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Leto
 */

get_header();

$sidebar = get_theme_mod( 'leto_fullwidth_blog_archives' );
if ( !$sidebar ) {
	$cols = 'col-md-12';
} else {
	$cols = 'col-md-9';
}
?>

	<div id="primary" class="content-area <?php echo $cols; ?>">
		<main id="main" class="site-main">

		<?php if ( have_posts() ) : ?>

			<div class="blog-layout-grid clearfix">
				<div class="siteorigin-panels-stretch panel-row-style panel-row-style-for-231-0" data-stretch-type="full" style="margin-left: -26.5px; margin-right: -26.5px; padding-left: 26.5px; padding-right: 26.5px; border-left: 0px; border-right: 0px;"><div id="pgc-231-0-0" class="panel-grid-cell"><div id="panel-231-0-0-0" class="so-panel widget widget_leto_facts leto_facts_widget panel-first-child panel-last-child" data-index="0">

						<div class="featured-box-section">
							<div class="row">
												<div class="featured-box-item">
									<div class="featured-box-item__inner">
										<div class="featured-box-icon">
											<i class="ion-ios-location-outline"></i>
										</div>
										<div class="featured-box__info">
											<div class="featured-box-title">
											Безкоштовна доставка						</div>
											<div class="featured-box-desc">
											Від 100 грн						</div>
										</div>
									</div>
								</div>
																<div class="featured-box-item">
									<div class="featured-box-item__inner">
										<div class="featured-box-icon">
											<i class="ion-ios-loop"></i>
										</div>
										<div class="featured-box__info">
											<div class="featured-box-title">
											Повернення до 90 днів							</div>
											<div class="featured-box-desc">
											Не виникнуть питання							</div>
										</div>
									</div>
								</div>

												<div class="featured-box-item">
									<div class="featured-box-item__inner">
										<div class="featured-box-icon">
											<i class="ion-ios-locked-outline"></i>
										</div>
										<div class="featured-box__info">
											<div class="featured-box-title">
											Безпечний платіж							</div>
											<div class="featured-box-desc">
											100% безпечна оплата						</div>
										</div>
									</div>
								</div>

												<div class="featured-box-item">
									<div class="featured-box-item__inner">
										<div class="featured-box-icon">
											<i class="ion-ios-people-outline"></i>
										</div>
										<div class="featured-box__info">
											<div class="featured-box-title">
											24/7 Підтримка							</div>
											<div class="featured-box-desc">
											Виділена підтримка							</div>
										</div>
									</div>
								</div>

							</div>
						</div>


					</div></div></div>

			</div>

			<?php

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
if ( $sidebar ) {
	get_sidebar();
}
get_footer();
