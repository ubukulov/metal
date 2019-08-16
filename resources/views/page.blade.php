@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="title" style="font-size: 20px; margin-bottom: 20px;">
                {{ $page->title }}
            </div>

            <div>
                {!! $page->full_description !!}
            </div>
			
			@if($page->alias == 'kontakty')
				<a class="dg-widget-link" href="http://2gis.kz/almaty/firm/70000001038533690/center/76.95560216903688,43.266346950439264/zoom/16?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=bigMap">Посмотреть на карте Алматы</a><div class="dg-widget-link"><a href="http://2gis.kz/almaty/center/76.955605,43.266193/zoom/16/routeTab/rsType/bus/to/76.955605,43.266193╎KAZMETALLSTAL-ALMATY, торговая компания?utm_medium=widget-source&utm_campaign=firmsonmap&utm_source=route">Найти проезд до KAZMETALLSTAL-ALMATY, торговая компания</a></div><script charset="utf-8" src="https://widgets.2gis.com/js/DGWidgetLoader.js"></script><script charset="utf-8">new DGWidgetLoader({"width":640,"height":600,"borderColor":"#a3a3a3","pos":{"lat":43.266346950439264,"lon":76.95560216903688,"zoom":16},"opt":{"city":"almaty"},"org":[{"id":"70000001038533690"}]});</script><noscript style="color:#c00;font-size:16px;font-weight:bold;">Виджет карты использует JavaScript. Включите его в настройках вашего браузера.</noscript>
			@endif
        </div>
    </div>
@stop
