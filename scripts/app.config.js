var app = angular.module('app')
    .config(
        ['$httpProvider', '$controllerProvider', '$compileProvider', '$filterProvider', '$provide', '$authProvider',
            function ($httpProvider, $controllerProvider, $compileProvider, $filterProvider, $provide, $authProvider) {
                // $httpProvider.interceptors.push('httpRequestInterceptor');
                // lazy controller, directive and service
                app.controller = $controllerProvider.register;
                app.directive = $compileProvider.directive;
                app.filter = $filterProvider.register;
                app.factory = $provide.factory;
                app.service = $provide.service;
                app.constant = $provide.constant;
                app.value = $provide.value;
                $authProvider.facebook({
                    clientId: '1821987291379594',
                    name: 'facebook',
                    url: '/conflict/api/index.php/facebooklogin',
                    authorizationEndpoint: 'https://www.facebook.com/v2.5/dialog/oauth',
                    redirectUri: window.location.origin + '/conflict/api/index.php/loginuser',
                    requiredUrlParams: ['display', 'scope'],
                    scope: ['email'],
                    scopeDelimiter: ',',
                    display: 'popup',
                    oauthType: '2.0',
                    popupOptions: { width: 640, height: 500 }
                });
                // Twitter
                $authProvider.twitter({
                    clientId: 'IlCl0k8VddokhsdHgeLiNPvlV',
                    url: '/conflict/api/index.php/twitterlogin',
                    authorizationEndpoint: 'https://api.twitter.com/oauth/authenticate',
                    redirectUri: window.location.origin + '/conflict/api/index.php/loginuser',
                    oauthType: '1.0',
                    popupOptions: { width: 495, height: 645 }
                });

            }
        ]);