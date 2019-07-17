<?php
/**
 * Template part for displaying news by association
 */
?>
<?php
$the_query = new WP_Query( array( 'post_type' => 'post', 'meta_key' => 'choose_vereniging', 'meta_value' => get_the_ID(), 'posts_per_page' => 3 ) );
$association_id = get_the_ID();
?>
<?php if ( $the_query->have_posts() ): ?>
    <div class="block-related related">
        <div class="block-title">
            <strong><?php _e( 'Gerelateerde berichten' ) ?></strong>
        </div>
        <div class="block-content">
            <div class="postlist">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post() ?>
                    <?php get_template_part( 'template-parts/post/content', 'related' ); ?>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <?php $page = get_page_by_path( 'nieuws/verenigingen-gerelateerde' ) ?>
            <?php if( $page ): ?>
                <a class="view-all" href="<?php echo esc_url( add_query_arg( 'association', $association_id, get_permalink( $page ) ) ) ?>" title="<?php echo esc_attr( __( 'Toon alle berichten' ) ); ?>"><?php _e( 'Toon alle berichten' ) ?></a>
            <?php endif; ?>
        </div>
    </div>
<?php endif; ?>
