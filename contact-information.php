<?php
/**
 * The Template for displaying single verenigingen contact information
 */
?>

<?php $verenigingenContactinformatie = get_field( 'verenigingen_contactinformatie' ); ?>

<?php if( $verenigingenContactinformatie ): ?>
    <div class="verenigingen-contact-information block">
        <div class="title"><?php _e( 'Contactinformatie' ); ?></div>
        <div class="content"><?php echo $verenigingenContactinformatie; ?></div>
    </div>
<?php endif; ?>
