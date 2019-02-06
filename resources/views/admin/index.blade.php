        @include('templates.top')
        <div id="main" class="site-main" role="main">
            <!--Section (Info Restaurant)-->
            <section class="fly-info-box container-min" style="background-image: url(<?php echo asset('public/images/fotos1.jpeg'); ?>);">
                <div class="container">
                    <div class="row">
                        <div class="fly-divider-space space-lg"></div>
                        <div class="fly-divider-space space-lg"></div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="fly-info-box-header">
                                <!--<i class="fly-info-box-icon flyicon-coffee"></i>-->
                                <h3 class="fly-info-box-title" style="color: white;">Área Administrativa</h3>
                                <div class="fly-info-box-divider" style="background: white;"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="fly-divider-space space-lg"></div>
                    </div>
                </div>
            </section>
            <!--End Section (Info Restaurant)-->
            <!--Restaurant Menu (HomePage)-->
            <section class="fly-restaurant-menu">
                <!--Food-->
                <div class="fly-menu-category col-sm-3 col-md-3 col-xs-12">
                    <div class="fly-menu-image-array" data-time-change="3000">
                        <!-- Image Size (Recommended 700px x 360px "Heights images be equal") -->
                        <img src="<?php echo asset('public/images/fotos1.jpeg'); ?>" alt="Drinks 1" class="active-image" />
                        <!-- TODO: IMAGENS PEGAS PELO BD -->
                    </div>
                    <div class="fly-menu-content">
                        <div class="fly-itable">
                            <div class="fly-icell">
                                <h3 class="fly-title-menu">Slider 1</h3>
                                <a href="/admin/edicao/slider1" class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3"><span>EDITAR</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Desert-->
                <div class="fly-menu-category col-sm-3 col-md-3 col-xs-12">
                    <div class="fly-menu-image-array" data-time-change="3000">
                        <!-- Image Size (Recommended 700px x 360px "Heights images be equal") -->
                        <img src="<?php echo asset('public/images/7.jpg'); ?>" alt="Desert 7" class="active-image" />
                        <!-- TODO: IMAGENS PEGAS PELO BD -->
                    </div>
                    <div class="fly-menu-content">
                        <div class="fly-itable">
                            <div class="fly-icell">
                                <h3 class="fly-title-menu">NOSSO ESPAÇO</h3>
                                <a href="/admin/edicao/espaco" class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3"><span>EDITAR</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Drinks-->
                <style>
                    img > .img_rotate1 , .image_rotate2 , .active-image{
                                width:100% !important;max-width:700px !important; height: 330px !important;
                    object-fit: cover !important; }
                </style>
                <div class="fly-menu-category col-sm-3 col-md-3 col-xs-12">
                    <div class="fly-menu-image-array" data-time-change="3000">
                        <img src="<?php echo asset('public/images/fotos18.jpeg'); ?>" alt="Food 7" class="active-image" />
                        <!-- TODO: IMAGENS PEGAS PELO BD -->
                    </div>
                    <div class="fly-menu-content">
                        <div class="fly-itable">
                            <div class="fly-icell">
                                <h3 class="fly-title-menu">DRINKS</h3>
                                <a href="/admin/edicao/drinks" class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3"><span>EDITAR</span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fly-menu-category col-sm-3 col-md-3 col-xs-12">
                    <div class="fly-menu-image-array" data-time-change="3000">
                        <!-- Image Size (Recommended 700px x 360px "Heights images be equal") -->
                        <img src="<?php echo asset('public/images/7.jpg'); ?>" alt="Desert 7" class="active-image" />
                        <!-- TODO: IMAGENS PEGAS PELO BD -->
                    </div>
                    <div class="fly-menu-content">
                        <div class="fly-itable">
                            <div class="fly-icell">
                                <h3 class="fly-title-menu">ESPECIALIDADE</h3>
                                <a href="/admin/edicao/especialidade" class="fly-btn fly-btn-1 fly-btn-md fly-btn-color-3"><span>EDITAR</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        @include('templates.bottom')
