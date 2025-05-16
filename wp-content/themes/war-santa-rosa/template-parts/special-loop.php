<?php
/**
 * Show posts loop
 *
 * @package Yuki
 */

use LottaFramework\Facades\CZ;
use LottaFramework\Utils;

$layout = 'no-sidebar';

if ( CZ::checked( 'yuki_archive_sidebar_section' ) ) {
	$layout = CZ::get( 'yuki_archive_sidebar_layout' );
}

$attrs = [
	'class' => 'flex flex-wrap card-list',
];

if ( is_customize_preview() ) {
	$attrs['data-shortcut']          = 'border';
	$attrs['data-shortcut-location'] = 'yuki_archive';
}

?>

<div class="<?php Utils::the_clsx( yuki_container_css( $layout, 'boxed', [ 'yuki-posts-container' ] ) ); ?>">
    <div id="content" class="yuki-posts flex-grow max-w-full">
	
	<div class="custom-content">
    <h2>Bienvenido a War Santa Rosa</h2>
    <p>Aquí puedes encontrar listas y miniaturas de Warhammer.</p>
</div>

<?php if ( have_posts() ): ?>

		<?php if ( have_posts() ): ?>
            <div <?php Utils::print_attribute_string( $attrs ); ?>>
				<?php
				// posts loop
				while ( have_posts() ) {
					the_post();
					get_template_part( 'template-parts/content', 'entry' );
				}
				?>
            </div>

			<?php
			/**
			 * Hook - yuki_action_posts_pagination.
			 */
			do_action( 'yuki_action_posts_pagination' );
			?>
		<?php else: ?>
			<?php get_template_part( 'template-parts/content', 'none' ); ?>
		<?php endif; ?>
    </div>

	<?php
	/**
	 * Hook - yuki_action_sidebar.
	 */
	do_action( 'yuki_action_sidebar', $layout );
	?>
<?php echo '<p style="color:red;">special-loop.php está cargando</p>'; ?>



</div>

