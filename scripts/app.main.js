/**
 * @ngdoc function
 * @name app.controller:AppCtrl
 * @description
 * # MainCtrl
 * Controller of the app
 */

(function () {
    'use strict';
    angular
        .module('app')
        .controller('AppCtrl', AppCtrl);

    AppCtrl.$inject = ['$scope', '$http', '$rootScope', '$state', '$location', '$auth'];

    function AppCtrl($scope, $http, $rootScope, $state, $location, $auth) {
        $rootScope.notLogged = true;
        $rootScope.openClass = "";
        $scope.register = {};
        $scope.login = {};
        $scope.UserDetails = {};

        $scope.openmenu = function (event) {
            if ($rootScope.openClass == '') {
                $rootScope.openClass = "open";
            } else {
                $rootScope.openClass = '';
            }
        }
        //        
        $scope.authenticate = function (provider) {
            $auth.authenticate(provider);
        };
        $scope.opendate = function () {

        }

        $scope.changepop = function (type) {
            var id = type;
            if (type == "register") {
                $("#login").removeClass("active");
                $("#" + type).addClass("active");
            } else {
                $("#register").removeClass("active");
                $("#" + type).addClass("active");
            }
        }

        $scope.checkaccess = function () {
            $http({
                method: "POST",
                url: baseURL + "/checkaccess"
            }).then(function (response) {
                if (response.data.type == "success") {
                    $scope.UserDetails = response.data.value;
                    $rootScope.notLogged = false;
                    $state.go("feeds");
                }
            });
        }

        $scope.checkaccess();
        setInterval(function () {
            $scope.checkaccess();
        }, 3000);
        $scope.registerUser = function () {
            $http({
                method: "POST",
                url: baseURL + "/register",
                data: encodeURIComponent(angular.toJson($scope.register)),
            }).then(function (response) {
                alert(JSON.stringify(response));
            });
        }
        $scope.loginUser = function () {
            $http({
                method: "POST",
                url: baseURL + "/loginuser",
                data: encodeURIComponent(angular.toJson($scope.login)),
            }).then(function (response) {
                if (response.data) {
                    alert(response.data.msg);
                    $rootScope.notLogged = false;
                    $scope.checkaccess();
                    $state.go("feeds");

                }

            });
        }
    }

})();
