@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('page.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Наименование</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="keywords">Ключевые слова</label>
                    <textarea name="keywords" id="keywords" cols="30" rows="3" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="short_description">Короткое описание</label>
                    <textarea name="short_description" id="short_description" cols="30" rows="3" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="full_description">Полное описание</label>
                    <textarea name="full_description" id="editor1" cols="30" rows="3" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <label for="active">Опуб.</label>
                    <select name="active" id="active" class="form-control">
                        <option value="1">Да</option>
                        <option value="0">Нет</option>
                    </select>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-adn">Добавить</button>
                </div>
            </form>
        </div>
    </div>
@stop
