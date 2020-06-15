<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Tweet;
use App\Models\Comment;
use App\Models\Follower;

class TweetsConroller extends Controller
{
    // 一覧表示
    public function index()
    {
      $user = auth()->user();
      $follow_ids = $follower->followingIds($user->id);
      // followed_idだけ抜き出す
      $following_ids = $follow_ids->pluck('followed_id')->toArray();

      $timelines = $tweet->getTimelines($user->id, $following_ids);

      return view('tweets.index', [
        'user' => $user,
        'timelines' => $timelines
      ]);
    }

    // 新規ツイート入力画面
    public function create()
    {
        //
    }

    // 新規ツイート投稿処理
    public function store(Request $request)
    {
        //
    }

    // ツイート詳細画面
    public function show($id)
    {
        //
    }

    // ツイート編集画面
    public function edit($id)
    {
        //
    }

    // ツイート編集処理
    public function update(Request $request, $id)
    {
        //
    }

    // ツイート削除処理
    public function destroy($id)
    {
        //
    }
}