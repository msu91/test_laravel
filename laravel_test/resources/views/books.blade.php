<!-- resources/view/books.blade.php -->

@extends('layouts.app')

@section('content')
    
    <!-- Bootstrapの定形コード・・・ -->
    
    <div class="panel-body">
        <!-- バリデーションエラーの表示に使用 -->
        @include('common.errors')
        <!-- バリデーションエラーの表示に使用 -->
        
        <!-- 本登録フォーム -->
        <form action="{{ url('books') }}" method="POST" class="form-horizontal">
            {{ csrf_field()}}
            
            <!-- 本のタイトル -->
            <div class="form-group">
                <label for="book" class="col-sm-3 control-label">
                    Book
                </label>
                <div class="col-sm-6">
                    <input type="text" name="item_name" id="book-name" class="form-control" />
                </div>
            </div>
            <div class="form-group">
                <div class="col-sm-offset-3 col-sm-6">
                    <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Save
                    </button>
                </div>
            </div>
        </form>
    </div>
    
    <!-- Book: 既に登録されている本のリスト -->
@endsection