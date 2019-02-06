        @include('templates.top')
        <div id="main" class="site-main" role="main">
            <!--Header Section-->
            <section class="fly-section-image fly-header-image fly-section-overlay fly-section-height-md parallax" style="background-image: url({{asset($imagens->where('secao', $secao)->first()->url)}})">
                <div class="container">
                    <div class="row">
                        <!-- <h3 class="fly-section-image-title-before"></h3> -->
                        <h2 class="fly-section-image-title-after text-uppercase"> {{ $secao }} </h2>
                    </div>
                </div>
            </section>
            <!--End Header Section-->
            <!--Section Home Gallery-->
            <section class="fly-home-gallery">

                <section class="fly-go-to-top fly-theme-color-4">
                    <div class="row">
                        <div class="fly-divider-space space-sm"></div>
                    </div>
                    <div class="row"><a class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-2 fly-btn-to-top" href="adicionar/{{ $secao }}"><span>Adicionar Fotos</span></a>
                    </div>
                    <div class="row">
                        <div class="fly-divider-space space-sm"></div>
                    </div>
                </section>

                <div class="owl-carousel owl-theme">

                    <!-- TODO WHILE IMAGENS DO BD -->
                    @foreach($imagens as $imagem)
                        @if($imagem->secao == $secao)
                            <div class="item">
                                <div class="fly-home-gallery-col col-sm-12">
                                    <div class="fly-home-gallery-block fly-home-gallery-height-md" style="background-image: url({{ asset($imagem->url) }})";>
                                        <a href="alterar/{{$imagem->id}}" class="fly-home-gallery-overlay">
                                            <div class="fly-itable">
                								<div class="fly-icell"> <i class="fa fa-times"></i>
                								</div>
                							</div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @endforeach
                    <!-- End WHILE IMAGENS DO BD -->

                </div>

                 <div class="row">
                     <div class="fly-divider-space space-sm"></div>
                 </div>
             </section>
             <!--End Section Home Gallery-->
        </div>
        @include('templates.bottom')
