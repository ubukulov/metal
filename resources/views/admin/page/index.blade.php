@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <a href="{{ route('page.create') }}" class="btn btn-adn">Добавить</a>
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Наименование</th>
                <th>Алиас</th>
                <th>Действие</th>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <td>{{ $page->id }}</td>
                        <td>{{ $page->title }}</td>
                        <td>{{ $page->alias }}</td>
                        <td></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop
