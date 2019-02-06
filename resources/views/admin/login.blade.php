        @include('templates.top')
        <div id="main" class="site-main" role="main">
            <!--Header Section-->
            <section class="fly-section-image fly-header-image fly-section-overlay fly-section-height-md parallax" style="background-image: url('public/images/bg_reservas.jpeg')">
                <div class="container">
                    <div class="row">
                        <h2 class="fly-section-image-title-after">LOGIN</h2>
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
                        @if(isset($erro))
                            <p style="color: red;">{{ $erro }}</p>
                        @endif
                        <div>
                            <form action="/admin" method="post">
                                {{ csrf_field() }}
                                <!-- Col Left-->
                                <div class="fly-form-col-left">
                                    <div class="field-text">
                                        <input type="text" name="user" id="user" placeholder="Usuário">
                                    </div>
                                </div>
                                <!--Col Right-->
                                <div class="fly-form-col-right">
                                    <div class="field-text">
                                        <input type="password" name="pass" id="pass" placeholder="Senha">
                                    </div>
                                </div>
                                <div class="field-submit">
                                    <input type="submit" name="entrar" value="Enviar">
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
