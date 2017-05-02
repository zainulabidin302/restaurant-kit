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
/******/ 	return __webpack_require__(__webpack_require__.s = 42);
/******/ })
/************************************************************************/
/******/ ({

/***/ 33:
/***/ (function(module, exports) {

var RecipieList = EXPORT_RecipieList.data;

var Order = function Order(RecipieList) {

    var items = [];
    var el = "#order-table";
    var notify = "#notify";
    var remove_btn_toggle = 1; // Show or hide Remove Button
    function getRecipie(id) {
        for (var i = 0; i < RecipieList.length; i++) {
            if (RecipieList[i].id == id) return RecipieList[i];
        }
        return null;
    }

    function getIndex(id) {
        for (var i = 0; i < items.length; i++) {
            if (items[i].id == id) return i;
        }
        return null;
    }

    function add(id) {
        if ((index = getIndex(id)) !== null) {
            items[index].quantity++;
        } else {
            items.push({
                id: id,
                quantity: 1
            });
        }

        draw();
    }

    function remove(index) {

        items.splice(index, 1);
        draw();
    }

    function confirm() {
        $(notify).html('Processing your order, Please wait!');

        $('.order-confirm').hide(300);

        $(notify).fadeIn();
        var data = {};
        data.items = items;
        if (items.length < 1) {
            $(notify).html('Duh, Your order is empty !');
            $('.order-confirm').show(300);

            return;
        }
        data._token = $('input[type=hidden][name=_token]').val();
        remove_btn_toggle = 0;
        draw();

        var jqxhr = $.post("/orders", data, function () {
            items = [];
        }).done(function (order) {
            if (order.status == 1) {
                $(notify).html('Thank you for ordering. It order will take upto 15 mins to serve your order. In the mean time if you would like to order something in deserts, please see the menu on the left.');
                $(notify).append('Your order tracking id is <div class="alert alert-warning">' + order.uid + '</div> . You will need this id to track your order. ' + "<a href='/orders/" + order.uid + "' class='btn btn-primary-inverse'>Track Your Order Here</a>" + ' . ');
            } else {
                $(notify).html('Something went wrong, please try again.');
            }
        }).fail(function () {
            $(notify).html('Something went wrong, please try again.');
        }).always(function () {});

        draw();
    }

    function draw() {
        var html = '';
        if (items.length < 1) {
            html = '<tr><td colspan=3> Your Order is empty </td></tr>';
        }
        for (var i = 0; i < items.length; i++) {
            var btn = '';
            if (remove_btn_toggle) btn = '<td>' + '<a href="#" data-id="' + i + '" class="btn btn-primary-inverse remove-order-item" > Remove </a> ' + '</td>';else btn = '<td>' + '<a href="#" data-id="' + i + '" class="btn btn-primary cancel-order-item" > Cancel </a> ' + '</td>';
            html += '<tr>' + '<td>' + getRecipie(items[i].id).title + '</td>' + '<td>' + items[i].quantity + '</td>' + '<td>' + getRecipie(items[i].id).price + '</td>' + btn + '</tr>';
        }

        $(el).find('tbody').html(html);
    }

    return {
        draw: draw,
        add: add,
        remove: remove,
        confirm: confirm

    };
};

var order = Order(RecipieList);

order.draw();

$('.container').on('click', '.order-now', function () {
    order.add($(this).data('id'));
});

$('#order-table').on('click', '.remove-order-item', function () {
    order.remove($(this).data('id'));
});

$('.container').on('click', '.order-confirm', function () {
    order.confirm();
});

/***/ }),

/***/ 42:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(33);


/***/ })

/******/ });