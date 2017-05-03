/******/ (function(modules) { // webpackBootstrap
/******/ 	// The module cache
/******/ 	var installedModules = {};
/******/
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/
/******/ 		// Check if module is in cache
/******/ 		if(installedModules[moduleId])
/******/ 			return installedModules[moduleId].exports;
/******/
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = installedModules[moduleId] = {
/******/ 			i: moduleId,
/******/ 			l: false,
/******/ 			exports: {}
/******/ 		};
/******/
/******/ 		// Execute the module function
/******/ 		modules[moduleId].call(module.exports, module, module.exports, __webpack_require__);
/******/
/******/ 		// Flag the module as loaded
/******/ 		module.l = true;
/******/
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/
/******/
/******/ 	// expose the modules object (__webpack_modules__)
/******/ 	__webpack_require__.m = modules;
/******/
/******/ 	// expose the module cache
/******/ 	__webpack_require__.c = installedModules;
/******/
/******/ 	// identity function for calling harmony imports with the correct context
/******/ 	__webpack_require__.i = function(value) { return value; };
/******/
/******/ 	// define getter function for harmony exports
/******/ 	__webpack_require__.d = function(exports, name, getter) {
/******/ 		if(!__webpack_require__.o(exports, name)) {
/******/ 			Object.defineProperty(exports, name, {
/******/ 				configurable: false,
/******/ 				enumerable: true,
/******/ 				get: getter
/******/ 			});
/******/ 		}
/******/ 	};
/******/
/******/ 	// getDefaultExport function for compatibility with non-harmony modules
/******/ 	__webpack_require__.n = function(module) {
/******/ 		var getter = module && module.__esModule ?
/******/ 			function getDefault() { return module['default']; } :
/******/ 			function getModuleExports() { return module; };
/******/ 		__webpack_require__.d(getter, 'a', getter);
/******/ 		return getter;
/******/ 	};
/******/
/******/ 	// Object.prototype.hasOwnProperty.call
/******/ 	__webpack_require__.o = function(object, property) { return Object.prototype.hasOwnProperty.call(object, property); };
/******/
/******/ 	// __webpack_public_path__
/******/ 	__webpack_require__.p = "";
/******/
/******/ 	// Load entry module and return exports
/******/ 	return __webpack_require__(__webpack_require__.s = 44);
/******/ })
/************************************************************************/
/******/ ({

/***/ 35:
/***/ (function(module, exports) {

var ListOfAllOrders = EXPORT_ListOfAllOrders;

(function (orders) {

    var STATUS = {
        'NEW': 1,
        'COOKING': 2,
        'READY': 3,
        'SERVED': 4
    };
    //debugger;
    var new_notification_queue = [];
    var ready_notification_queue = [];
    var cooking_notification_queue = [];

    for (var i = 0; i < orders.length; i++) {

        if (orders[i].status == STATUS['NEW']) new_notification_queue.push(orders[i]);
        if (orders[i].status == STATUS['COOKING']) cooking_notification_queue.push(orders[i]);
        if (orders[i].status == STATUS['READY']) ready_notification_queue.push(orders[i]);
    }

    var socket = io.connect('http://localhost:8890');

    var el_new_Q = '#new-notification-queue';
    var el_ready_Q = '#ready-notification-queue';
    var el_cooking_Q = '#cooking-notification-queue';

    var severity = {
        'E': '.alert-danger',
        'S': '.alert-success',
        'W': '.alert-warning'
    };

    socket.on('NotifyCook', function (data, channel) {
        new_notification_queue.push(JSON.parse(data));

        redraw();
    });

    function queue_html_for_new(queue, label) {
        var html = '';
        if (queue.length < 1) {
            return "<li>queue is empty</li>";
        }

        for (var i = 0; i < queue.length; i++) {

            html += '<li class="mini-eta-form">' + queue[i].uuid + '<input type="text" placeholder="Min" />' + '<button type="button" class="btn btn-sm btn-primary update-eta" data-status="2" data-id="' + queue[i].id + '" data-index="' + i + '">ETA</button>' + ' </li>';
        }
        return html;
    }

    function queue_html_for_cooking(queue, label) {
        var html = '';
        if (queue.length < 1) {
            return "<li>queue is empty</li>";
        }

        for (var i = 0; i < queue.length; i++) {

            html += '<li class="mini-eta-form">' + queue[i].uuid + '<button type="button" class="btn btn-sm btn-primary update-eta" data-status="3" data-id="' + queue[i].id + '" data-index="' + i + '">Serve</button>' + ' </li>';
        }
        return html;
    }

    function queue_html_for_ready(queue, label) {
        var html = '';
        if (queue.length < 1) {
            return "<li>queue is empty</li>";
        }
        //debugger;
        for (var i = 0; i < queue.length; i++) {

            html += '<li class="mini-eta-form">' + queue[i].uuid + '<button type="button" class="btn btn-sm btn-primary update-eta" data-status="4" data-id="' + queue[i].id + '" data-index="' + i + '">Served</button>' + ' </li>';
        }
        return html;
    }

    function addMin(id, index, status, min) {

        var data = {};

        data.id = id;
        data.min = min;
        data.status = status;
        data._token = $('input[type=hidden][name=_token]').val();

        var jqxhr = $.post("/orders/status", data).done(function (order) {

            if (data.status == STATUS['COOKING']) {
                cooking_notification_queue.push(new_notification_queue[index]);
                new_notification_queue.splice(index, 1);
            } else if (data.status == STATUS['READY']) {
                ready_notification_queue.push(cooking_notification_queue[index]);
                cooking_notification_queue.splice(index, 1);
            } else if (data.status == STATUS['SERVED']) {
                ready_notification_queue.splice(index, 1);
            }
            redraw();
        }).fail(function () {
            //$(notify).html('Something went wrong, please try again.');
        }).always(function () {});
    }

    function redraw() {
        $(el_new_Q).find('ul').html(queue_html_for_new(new_notification_queue, 'New'));
        $(el_cooking_Q).find('ul').html(queue_html_for_cooking(cooking_notification_queue, 'New'));
        $(el_ready_Q).find('ul').html(queue_html_for_ready(ready_notification_queue, 'New'));
    }

    redraw();

    $('.notification-header').on('click', '.update-eta', function () {
        var id = $(this).data('id');
        var index = $(this).data('index');
        var status = $(this).data('status');
        var input = $(this).parent().find('input[type=text]').val();

        addMin(id, index, status, input);
    });
})(ListOfAllOrders);

/***/ }),

/***/ 44:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(35);


/***/ })

/******/ });