@extends('layouts.app')

@section('content')
    <h2>新闻列表</h2>
    <ul>
        @foreach ($news as $item)
            <li>
                <h3>{{ $item->title }}</h3>
                <p>{{ $item->content }}</p>
                <form action="{{ route('news.destroy', $item->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">删</button>
                </form>
            </li>
        @endforeach
    </ul>
@endsection
