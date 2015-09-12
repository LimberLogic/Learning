var app = angular.module('learning', [])

	.controller('learningController', function($scope, $http, $socket) {
		$scope.name = '';
		$scope.users = [];
		
		$scope.getName = function() {
			if($scope.name == '')
				return 'User';
			else
				return $scope.name;
		};
		
		$scope.hasName = function() {
			return ($scope.name != '');
		};
		
		$scope.init = function() {
			$scope.ajax();
			
			setInterval($scope.ajax, (20 * 1000));
		};
		
		$scope.ajax = function() {
			$http.get('ajax.php').then(function(response){
				$scope.users = response.data;
			},
			function() {
				console.log('Error occured during AJAX call');
			});
		};
		
		$scope.removeUser = function(email) {
			var newUsers = [];
			
			for(i = 0; i < $scope.users.length; i++) {
				user = $scope.users[i];
				
				if(user.email == email)
					continue;
				
				newUsers.push(user);
			}
			
			$scope.users = newUsers;
		};
	});