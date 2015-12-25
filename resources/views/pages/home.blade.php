@extends('default')

@section('content')

	<div class="researchContent">

	<h3>Recherche ton Ordinateur près de chez toi</h3>	

		<form method="POST" action="">
		    {!! csrf_field() !!}

		    <div class="form-group col-sm-5">
		        <label for="Marque"></label>
				<select class="form-control" name="marque" id="marque" placeholder="Marque">
					<option style="color: rgb(210,210,210);">--Marque--</option>
					<!--<option value="female">Female</option>-->
				</select>
		    </div>

		    <div class="form-group col-sm-4">
		        <label for="Ville"></label>
				<select class="form-control" name="ville" id="ville" placeholder="ville">
					<option style="color: rgb(210,210,210);">--Ville--</option>
					<!--<option value="female">Female</option>-->
				</select>
		    </div>

		    <div class="form-group col-sm-3">
		        <button class="btn btn-danger" type="submit">Recherche</button>
		    </div>
			
		</form>
	
	</div>

	<div class="aboutContent">
		

	</div>

@endsection