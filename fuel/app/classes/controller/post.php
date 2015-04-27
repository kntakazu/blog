<?php

class Controller_Post extends Controller
{
    public function action_index()
    {
	$data = array();
	// Model_Crudから継承されたModel_Postの静的メソッドであるfind_allを呼び出す
	$data['rows'] = Model_Post::find_all();
	// 各レコードのデータをオブジェクトに格納し、そのオブジェクトの配列を返す
	return View::forge('post/list', $data);
    }

    public function action_auto_insert()
    {
	for ($i = 0; $i < 10; $i++) {
	    // Model_Postクラスのオブジェクトを作成
	    $post = Model_Post::forge();

	    // 投入用のダミーデータを配列として作成
	    $row = array();
	    $row['title']   = $i . '番目の件名';
	    $row['summary'] = $i . '番目の投稿の概要';
	    $row['body']    = 'これは'. $i . '番目の投稿です' . "\n" . 'テストで自動投稿';

	    // 配列からModel_Postクラスのオブジェクトに値を設定する
	    $post->set($row);

	    // オブジェクトを保存
	    $post->save();
	}
	echo 'End';
    }

   public function action_form()
   {
	return View::forge('post/form');
   }

   public function action_save()
   {
	$form = array();
	$form['title']   = Input::post('title');
	$form['summary'] = Input::post('summary');
	$form['body']    = Input::post('body');
	$post = Model_Post::forge();
	$post->set($form);
	// saveメソッドでデータベースに登録
	$post->save();
	// http://localhost:3000/postにリダイレクト
	Response::redirect('post');
   }
}
