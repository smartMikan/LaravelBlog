@extends('layouts/app')
@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['PostsController@update',$post->id],'method' =>'POST','enctype' => 'multipart/form-data']) !!}
        <div class="form-group">
            {{Form::label('title','Title')}}
            {{Form::text('title',$post->title,['class'=>'form-control','placehoder'=>'Title'])}}
        </div>
        <div class="form-group">
            {{Form::label('body','Body')}}
            {{Form::textarea('body',$post->body,['id'=> 'article-ckeditor','class'=>'form-control','placehoder'=>'Body Text'])}}
        </div>
        <div class="form-group">
                {{Form::file('cover_image')}}
        </div>
        {{Form::hidden('_method','PUT')}}
        {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
        <a href="/posts/{{$post -> id}}" class="btn btn-primary float-right">Cancel</a>
    {!! Form::close() !!}
    
@endsection