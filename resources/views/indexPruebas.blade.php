<!DOCTYPE html>
<html>
<head>
  <!-- Mobirise Free Bootstrap Template, https://mobirise.com -->
  <meta name="robots" content="noindex" />
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content="Mobirise v2.6.1, mobirise.com">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="{{ asset('new/assets/images/discover-mobile-350x350-16.png') }}" type="image/x-icon">
  <meta name="description" content="bootstrap carousel">
  <title>TUS GANANCIAS ONLINE</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:700,400&amp;subset=cyrillic,latin,greek,vietnamese">
  
  
  {!!Html::style('new/assets/bootstrap/css/bootstrap.min.css')!!}
  {!!Html::style('new/assets/animate.css/animate.min.css')!!}
  {!!Html::style('new/assets/socicon/css/socicon.min.css')!!}
  {!!Html::style('new/assets/mobirise/css/style.css')!!}
  {!!Html::style('new/assets/mobirise-slider/style.css')!!}  
  {!!Html::style('new/assets/mobirise-gallery/style.css')!!}
  {!!Html::style('new/assets/mobirise/css/mbr-additional.css')!!}
  {!!Html::style('font-awesome-4.7.0/css/font-awesome.min.css')!!}
  
</head>
<body>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-PFK425"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PFK425');</script>
<!-- End Google Tag Manager -->

<section class="mbr-navbar mbr-navbar--freeze mbr-navbar--absolute mbr-navbar--transparent mbr-navbar--sticky mbr-navbar--auto-collapse" id="menu-20">
    <div class="mbr-navbar__section mbr-section">
        <div class="mbr-section__container container">
            <div class="mbr-navbar__container">
                <div class="mbr-navbar__column mbr-navbar__column--s mbr-navbar__brand">
                    <span class="mbr-navbar__brand-link mbr-brand mbr-brand--inline">
                        <span class="mbr-brand__logo"><a href="/"><img class="mbr-navbar__brand-img mbr-brand__img" src="{{ asset('new/assets/images/logo1.png') }}" alt="Mobirise"></a></span>
                        <span class="mbr-brand__name"><a class="mbr-brand__name text-white" href="/">TUS GANANCIAS ONLINE</a></span>
                    </span>
                </div>
                <div class="mbr-navbar__hamburger mbr-hamburger text-white"><span class="mbr-hamburger__line"></span></div>
                <div class="mbr-navbar__column mbr-navbar__menu">
                    <nav class="mbr-navbar__menu-box mbr-navbar__menu-box--inline-right">
                        <div class="mbr-navbar__column">
                            <ul class="mbr-navbar__items mbr-navbar__items--right mbr-buttons mbr-buttons--freeze mbr-buttons--right btn-decorator mbr-buttons--active">
                                <li class="mbr-navbar__item">
                                    <a class="mbr-buttons__link btn text-white" href="/">INICIO</a>
                                </li>
                                <li class="mbr-navbar__item">
                                    <a class="mbr-buttons__link btn text-white" href="#form1-35">CONTACTANOS</a>
                                </li>
                                <li class="mbr-navbar__item">
                                    <a class="mbr-buttons__link btn text-white" data-toggle="modal" data-target=".bs-example-modal-lg">INICIAR SESIÓN</a>
                                </li>
                                <li class="mbr-navbar__item">
                                    <a class="mbr-buttons__link btn text-white" href="#registrar">REGISTRATE</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-slider mbr-section mbr-section--no-padding carousel slide" data-ride="carousel" data-wrap="true" data-interval="5000" id="slider-38" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-section__container">
        <div>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-inner" role="listbox">
                @php
                    $n = 0;
                @endphp
                @foreach($sliders as $slider)
                    @if($n<1)
                        <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height active" style="background-image: url(sliders/{{$slider->imagen}});">
                        @php
                            $n = 1;
                        @endphp
                    @else
                        <div class="mbr-box mbr-section mbr-section--relative mbr-section--fixed-size mbr-section--bg-adapted item dark center mbr-section--full-height " style="background-image: url(sliders/{{$slider->imagen}});">
                    @endif
                    
                        <div class="mbr-box__magnet mbr-box__magnet--sm-padding mbr-after-navbar">
                            <div class=" container">
                                
                                <div class="row"><div class="col-sm-8 col-sm-offset-2">
                                    <div class="mbr-hero">
                                        <h1 class="mbr-hero__text">{{$slider->texto}}</h1>
                                        <p class="mbr-hero__subtext">{{$slider->texto}}</p>
                                    </div>
                                </div></div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <a data-app-prevent-settings="" class="left carousel-control" role="button" data-slide="prev" href="#slider-38">
                <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a data-app-prevent-settings="" class="right carousel-control" role="button" data-slide="next" href="#slider-38">
                <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</section>
