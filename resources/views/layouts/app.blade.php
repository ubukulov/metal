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
            <div class="left-side">
                <div style="padding: 20px 20px 30px 20px; text-align: center;">
                    <h4>TOO <br> "KazMetallStal-Almaty"</h4>
                </div>
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
        </div>

        <div class="col-md-9">
            <div class="content">
                <div class="header">
                    <div class="row">
                        <div class="col-md-9">
                            <ul class="top-phones">
                                <li><a href="tel:+7 (727) 222-01-28">+7 (727) 222-01-28</a></li>
                                <li><a href="tel:+7 (771) 171-44-25">+7 (771) 171-44-25</a></li>
                                <li><a href="tel:+7 (771) 171-44-26">+7 (771) 171-44-26</a></li>
                                <li><a href="tel:+7 (771) 171-44-27">+7 (771) 171-44-27</a></li>
                                <li><a href="tel:+7 (771) 171-44-28">+7 (771) 171-44-28</a></li>
                            </ul>
                        </div>

                        <div class="col-md-3" style="padding: 20px 10px;">
                            <button style="width: 80%;" class="btn btn-danger" data-id="0" data-toggle="modal" data-target="#modal" type="button">Оставить заявку</button>
                        </div>
                    </div>

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
                        <div class="col-md-6">

                        </div>
                    </div>
                </div>
                @yield('content')

                <div class="row">
                    <div class="col-md-12">
                        <div class="footer">
                            <div class="row">
                                <div class="col-md-4">
                                    <div style="padding: 10px 0;">
                                        TOO "Kazmetallstal-Almaty"
                                    </div>
                                    <div>2019&nbsp;&copy;&nbsp;Все правы защищены</div>
                                </div>

                                <div class="col-md-8">
                                    <div class="footer-phones" style="text-align: right; padding: 0px 20px;">
                                        <a href="tel:+7 (727) 222-01-28" style="margin-right: 20px;">+7 (727) 222-01-28</a>
                                        <a href="tel:+7 (771) 171-44-25">+7 (771) 171-44-25</a><br>
                                        <a href="tel:+7 (771) 171-44-26" style="margin-right: 20px;">+7 (771) 171-44-26</a>
                                        <a href="tel:+7 (771) 171-44-27">+7 (771) 171-44-27</a><br>
                                        <a href="tel:+7 (771) 171-44-28">+7 (771) 171-44-28</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
<!-- Modal -->
<div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <span class="modal-title" id="exampleModalLabel">Оставьте заявку</span>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="form-group">
                    <label for="first_name">Имя</label>
                    <input type="text" name="first_name" id="first_name" class="form-control">
                </div>

                <div class="form-group">
                    <label for="phone_number">Телефон</label>
                    <input type="text" name="phone_number" id="phone_number" class="form-control">
                </div>

                <div class="form-group">
                    <label for="comments">Комментарии (* не обязательно)</label>
                    <textarea name="comments" id="comments" class="form-control" cols="30" rows="3"></textarea>
                </div>

                <input type="text" name="product_id" id="product_id" value="0">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Отправить заявку!</button>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/my.js') }}"></script>
</html>
