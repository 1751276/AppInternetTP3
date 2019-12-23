var app = angular.module('app', []);

app.controller('PlaceCRUDCtrl', ['$scope', 'PlaceCRUDService', function ($scope, PlaceCRUDService) {

        $scope.updatePlace = function () {
            PlaceCRUDService.updatePlace($scope.place.id, $scope.place.name)
                    .then(function success(response) {
                        $scope.message = 'Place data updated!';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.errorMessage = 'Error updating place!';
                                $scope.message = '';
                            });
        }

        $scope.getPlace = function () {
            var id = $scope.place.id;
            PlaceCRUDService.getPlace($scope.place.id)
                    .then(function success(response) {
                        $scope.place = response.data.data;
                        $scope.place.id = id;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                if (response.status === 404) {
                                    $scope.errorMessage = 'Place not found!';
                                } else {
                                    $scope.errorMessage = "Error getting place!";
                                }
                            });
        }

        $scope.addPlace = function () {
            if ($scope.place != null && $scope.place.name) {
                PlaceCRUDService.addPlace($scope.place.name)
                        .then(function success(response) {
                            $scope.message = 'Place added!';
                            $scope.errorMessage = '';
                        },
                                function error(response) {
                                    $scope.errorMessage = 'Error adding place!';
                                    $scope.message = '';
                                });
            } else {
                $scope.errorMessage = 'Please enter a name!';
                $scope.message = '';
            }
        }

        $scope.deletePlace = function () {
            PlaceCRUDService.deletePlace($scope.place.id)
                    .then(function success(response) {
                        $scope.message = 'Place deleted!';
                        $scope.place = null;
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.errorMessage = 'Error deleting place!';
                                $scope.message = '';
                            })
        }

        $scope.getAllPlaces = function () {
            PlaceCRUDService.getAllPlaces()
                    .then(function success(response) {
                        $scope.places = response.data.data;
                        $scope.message = '';
                        $scope.errorMessage = '';
                    },
                            function error(response) {
                                $scope.message = '';
                                $scope.errorMessage = 'Error getting places!';
                            });
        }

    }]);

app.service('PlaceCRUDService', ['$http', function ($http) {

        this.getPlace = function getPlace(placeId) {
            return $http({
                method: 'GET',
                url: urlToRestApi + '/' + placeId,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.addPlace = function addPlace(name) {
            return $http({
                method: 'POST',
                url: urlToRestApi,
                data: {name: name},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

        this.deletePlace = function deletePlace(id) {
            return $http({
                method: 'DELETE',
                url: urlToRestApi + '/' + id,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            })
        }

        this.updatePlace = function updatePlace(id, name) {
            return $http({
                method: 'PATCH',
                url: urlToRestApi + '/' + id,
                data: {name: name},
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            })
        }

        this.getAllPlaces = function getAllPlaces() {
            return $http({
                method: 'GET',
                url: urlToRestApi,
                headers: { 'X-Requested-With' : 'XMLHttpRequest',
                    'Accept' : 'application/json'}
            });
        }

    }]);


