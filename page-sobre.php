<?php
get_header(); ?>

<div id="content">
	<section id="sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="logo text-center">
						<img class="e-claro" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/logo-quemsomos.jpg"; ?>"/>
					</div>
				</div>
				<div class="col-md-6">
					<div class="desc">
						<h1>Vintage <br> Poker Clube</h1>
						<p>
							<strong>&F Arquitetura surgiu da união entre o arquiteto Renato Furlanis e a designer Vivian Furlanis.</strong>
						</p>
						<p>
							Formados pela Universidade Anhembi Morumbi e Panamericana de Arte e Design, atuam no mercado de arquitetura e design de interiores, realizando projetos residenciais e comerciais.
						</p>
					</div>
				</div>	
			</div>	
		</div>
	</section>

	<section id="depoimento">
		<div class="container">
			<div class="row">
				<p class="verde">
					A V&F tem uma característica que está em todos os seus projetos: <br> a busca pela qualidade, estilo e bom gosto.
				</p>
				<p class="italico">
					"Desenvolvemos nossos projetos nas fantasias e sonhos de cada cliente, aliando funcionalidade e bom gosto. <br>
					Nosso maior prazer é entregar um projeto e ver o sorriso no rosto de nossos clientes"
				</p>
			</div>	
		</div>		
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
