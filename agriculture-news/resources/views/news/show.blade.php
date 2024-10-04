@extends('layouts.app')

@section('content')
    <h1>{{ $news->title }}</h1>
    <p>{{ $news->content }}</p>
    <p>作者: {{ $news->author }}</p>
    <p>发布时间: {{ $news->published_at }}</p>
    <a href="{{ route('news.index') }}">返回列表</a>
@endsection
