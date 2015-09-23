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
<section class="main">
	<div class="container">
		<h1>All tasks completed trough the website!</h1>
	</div>
</section>
<div class="container">
	<div class="col-sm-6 history"> 
	<?php $prev = null; ?>
	@foreach($all as $task)
		<div class="form-group">  
			<?php
			 	$date = date_create("$task->created_at");
				$formated_date = date_format($date,"d.m.Y");
				  if($formated_date != $prev){ ?>
				  	<div class="row"><div class="date"><?php echo $formated_date; ?></div></div>
				  <?php }
				  $prev = $formated_date;
			 ?> 
			  <div>{{$task->task_name}}</div>

		</div>
	@endforeach
	</div>
</div>
@endsection
@section('footer')

@endsection