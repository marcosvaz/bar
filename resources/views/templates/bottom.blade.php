        <!--Footer-->
        <footer class="fly-site-footer">
        	<div class="container">
        		<div class="row">
        			<div class="fly-divider-space space-sm"></div>
        		</div>
        		<div class="row">
        			<div class="fly-footer-content clearfix">
        				<aside class="widget widget-newsletter widget-newsletter-footer">
        					<h4 class="widget-title-before">
                                <i class="flyicon-mail2"></i> <span>Conecte-se com o B.A.R</span>
                            </h4>
        					<h3 class="widget-title">Inscreva-se para receber nossas novidades.</h3>
        					<form action="/newsletter" method="post" class="newsletter-form" id="j-forms" novalidate>
        						<input type="email" name="email" id="verifica_email" class="newsletter-input" placeholder="Por favor insira seu e-mail" />
        					</form>
        					<div id='resposta'></div>
        					<script type="text/javascript">
        						$(function(){
                                    $("input[name='email']").blur( function(){

                                        var nomeUsuario = $("input[name='email']").val();

                                        $.post('verificaEmail.php',{email: email},function(data){
                                                $('#resultado').html(data);//onde vou escrever o resultado
                                        });
                                    });
                                });
        					</script>
        				</aside>
                <div class="col-xs-12">
                  <a class="fly-footer-logo" href="index.php">
    					       <img src="<?php echo asset('./public/images/logo-jk.png'); ?>" style="width: 30%;" alt="Footer Logo" />
          				</a>
          				<div class="fly-footer-info">
                    RUA JOÃO CACHOEIRA, 1036 - Itaim Bibi
          				</div>
          				<div class="fly-social"> <a class="fly-social-link" href="https://www.facebook.com/bararterestaurante/" target="_blank"><i class="fa fa-facebook"></i></a>
          					<a class="fly-social-link" href="https://www.instagram.com/bar.arte.restaurante/" target="_blank"><i class="fa fa-instagram"></i></a>
          				</div>
                </div>
        			</div>
        		</div>
        		<div class="row">
        			<div class="fly-divider-space space-sm"></div>
        		</div>
        	</div>
        	<div class="fly-footer-copyright">
        		<div class="container">
        			<div class="row">
        				<div class="col-xs-6">
        					<div class="pull-left"> <span>B.A.R | Bar | Arte | Restaurante © Todos os direitos reservados</span>
        					</div>
        				</div>
        			</div>
        		</div>
        	</div>
        </footer>
    </div>
    <!-- main JS libs  -->
    <script src="https://code.jquery.com/jquery-2.1.1.min.js" integrity="sha256-h0cGsrExGgcZtSZ/fRz4AwV+Nn6Urh/3v3jFRQ0w9dQ=" crossorigin="anonymous"></script>
    <script src="<?php echo asset('./public/js/lib/bootstrap.min.js'); ?>"></script>
    <!--[if lt IE 9]>
    <script src="js/lib/html5shiv.js"></script>
    <script src="js/lib/respond.min.js"></script>
    <![endif]-->
    <!-- Touch Swipe Plugin -->
    <script src="<?php echo asset('./public/js/jquery.touchSwipe.min.js'); ?>"></script>
    <!--CarouFredSel Plugin-->
    <script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyDVlMQRYqi24SaBMv5GCSb2Ik5ZNIWJ84k"></script>
    <!-- Map -->
    <script src="<?php echo asset('./public/js/jquery.carouFredSel-6.2.1-packed.js'); ?>"></script>
    <script src="<?php echo asset('./public/js/jquery.carouFredSel-6.2.1-packed.js'); ?>"></script>
    <script src="<?php echo asset('./public/owlcarousel/owl.carousel.js'); ?>"></script>
    <script>
    	$(document).ready(function () {
            var owl = $('.owl-carousel');
            owl.owlCarousel({
                margin: 10,
                nav: true,
                loop: false,
                responsive: {
                    0: {
                        items: 2
                    },
                    542: {
                        items: 2
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 4
                    }
                }
            });
        });
    </script>
    <script type="text/javascript">
        (function(d, m){
          var kommunicateSettings = {"appId":"be4e4cbdf6e54ad8d419c83a5e93a17b","conversationTitle":"BAR ARTE RESTAURANTE","email":""};
          var s = document.createElement("script"); s.type = "text/javascript"; s.async = true;
          s.src = "https://api.kommunicate.io/kommunicate.app";
          var h = document.getElementsByTagName("head")[0]; h.appendChild(s);
          window.kommunicate = m; m._globals = kommunicateSettings;
        })(document, window.kommunicate || {});
    </script>
    <!--Categories Slider-->
    <script src="<?php echo asset('./public/js/jquery.prettyPhoto.js'); ?>"></script>
    <!-- DateTime Picker -->
    <script src="<?php echo asset('./public/js/jquery.datetimepicker.js'); ?>"></script>
    <!-- Scroll To Top Button -->
    <script src="<?php echo asset('./public/js/scrollTo.min.js'); ?>"></script>
    <!-- Parallax -->
    <script src="<?php echo asset('./public/js/jquery.parallax-1.1.3.js'); ?>"></script>
    <!-- Mobile menu (mmenu) -->
    <script src="<?php echo asset('./public/js/jquery.mmenu.min.all.js'); ?>"></script>
    <!--General JS-->
    <script src="<?php echo asset('./public/js/general.js'); ?>"></script>
    <script type="text/javascript">
    	$(window).on('load',function(){
            $('#myModal').modal('show');
        });
    </script>
</body>
</html>
