<?php
// Template Name: Contato
?>
<?php get_header(); ?>
    
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <section class="container contato">
        <h2 class="subtitulo"><?php the_title(); ?></h2>

        <div class="grid-16">
            <a href="<?php the_field('link_mapa') ?>" target="_blank"><img src="<?php the_field('imagem_mapa') ?>" alt="Mapa para o Rest"></a>
        </div>

        <div class="grid-1-3 contato-item">
            <h2><?php the_field('titulo_dados'); ?></h2>
            <?php the_field('conteudo_dados'); ?>
        </div>
        <div class="grid-1-3 contato-item">
            <h2><?php the_field('titulo_horarios'); ?></h2>
            <?php the_field('conteudo_horarios'); ?>
        </div>
        <div class="grid-1-3 contato-item">
            <h2><?php the_field('titulo_endereco'); ?></h2>
            <?php the_field('conteudo_endereco'); ?>
        </div>
    </section>

<?php endwhile; else: endif; ?>

<?php get_footer(); ?>