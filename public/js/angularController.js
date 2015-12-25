/*************Angular Controller***************/
var inscriptionApp = angular.module("inscriptionApp", []);
var offreApp = angular.module("offreApp", []);

inscriptionApp.controller('inscriptionController', function($scope) {

    $scope.email = "";
    $scope.nom = "";
    $scope.prenom = "";


});


offreApp.controller('offreController', function($scope,$http) {

	$http.get("ajax/offreSearch").then(function (response) {
    	$scope.offres = response.data.offres;

    	//$('.offre-result').fadeIn('slow');
    });

    $http.get("ajax/offreSearchValide").then(function (response) {
    	$scope.offres_valide = response.data.offres;
    	
    	//$('.offre-result').fadeIn('slow');
    });


});
