@extends('admin.admin')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('product.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="title">Наименование</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="category_id">Выберите категорию</label>
                    <select name="category_id" class="form-control custom-select d-block w-100" id="category_id">
                        @foreach($category as $cat)
                            @if($cat->isRoot())
                                <option @if(Session::get('rem_cat_id') == $cat->id) selected @endif value="{{ $cat->id }}">{{ $cat->title }}</option>
                                @if($cat->hasChildren())
                                    @foreach($cat->children as $child)
                                        <option @if(Session::get('rem_cat_id') == $child->id) selected @endif value="{{ $child->id }}">&nbsp;----{{ $child->title }}</option>
                                        @if($child->hasChildren())
                                            @foreach($child->children as $grandson)
                                                <option @if(Session::get('rem_cat_id') == $grandson->id) selected @endif value="{{ $grandson->id }}">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;----{{ $grandson->title }}</option>
                                            @endforeach
                                        @endif
                                    @endforeach
                                @endif
                            @endif
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="depth">Толщина</label>
                    <input type="text" name="depth" id="depth" class="form-control">
                </div>

                <div class="form-group">
                    <label for="diameter">Диаметр</label>
                    <input type="text" name="diameter" id="diameter" class="form-control">
                </div>

                <div class="form-group">
                    <label for="gost">ГОСТ</label>
                    <input type="text" name="gost" id="gost" class="form-control">
                </div>

                <div class="form-group">
                    <label for="mark">Марка</label>
                    <input type="text" name="mark" id="mark" class="form-control">
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-adn">Добавить</button>
                </div>
            </form>
        </div>
    </div>
@stop
