@extends('default')


@section('content')
	
	<div class="portailContent" ng-app="offreApp" ng-controller="offreController">
		<div class="col-sm-5 portailOffers oldOffers">
			<div class="offerTitle"><h2>Anciennes Offres</h2></div>

			@if(count($offres)==0)
			<div class="listOffre">
				<h4 style="color:rgb(200,200,200);">Aucun offre validé</h4>  
			</div>
			@endif
			<div ng-repeat="offre in offres  | limitTo: 10">
				<div class="listOffre">
							<h4>@{{offre.ordinateur.nom + ' || de '  + offre.date_debut.substr(0,10) +' à  ' + offre.date_fin.substr(0,10)}} </h4>

				</div>
			</div>
		</div>

		<div class="col-sm-5 portailOffers newOffers">
			<div class="offerTitle"><h2>Nouvelles Offres</h2></div>
			@if(count($offres_valide)==0)
			<div class="listOffre">
				<h4 style="color:rgb(200,200,200);">Aucun offre en cours</h4>  
			</div>
			@endif
			<div ng-repeat="offre_v in offres_valide  | limitTo: 10">
				<div class="listOffre">
							<h4>@{{offre_v.ordinateur.nom + ' || de '  + offre_v.date_debut.substr(0,10) +' à  ' + offre_v.date_fin.substr(0,10)}} </h4>

				</div>
			</div>
		</div>
	</div>

@endsection