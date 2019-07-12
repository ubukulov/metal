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
        </div>
    </div>
@stop
