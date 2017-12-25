<?php
// Template Name: Menu da Semana
?>
<?php get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<section class="container">
			<h2 class="subtitulo"><?php the_title(); ?></h2>

                <div class="menu-item grid-8">
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
                            <span><sup>R$</sup><?php the_field('preco_prato'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato'); ?></h3>
                                <?php the_field('descricao_prato'); ?>
                            </div>
                        </li>
                        
                        <li>
                            <span><sup>R$</sup><?php the_field('preco_prato'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato'); ?></h3>
                                <?php the_field('descricao_prato'); ?>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                
                <div class="menu-item grid-8">
                    <h2><?php the_field('nome_categoria_2'); ?></h2>
                    <ul>
                        <li>
                            <span><sup>R$</sup><?php the_field('preco_prato_2'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato_2'); ?></h3>
                                <?php the_field('descricao_prato_2'); ?>
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
                            <span><sup>R$</sup><?php the_field('preco_prato_2'); ?></span>
                            <div>
                                <h3><?php the_field('nome_prato_2'); ?></h3>
                                <?php the_field('descricao_prato_2'); ?>
                            </div>
                        </li>
                        
                    </ul>
                </div>
                
		</section>
<?php endwhile; else: endif; ?>
<?php get_footer(); ?>


<!--


<section class="container">
    <h2 class="subtitulo"></h2>

    <div class="menu-item grid-8">
        <h2>Peixes</h2>
        <ul>
            <li>
                <span><sup>R$</sup>129</span>
                <div>
                    <h3>Salmão Grelhado no Forno</h3>
                    <p>Pequenas tiras de salmão feitas no alho e óleo</p>
                </div>
            </li>
            <li>
                <span><sup>R$</sup>89</span>
                <div>
                    <h3>Sardinha Frita na Cerveja</h3>
                    <p>Sardinhas escolhidas a dedo e fritas em cerveja premium</p>
                </div>
            </li>
            <li>
                <span><sup>R$</sup>159</span>
                <div>
                    <h3>Camarão com Catupiry</h3>
                    <p>Grandes camarões grelhados, servidos ao molho de camarão com catupiry</p>
                </div>
            </li>
        </ul>
    </div>

    <div class="menu-item grid-8">
        <h2>Carnes</h2>
        <ul>
            <li>
                <span><sup>R$</sup>129</span>
                <div>
                    <h3>Picanha Nobre no Alho</h3>
                    <p>Pequenas tiras de salmão feitas no alho e óleo</p>
                </div>
            </li>
            <li>
                <span><sup>R$</sup>89</span>
                <div>
                    <h3>Cupim no Bafo</h3>
                    <p>Sardinhas escolhidas a dedo e fritas em cerveja premium</p>
                </div>
            </li>
            <li>
                <span><sup>R$</sup>159</span>
                <div>
                    <h3>Hamburger Artesanal Rest</h3>
                    <p>Grandes camarões grelhados, servidos ao molho de camarão com catupiry</p>
                </div>
            </li>
        </ul>
    </div>

</section>



-->