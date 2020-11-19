<!DOCTYPE html>
<html>
<head>
	<title> Lasha Sulukhia </title>

	<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ asset('assets/fonts/font-awesome/font-awesome.min.css') }}" 
    rel="stylesheet">

</head>
<body>
	<br>
	<h1 style="text-align: center;" >კომენტარების სექცია</h1>
	<br>
	<div class="container" align="center">
		<a href="{{ route('adminindex') }}">საინფორმაციო ცხრილზე დაბრუნება</a>
	</div>
	<br>
	<div class="container">
		<label><b>არჩეული თემა</b></label>
		<div class="mb-4 card p-4">
			<div class="card-title"><b>სათაური: </b>{{ $product->title }}</div>
			<div class="card-text"><b>აღწერა: </b>{{ $product->description }}</div>
		</div>

		<form class="mb-4" method="POST" action="{{ route('adminstorecomment') }}">
			@csrf
			<input type="hidden" name="id" value="{{ $product->id }}">
			<label><b>კომენტარი</b></label>
			<textarea class="form-control" placeholder="დატოვეთ კომენტარი აქ" name="comment"></textarea>
			<br>
			<button>დადასტურება</button>
		</form>

		@foreach ($comments as $comm)
			<div class="mb-4 card p-4">
				<div class="card-text">{{ $comm->comment }}</div>
				<small>{{ $comm->created_at }}</small>
			</div>
		@endforeach
	</div>
</body>
</html>