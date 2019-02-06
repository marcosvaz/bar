    @include('templates.top')
    <div id="main" class="site-main" role="main">

        <!--Slider Full-->
        <section class="fly-slider-full">
            <div class="main-carousel default">
                <div id="myCarousel" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="item parallax" style='background-image:url({{asset("../public/../public/images/bar_arte.jpg")}});'>
                            <div class="container">
                                <div class="fly-itable">
                                    <div class="fly-icell">
                                        <div class="fly-wrap-text-slider">
                                            <h1 class="fly-slider-title-before">ITAIM BIBI</h1>
                                            <div class="fly-slider-divider"></div>
                                            <div class="col-sm-2"></div>
                                              <div class="col-sm-8">
                                                <a class="link" href="/itaim">ITAIM BIBI</a>
                                                <a class="link" href="/vilamadalena">VILA MADALENA</a>
                                              </div>
                                            <div class="col-sm-2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item parallax" style='background-image:url({{asset("../public/../public/images/brinde.jpeg")}});'>
                            <div class="container">
                                <div class="fly-itable">
                                    <div class="fly-icell">
                                        <div class="fly-wrap-text-slider">
                                            <h1 class="fly-slider-title-before">FAÇA SEU ANIVERSÁRIO CONOSCO!</h1>
                                            <div class="fly-slider-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item parallax" style='background-image:url({{asset("../public/../public/images/banda.jpeg")}});'>
                            <div class="container">
                                <div class="fly-itable">
                                    <div class="fly-icell">
                                        <div class="fly-wrap-text-slider">
                                            <h1 class="fly-slider-title-before">CASA DISPONÍVEL PARA EVENTOS FECHADOS!</h1>
                                            <div class="fly-slider-divider"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Carousel Indicator-->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="indicators"></li>
                        <li data-target="#myCarousel" data-slide-to="1" class="indicators"></li>
                        <li data-target="#myCarousel" data-slide-to="2" class="indicators"></li>
                    </ol>
                </div>
            </div>
        </section>
        <!--End Slider Full-->
        <!--Restaurant Menu (HomePage)-->
        <section class="fly-restaurant-menu">
            <!--Food-->

                <div class="fly-menu-category col-sm-4 col-md-4 col-xs-12">
                <div class="fly-menu-image-array" data-time-change="3000">
                    <!-- Image Size (Recommended 700px x 360px "Heights images be equal") -->
                    <img  src="../public/images/fotos1.jpeg" alt="Drinks 1" class="active-image"/>
          					<img  src="../public/images/fotos2.jpeg" alt="Drinks 2"/>
          					<img  src="../public/images/fotos3.jpeg" alt="Drinks 3"/>
          					<img  src="../public/images/fotos4.jpeg" alt="Drinks 4"/>
          					<img  src="../public/images/fotos5.jpeg" alt="Drinks 5"/>
          					<img  src="../public/images/fotos6.jpeg" alt="Drinks 6"/>
          					<img  src="../public/images/fotos21.jpeg" alt="Drinks 7"/>
          					<img  src="../public/images/fotos22.jpeg" alt="Drinks 8"/>
                </div>
                <div class="fly-menu-content">
                    <div class="fly-itable">
                        <div class="fly-icell"><i class="flyicon-drink"></i>
                            <h3 class="fly-title-menu">B</h3>
                            <a target="_blank" href="https://business.facebook.com/pg/bararterestaurante/photos/?tab=album&album_id=1511998895548537" class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3"><span>BAR</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Desert-->
            <div class="fly-menu-category col-sm-4 col-md-4 col-xs-12">
                <div class="fly-menu-image-array" data-time-change="3000">
                    <!-- Image Size (Recommended 700px x 360px "Heights images be equal") -->
                    <img src="../public/images/7.jpg" alt="Desert 7" class="active-image"/>
                    <img src="../public/images/1.jpg" alt="Desert 1"/>
                    <img src="../public/images/2.jpg" alt="Desert 2"/>
                    <img src="../public/images/3.jpg" alt="Desert 3"/>
                    <img src="../public/images/4.jpg" alt="Desert 4"/>
                    <img src="../public/images/5.jpg" alt="Desert 5"/>
                    <img src="../public/images/6.jpg" alt="Desert 6"/>
                </div>
                <div class="fly-menu-content">
                    <div class="fly-itable">
                        <div class="fly-icell"><img src="../public/images/frame.png" alt="">
                            <h3 class="fly-title-menu">A</h3>
                            <a target="_blank" href="https://business.facebook.com/pg/bararterestaurante/photos/?tab=album&album_id=1511972952217798" class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3"><span>ARTE</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <!--Drinks-->
			<style>img > .img_rotate1 , .image_rotate2 , .active-image{
			width:100% !important;max-width:700px !important; height: 330px !important;
object-fit: cover !important; }</style>

			<div class="fly-menu-category col-sm-4 col-md-4 col-xs-12">
				<div class="fly-menu-image-array" data-time-change="3000">
					<img  src="../public/images/fotos18.jpeg" alt="Food 7" class="active-image"/>
          <img  src="../public/images/fotos7.jpeg" alt="Food 1"/>
					<img  src="../public/images/fotos8.jpeg" alt="Food 2"/>
					<img  src="../public/images/fotos9.jpeg" alt="Food 3"/>
					<img  src="../public/images/fotos10.jpeg" alt="Food 4"/>
					<img  src="../public/images/fotos11.jpeg" alt="Food 5"/>
					<img  src="../public/images/fotos12.jpeg" alt="Food 8"/>
					<img  src="../public/images/fotos13.jpeg" alt="Food 9"/>
					<img  src="../public/images/fotos14.jpeg" alt="Food 10"/>
					<img  src="../public/images/fotos15.jpeg" alt="Food 11"/>
					<img  src="../public/images/fotos16.jpeg" alt="Food 12"/>
					<img  src="../public/images/fotos17.jpeg" alt="Food 18"/>
                </div>
                <div class="fly-menu-content">
                    <div class="fly-itable">
                        <div class="fly-icell"><i class="flyicon-buzzer"></i>
                            <h3 class="fly-title-menu">R</h3>
                            <a target="_blank" href="https://business.facebook.com/pg/bararterestaurante/photos/?tab=album&album_id=1512000452215048" class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3"><span>RESTAURANTE</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--End Restaurant Menu (HomePage)-->        <!--Section (Info Restaurant)-->
        <section class="fly-info-box container-min">
            <div class="container">
                <div class="row">
                    <div class="fly-divider-space space-md"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="fly-info-box-header">
                            <!--<i class="fly-info-box-icon flyicon-coffee"></i>-->
                            <h3 class="fly-info-box-title">SOBRE NÓS</h3>
                            <div class="fly-info-box-divider"></div>
                        </div>
                        <div class="fly-info-box-content" style="font-weight: bolder; text-align: justify;"> Um charmoso Bar & Restaurante, localizado no coração de um dos bairros nobres de São Paulo; Uma verdadeira porta de entrada para <span style="color: #efa35c;">refeições gourmet contemporâneas</span>, inspiradas em produtos sazonais com uma <span style="color: #efa35c;">pincelada de arte</span>.
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="fly-divider-space space-md"></div>
                </div>
            </div>
        </section>
        <!--End Section (Info Restaurant)-->
        <!--Section Home Gallery-->
        <section class="fly-home-gallery">
            <!--Home Gallery Col1-->
            <div class="fly-home-gallery-col col-sm-4">
                <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('public/images/PHOTO-2018-07-24-16-53-39.jpg')">
                    <a href="public/images/PHOTO-2018-07-24-16-53-39.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                        <div class="fly-itable">
                            <div class="fly-icell">
                                <i class="flyicon-expand"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('public/images/PHOTO-2018-07-24-16-53-47.jpg')">
                    <a href="public/images/PHOTO-2018-07-24-16-53-47.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                        <div class="fly-itable">
                            <div class="fly-icell">
                                <i class="flyicon-expand"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('public/images/PHOTO-2018-07-24-16-53-49.jpg')">
                    <a href="public/images/PHOTO-2018-07-24-16-53-49.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                        <div class="fly-itable">
                            <div class="fly-icell">
                                <i class="flyicon-expand"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="fly-home-gallery-col col-sm-4">
                <div class="fly-home-gallery-block-title fly-home-gallery-height-md">
                    <div class="fly-itable">
                        <div class="fly-icell">
                            <h5 class="fly-home-gallery-before-title"><span>ITAIM BIBI</span></h5>
                            <h3 class="fly-home-gallery-title">NOSSO ESPAÇO</h3>
                            <a class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-1" href="/galeria">
                                <span>VER TUDO</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="fly-home-gallery-block fly-home-gallery-height-lg" style="background-image: url('public/images/PHOTO-2018-07-24-16-53-56.jpg')">
                    <a href="public/images/PHOTO-2018-07-24-16-53-56.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                        <div class="fly-itable">
                            <div class="fly-icell">
                                <i class="flyicon-expand"></i>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="fly-home-gallery-col col-sm-4">
                <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('public/images/PHOTO-2018-07-24-16-53-48.jpg')">
                    <a href="public/images/PHOTO-2018-07-24-16-53-48.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                        <div class="fly-itable">
                            <div class="fly-icell">
                                <i class="flyicon-expand"></i>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('public/images/PHOTO-2018-07-24-16-53-53.jpg')">
                    <a href="public/images/PHOTO-2018-07-24-16-53-53.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                        <div class="fly-itable">
                            <div class="fly-icell"><i class="flyicon-expand"></i></div>
                        </div>
                    </a>
                </div>
                <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('public/images/PHOTO-2018-07-24-16-53-54.jpg')">
                    <a href="public/images/PHOTO-2018-07-24-16-53-54.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                        <div class="fly-itable">
                            <div class="fly-icell"><i class="flyicon-expand"></i></div>
                        </div>
                    </a>
                </div>
            </div>
        </section>
        <!--End Section Home Gallery-->

        <!--Section (Chef of the Month)-->
        <section class="container-min">
            <div class="container-fluid">
                <div class="row">
                    <div class="fly-divider-space space-md"></div>
                </div>
                <div class="row">
                    <div class="col-sm-12">

						<div class="fly-info-box-header"><!--<h5 class="fly-info-box-before-title"><span>Carmelo</span></h5>-->

                        <h2 class="fly-info-box-title text-center">Cardápios</h2>
                        <div class="row">
                            <div class="fly-divider-space space-sm"></div>
                        </div>
                    </div>
                    <div class="fly-info-box-content col-md-5" style="font-weight: bolder; text-align: justify;">
                        O cardápio contemporâneo traz um olhar crítico para os pratos inspirados na culinária nacional e ganha novas opções, como é o caso do Polvo Terra e Mar – polvo preparado com batatas rústicas, tomate pera ao perfume de limão siciliano e arroz regado ao próprio molho ou o Risoto de Frutos do Mar Nero – composto de arroz de risoto nero, lula, polvo e camarão.
                        <div class="row">
                            <div class="fly-divider-space space-sm"></div>
                        </div>
                        <div class="fly-info-box-header"><!--<h5 class="fly-info-box-before-title"><span>Carmelo</span></h5>-->
                              <div class="text-center">
                                    <a target="_blank" href="../public/downloads/cardapio-jk-comidas.pdf" class="fly-btn fly-btn-lg fly-btn-1 fly-btn-color-2">Cardápio Comidas</a>
                              </div>
                        </div>
                        <div class="row">
                            <div class="fly-divider-space space-sm"></div>
                        </div>
                    </div>
                    <div class="col-md-1"></div>
                    <div class="fly-info-box-content col-md-6" style="font-weight: bolder; text-align: justify;">
                        No cardápio de bebidas, drinks exclusivos como é o caso do “Smoked Tea”, preparado com vodka absolut com infusão de chá de especiarias shurb de morango e cravo, suco de limão siciliano e melaço de cana de açúcar e o “Aquele que não resta” – whisky chivas regal extra, néctar artesanal de pera óleo de sccharumm de gengibre, cordial sem álcool de canela e limão cravo e tintura de cerveja, todos pensados especialmente para o seleto público do B.A.R.
                        <div class="row">
                            <div class="fly-divider-space space-sm"></div>
                        </div>
                        <div class="fly-info-box-header"><!--<h5 class="fly-info-box-before-title"><span>Carmelo</span></h5>-->
                              <div class="text-center">
                                    <a target="_blank" href="../public/downloads/cardapio-jk-drinks.pdf" class="fly-btn fly-btn-lg fly-btn-1 fly-btn-color-2">Cardápio Drinks</a>
                              </div>
                        </div>
                        <div class="row">
                            <div class="fly-divider-space space-sm"></div>
                        </div>
                    </div>
                </div>
            </div>
			</div>
        </section>
        <!--End Section (Chef of the Month)-->

        <div class="row">
            <div class="fly-divider-space space-sm"></div>
        </div>
    </div>
    <script type="text/javascript">
        // Transformar o elemento do slide ativo
        var el = document.getElementsByClassName('carousel-inner');
        var imagem = el[0].children[0];
        imagem.classList.add('active');

        var ind = document.getElementsByClassName('indicators');
        ind[0].classList.add('active');
    </script>
    @include('templates.bottom')
