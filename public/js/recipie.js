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
/******/ 	return __webpack_require__(__webpack_require__.s = 43);
/******/ })
/************************************************************************/
/******/ ({

/***/ 34:
/***/ (function(module, exports) {

var ingredientsList = EXPORT_RecipieIngredientsList;

var Recipie = function Recipie() {

    var el = '#recipie-container';

    var ingredients = [];

    function getTitle(id) {
        for (var i = 0; i < ingredientsList.length; i++) {
            if (ingredientsList[i].id == id) {
                return ingredientsList[i];
            }
        }
        return null;
    }

    function getIndex(id) {
        for (var i = 0; i < ingredientsList.length; i++) {
            if (ingredientsList[i].id == id) {
                return i;
            }
        }
        return null;
    }

    function addIngredient() {
        var ingredient = {
            id: $(el).find('#ing-select').val(),
            quantity: $(el).find('#ing-qty').val()
        };

        ingredients.push(ingredient);
        redrawRecipie();
    }

    function removeIngredient(id) {
        ingredients.splice(id, 1);
        redrawRecipie();
    }

    function updateIngredient() {
        this.ingredients.push(ingredient);
    }

    function redrawRecipie() {
        var html = '';

        var addBtn = '<a class="btn btn-primary-inverse" href="#" onClick="R.addIngredient()"> Add </a>';
        var selectIngredients = '<select id="ing-select" class="form-control">';

        for (var i = 0; i < ingredientsList.length; i++) {
            selectIngredients += '<option value="' + ingredientsList[i].id + '">' + ingredientsList[i].title + '</option>';
        }

        selectIngredients += '</select>';
        html += '<tr>' + '<td>' + selectIngredients + '</td>' + '<td>' + '<input type="text" id="ing-qty" name="quantity" class="form-control" >' + '</td>' + '<td>' + addBtn + '</td>' + '</tr>';

        for (var i = 0; i < ingredients.length; i++) {

            var removeBtn = '<a class="btn btn-primary-inverse" href="#" onClick="R.removeIngredient(' + i + ')"> Remove </a>';

            html += '<tr>' + '<td>' + '<input type="hidden" name="ingredientId[]" value="' + ingredients[i].id + '" />' + getTitle(ingredients[i].id).title + '</td>' + '<td>' + '<input type="hidden" name="ingredientQty[]" value="' + ingredients[i].quantity + '" >' + ingredients[i].quantity + ' ' + getTitle(ingredients[i].id).unit.short_code + '</td>' + '<td>' + removeBtn + '</td>' + '</tr>';
        }

        $(el).find('tbody').html(html);
    }

    return {
        'redraw': redrawRecipie,
        'removeIngredient': removeIngredient,
        'addIngredient': addIngredient
    };
};

R = Recipie();
R.redraw();

/***/ }),

/***/ 43:
/***/ (function(module, exports, __webpack_require__) {

module.exports = __webpack_require__(34);


/***/ })

/******/ });