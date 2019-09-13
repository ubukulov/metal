@extends('layouts.app')
@section('content')
    <div class="main_banner" style="margin-bottom: 20px;">
        <img style="max-width: 100%;" src="{{ asset('img/banner1.jpg') }}" alt="">
    </div>
    <div class="row">
        @foreach($cats as $cat)
            @if($cat->id == 1)
                @foreach($cat->children as $child)
                <div class="col-md-4 cat-block" style="margin-bottom: 20px;">
                    <div class="cat-im">
                        <a href="{{ $child->url() }}"><img src="{{ $child->image() }}" alt=""></a>
                    </div>

                    <div class="cat-title">
                        <a href="{{ $child->url() }}">{{ $child->title }}</a>
                    </div>
                </div>
                @endforeach
            @endif
        @endforeach
    </div>
	
	<a class="dg-widget-link" href="http://2gis.kz/almaty/firm/70000001038533690/center/76.95560216903688,43.266346950439264/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.955605,43.266193/zoom/16/routeTab/rsType/bus/to/76.955605,43.266193╎KAZMETALLSTAL-ALMATY, торговая компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до KAZMETALLSTAL-ALMATY, торговая компания</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":600,"borderColor":"#a3a3a3","pos":{"lat":43.266346950439264,"lon":76.95560216903688,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"70000001038533690"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
@stop
