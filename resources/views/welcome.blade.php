@extends('layouts.app')
@section('content')
    <div class="main_slider">
        <div class="slider">
            <div class="slider_content">
                <img style="max-width: 100%;" src="{{ asset('img/banner3.png') }}" alt="">
            </div>
            <div class="slider_content">
                <a href="https://docs.google.com/forms/d/1T9EO3zR-2ljnY3t6kN1YwfepleY5awKgWOl_f4tzZPs/viewform?edit_requested=true" target="_blank">
                    <img style="max-width: 100%;" src="{{ asset('img/banner4.png') }}" alt="">
                </a>
            </div>
            <div class="slider_content">
                <a href="http://metaloprokat.kz/catalog/alyuminievaya-plita-i-list" target="_blank">
                    <img style="max-width: 100%;" src="{{ asset('img/banner5.jpg') }}" alt="">
                </a>
            </div>
        </div>
    </div>

    <div class="spec_pred">
        <h2>Спецпредложения</h2>
        <div class="spec_slider">
            <div>
                <div class="spec_txt">
                    <p>Размер:1500х3000мм</p>
                    <p>Цена от 16 000 тенге за лист</p>
                </div>
                <div>
                    <a href="http://metaloprokat.kz/catalog/asbocementnyy-list" target="_blank">
                        <img src="{{ asset('img/spec/asbest.jpg') }}" alt="">
                    </a>
                </div>

            </div>
            <div>
                <div class="spec_txt">
                    <p>Диаметр трубы и толщина стенки 133*4,5мм.</p>
                    <p>Цена от 4 965 тенге/м</p>
                </div>
                <div>
                    <a href="http://www.metaloprokat.kz/catalog/vus-izolyaciya" target="_blank">
                        <img src="{{ asset('img/spec/vuz_izolyacia.jpg') }}" alt="">
                    </a>
                </div>
            </div>
            <div>
                <div class="spec_txt">
                    <p>Лист алюминиевый гладкий 2*1000*2000</p>
                    <p>Цена 13 804 тг с НДС за один лист.</p>
                </div>
                <div>
                    <a href="http://www.metaloprokat.kz/catalog/vus-izolyaciya" target="_blank">
                        <img src="{{ asset('img/spec/list_al.jpg') }}" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="top_cats">
        <h2>Все категории</h2>
        <div class="row">
            @foreach($cats as $cat)
                <div class="col-md-3 text-center">
                    <div class="cat-block mb-2">
                        <div class="cat-im">
                            <a href="{{ $cat->url() }}"><img src="{{ $cat->image() }}" alt="{{ $cat->title }}"></a>
                        </div>

                        <div class="cat-title">
                            <a href="{{ $cat->url() }}">{{ $cat->title }}</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <div class="certificates">
        <h2>Сертификаты</h2>

        <div class="row">
            <div class="col-md-6">
                <a href="http://metaloprokat.kz/page/kalkulyator">
                    <img style="max-width: 100%;" src="{{ asset('img/calc.jpg') }}" alt="">
                </a>
            </div>

            <div class="col-md-6">
                <div class="certs">
                    <div class="cert_slider">
                        <div>
                            <img src="{{ asset('img/certs/1.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('img/certs/1_kz.jpg') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="delivery" style="margin-bottom: 30px;">
        <div class="del_slider">
            <div class="d_slider_c">
                <img src="{{ asset('img/tex1.jpg') }}" alt="">
            </div>
            <div class="d_slider_c">
                <img src="{{ asset('img/tex2.jpg') }}" alt="">
            </div>
            <div class="d_slider_c">
                <img src="{{ asset('img/tex3.jpg') }}" alt="">
            </div>
        </div>
    </div>
@stop
