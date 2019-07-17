<?php
/**
 * The Template for displaying verenigingen single posts
 */

get_header();

?>

<?php $singleVerenigingenHeaderImage = get_field( 'single_verenigingen_header_image' ); ?>
<?php if ( $singleVerenigingenHeaderImage ): ?>
    <div class="headerImage">
        <div class="pageImage">
            <img src="<?php echo $singleVerenigingenHeaderImage['url']; ?>" alt="">
        </div>
    </div>
<?php endif; ?>

    <section class="single-verenigingen-page">
        <div class="centerDiv">
            <div class="span-9 mainContent">
                <div class="page-header">
                    <h1 class="page-title"><?php the_title(); ?></h1>
                </div>
                <div class="page-content">
                    <?php while ( have_posts() ) : the_post(); ?>
                        <?php the_content(); ?>
                    <?php endwhile; ?>
                </div>
                <?php get_template_part( 'single-verenigingen/post/related' ); ?>
            </div>
            <div class="span-3 rightColumn"><?php get_template_part('single-verenigingen/right/column'); ?></div>
        </div>
    </section>
<?php get_footer(); ?>