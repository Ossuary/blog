@extends('layouts.admin')

@section('title', 'Create New Post')

@section('stylesheets')
    {!! Html::style('css/parsley.css') !!}
    {!! Html::style('css/select2.min.css') !!}
    <script src="//cdn.tinymce.com/4/tinymce.min.js"></script>

    <script>
        tinymce.init({
            selector: 'textarea',
            plugins: "link code codesample image imagetools",
            //menu:{
            //view: {title: 'Edit', items: 'cut, copy, paste'}
            //}
        });
    </script>

@endsection

@section('content')
    <div id="wrapper">
        <div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1>Create New Post</h1>
                        <hr>

                        {!! Form::open(['route' => 'posts.store', 'data-parsley-validate' => '', 'files' => true]) !!}

                        <div class="form-group">
                            {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                            {!! Form::text('title', null, ['class' => 'form-control', 'required' => '', 'maxlength' => 255]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slug', 'Slug:', ['class' => 'control-label']) !!}
                            {!! Form::text('slug', null, ['class' => 'form-control', 'required' => '', 'minlength' => 5, 'maxlength' => 255]) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', 'Post category:', ['class' => 'control-label']) !!}
                            <select name="category_id" class="form-control">
                                @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('tags', 'Tags:', ['class' => 'control-label']) !!}
                            <select name="tags[]" class="form-control select2-multi" multiple="multiple">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            {!! Form::label('featured_image', 'Upload Featured Image', ['class' => 'control-label']) !!}
                            {!! Form::file('featured_image') !!}
                        </div>

                        <div class="form-group">
                            {!! Form::label('body', 'Post body:', ['class' => 'control-label']) !!}
                            {!! Form::textarea('body', null,['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::submit('Create Post', ['class' => 'btn btn-success btn-lg btn-block']) !!}
                        </div>

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    {!! Html::script('js/parsley.min.js') !!}
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();

    </script>
@endsection