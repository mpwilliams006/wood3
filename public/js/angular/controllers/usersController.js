app.controller('usersController', function ($scope, $http) {
	

	$scope.user = {};
    $scope.usertrue = true;

    $scope.userLogin = {email:'kim@yahoo.com',password:'kimrocks'};



    $scope.checkUserRegister = function() {

        if ($scope.user.firstname.length > 0 && $scope.user.lastname.length > 0 && $scope.user.email.length > 0 && $scope.user.password.length > 0) {
            $scope.usertrue = false;
            $scope.saveUser();
        };
    };

    $scope.saveUser =
    function(){

    	$http({
			method: "post",
			url:  "api/v1/users",
			headers: {'Content-Type': 'application/x-www-form-urlencoded'},
			transformRequest: function(obj) {
			var str = [];
			for(var p in obj)
			str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
			return str.join("&");
			},
			data: $scope.user
		}).success(
			function( html ) {

				//document.getElementById("form").innerHTML = "Thank you for using Neighborhood Professionals! You will be hearing from our professionals shortly. For immediate assistance contact a professional now with the number to your left.";
			}
		);
		
	};

    $scope.login =
        function(){
            $http({
                method: "post",
                url:  "api/v1/users",
                headers: {'Content-Type': 'application/x-www-form-urlencoded'},
                transformRequest: function(obj) {
                    var str = [];
                    for(var p in obj)
                        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
                    return str.join("&");
                },
                data: $scope.userLogin
            }).success(
                function( html ) {
                    document.location.href = '/newlaravelpj/wood3/public/pay/success';

                }
            );

        };
	

});

