@extends('layouts.app')
@section('content')
    {!! Breadcrumbs::render('catalog.view', $category) !!}
    <div class="row">
        @foreach($category->children as $cat)
            <div class="col-md-4 cat-block" style="margin-bottom: 20px;">
                <div class="cat-im">
                    <a href="{{ $cat->url() }}"><img src="{{ $cat->image() }}" alt=""></a>
                </div>

                <div class="cat-title">
                    <a href="{{ $cat->url() }}">{{ $cat->title }}</a>
                </div>
            </div>
        @endforeach
    </div>
@stop