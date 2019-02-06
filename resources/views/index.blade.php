@include('templates.top')
<div id="main" class="site-main" role="main">

    <!--Slider Full-->
    <section class="fly-slider-full">
        <div class="main-carousel default">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <!-- Carousel items -->
                    <div class="item parallax" style='background-image:url({{asset("../public/images/explosion.jpg")}});'>
                        <div class="container">
                            <div class="fly-itable">
                                <div class="fly-icell">
                                    <div class="fly-wrap-text-slider">
                                        <h1 class="fly-slider-title-before">CONHEÇA NOSSA UNIDADE</h1>
                                        <div class="fly-slider-divider"></div>
                                        <div class="col-sm-2"></div>
                                          <div class="col-sm-8">
                                            <a class="link" href="/itaim">ITAIM BIBI</a>
                                          </div>
                                        <div class="col-sm-2"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item parallax" style='background-image:url({{asset("../public/images/brinde.jpeg")}});'>
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
                    <div class="item parallax" style='background-image:url({{asset("../public/images/banda.jpeg")}});'>
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
