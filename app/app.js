
var app = angular.module('TaskM', []);

app.controller('tasksController', function($scope, $http) {

getTask(); 

 function getTask(){

    $http ({
      method: 'post',
      url: 'ajax/getTask.php',
      headers: {'Content-Type' : 'index.html'}
    }).success(function(data){
      $scope.tasks = data;
    });
  };


  $scope.addTask = function (task) {
    $http.post("ajax/addTask.php?task="+task).success(function(data){
        getTask();
        $scope.taskInput = "";
      });
  };



  $scope.deleteTask = function (task) {
    $http.post("ajax/deleteTask.php?taskID="+task).success(function(data){
        getTask();
      });
  };
});