<div class="row top-small">
    @include('alerts.request')
    @include('alerts.success')
    @include('alerts.errors')
</div>





<!--  EDITADO HASTA AQUI -->






<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="msg-box3-27" style="background-color: rgb(255, 255, 255);">
    
    <div class="mbr-section__container container mbr-section__container--isolated">
        <div class="mbr-header mbr-header--wysiwyg row">
            <div class="col-sm-8 col-sm-offset-2">
                <h3 class="mbr-header__text">Ultimas Rifas Publicadas</h3>
                
            </div>
        </div>
    </div>
    
    
</section>

<section class="pricing-table-1 col-4" id="pricing-table1-32" style="background-color: rgb(240, 240, 240);">
    <div class="container">
        <div class="row">
        @foreach($products as $product)
            <div>
                <div class="plan black">
                    <h3>{{$product->name}}</h3>
                    <p class="price" align="center">
                        <strong><sup>{{$product->monto}}</sup></strong>
                        <small>BsF</small>
                    </p>
                    <div><ul><li><strong>Fecha: </strong> {{$product->fecha}}</li><li><strong>Cantidad de Numeros</strong><strong></strong> {{$product->serie}}</li></ul></div>
                    @if($last)
                    <p><a href="{{route('product.showClient', $last->id)}}" class="btn btn-success">Consultar</a></p>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="content-2 col-4" id="features1-21" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-header mbr-header--center mbr-header--std-padding">
        <h2 class="mbr-header__text">Ultimas Noticias</h2>
    </div>
    <div class="container">
        <div class="row">
        @foreach($notices as $notice)
            <div>
                <div class="thumbnail">
                    <div class="image"><img class="undefined" src="{{ asset('notices/'.$notice->imagen) }}" style="width: 225px; height: 163px;"></div>
                    <div class="caption">
                        <div>
                            <h3>{{$notice->titulo}}</h3>
                            <p>{{substr($notice->contenido, 0, 220)}}.&nbsp;</p>
                        </div>
                        <p class="group"><a href="{{route('notice.showClient', $notice->id)}}" class="btn btn-default">Continuar Leyendo</a></p>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
</section>
@if($last)
<section class="mbr-section mbr-section--relative mbr-parallax-background" id="msg-box5-25" style="background-image: url(assets/images/iphone-6-458150-1920-1920x1285-73.jpg);">
    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(0, 168, 133);"></div>
    <div class="mbr-section__container mbr-section__container--isolated container">
        <div class="row">
            <div class="mbr-box mbr-box--fixed mbr-box--adapted">
                <div class="mbr-box__magnet mbr-box__magnet--top-right mbr-section__left col-sm-6">
                    <figure class="mbr-figure mbr-figure--adapted mbr-figure--caption-inside-bottom mbr-figure--full-width"><img class="mbr-figure__img" src="{{ asset('products/'.$last->imagen) }}"></figure>
                </div>
                <div class="mbr-box__magnet mbr-class-mbr-box__magnet--center-left col-sm-6 mbr-section__right">
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-header mbr-header--auto-align mbr-header--wysiwyg">
                            <h3 class="mbr-header__text">Producto Destacado</h3>
                            
                        </div>
                    </div>
                    <div class="mbr-section__container mbr-section__container--middle">
                        <div class="mbr-article mbr-article--auto-align mbr-article--wysiwyg"><p>Aprovecha la oportunidad y participa en la rifa de {{$last->name}} a realizarse este {{$last->fecha}} por un costo de BsF {{$last->monto}}, Disfruta de esta y muchas otras rifas mas logeandote en nuestra web. &nbsp;</p></div>
                    </div>
                    <div class="mbr-section__container">
                        <div class="mbr-buttons mbr-buttons--auto-align btn-inverse"><a class="mbr-buttons__btn btn btn-lg btn-default" href="{{route('product.showClient', $last->id)}}">PARTICIPAR</a></div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</section>
