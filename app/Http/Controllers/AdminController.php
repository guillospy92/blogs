<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\User;
use App\Post;

use Illuminate\Http\Request;

class AdminController extends Controller {


	public function desktop(){

		$post=Post::paginate(5);

      return view('desktop',compact('post'));
	}
	public function logout(){

		\Auth::logout();
		return \Redirect::route('home');
	}

	public function registrando(){

	

		


		return view ('registro');
	}

	
	public function edit ($id){

		$pos=Post::find($id);

		return view('edit',compact('pos'));

	}

	public function refresh ($id){

		$p=Post::find($id);

		$p->title=\Input::get('title');
		$p->contennt=\Input::get('contennt');
		$p->tags=\Input::get('tags');
		$p->photo=\Input::get('photo');
		$p->resluggify();
		$p->save();

		return \Redirect::route('administro');

		

	}

public function nuevo(){

	return view ('nuevo');
	}


	public function crear(){

      $p=new Post;

      	$p->title=\Input::get('title');
		$p->contennt=\Input::get('contennt');
		$p->tags=\Input::get('tags');
		$p->photo=\Input::get('photo');
		
		$p->save();

	 \Session::flash('message', $p->title. '<br> esta publicacion fue creada exitosamente');
	 return \Redirect::route('administro');

 
	}


	public function delete($id){

      
		$user = Post::findOrFail($id);
		$user->delete();

	return \Redirect::route('administro');

	}



}
