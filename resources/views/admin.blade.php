@if(isset(Auth::user()->email))
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ $patch }}/resources/css/style.css">
    <title>Admin</title>
  </head>
  <body>
    <div class="wrap pa10">
    	<div class="pa10 text-right"><a href="{{ url('sign-out')}}"><span class="fa fa-sign-out alert alert-info" title="sign out"></span></a>
    	<form action="{{ url('/admin')}}" method="POST">
    		{{ csrf_field() }}
    		<div class="pa10"><input type="text" name="record" class="form-control" placeholder="Pavadinimas"></div>
    		<div class="pa10">
    			<select name="size" class="form-control">
    				<option value="">Pasirinki dydi</option>
    				<option value="1">1</option>
    				<option value="2">2</option>
    				<option value="3">3</option>
    				<option value="4">4</option>
    				<option value="5">5</option>
    			</select>
    		</div>
    		<div class="pa10"><input type="text" name="code" class="form-control" placeholder="Prekes kodas"></div>
    		<div class="pa10"><input type="text" name="rcode" class="form-control" placeholder="Kodas rivileje"></div>
    		<div class="pa10"><input type="text" name="bcode" class="form-control" placeholder="Barkodas"></div>

    		<div class="pa10"><input type="submit" name="add" value="Ikelti" class="btn btn-info form-control"></div>
    	</form>
    	<div class="pa10 alert alert-info">
			    		<div class="pa10 row" style="font-size: 12px;">
			    			<div class="col-sm-4">Pavadinimas</div>
			    			<div class="col-sm-2">Kg</div>
			    			<div class="col-sm-2">Prekes kodas</div>
			    			<div class="col-sm-2">Kodas rivileje</div>
			    			<div class="col-sm-2">Barkodas</div>
			    		</div>
    		    @if(!empty($titles))
			    	@foreach($titles as $rec)
			    		<div class="pa10 row">
			    			<div class="col-sm-4">{{ $rec->title }}</div>
			    			<div class="col-sm-2">{{ $rec->size }}</div>
			    			<div class="col-sm-2">{{ $rec->code }}</div>
			    			<div class="col-sm-2">{{ $rec->rcode }}</div>
			    			<div class="col-sm-2">{{ $rec->bcode }}</div>
			    		</div>
			    	@endforeach
			    @endif
    	</div> 
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>
@else
	shit hapens
@endif