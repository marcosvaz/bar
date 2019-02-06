            @include('templates.top')
            <div id="main" class="site-main" role="main">
            	<!--Header Image-->
            	<section class="fly-section-image fly-header-image fly-section-overlay fly-section-height-md parallax" style="background-image: url('public/images/header-bg.jpg')">
            		<div class="container">
            			<div class="row">
            				<h3 class="fly-section-image-title-before">Veja nosso</h3>
            				<h2 class="fly-section-image-title-after">CARDÁPIO</h2>
            			</div>
            		</div>
                </section>
            </div>
            <!--End Header Image-->
            <!--Divider-->
            <section class="fly-divider-space space-md"></section>
            <!--End Divider-->
            <div class="text-center">
                <a target="_blank" href="<?php echo asset('public/downloads/cardapio.pdf'); ?>" class="fly-btn fly-btn-lg fly-btn-1 fly-btn-color-2">Download Menu</a>
            </div>
            <!--Divider-->
            <section class="fly-divider-space space-md"></section>
        </div>
        @include('templates.bottom')
