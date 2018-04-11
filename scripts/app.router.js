'use strict';

/**
 * Config for the router
 */

angular.module('app')
        .config(
                ['$stateProvider', '$urlRouterProvider',
                    function ($stateProvider, $urlRouterProvider) {
                        $urlRouterProvider.otherwise('/login');
                        $stateProvider

                                // HOME STATES AND NESTED VIEWS ========================================
                                .state('home', {
                                    url: '/home',
                                    templateUrl: baseURL + '/home',
                                    controller: "loginCtrl",
                                    
                                })
                                .state('feeds', {
                                    url: '/feeds',
                                    templateUrl: baseURL + '/feeds',
//                                    controller: "dashboardCtrl",
                                })
                                
                                

                                // ABOUT PAGE AND MULTIPLE NAMED VIEWS =================================
                                .state('about', {
                                    // we'll get to this in a bit       
                                });
                    }
                ]
                );

