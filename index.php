<?php
get_header(); ?>

<div id="content">
	<section id="banner">
		<div class="container">
			<div class="row">		
				<?php putRevSlider( "banner-index" ) ?>		
			</div>
		</div>
	</section>

	<section id="servicos">
		<div class="container">
			<?php
			$args = array( 'posts_per_page' => 6, 'offset'=> 0, 'orderby' => 'rand'  );

			$myposts = get_posts( $args );
			$i = 0;
			foreach ( $myposts as $post ) : setup_postdata( $post );
			?>
				<?php
				if($i % 3 == 0):
				?>
					<div class="row">
				<?php endif ?>
				<div class="col-md-4">
					<?php if ( has_post_thumbnail()) : ?>
						<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
							<?php the_post_thumbnail('home-thumb', array(
								'class' => "e-claro img-responsive",
							)); ?>
						</a>
					<?php endif; ?>
					<h4><?php the_title(); ?></h4>
					<p><?php echo apply_filters( 'woocommerce_short_description', $post->post_excerpt ) ?></p>
					<a href="<?php the_permalink(); ?>" class="btn-saiba-mais">CONFIRA</a>
				</div>
	            <?php 
	            $i++;
	            if($i % 3 == 0): 
	            ?>
					</div>
				<?php endif ?>
			<?php 
			endforeach; 
			wp_reset_postdata();
			?>
		</div>		
	</section>

	<section id="fotos-sobre">
		<div class="container">
			<div class="row">
				<div class="col-md-7 text-left">
					<h2 class="amarelo">Tapeçaria e Reforma de Estofados no Tatuapé</h2>
					<p class="">A Nobre Arte Desig é uma tapeçaria com vasta experiência em reforma de estofados em geral, com atendimento diferenciado e garantia em todos os serviços prestados. <br>
					A Tapeçaria Nobre Arte Design é uma empresa especializada em reforma de todos os tipos de sofá, estofados em geral, puffs, cadeiras de sala de jantar, poltronas e também fabricamos cabeçeiras personalizadas de acordo com a sua necessidade. 
					</p>
					<ul>
						<li>Reforma de estofados em geral</li>
						<li>Tapeçaria localizada no Tatuapé</li>
						<li>Atendimento diferenciado</li>
						<li>Impermeabilização de estofados</li>
					</ul>
					<a href="<?php echo esc_url( home_url( '/' ) )."fotos"; ?>" class="btn-amarelo">CONFIRA</a>
				</div>
				<div class="col-md-5 text-left">
					<h4>Fotos</h4>
					
					<div class="row">
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner1.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner1.jpg"; ?>"/>
						</div>
					</div>
					<div class="fotos-sobre row">	
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner1.jpg"; ?>"/>
						</div>
						<div class="col-md-6">
							<img class="e-claro img-responsive" src="<?php echo dirname( get_bloginfo('stylesheet_url'))."/images/banner1.jpg"; ?>"/>
						</div>
					</div>
			
				</div>
			</div>	
		</div>	
	</section>

	<section id="maps">
		<div class="container">
			<div class="row text-left detalhes-maps">
				<div class="col-md-12">
					<h2 class="amarelo">Localização da Tapeçaria</h2>
					<p>
						Rua São Jorge, 86 - Tatuapé, São Paulo - SP
					</p>
					<p>
						<strong>Telefone.: </strong>11 3938-0200 <strong>Email.: </strong>contato@nobreartedesign.com.br
					</p>
				</div>
			</div>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 videoWrapper">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3658.0003376679856!2d-46.56683158444546!3d-23.532490266413117!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5ee54bb4a53b%3A0x5bfb87542ddadfac!2sR.+S%C3%A3o+Jorge%2C+86+-+Parque+S%C3%A3o+Jorge%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1463247862636" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>				
				</div>
			</div>			
		</div>
	</section>

	<?php get_template_part( 'template-parts/redes-bot'); ?>

</div>

<?php get_footer(); ?>
