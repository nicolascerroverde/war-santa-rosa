<?php get_header(); ?>

<div class="contenido-extra">
    <h2>Bienvenido a War Santa Rosa</h2>
    <p>Aquí encontrarás listas y estrategias para tus juegos favoritos.</p>
</div>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
    <div class="post">
        <h2><?php the_title(); ?></h2>
        <?php the_excerpt(); ?>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>