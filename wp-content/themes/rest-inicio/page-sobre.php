<?php 
	// Template Name: sobre
?>
<?php get_header() ?>
<?php if(have_posts() ) : while( have_posts()) : the_post(); ?>
	<section class="container sobre">
		<h2 class="subtitulo">Sobre</h2>

		<div class="grid-8">
			<img src="<?php the_field('foto');?>" alt="Fachada do Rest">
		</div>

		<div class="grid-8">
			<!-- Aqui é um campo de repetição dentro do wordpress -->
			<?php if(have_rows('conteudo_sobre')) : while( have_rows('conteudo_sobre')) : the_row(); ?>
				<h2><?php the_sub_field('titulo_sobre'); ?></h2>
				<?php the_sub_field('conteudo_sobre'); ?>
			<?php endwhile; endif; ?>
		</div>
	</section>
<?php endwhile; endif; ?>
<?php get_footer(); ?>