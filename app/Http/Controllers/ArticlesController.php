<?php namespace App\Http\Controllers;

// allow origin
//header('Access-Control-Allow-Origin: http://app:4200');
//header('Access-Control-Allow-Origin:http://app:4200');
//header('Access-Control-Allow-Origin', '127.0.0.1:4200');
// add any additional headers you need to support here


use App\Article;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use Carbon\Carbon;
use Illuminate\Support\Facades\Input;

class ArticlesController extends Controller {

	public function create() {

        $input = Request::capture();
        $allData = $input->all();
        $post_data = $allData["post"];
        $title =$post_data["title"];
        $body = $post_data["body"];


        $article = new Article();
		$article->title=$title;
		$article->body= $body;
        $article->save();

        return view('posts' , ["posts"=>$article]);
	}

    public function find($id){
        $post = Article::find($id);
        return view('posts' , ["posts"=>$post]);
    }
    public function update($id){
        $input = Input::get("post");
        $title = $input["title"];
        $body = $input["body"];
        //var_dump($title);
        //var_dump($body);

        $article  = Article::find($id);
        ////$article = new Article();
        $article->title=$title;
        $article->body= $body;
        $article->save();

        return "";
    }
    public function delete($id){
        //delete post
        Article::destroy($id);
        return "";
    }
	
	

    public function index(){
    	

    	// $obj = ;
		$articles = Article::all();

    	// $post = new stdClass();
    	// $post->id = 1;
  //   	$post->title = "My first article";
  //   	$post->body =  "article body";
  //   	$posts[] = $post;
  //   	$obj->post = $posts;
  //   	// $obj->title
		// $str = '
		// 	{
		// 		"post":[{"id":1, "title":"My first article","body":"article body" },{"id":2, "title":"My first article","body":"article body" }]
		// 	}
		// 	';

        
        // return $articles;
        return view('posts' , ["posts"=>$articles]);

    }
}
