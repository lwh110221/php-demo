@extends('layouts.app')

@section('content')
    <h1>创建新闻</h1>
    <form action="{{ route('news.store') }}" method="POST">
        @csrf
        <label for="title">标题:</label>
        <input type="text" name="title" id="title" required>

        <label for="content">内容:</label>
        <textarea name="content" id="content" required></textarea>

        <label for="author">作者:</label>
        <input type="text" name="author" id="author">

        <button type="submit">发布</button>
    </form>
@endsection
