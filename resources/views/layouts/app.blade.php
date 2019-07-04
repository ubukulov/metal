<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOO "KazMetallStal-Almaty"</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
<div id="wrap">
    <div class="row">
        <div class="col-md-3">
            <div id='cssmenu'>
                <ul>
                    @foreach($cats as $cat)
                        @if($cat->isRoot())
                            <li class='has-sub'><a href='{{ $cat->url() }}'><span>{{ $cat->title }}</span></a>
                            @if($cat->hasChildren())
                                <ul>
                                    @foreach($cat->children as $child)
                                        @if(count($child->children) == 0)
                                        <li><a href="{{ $child->url() }}">{{ $child->title }}</a></li>
                                        @else
                                            <li class='has-sub'><a href='{{ $child->url() }}'><span>{{ $child->title }}</span></a>
                                                <ul>
                                                    @foreach($child->children as $grandson)
                                                        <li><a href="{{ $grandson->url() }}">{{ $grandson->title }}</a></li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        @endif
                                    @endforeach
                                </ul>
                            @endif
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
        </div>

        <div class="col-md-9">
            <div class="content">
                <div class="header">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="main-menu">
                                <nav class="nav">
                                    <a class="nav-link active" href="#">Главная</a>
                                    <a class="nav-link" href="#">О компании</a>
                                    <a class="nav-link" href="#">Контакты</a>
                                </nav>
                            </div>
                        </div>
                        <div class="col-md-6"></div>
                    </div>
                </div>
                @yield('content')
            </div>
        </div>
    </div>
</div>
</body>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/my.js') }}"></script>
</html>
