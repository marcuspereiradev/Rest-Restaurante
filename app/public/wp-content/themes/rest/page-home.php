<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

                <div class="menu-prato grid-8">
                    <h2><?php the_field('nome_categoria'); ?></h2>
                    <ul>
                        <li>
                            <span><sup>R$</sup><?php the_field('preco_prato'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato'); ?></h3>
                                <?php the_field('descricao_prato'); ?>
                            </div>
                        </li>
                        
                        <li>
                            <span><sup>R$</sup><?php the_field('preco_prato_2'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato_2'); ?></h3>
                                <?php the_field('descricao_prato_2'); ?>
                            </div>
                        </li>
                        
                        <li>
                            <span><sup>R$</sup><?php the_field('preco_prato_3'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato_3'); ?></h3>
                                <?php the_field('descricao_prato_3'); ?>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                
                <div class="menu-prato grid-8">
                    <h2><?php the_field('nome_da_categoria_peixe'); ?></h2>
                    <ul>
                        <li>
                            <span><sup>R$</sup><?php the_field('preco_prato_peixe'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato_peixe'); ?></h3>
                                <?php the_field('descricao_prato_peixe'); ?>
                            </div>
                        </li>
                        
                        <li>
                            <span><sup>R$</sup><?php the_field('preco_prato_peixe_2'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato_peixe_2'); ?></h3>
                                <?php the_field('descricao_prato_peixe_2'); ?>
                            </div>
                        </li>
                        
                        <li>
                            <span><sup>R$</sup><?php the_field('preco_prato_peixe_3'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato_peixe_3'); ?></h3>
                                <?php the_field('descricao_prato_peixe_3'); ?>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                
		</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>