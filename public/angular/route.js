var app = angular.module("RDash", [
    // "ui.bootstrap",
    "ui.router",
    "oc.lazyLoad",
    "common.services"]);

app.config([
    '$stateProvider', '$urlRouterProvider',
    function($stateProvider, $urlRouterProvider) {
        
        $stateProvider
            .state('sample-index', {
                url: '/sample-index',
                templateUrl: '/angular/partialviews/sample/index.html'
            }) 
            .state('sample-create', {
                url: '/sample-create',
                templateUrl: '/angular/partialviews/sample/create.html'
            })
            .state('sample-detail', {
                url: '/sample-detail',
                templateUrl: '/angular/partialviews/sample/detail.html'
            })
            .state('sample-edit', {
                url: '/sample-edit',
                templateUrl: '/angular/partialviews/sample/edit.html'
            });
    }
]);