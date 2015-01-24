//= include '../../bower_components/angular/angular.min.js'
(function(){
    'use strict';

    // Syntax untuk setter module Angular
    angular
        .module('PPApp', []);

    angular
        .module('PPApp')
        .controller('TodoController', TodoController);

    TodoController.$inject = ['$scope'];
    function TodoController($scope){
        $scope.todos = [
            {id:1, title:'Belajar Laravel'},
            {id:2, title:'Belajar Angular'}
        ];
        $scope.addTodo = function(){
            $scope.todos.push({
                id:3,
                title: $scope.newTodoName
            });
            $scope.newTodoName = '';
        }
        $scope.deleteTodo = function(index){
            $scope.todos.splice(index, 1);
        }
    }
})();
