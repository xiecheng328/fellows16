"use strict";

var _createClass = function () { function defineProperties(target, props) { for (var i = 0; i < props.length; i++) { var descriptor = props[i]; descriptor.enumerable = descriptor.enumerable || false; descriptor.configurable = true; if ("value" in descriptor) descriptor.writable = true; Object.defineProperty(target, descriptor.key, descriptor); } } return function (Constructor, protoProps, staticProps) { if (protoProps) defineProperties(Constructor.prototype, protoProps); if (staticProps) defineProperties(Constructor, staticProps); return Constructor; }; }();

function _classCallCheck(instance, Constructor) { if (!(instance instanceof Constructor)) { throw new TypeError("Cannot call a class as a function"); } }

var a = 5;
var add = function add(x, y) {
    return x + y;
};
console.log(add(5, 6));

var People = function () {
    function People(name, age) {
        _classCallCheck(this, People);

        this.name = name;
        this.age = age;
    }

    _createClass(People, [{
        key: "showName",
        value: function showName() {
            console.log("我的名字是:" + this.name);
        }
    }]);

    return People;
}();

var p1 = new People('zhangsan', 18);
console.log(p1.name);
p1.showName();

var b = 6;