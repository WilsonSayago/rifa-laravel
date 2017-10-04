<style type="text/css">
li,a,img,ul,div,span {
  background: transparent;
  border: 0;
  margin: 0;
  padding: 0;
  vertical-align: baseline;
}
.prodlist { list-style: none; margin: 20px; }
.prodlist li {
  display: inline-block; position: relative; color: #eee; cursor: pointer; text-shadow: 1px 1px rgba(0,0,0,0.3); margin-bottom: 3%; }
.prodlist li a { color: #FB9337; }
.prodlist li .thumb { padding: 5px; border: 3px solid #ddd; }
.prodlist li .thumb img { width: 225px; height: 163px;}
.prodlist li .content { position: absolute; top: 5px; left: 5px; width: 225px; height: 163px; overflow: hidden; }
.prodlist li .contentinner {  background-color: rgba(76,76,76,1); opacity:0.9; padding: 5px 7px; margin-top: 132px; height: 163px; }
.prodlist li .title { color: #fff; font-family:Arial,Helvetica,sans-serif; font-size: 17px; }
.prodlist li .title:hover { color: #FB9337; }
.prodlist li .price { color: #fff; font-weight: bold; float: right; font-size: 17px;}
.prodlist li .by { font-size: 12px; font-style: italic; margin-top:8px; }
.prodlist li .desc { font-size: 12px; margin: 5px 0; line-height: 16px; }
</style>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript">
  jQuery(document).ready(function(){
  jQuery('.prodlist li').hover(function(){
    jQuery(this).find('.contentinner').stop().animate({marginTop: 0});
  },function(){
    jQuery(this).find('.contentinner').stop().animate({marginTop: '132px'});
  });
  });
</script>
<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "934e8786-d36f-4688-9db4-41042cefd03d"});</script>
<script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script>


@extends('layouts.cliente')
@section('content')
  <div class="row top-small">
    @include('alerts.request')
    @include('alerts.success')
    @include('alerts.errors')
  </div>

<div class="row" style="margin-top:50px">
    <h2><b>Noticias</b></h2>
</div>
  <ul class="prodlist">
  @foreach($notices as $notice)
    <li class="one_third">
        <div class="thumb"><a href=""><img src="{{ asset('notices/'.$notice->imagen) }}" alt="" /></a></div>
        <div class="content">
            <div class="contentinner">
                <div>
                    <a href="" class="title">
                   		{{$notice->titulo}}
                    </a>
                </div>
                <p class="desc">fecha: {{$notice->fecha}}</p>
                <p>{!!Html::linkRoute('notice.showClient',$title = '', $parameters = [$notice->id], $attributes = ['class'=> 'glyphicon glyphicon-search btn btn-success'])!!}</p>
            </div>
        </div>
    </li>
  @endforeach 
  </ul>
    <div class="col-md-10">
      {!! $notices->render()!!}
    </div>

@stop