@endif

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="social-buttons2-30" style="background-color: rgb(240, 240, 240);">
    

    <div class="mbr-section__container container">
        <div class="mbr-header mbr-header--inline row">
            <div class="col-sm-4">
                <h3 class="mbr-header__text">Siguenos</h3>
            </div>
            <div class="mbr-social-icons mbr-social-icons--style-1 col-sm-8"><a class="mbr-social-icons__icon socicon-bg-twitter" title="Twitter" target="_blank" href="https://twitter.com/mobirise"><i class="socicon socicon-twitter"></i></a> <a class="mbr-social-icons__icon socicon-bg-facebook" title="Facebook" target="_blank" href="https://www.facebook.com/pages/Mobirise/1616226671953247"><i class="socicon socicon-facebook"></i></a> <a class="mbr-social-icons__icon socicon-bg-google" title="Google+" target="_blank" href="https://plus.google.com/u/0/+Mobirise/posts"><i class="socicon socicon-google"></i></a> <a class="mbr-social-icons__icon socicon-bg-youtube" title="YouTube" target="_blank" href="http://www.youtube.com/channel/UCt_tncVAetpK5JeM8L-8jyw"><i class="socicon socicon-youtube"></i></a> <a class="mbr-social-icons__icon socicon-bg-instagram" title="Instagram" target="_blank" href="https://instagram.com/mobirise/"><i class="socicon socicon-instagram"></i></a> <a class="mbr-social-icons__icon socicon-bg-pinterest" title="Pinterest" target="_blank" href="https://www.pinterest.com/mobirise/"><i class="socicon socicon-pinterest"></i></a>  <a class="mbr-social-icons__icon socicon-bg-behance" title="Behance" target="_blank" href="https://www.behance.net/Mobirise"><i class="socicon socicon-behance"></i></a> <a class="mbr-social-icons__icon socicon-bg-tumblr" title="Tumblr" target="_blank" href="http://mobirise.tumblr.com/"><i class="socicon socicon-tumblr"></i></a> <a class="mbr-social-icons__icon socicon-bg-linkedin" title="LinkedIn" target="_blank" href="https://www.linkedin.com/in/mobirise"><i class="socicon socicon-linkedin"></i></a> <a class="mbr-social-icons__icon socicon-bg-android" title="Google Play" target="_blank" href="https://play.google.com/store/apps/details?id=com.mobirise.mobirise"><i class="socicon socicon-android"></i></a></div>
        </div>
    </div>
