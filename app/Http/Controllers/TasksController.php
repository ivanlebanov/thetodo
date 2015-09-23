<?php

namespace App\Http\Controllers;

use App\Task;
use \Carbon\Carbon;
use Auth;
use Input;
use Response;
use Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class TasksController extends Controller
{
    public function index(){
		if (Auth::check()) {
			$user = Auth::user();

			$allTasks = Task::where('user_id', '=', $user->id)->get();
			$tobecompleted = array();

			foreach ($allTasks as $task) {
				if(!$task->completed){
					$tobecompleted[] = $task; 
				}
			}

			return view('tasks.index', compact('user', 'tobecompleted'));

		}else{

			return view('welcome');

		}
    	
    }
    public function store(){
    	$user = Auth::user();
    	$input = Request::get('task_name');
    	$task = new Task;
    	$task->task_name = $input;
    	$task->user_id = $user->id;
    	$task->save();

    	return redirect('/');
    }

    public function postform(){
	    $data = Input::get('data');
	    $id = Input::get('id');
	    $task = Task::find($id);
	    if($data =='true'){
	    	$task->completed = true;
	    }else{
	    	$task->completed = false;
	    }

	    $task->save();

    	return Response::json(array('success' => true,'id' => $id, 'data'   => $data)); 
    }
    public function history(){
    	$user = Auth::user();
    	$all = Task::where('user_id', '=', $user->id)->get();
    	$all = $all->sortByDesc('created_at');

    	return view('tasks.history', compact('user', 'all'));
    }
}
