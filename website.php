<?php
/**
 * The Template for displaying single verenigingen website
 */
?>

<?php $verenigingenWebsite = get_field( 'verenigingen_website' ); ?>

<?php if( $verenigingenWebsite ): ?>
    <div class="verenigingen-website block">
        <a href="<?php echo $verenigingenWebsite; ?>" target="_blank"><?php _e( 'Ga naar de website' ); ?></a>
    </div>
<?php endif; ?>
