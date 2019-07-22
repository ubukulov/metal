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
        	@if(count($products) != 0)
            <table class="table">
                <thead>
                <th>Наименование</th>
                @if($products[0]->depth)<th>Толщина</th>@endif
                @if($products[0]->quantity)<th>Кол-во</th>@endif
                @if($products[0]->skrutka)<th>Скрутка жил</th>@endif
                @if($products[0]->diameter)<th>Диаметр</th>@endif
                @if($products[0]->width)<th>Ширина</th>@endif
                @if($products[0]->height)<th>Высота</th>@endif
                @if($products[0]->length)<th>Длина</th>@endif
                @if($products[0]->size)<th>Размер 1, мм</th>@endif
                @if($products[0]->size2)<th>Размер 2, мм</th>@endif
                @if($products[0]->size3)<th>Размер 3, мм</th>@endif
                @if($products[0]->description)<th>Описание</th>@endif
                @if($products[0]->cross_section)<th>Сечение жил</th>@endif
                @if($products[0]->rated_voltage)<th>Номинальное напряжение, кВ</th>@endif
                @if($products[0]->gost)<th>ГОСТ</th>@endif
                @if($products[0]->mark)<th>Марка</th>@endif
                <th>Цена</th>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->title }}</td>
                        @if($product->depth)<td>{{ $product->depth }}</td>@endif
                        @if($product->quantity)<td>{{ $product->quantity }}</td>@endif
                        @if($product->skrutka)<td>{{ $product->skrutka }}</td>@endif
                        @if($product->diameter)<td>{{ $product->diameter }}</td>@endif
                        @if($product->width)<td>{{ $product->width }}</td>@endif
                        @if($product->height)<td>{{ $product->height }}</td>@endif
                        @if($product->length)<td>{{ $product->length }}</td>@endif
                        @if($product->size)<td>{{ $product->size }}</td>@endif
                        @if($product->size2)<td>{{ $product->size2 }}</td>@endif
                        @if($product->size3)<td>{{ $product->size3 }}</td>@endif
                        @if($product->description)<td>{{ $product->description }}</td>@endif
                        @if($product->cross_section)<td>{{ $product->cross_section }}</td>@endif
                        @if($product->rated_voltage)<td>{{ $product->rated_voltage }}</td>@endif
                        @if($product->gost)<td>{{ $product->gost }}</td>@endif
                        @if($product->mark)<td>{{ $product->mark }}</td>@endif
                        <td>
                            <button class="btn btn-info" type="button" onclick="javascript:setProduct({{ $product->id }});" data-id="{{ $product->id }}" data-toggle="modal" data-target="#modal">Узнать цену</button>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
            @endif
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            {!! $category->short_description !!}
        </div>
    </div>
@stop
