        @include('templates.top')
        <div id="main" class="site-main" role="main">
            <!--Header Section-->
            <section class="fly-section-image fly-header-image fly-section-overlay fly-section-height-md parallax" style="background-image: url(<?php echo asset('public/images/bg_reservas.jpeg'); ?>)">
                <div class="container">
                    <div class="row">
                        <h2 class="fly-section-image-title-after">Adicionar Fotos</h2>
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
                            <form action="/admin/edicao/adicionar/{{$secao}}" method="post" enctype="multipart/form-data">
                                {{ csrf_field() }}
                                <!-- Col Left-->
                                <div class="fly-form-col-left">
                                    <div class="field-text">
                                        <input type="text" name="title" id="title" placeholder="Título">
                                    </div>
                                </div>
                                <!--Col Right-->
                                <div class="fly-form-col-right">
                                    <div class="field-text">
                                        <input type="file" name="url" id="url" accept=".png, .jpg, .jpeg" multiple required>
                                    </div>
                                </div>
                                <input type="hidden" name="secao" id="secao" value="{{$secao}}">
                                <div class="field-submit">
                                    <input type="submit" value="Adicionar">
                                </div>
                                <!--<span class="form-info">Please note that we can only hold your reservation for 15 minutes. Sorry.</span>-->
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <div class="fly-divider-space space-md"></div>
            <!--End Contact Form Wrap-->
        </div>
        @include('templates.bottom')
