@extends('layouts.admin')

@section('title', 'Edit Post')

@section('stylesheets')
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

                    {!! Form::model($post, ['route' => ['posts.update', $post->id], 'method' => 'PUT', 'files' => true]) !!}

                    <div class="col-md-8">

                        <div class="form-group">
                            {!! Form::label('title', 'Title:', ['class' => 'control-label']) !!}
                            {!! Form::text('title', null, ['class' => 'form-control input-lg']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('slug', 'URL:', ['class' => 'control-label']) !!}
                            {!! Form::text('slug', null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('category_id', 'Category:', ['class' => 'control-label']) !!}
                            {!! Form::select('category_id', $categories, null, ['class' => 'form-control']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('tags', 'Tags:', ['class' => 'control-label']) !!}
                            {!! Form::select('tags[]', $tags, null, ['class' => 'form-control select2-multi', 'multiple' => 'multiple']) !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('featured_image', 'Update Image:', ['class' => 'control-label']) !!}
                            {!! Form::file('featured_image') !!}
                        </div>
                        <div class="form-group">
                            {!! Form::label('body', 'Body:', ['class' => 'control-label']) !!}
                            {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
                        </div>

                    </div>

                    <div class="col-md-4">
                        <div class="well">
                            <dl class="dl-horizontal">
                                <dt>Created at:</dt>
                                <dd>{{ date('M j, Y H:i', strtotime($post->created_at)) }}</dd>
                            </dl>

                            <dl class="dl-horizontal">
                                <dt>Last Updated:</dt>
                                <dd>{{ date('M j, Y H:i', strtotime($post->updated_at)) }}</dd>
                            </dl>

                            <hr>

                            <div class="row">

                                <div class="col-sm-6">
                                    {!! Html::linkRoute('posts.show', 'Cancel', array($post->id), array('class' => 'btn btn-danger btn-block')) !!}
                                </div>

                                <div class="col-sm-6">
                                    {!! Form::submit('Save Changes', ['class' => 'btn btn-success btn-block']) !!}
                                </div>

                            </div>

                        </div>
                    </div>

                    {!! Form::close() !!}

                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    {!! Html::script('js/select2.min.js') !!}

    <script type="text/javascript">
        $('.select2-multi').select2();
        $('.select2-multi').select2().val({!! json_encode($post->tags()->getRelatedIds()) !!}).trigger('change');
    </script>
@endsection