@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('category.create') }}" class="btn btn-adn">Добавить</a>
            <table class="table">
                <thead>
                    <th>ID</th>
                    <th>Наименование</th>
                    <th>Дата</th>
                    <th>Действие</th>
                </thead>
                <tbody>
                    @foreach($category as $cat)
                    <tr>
                        <td>{{ $cat->id }}</td>
                        <td>{{ $cat->title }}</td>
                        <td>{{ $cat->created_at }}</td>
                        <td>
                            <a href="{{ route('category.edit', ['id' => $cat->id]) }}"><i class="fa fa-edit"></i>&nbsp;Ред.</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
