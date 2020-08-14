<?php 
    // Template Name: menu da semana
?>

<?php get_header(); ?>
<?php if(have_posts()) : while(have_posts() ) : the_post();?>
<section class="container">
	<h2 class="subtitulo"><?php the_title(); ?></h2>
		<div class="menu-item grid-8">
		<?php if(have_rows('categoria_menu')) : while(have_rows('categoria_menu')) : the_row(); ?>
			<h2><?php the_sub_field('nome_categoria'); ?></h2>
			<ul>
				<?php if(have_rows('prato_menu')) : while(have_rows('prato_menu')) : the_row(); ?>
					<li>
						<span><sup>R$</sup><?php the_sub_field('preco_prato')?></span>
						<div>
							<h3><?php the_sub_field('nome_prato'); ?></h3>
							<p><?php the_sub_field('descricao_prato');?></p>
						</div>
					</li>
				<?php endwhile; else: endif;?>
			</ul>
		<?php endwhile; endif;?>
		</div>
</section>
<?php endwhile; endif ?>
<?php get_footer(); ?>