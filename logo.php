<?php
/**
 * The Template for displaying single verenigingen logo
 */
?>

<?php $verenigingenLogo = get_field( 'verenigingen_logo' ); ?>

<?php if( $verenigingenLogo ): ?>
    <div class="verenigingen-logo block">
        <img src="<?php echo $verenigingenLogo['url']; ?>" alt="<?php echo $verenigingenLogo['title']; ?>" />
    </div>
<?php endif; ?>
