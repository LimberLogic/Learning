var app = angular.module('learning', ['btford.socket-io'])
	.factory('$socket', function(socketFactory){
 		return socketFactory();
	 })
	.controller('learningController', function($scope, $http, $socket) {
		$scope.name = '';
		$scope.users = [];
		$scope.setup = false;
		
		$scope.getName = function() {
			if($scope.name == '')
				return 'User';
			else
				return $scope.name;
		};
		
		$scope.hasName = function() {
			return ($scope.name != '');
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
		
		/* socket.io event handlers */
		$socket.on('connect', function() {
			if(!$scope.setup) {
				console.log('Connected to socket.io');
				$socket.emit('users');
				
				$scope.setup = true;
			}
		});
		
		$socket.on('users', function(users){
			console.log('Received a list of users');
			$scope.users = users;
		});
	});