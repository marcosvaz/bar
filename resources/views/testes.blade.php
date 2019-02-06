@include('templates.top')
<div id="main" class="site-main" role="main">

    <!--Slider Full-->
    <section class="fly-slider-full">
        <div class="main-carousel default">
            <div id="myCarousel" class="carousel slide">
                <div class="carousel-inner">
                    <!-- Carousel items -->
                    @foreach($imagens as $imagem)
                        @if($imagem->secao == 'slider1')
                            <div class="item parallax" style='background-image:url({{asset($imagem->url)}});'>
                                <div class="container">
                                    <div class="fly-itable">
                                        <div class="fly-icell">
                                            <div class="fly-wrap-text-slider">
                                                <h1 class="fly-slider-title-before">{{$imagem->title}}</h1>
                                                <div class="fly-slider-divider"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
                <!--Carousel Indicator-->
                <ol class="carousel-indicators">
                    @for($i = 0; $i < count($imagens->where('secao', 'slider1')); $i++)
                        <li data-target="#myCarousel" data-slide-to="{{$i}}" class="indicators"></li>
                    @endfor
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
                <img  src="images/fotos1.jpeg" alt="Drinks 1" class="active-image"/>
                <img  src="images/fotos2.jpeg" alt="Drinks 2"/>
                <img  src="images/fotos3.jpeg" alt="Drinks 3"/>
                <img  src="images/fotos4.jpeg" alt="Drinks 4"/>
                <img  src="images/fotos5.jpeg" alt="Drinks 5"/>
                <img  src="images/fotos6.jpeg" alt="Drinks 6"/>
                <img  src="images/fotos21.jpeg" alt="Drinks 7"/>
                <img  src="images/fotos22.jpeg" alt="Drinks 8"/>
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
                <img src="images/7.jpg" alt="Desert 7" class="active-image"/>
                <img src="images/1.jpg" alt="Desert 1"/>
                <img src="images/2.jpg" alt="Desert 2"/>
                <img src="images/3.jpg" alt="Desert 3"/>
                <img src="images/4.jpg" alt="Desert 4"/>
                <img src="images/5.jpg" alt="Desert 5"/><img src="images/6.jpg" alt="Desert 6"/>
            </div>
            <div class="fly-menu-content">
                <div class="fly-itable">
                    <div class="fly-icell"><img src="images/frame.png" alt="">
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
                <img  src="images/fotos18.jpeg" alt="Food 7" class="active-image"/>
                <img  src="images/fotos7.jpeg" alt="Food 1"/>
                <img  src="images/fotos8.jpeg" alt="Food 2"/>
                <img  src="images/fotos9.jpeg" alt="Food 3"/>
                <img  src="images/fotos10.jpeg" alt="Food 4"/>
                <img  src="images/fotos11.jpeg" alt="Food 5"/>
                <img  src="images/fotos12.jpeg" alt="Food 8"/>
                <img  src="images/fotos13.jpeg" alt="Food 9"/>
                <img  src="images/fotos14.jpeg" alt="Food 10"/>
                <img  src="images/fotos15.jpeg" alt="Food 11"/>
                <img  src="images/fotos16.jpeg" alt="Food 12"/>
                <img  src="images/fotos17.jpeg" alt="Food 18"/>
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
        <div class="fly-home-gallery-col col-sm-12">
            <div class="fly-home-gallery-block-title fly-home-gallery-height-md">
                <div class="fly-itable">
                    <div class="fly-icell">
                        <h5 class="fly-home-gallery-before-title"><span>360º</span></h5>
                        <h3 class="fly-home-gallery-title">NOSSO ESPAÇO</h3>
                        <a class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-1" href="/galeria.php">
                            <span>VER TUDO</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="fly-home-gallery-col col-sm-4">
            <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('images/PHOTO-2018-07-24-16-53-39.jpg')">
                <a href="images/PHOTO-2018-07-24-16-53-39.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                    <div class="fly-itable">
                        <div class="fly-icell">
                            <i class="flyicon-expand"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('images/PHOTO-2018-07-24-16-53-47.jpg')">
                <a href="images/PHOTO-2018-07-24-16-53-47.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                    <div class="fly-itable">
                        <div class="fly-icell">
                            <i class="flyicon-expand"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="fly-home-gallery-col col-sm-4">
            <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('images/PHOTO-2018-07-24-16-53-39.jpg')">
                <a href="images/PHOTO-2018-07-24-16-53-39.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                    <div class="fly-itable">
                        <div class="fly-icell">
                            <i class="flyicon-expand"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('images/PHOTO-2018-07-24-16-53-47.jpg')">
                <a href="images/PHOTO-2018-07-24-16-53-47.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                    <div class="fly-itable">
                        <div class="fly-icell">
                            <i class="flyicon-expand"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('images/PHOTO-2018-07-24-16-53-39.jpg')">
                <a href="images/PHOTO-2018-07-24-16-53-39.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                    <div class="fly-itable">
                        <div class="fly-icell">
                            <i class="flyicon-expand"></i>
                        </div>
                    </div>
                </a>
            </div>
            <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url('images/PHOTO-2018-07-24-16-53-47.jpg')">
                <a href="images/PHOTO-2018-07-24-16-53-47.jpg" data-rel="prettyPhoto[1]" class="fly-home-gallery-overlay">
                    <div class="fly-itable">
                        <div class="fly-icell">
                            <i class="flyicon-expand"></i>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!--End Section Home Gallery-->

    <!--Section (Chef of the Month)-->
    <section class="fly-info-box container-min">
        <div class="container">
            <div class="row">
                <div class="fly-divider-space space-md"></div>
            </div>
            <div class="row">
                <div class="col-sm-12">

                    <div class="fly-info-box-image">
                        <!--Restaurant Menu (HomePage)-->
                        <section class="fly-restaurant-menu">
                            <!--Food-->

                                <div class="fly-menu-category col-sm-4 col-md-4 col-xs-12">
                                <div class="fly-menu-image-array">
                                    <!-- Image Size (Recommended 700px x 360px "Heights images be equal") -->
                                    <img  src="images/caju_brothers.png" alt="Caju Brothers" class="active-image"/>
                                </div>
                            </div>
                            <!--Desert-->
                            <div class="fly-menu-category col-sm-4 col-md-4 col-xs-12">
                                <div class="fly-menu-image-array">
                                    <!-- Image Size (Recommended 700px x 360px "Heights images be equal") -->
                                    <img  src="images/drinks.jpg" alt="Drinks" class="active-image"/>
                                </div>
                            </div>
                            <!--Drinks-->
                            <style>img > .img_rotate1 , .image_rotate2 , .active-image{
                            width:100% !important;max-width:700px !important; height: 330px !important;
                object-fit: cover !important; }</style>

                            <div class="fly-menu-category col-sm-4 col-md-4 col-xs-12">
                                <div class="fly-menu-image-array">
                                    <img src="images/perfect_grape.png" alt="Perfect Grape" class="active-image"/>
                                </div>
                            </div>
                        </section>
                        <!--End Restaurant Menu (HomePage)-->
                    </div>

                    <div class="fly-info-box-header"><!--<h5 class="fly-info-box-before-title"><span>Carmelo</span></h5>-->

                    <h3 class="fly-info-box-title">Drinks da Casa</h3>
                    <div class="fly-info-box-divider"></div>
                </div>
                    <div class="fly-info-box-content" style="font-weight: bolder; text-align: justify;">
                        Possuímos um cardápio cheio de personalidade com drinks autorais inspirado no que existe de melhor da coquetelaria internacional para agradar todos os paladares. Entre os mais pedidos estão nosso negroni com pitada especial da nossa equipe de bar e o Pablo Picasso, uma releitura do conhecido Clericot, perfeito para dividir com amigos.
                    </div>
            </div>
        </div>
        </div>
    </section>
    <!--End Section (Chef of the Month)-->

    <!--Section Home Gallery-->
    <section class="fly-home-gallery">
        <!--Home Gallery Col1-->

        <div class="row">
            <div class="fly-divider-space space-sm"></div>
        </div>
        <h3 class="fly-info-box-title" style="text-align:center;">ESPECIALIDADES</h3>
        <div class="row">
            <div class="fly-divider-space space-sm"></div>
        </div>
        <div class="owl-carousel owl-theme">

            <!-- FOTOS DO BD -->
            @foreach($imagens as $imagem)
                @if($imagem->secao == "especialidade")
                    <div class="item">
                        <div class="fly-home-gallery-col col-sm-12">
                            <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url({{ asset($imagem->url) }})">
                                <a href="{{ asset($imagem->url) }}" data-rel="prettyPhoto[2]" class="fly-home-gallery-overlay">
                                    <div class="fly-itable">
                                        <div class="fly-icell">
                                            <i class="flyicon-expand"></i>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endif
            @endforeach
            <!-- FOTOS DO BD -->

        </div>

        <div class="row">
            <div class="fly-divider-space space-sm"></div>
        </div>
    </section>
    <!--End Section Home Gallery-->

     <!--Whatsapp-->
    <div id="Msg" style="cursor: pointer;">
        <style>
            #popcompany{ display:none;		position:fixed;		bottom: 0;		right: 0px; 		margin-right: 0px;        z-index: 9999999999;		background-image:url(https://www.ipchat.com.br/sistema/whats-eventos-2-0/images/whats_bg.jpg);		width:280px;		height:450px; } .JanelaWhatsAberta {	background-image:url(https://www.ipchat.com.br/sistema/whats-eventos-2-0/images/banner.png);  background-color:#4a3333;	position: fixed;	bottom: 0px;	right: 0px;	z-index: 99999;	width:280px;	height:35px;	margin-right:0px;}.WhatsIframe { margin-left: 0px;	margin-top: 35px;	width: 280px;	height: 500px;	overflow: hidden;	border-width: 0px;}.WhatsCel .Whatsclose { position: absolute;  top: 0px;  left: 0px;  transition: all 200ms;  font-size: 12px;  font-family: Verdana, Sans-Serif;  text-decoration: none;  background-image:url(https://www.ipchat.com.br/sistema/whats-eventos-2-0/images/fechar.png);  background-color:#4a3333;  width:280px;  height:35px; }
        </style>
        <div id="popcompany">
            <div class="WhatsCel Whatscont">
                <a class="Whatsclose" onclick="document.getElementById('popcompany').style.display='none';"></a>
                <iframe class="WhatsIframe" src="/whatsapp"></iframe>
            </div>
        </div>
        <a class="JanelaWhatsAberta" onclick="document.getElementById('popcompany').style.display='block';"></a>
    </div>
    <!--End Whatsapp-->
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
