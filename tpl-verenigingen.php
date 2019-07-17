<?php
/**
 * Template Name: Verenigingen Template
 */

get_header();

?>

<?php $headerImage = get_field( 'header_image' ); ?>
<?php if ( $headerImage ): ?>
    <div class="headerImage">
        <div class="pageImage">
            <img src="<?php echo $headerImage['url']; ?>" alt="">
        </div>
    </div>
<?php endif; ?>

    <section class="verenigingen-page">
        <div class="centerDiv">
            <div class="innerWrapper">
                <div class="page-header">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </div>
                <div class="page-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
                <div class="verenigingenWrapper spanContainer">
                    <div class="span-3 verenigingenFilters"><?php echo do_shortcode('[searchandfilter id="194"]'); ?></div>
                    <div class="span-9 verenigingenContent">
                        <?php echo do_shortcode('[searchandfilter id="194" show="results"]');?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php get_footer(); ?>