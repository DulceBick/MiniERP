
var app = angular.module("app", ["ngRoute"]);
 
app.constant('CONFIG', {
	TEMPLATE_DIR:"templates/",
	ROL_CURRENT_USER: 1
})
 
.constant('ROLES', {
	ADMIN: {
		ROL:1,
		PATH:"/admin"
	},
	REGISTERED: {
		ROL:2,
		PATH:"/registered"
	},
	GUEST: {
		ROL:3,
		PATH:"/guest"
	.config(["$routeProvider", "CONFIG", "ROLES", function($routeProvider, CONFIG, ROLES)
{
	$routeProvider.when('/', {
		redirectTo: "/home"
	})
	.when("/home", {
		templateUrl: CONFIG.TEMPLATE_DIR+'login.html',
		controller: 'homeCtrl',
		data: {
			authorized: [ROLES.ADMIN.ROL,ROLES.REGISTERED.ROL]
		}
	})
	.when("/admin", {
		templateUrl: CONFIG.TEMPLATE_DIR+'gerente.html',
		controller: 'adminCtrl',
		data: {
			authorized: [ROLES.ADMIN.ROL]
		}
	})
	.when("/registered", {
		templateUrl: CONFIG.TEMPLATE_DIR+'coordinador.html',
		controller: 'registeredCtrl',
		data: {
			authorized: [ROLES.ADMIN.ROL,ROLES.REGISTERED.ROL]
		}
	})
	.when("/guest", {
		templateUrl: CONFIG.TEMPLATE_DIR+'auxiliar.html',
		controller: 'guestCtrl',
		data: {
			authorized: [ROLES.GUEST.ROL]
		}
	})
}])

.controller('homeCtrl', ['$scope', function ($scope) 
{
	console.log("home");
}])

.controller('adminCtrl', ['$scope', function ($scope) 
{
	console.log("home");
}])

.controller('registeredCtrl', ['$scope', function ($scope) 
{
	console.log("registered");
}])

.controller('guestCtrl', ['$scope', function ($scope) 
{
	console.log("guest");
}])

.controller('homeCtrl', ['$scope', function ($scope) 
{
	console.log("home");
}])
 
.controller('adminCtrl', ['$scope', function ($scope) 
{
	console.log("home");
}])
 
.controller('registeredCtrl', ['$scope', function ($scope) 
{
	console.log("registered");
}])
.controller('guestCtrl', ['$scope', function ($scope) 
{
	console.log("guest");
}])
 
	.run(["$rootScope", "$location", "CONFIG", "ROLES", function($rootScope, $location, CONFIG, ROLES)
{
	$rootScope.$on('$routeChangeStart', function (event, next) 
	{
        if (next.data !== undefined) 
        {
            if(next.data.authorized.indexOf(CONFIG.ROL_CURRENT_USER) !== -1)
			{
				console.log("entra");
			}
			else
			{
				if(CONFIG.ROL_CURRENT_USER == 1)
				{
					$location.path(ROLES.ADMIN.PATH);
				}
				else if(CONFIG.ROL_CURRENT_USER == 2)
				{
					$location.path(ROLES.REGISTERED.PATH);
				}
				else if(CONFIG.ROL_CURRENT_USER == 3)
				{
					$location.path(ROLES.GUEST.PATH);
				}
				
			}
        }
    });
}]);