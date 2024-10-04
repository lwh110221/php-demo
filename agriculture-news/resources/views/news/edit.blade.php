@extends('layouts.app')

@section('content')
    <h1>编辑新闻</h1>
    <form action="{{ route('news.update', $news->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="title">标题:</label>
        <input type="text" name="title" id="title" value="{{ $news->title }}" required>

        <label for="content">内容:</label>
        <textarea name="content" id="content" required>{{ $news->content }}</textarea>

        <label for="author">作者:</label>
        <input type="text" name="author" id="author" value="{{ $news->author }}">

        <button type="submit">更新</button>
    </form>
@endsection
