<?php
/**
 * The Template for displaying single verenigingen events
 */
?>
<?php
$the_query = new WP_Query( array( 'post_type' => 'fw-event', 'meta_key' => 'choose_vereniging', 'meta_value' => get_the_ID() ) );
?>
<?php if ( $the_query->have_posts() ): ?>
    <div class="verenigingen-events block">
        <div class="title"><?php _e( 'Aankomende evenementen' ); ?></div>
        <div class="content">
            <ul class="events">
                <?php while ( $the_query->have_posts() ) : $the_query->the_post() ?>
                    <?php $options = fw_get_db_post_option( get_the_ID(), fw()->extensions->get( 'events' )->get_event_option_id() ); ?>
                    <?php $event = reset( $options['event_children'] ); ?>
                    <li class="event">
                        <span class="date"><?php echo date_i18n( 'd - m', strtotime( $event['event_date_range']['from'] ) ); ?></span>
                        <a href="<?php echo esc_url( get_permalink() ) ?>" title="<?php echo esc_attr( get_the_title() ) ?>"><?php the_title( '<strong>', '</strong>' ) ?></a>
                    </li>
                <?php endwhile; wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
<?php endif; ?>
