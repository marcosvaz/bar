        @include('templates.top')
        <div id="main" class="site-main" role="main">
            <!--Header Section-->
            <section class="fly-section-image fly-header-image fly-section-overlay fly-section-height-md parallax" style="background-image: url(<?php echo asset('public/images/bg_reservas.jpeg'); ?>)">
                <div class="container">
                    <div class="row">
                        <h2 class="fly-section-image-title-after">Alterar Foto</h2>
                    </div>
                </div>
            </section>
            <!--End Header Section-->
            <!--Contact Form Wrap-->
            <div class="fly-divider-space space-sm"></div>
            <section class="container-min">
                <div class="container">
                    <div class="row">
                        <!--Contact Form-->
                        <div>
                            <!-- TODO: ACTION TO CONTROLLER -->
                            <div class="fly-info-box-image">
                                <!--Restaurant Menu (HomePage)-->
                                <section class="fly-restaurant-menu">
                                    <!--Desert-->
                                    <div class="fly-menu-category col-sm-6 col-md-6 col-xs-12 text-center">
                                        <div class="fly-menu-image-array">
                                            <img src="{{asset($registro->url)}}" class="active-image"/>
                                        </div>
                                    </div>
                                </section>
                                <!--End Restaurant Menu (HomePage)-->
                            </div>
                            <form action="{{route('admin.alterar', $registro->id)}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!-- Col Left-->
                                <input type="hidden" name="_method" value="put">
                                <div class="fly-form-col-left">
                                    <div class="field-text">
                                        <input type="text" name="title" id="title" placeholder="Título" value="{{$registro->title}}">
                                    </div>
                                </div>
                                <!--Col Right-->
                                <div class="fly-form-col-right">
                                    <div class="field-text">
                                        <input type="file" name="url" id="url" accept=".png, .jpg, .jpeg" multiple>
                                        <input type="hidden" name="url-atual" value="{{asset($registro->url)}}">
                                    </div>
                                </div>
                                <input type="hidden" name="secao" id="secao" value="{{$registro->secao}}">
                                <div class="field-submit">
                                    <input type="submit" value="Alterar">
                                </div>
                                <!--<span class="form-info">Please note that we can only hold your reservation for 15 minutes. Sorry.</span>-->
                            </form>
                        </div>
                        <section class="fly-go-to-top fly-theme-color-4">
                            <div class="row">
                                <div class="fly-divider-space space-sm"></div>
                            </div>
                            <div class="row"><a class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-2 fly-btn-to-top" href="../deletar/{{$registro->secao}}/{{$registro->id}}"><span>Excluir</span></a>
                            </div>
                            <div class="row">
                                <div class="fly-divider-space space-sm"></div>
                            </div>
                        </section>
                    </div>
                </div>
            </section>
            <div class="fly-divider-space space-md"></div>
            <!--End Contact Form Wrap-->
        </div>
        @include('templates.bottom')
