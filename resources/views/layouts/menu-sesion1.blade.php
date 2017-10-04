<div class="navbar navbar-default navbar-fixed-top" role="navigation">
    <div class="container"> 
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span> 
            </button>
            <img class="" height="50px" src="{{ asset('new/assets/images/logo1.png') }}" alt="Mobirise">
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav">
                <li><a href="/sistema">Inicio</a></li>
                <li><a href="/purchase">Mis Rifas</a></li>
                <li><a href="/product/catalog">Catalogo de Rifas</a></li>
                @if(Auth::User()->type=='admin')
                    <li><a href="/notifypayment">Pagos</a></li>
                    <li><a href="/product">Productos</a></li>
                    <li><a href="/slider">Slider</a></li>
                    <li><a href="/notice">Notice</a></li>
                @endif
             </ul>
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <span class="glyphicon glyphicon-user"></span> 
                        <strong>{!! Auth::user()->name !!}</strong>
                        <span class="glyphicon glyphicon-chevron-down"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <div class="navbar-login">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <p class="text-center">
                                            <span class="glyphicon glyphicon-user icon-size"></span>
                                        </p>
                                    </div>
                                    <div class="col-lg-8">
                                        <p class="text-left">
                                            {!!Html::linkRoute('user.show',$title = 'Mi Perfil', $parameters = [ Auth::user()->id ], $attributes = ['class'=> 'btn btn-primary btn-block btn-sm'])!!}
                                        </p>
                                        <p class="text-left">
                                            {!!Html::link('/bankaccount', $title = 'Mis Cuentas Bancarias', $attributes = array('class'=> 'btn btn-primary btn-block btn-sm'), $secure = null)!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="navbar-login navbar-login-session">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <p>
                                            {!!Html::link('/logout', $title = 'Cerrar Sesion', $attributes = array('class'=> 'btn btn-danger btn-block'), $secure = null)!!}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</div>
<style type="text/css">
	.navbar-login
{
    width: 305px;
    padding: 10px;
    padding-bottom: 0px;
}

.navbar-login-session
{
    padding: 10px;
    padding-bottom: 0px;
    padding-top: 0px;
}

.icon-size
{
    font-size: 87px;
}
</style>