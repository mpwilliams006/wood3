app.controller('usersController', function ($scope, $http) {
	

	$scope.user = 'mike';


    $scope.saveLead = 
    function(){
     window.scrollTo(0, 0);
    	$http({
			method: "post",
			url:  "api/dentureslead",
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			transformRequest: function(obj) {
			var str = [];
			for(var p in obj)
			str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
			return str.join("&");
			},
			data: $scope.lead
		}).success(
			function( html ) {
				document.location.href = 'http://www.implant-dentures.com/dentures-thankyou';	
				//document.getElementById("form").innerHTML = "Thank you for using Neighborhood Professionals! You will be hearing from our professionals shortly. For immediate assistance contact a professional now with the number to your left.";
			}
		);
		
	};
	
	$scope.saveLead2 = 
    function(){
     window.scrollTo(0, 0);
    	$http({
			method: "post",
			url:  "api/dentureslead2",
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			transformRequest: function(obj) {
			var str = [];
			for(var p in obj)
			str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
			return str.join("&");
			},
			data: $scope.lead2
		}).success(
			function( html ) {
				document.location.href = 'http://www.implant-dentures.com/dentures-thank-you';	
				//document.getElementById("form").innerHTML = "Thank you for using Neighborhood Professionals! You will be hearing from our professionals shortly. For immediate assistance contact a professional now with the number to your left.";
			}
		);
		
	}
});

