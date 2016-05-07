var app = angular.module('productsApp', []);

app.controller('ProductsCtrl', function ($scope, $http) {
    $scope.current_page = 1;

    $scope.isActivePage = function (page) {
        return $scope.current_page == page;
    }
    
    $scope.getPageClass = function (page) {
        return $scope.isActivePage(page) ? 'active' : '';
    };

    $scope.goToPage = function (page) {
        $scope.current_page = page;
        $scope.refresh();
    };

    $scope.refresh = function () {
        $http.get('api/v1/products', {
            params: {
                page: $scope.current_page
            }
        })
            .success(function (data) {
                $scope.products = data.data;
                $scope.last_page = data.last_page;
            });
    };

    $scope.refresh();
});

app.filter('range', function () {
    return function (input, total) {
        total = parseInt(total);

        for (var i = 1; i <= total; i++) {
            input.push(i);
        }
        return input;
    };
});