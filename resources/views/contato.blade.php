        @include('templates.top')
    	<div id="main" class="site-main" role="main">
    		<!--Header Section-->
    		<section class="fly-section-image fly-header-image fly-section-overlay fly-section-height-md parallax" style="background-image: url('../public/images/contact-header-bg.jpg')">
    			<div class="container">
    				<div class="row">
    					<!-- <h3 class="fly-section-image-title-before"></h3> -->
    					<h2 class="fly-section-image-title-after">CONTATO</h2>
    				</div>
    			</div>
    		</section>
    		<!--End Header Section-->
    		<!--Contact Form Wrap-->
    		<div class="fly-divider-space space-md" style="height: 70px;"></div>
    		<section class="fly-wrap-contact-form container-min">
    			<div class="container">
    				<div class="row">
    					<h2 class="fly-contact-form-info-title">Nós adoraremos te escutar</h2>
    					<div class="fly-contact-form-title-divider"></div>
    					<div class="fly-contact-form-info-block">
    						<p class="fly-contact-street">Rua. João Cachoeira, 1036</p>
    						<p class="fly-contact-phone">Telefone: 11 9 7468-5230</p>
    						<p class="fly-contact-email"><a href="mailto:contato@bararterestaurante.com.br">contato@bararterestaurante.com.br</a>
    						</p>
    						<div class="fly-contact-work-program">
    							<h4>NÓS ESTAMOS ABERTOS</h4>
    							<p>Terça a sexta das 18h às 02h00 / sábado das 16h às 2h00</p>
    							<h4>Assessoria de Imprensa - TAG Comunicação</h4>
    							<p>11 98105-7118 - Patrizia Rigonati</p>
    						</div>
    					</div>
    					<!--Contact Form-->
    					<div class="fly-contact-form">
    						<h3 class="fly-contact-title">PREENCHA O FORMULÁRIO ABAIXO. NÓS ENTRAREMOS EM CONTATO EM 24 HORAS.</h3>
    						<form action="/email" class="fly-form-contact" method="post">
								{{ csrf_field() }}
    							<div class="field-text">
    								<input type="text" name="nome" id="name" placeholder="Nome">
    							</div>
    							<div class="field-text">
    								<input type="text" name="sobrenome" id="last-name" placeholder="Sobrenome">
    							</div>
    							<div class="field-text">
    								<input type="text" name="telefone" id="phone" placeholder="Telefone">
    							</div>
    							<div class="field-text">
    								<input type="email" name="email" id="email" placeholder="Email">
    							</div>
    							<div class="field-text">
    								<textarea name="mensagem" id="message" placeholder="Mensagem"></textarea>
    							</div>
    							<div class="field-submit">
    								<input type="submit" name="enviar" value="Enviar">
    							</div>
    						</form>
    					</div>
    				</div>
    			</div>
    		</section>
    		<div class="fly-divider-space space-md"></div>
    		<!--End Contact Form Wrap-->
    	</div>
        @include('templates.bottom')
