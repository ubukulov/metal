<!doctype html>
<html lang="en">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-N66SNJJ');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TOO "KazMetallStal-Almaty"</title>
	<meta name="google-site-verification" content="6vU62eJpSFGSCW-3Lcx8pCInwjgQ3k8qU7nEgUzEcMo">

{{--    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">--}}
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
	<script src="//code.jivosite.com/widget.js" data-jv-id="TQpg5fgreN" async></script>
	<!-- Yandex.Metrika counter -->
	<script type="text/javascript" >
	   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
	   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
	   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

	   ym(55010416, "init", {
			clickmap:true,
			trackLinks:true,
			accurateTrackBounce:true,
			webvisor:true,
			ecommerce:"dataLayer"
	   });
	</script>
	<noscript><div><img src="https://mc.yandex.ru/watch/55010416" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
	<!-- /Yandex.Metrika counter -->
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-N66SNJJ" height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="wrap">
    <div class="row">
        <div class="col-md-3">
            <div class="left-side">
                <div style="padding: 20px 20px 30px 20px; text-align: center;">
                    <a href="/">
						<img width="200" src="{{ asset('img/logo.png') }}"
					</a>
                </div>
                <div id='cssmenu'>
                    <ul>
                        @foreach($cats as $cat)
                            @if($cat->isRoot())
                                <li class='has-sub'><a href='{{ $cat->url() }}'><span>{{ $cat->title }}</span></a>
                                    @if($cat->hasChildren())
                                        <ul>
                                            @foreach($cat->children->sortby('position') as $child)
                                                @if(count($child->children) == 0)
                                                    <li><a href="{{ $child->url() }}">{{ $child->title }}</a></li>
                                                @else
                                                    <li class='has-sub'><a href='{{ $child->url() }}'><span>{{ $child->title }}</span></a>
                                                        <ul>
                                                            @foreach($child->children->sortby('position') as $grandson)
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
                    <div class="container">
                        <div class="row">
                            <div class="col-md-2 lead_btn" style="padding: 30px 0px;">
                                <button id="main-lead-btn" class="btn btn-danger" data-id="0" data-toggle="modal" data-target="#modal" type="button">Оставить заявку</button>
                            </div>

                            <div class="col-md-10 top_contancts">
                                <div class="pr">
                                    <span>Приемная</span> <br>
                                    <i class="fas fa-tty"></i>&nbsp;<a href="tel:+7 (727) 222-01-28">+7 (727) 222-01-28</a>
                                </div>

                                <div class="ot_p">
                                    <span>Отдел продаж</span><br>
                                    <i class="fas fa-mobile-alt"></i>&nbsp;<a href="tel:+7 (771) 171-44-27">+7 (771) 171-44-27</a><br>
                                    <i class="fas fa-mobile-alt"></i>&nbsp;<a href="tel:+7 (771) 171-44-26">+7 (771) 171-44-26</a><br>
                                    <i class="fas fa-mobile-alt"></i>&nbsp;<a href="tel:+7 (771) 171-44-25">+7 (771) 171-44-25</a><br>
                                </div>

                                <div class="ot_z">
                                    <span>Отдел по заключению контрактов</span><br>
                                    <i class="fas fa-mobile-alt"></i>&nbsp;<a href="tel:+7 (771) 171-44-28">+7 (771) 171-44-28</a>
                                </div>

                                <div class="em">
                                    <span>Email:</span> <br>
                                    <i class="far fa-envelope"></i>&nbsp;<a href="mailto:info@metaloprokat.kz">info@metaloprokat.kz</a>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="main-menu">
                                    <nav class="nav">
                                        <a class="nav-link active" href="/">Главная</a>
                                        @foreach($pages as $page)
                                            <a class="nav-link" href="{{ $page->url() }}">{{ $page->title }}</a>
                                        @endforeach
                                    </nav>
                                </div>
                            </div>
                            <div class="col-md-6">

                            </div>
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
                <form action="{{ route('lead.post') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="first_name">Имя</label>
                        <input type="text" name="first_name" required id="first_name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="phone_number">Телефон</label>
                        <input type="text" name="phone_number" required id="phone_number" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="comments">Комментарии (* не обязательно)</label>
                        <textarea name="comments" id="comments" class="form-control" cols="30" rows="3"></textarea>
                    </div>

                    <input type="hidden" name="product_id" id="product_id" value="0">

                    <div class="form-group">
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-primary" name="lead">Отправить заявку!</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
{{--<script src="{{ asset('js/bootstrap.min.js') }}"></script>--}}
{{--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>--}}
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/my.js') }}"></script>
<!-- WhatsHelp.io widget -->
<script type="text/javascript">
    (function () {
        var options = {
            whatsapp: "+77711714427", // WhatsApp number
            company_logo_url: "//static.whatshelp.io/img/flag.png", // URL of company logo (png, jpg, gif)
            greeting_message: "Здравствуйте! Отправьте нам сообщение через любой из мессенджеров.", // Text of greeting message
            call_to_action: "Напишите на WhatsApp", // Call to action
            position: "left", // Position may be 'right' or 'left'
        };
        var proto = document.location.protocol, host = "whatshelp.io", url = proto + "//static." + host;
        var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = url + '/widget-send-button/js/init.js';
        s.onload = function () { WhWidgetSendButton.init(host, proto, options); };
        var x = document.getElementsByTagName('script')[0]; x.parentNode.insertBefore(s, x);
    })();
</script>
<!-- /WhatsHelp.io widget -->
</body>
</html>
