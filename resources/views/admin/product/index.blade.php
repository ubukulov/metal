@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('product.create') }}" class="btn btn-adn">Добавить</a>
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Наименование</th>
                <th>Толщина</th>
                <th>Диаметр</th>
                <th>ГОСТ</th>
                <th>Марка</th>
                <th>Действие</th>
                </thead>
                <tbody>
                @foreach($products as $product)
                    <tr>
                        <td>{{ $product->id }}</td>
                        <td>{{ $product->title }}</td>
                        <td>{{ $product->depth }}</td>
                        <td>{{ $product->diameter }}</td>
                        <td>{{ $product->gost }}</td>
                        <td>{{ $product->mark }}</td>
                        <td>{{ $product->created_at }}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
            {{ $products->links() }}
        </div>
    </div>
@stop
