@extends('app')

@section('content')
<header>
	<div class="container">
	    <div class="title">todo</div>
	    <nav class="menu">
	    	<a href="/history">History</a>
		    <a href="../auth/logout">Sign out</a>
	    </nav>
	</div>
</header>
@if(count($tobecompleted) > 0)
<section class="main">
	<div class="container">
		<h1>Hey <strong>{{$user->name}},</strong><br> Your tasks needs attention!</h1>
		{!! Form::open() !!}
			{!! Form::text('task_name', null, ['class'=> 'form-input-text', 'placeholder' => 'Create a task']) !!}
			{!! Form::submit('Add task', ['class'=> 'form-button']) !!}
		{!! Form::close() !!}
	</div>
</section>
@else
<section class="main full">
	<div class="container">
		<h1>Hey <strong>{{$user->name}},</strong><br> Isn't it time to get more stuff done?</h1>
		{!! Form::open() !!}
			{!! Form::text('task_name', null, ['class'=> 'form-input-text', 'placeholder' => 'Create a task']) !!}
			{!! Form::submit('Add task', ['class'=> 'form-button']) !!}
		{!! Form::close() !!}
	</div>
</section>
@endif
@if(count($tobecompleted) > 0)
<div class="container">
	<div class="col-sm-6"> 
		@foreach($tobecompleted as $task)
		<div class="form-group">  
			@if($task->completed)
				<input type="checkbox" class="checkbox" id="{{$task->id}}" checked> 
			@else
				<input type="checkbox" id="{{$task->id}}"> 
			@endif
			<label for="{{$task->id}}">
			<span></span>
			<span class="check"></span>
			<span class="box"></span>
			{{$task->task_name}}
			</label>
		</div>
		@endforeach
	</div>
</div>
@endif
@endsection
@section('footer')
<script src="http://code.jquery.com/jquery-1.11.3.js" type="text/javascript"></script>
{!! HTML::script('js/main.js') !!} 
@endsection