        @include('templates.top')
        <div id="main" class="site-main" role="main">
        	<!--Header Section-->
        	<section class="fly-section-image fly-header-image fly-section-overlay fly-section-height-md parallax" style="background-image: url('../public/images/bg_reservas.jpeg')">
        		<div class="container">
        			<div class="row">
        				<h2 class="fly-section-image-title-after">RESERVAS</h2>
        			</div>
        		</div>
        	</section>
        	<!--End Header Section-->
        	<!--Contact Form Wrap-->
        	<div class="fly-divider-space space-sm"></div>
        	<section class="fly-wrap-reservation-form container-min">
        		<div class="container">
        			<div class="row">
        				<h2 class="fly-reservation-form-info-title">QUER COMEMORAR SEU ANIVERSÁRIO OU FAZER O HAPPY HOUR ESPECIAL NO B.A.R.? ESCOLHA ENTRE AS OPÇÕES: MESA, LOUNGE OU MEZANINO. UM DELES IRÁ TE ATENDER!</h2>
        				<div class="fly-reservation-form-title-divider"></div>
        				<p>As reservas são confirmadas em até 24h</p>
        				<!--Contact Form-->
        				<div class="fly-reservation-form">
                            <!-- TODO: ACTION TO CONTROLLER -->
        					<form action="/emailReservas" class="fly-form-reservation" method="post">
        						<!-- Col Left-->
								{{ csrf_field() }}
        						<div class="fly-form-col-left">
        							<div class="fly-form-inner-col-left">
        								<div class="field-text">
        									<input type="text" name="date" id="reservation-date" placeholder="Data" required>
        								</div>
        							</div>
        							<div class="fly-form-inner-col-right">
        								<div class="field-text">
        									<input type="text" name="persone" id="persone" placeholder="Qtd. Pessoas" required>
        								</div>
        							</div>
									<div class="fly-form-inner-col-left">
										<div class="field-text">
											<input type="text" name="phone" id="phone" placeholder="Telefone" required>
										</div>
        							</div>
        							<div class="fly-form-inner-col-right">
										<select class="field-text" name="house" id="house" required>
											<option value="">Casa</option>
											<option value="itaim">Itaim Bibi</option>
											<option value="vilamadalena">Vila Madalena</option>
										</select>
        							</div>
        						</div>
        						<!--Col Right-->
        						<div class="fly-form-col-right">
        							<div class="fly-form-inner-col-left">
        								<div class="field-text">
        									<input type="text" name="time" id="reservation-time" placeholder="Horário" required>
        								</div>
        							</div>
        							<div class="fly-form-inner-col-right">
        								<div class="field-text">
        									<input type="text" name="name" id="name" placeholder="Nome" required>
        								</div>
        							</div>
        							<div class="field-text">
        								<input type="email" name="email" id="email" placeholder="Email" required>
        							</div>
        						</div>
        						<div class="clearfix"></div>
        						<div class="field-text">
        							<textarea name="notice" id="notice" placeholder="Mensagem" required></textarea>
        						</div>
        						<div class="field-submit">
        							<input type="submit" value="Enviar">
        						</div>
        					</form>
        				</div>
        			</div>
        		</div>
        	</section>
        	<div class="fly-divider-space space-md"></div>
        	<!--End Contact Form Wrap-->
        </div>
        <script>
        	$(document).ready(function(){
	            jQuery('#reservation-time').datetimepicker({
	                datepicker:false,
	                allowTimes:[
	                        '12:00', '13:00', '15:00',
	                        '17:00', '17:05', '17:20', '19:00', '20:00'
	                ]
	            });
	        });
        </script>
        @include('templates.bottom')
