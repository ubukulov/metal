@extends('layouts.app')
@section('content')
    {!! Breadcrumbs::render('catalog.view', $category) !!}
    <div class="row">
        <div class="col-md-4">
            <div class="cat-img">
                <img src="{{ $category->image() }}" alt="">
            </div>
        </div>
        
        <div class="col-md-8">
            <div class="cat-title">
                <h3>{{ $category->title }}</h3>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class="table">
                <thead>
                <th>Наименование</th>
                <th>Толщина</th>
                <th>ГОСТ</th>
                <th>Марка</th>
                <th>Действие</th>
                </thead>
                <tbody>
                @foreach($category->products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->depth }}</td>
                        <td>{{ $product->gost }}</td>
                        <td>{{ $product->mark }}</td>
                        <td>
                            <button class="btn btn-adn" type="button" data-toggle="modal" data-target="#exampleModal">Узнать цену</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
