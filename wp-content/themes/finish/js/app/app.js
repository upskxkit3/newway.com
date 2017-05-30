(function () {
    'use strict';

    angular.module('myApp', []).controller('WineCtrl', ['$http', function ($http) {
        // Variables - Private
        var self = this;

        // Variables - Public
        self.showFillter = false;
        self.filter = {};
        self.Fabrics;

        $http({
            method: 'GET',
            url: '/wp-content/themes/finish/json/fabrics.json'
        }).then(function mySucces(response) {
            self.Fabrics = response.data;
        }, function myError(response) {
            self.Fabrics = response.statusText;
        });

        self.getValuesFor = function (prop) {
            var key = (self.Fabrics || []).map(function (fab) {
                return fab[prop];
            });
            var keys;

            for (var i = 1; i < key.length; i++) {
                keys = key[0].concat(key[i]);
            }

            var ret = keys.filter(function (value, idx, arr) {
                return arr.indexOf(value) === idx;
            });
            return ret;
        }

// Functions - Definitions
//        create obj
        self.filterByProperties = function (fab) {
            var activeFilterProps = Object.keys(self.filter).filter(function (prop) {
                return !noFilter(self.filter[prop]);
            });

            //filter obj vs fabrics
            return !activeFilterProps.length || activeFilterProps.every(function (prop) {
                    // return self.filter[prop][fab[prop]];

                    for (var i = 0; i < fab[prop].length; i++) {
                        // alert(self.filter[prop][fab[prop][i]]);
                        if(self.filter[prop][fab[prop][i]] == true){
                            return self.filter[prop][fab[prop][i]];
                        }
                    }
                });

        }
        function noFilter(filterObj) {
            return Object.keys(filterObj).every(function (key) {
                // console.log('noFilter\n'+filterObj+'\n'+key);
                return !filterObj[key];
            });
        }


    }]).filter('capitalizeFirst', capitalizeFirstFilter)
        .filter('limiToKey', limiToKey);

// Functions - Definitions
    function capitalizeFirstFilter() {
        return function _doFilter(str) {
            return str && (str.charAt(0).toUpperCase() + str.substring(1));
        };
    }

    function limiToKey() {
        return function (obj) {
            var clone = {};

            for (var prom in obj) {
                if (prom == 'страна' || prom == 'стиль' || prom == 'материалы' || prom == 'цена') {
                    clone[prom] = obj[prom];
                }
            }
            ;
            return clone;
        };
    }


}());