</section>
<section class="mbr-section mbr-section--relative mbr-parallax-background" id="registrar">
    <div class="container">
        <div class="row" style="margin-top: 20px;" >
            <div class="col-md-12">
                <div class="panel panel-default" >
                    <div class="panel-body">
                        <!-- Tab panes -->
                        <div class="tab-content">
                            <div class="tab-pane fade in active" >
                                <div class="row top-small">
                                    <div class="col-md-6">
                                        <div class="login-panel panel panel-default">
                                            <div class="panel-body well-green">
                                                <div class="row">
                                                    <h3 class="col-md-12 text-center "><b>Registro de Nuevo Usuario</b></h3>
                                                </div>
                                                {!!Form::open(['route' => 'user.store', 'method' => 'POST'])!!}
                                                    @include('user.form')
                                                {!!Form::close()!!}
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 hidden-sm hidden-xs hidden-xs-ms">
                                        <div class="row">
                                            <div class="well well-green well-lg .text-justify">
                                                <div class="row">
                                                    <div class="col-md-8 text-center"><h3 class=""> ¿Que esperas? Unete! </h3></div>
                                                    <div class="col-md-4 ">
                                                        <span class="pull-right"><i class=" fa fa-id-card fa-2x" aria-hidden="true"></i></span>
                                                    </div>
                                                </div>
                                                
                                                <p>Se miembro de esta gran comunidad y empieza a ganar con un simple click!</p>
                                                <p>Participa en las rifas y no olvides, comenta y comparte nuestro sitio... Todos merecen tener esta gran oportunidad! </p>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 text-center small">
                                                <img class="img-responsive img-rounded" src="{{ asset('img/registrar.png') }}">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                </div>
            </div>
         </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="form1-35" style="background-color: rgb(239, 239, 239);">
    
    <div class="mbr-section__container mbr-section__container--std-padding container">
        <div class="row">
            <div class="col-sm-12">
                <div class="row">
                    <div class="col-sm-8 col-sm-offset-2" data-form-type="formoid">
                        <div class="mbr-header mbr-header--center mbr-header--std-padding">
                            <h2 class="mbr-header__text">FORMULARIO DE CONTACTO</h2>
                        </div>
                        <div data-form-alert="true"></div>
                        {!!Form::open(['route'=>'mail.store', 'method' => 'POST'])!!}
                            <input type="hidden" value="" data-form-email="true">
                            <div class="form-group">
                                {!!Form::text('name',null,['class' => 'form-control', 'placeholder' => 'Nombre', 'data-form-field'=> 'Name'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::email('email',null,['class' => 'form-control', 'placeholder' => 'Email', 'data-form-field'=>'Email'])!!}
                            </div>
                            <div class="form-group">
                                {!!Form::textarea('mensaje',null,['class' => 'form-control', 'placeholder' => 'Mensaje', 'data-form-field'=>'Message'])!!}
                            </div>
                            <div class="mbr-buttons mbr-buttons--right">
                                {!!Form::submit('Enviar',['class' => 'mbr-buttons__btn btn btn-lg btn-warning'])!!}
                            </div>
                        {!!Form::close()!!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section mbr-section--relative mbr-section--fixed-size" id="contacts2-36" style="background-color: rgb(60, 60, 60);">
    
    <div class="mbr-section__container container">
        <div class="mbr-contacts mbr-contacts--wysiwyg row">
            <div class="col-sm-6">
                <figure class="mbr-figure mbr-figure--wysiwyg mbr-figure--full-width mbr-figure--no-bg">
                    <div class="mbr-figure__map mbr-figure__map--short mbr-google-map">
                        <p class="mbr-google-map__marker" data-coordinates="40.748384,-73.9854792"></p>
                    </div>
                </figure>
            </div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-5 col-sm-offset-1">
                        <p class="mbr-contacts__text"><strong>ADDRESS</strong><br>
1234 Street Name<br>
City, AA 99999<br><br>
<strong>CONTACTS</strong><br>
Email: support@mobirise.com<br>
Phone: +1 (0) 000 0000 001<br>
Fax: +1 (0) 000 0000 002</p>
                    </div>
                    <div class="col-sm-6"><p class="mbr-contacts__text"><strong>LINKS</strong></p><ul class="mbr-contacts__list"><li><a href="https://mobirise.com/bootstrap-template/" class="text-gray">Bootstrap one page template</a><a class="mbr-contacts__link text-gray" href="https://mobirise.com/bootstrap-template/"></a></li><li><a href="https://mobirise.com/bootstrap-template/" class="text-gray">Bootstrap basic template</a><a class="mbr-contacts__link text-gray" href="https://mobirise.com/bootstrap-template/"></a></li><li><a href="https://mobirise.com/bootstrap-template/" class="text-gray">Bootstrap gallery template</a></li><li><a href="https://mobirise.com/bootstrap-template/" class="text-gray">Bootstrap responsive template</a></li><li><br></li></ul></div>
                </div>
            </div>
        </div>
    </div>
</section>
<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
    <div class="modal-dialog modal-md" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h3 class="modal-title text-center">Iniciar Sesión</h3>
            </div>
            <div class="row" style="margin-top: 20px;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-sm-8 col-xs-8">
                {!!Form::open(['route' => 'login.store', 'method' => 'POST'])!!}
                    <fieldset class="text-center">
                        <div class="form-group">
                            {{Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email'])}}
                        </div>
                        <div class="form-group">
                            {{Form::password('password', ['class' => 'form-control ', 'placeholder' => 'Contraseña'])}}
                        </div>
                    </fieldset>
                
                    </div>
                </div>
                <div class="row" style="margin-bottom: 20px;">
                    <div class="col-md-7 col-md-offset-1 col-sm-offset-1 col-xs-offset-1 col-sm-7 col-xs-7">{{Html::link('/','¿Olvido su Contraseña?', ['class'=>''])}}</div>
                    <div class="col-md-3 col-sm-3 col-xs-3">{{Form::submit('Entrar',['class' => 'btn btn-lg btn-primary     '])}}</div>
                </div>
                {!!Form::close()!!}
            </div>
        </div>
    </div>
</div>

<footer class="mbr-section mbr-section--relative mbr-section--fixed-size" id="footer1-37" style="background-color: rgb(68, 68, 68);">
    
    <div class="mbr-section__container container">
        <div class="mbr-footer mbr-footer--wysiwyg row">
            <div class="col-sm-12">
                <p class="mbr-footer__copyright"></p><p>Copyright (c) 2015 Company Name. <a href="https://mobirise.com/bootstrap-template/license.txt" class="text-gray">License</a></p><p></p>
            </div>
        </div>
    </div>
</footer>

    {!!Html::script('jquery/jquery-3.1.1.min.js')!!}
    {!!Html::script('jquery/general.js')!!}
    {!!Html::script('new/assets/bootstrap/js/bootstrap.min.js')!!}
    
    {!!Html::script('new/assets/smooth-scroll/SmoothScroll.js')!!}
    {!!Html::script('new/assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js')!!}
    {!!Html::script('new/assets/jarallax/jarallax.js')!!}
    {!!Html::script('new/assets/masonry/masonry.pkgd.min.js')!!}
    {!!Html::script('new/assets/imagesloaded/imagesloaded.pkgd.min.js')!!}
    {!!Html::script('new/assets/social-likes/social-likes.js')!!}  
    {!!Html::script('new/assets/mobirise/js/script.js')!!}
    {!!Html::script('new/assets/mobirise-gallery/script.js')!!}  
    


  
  
  
</body>
</html>