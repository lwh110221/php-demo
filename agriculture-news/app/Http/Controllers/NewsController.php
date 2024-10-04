<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    // 显示所有新闻列表
    public function index()
    {
        $news = News::all();
        return view('news.index', ['news' => $news]);
    }

    // 显示创建新闻表单
    public function create()
    {
        return view('news.create');
    }

    // 保存新创建的新闻
    public function store(Request $request)
    {
        $news = new News;
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = $request->author;
        $news->published_at = now();
        $news->save();

        return redirect('/news');
    }

    // 显示特定新闻内容
    public function show($id)
    {
        $news = News::find($id);
        return view('news.show', ['news' => $news]);
    }

    // 显示编辑新闻表单
    public function edit($id)
    {
        $news = News::find($id);
        return view('news.edit', ['news' => $news]);
    }

    // 更新新闻信息
    public function update(Request $request, $id)
    {
        $news = News::find($id);
        $news->title = $request->title;
        $news->content = $request->content;
        $news->author = $request->author;
        $news->save();

        return redirect('/news');
    }

    // 删除新闻
    public function destroy($id)
    {
        News::destroy($id);
        return redirect('/news');
    }
}

