@extends('layouts.app')
@section('content')
    <div class="top_cats">
        <div class="row">
            @foreach($cats as $cat)
                @if($cat->id == 1)
                    @foreach($cat->children as $child)
                        <div class="col-md-4 cat-block">
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
    </div>
@stop
