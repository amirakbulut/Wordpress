/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	"use strict";
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/includes/scroll-to-element.js":
/*!*************************************************!*\
  !*** ./assets/js/includes/scroll-to-element.js ***!
  \*************************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\n// Scroll to element with offset\r\nconst scrollToElement = (el, offset = 0) => {\r\n    let element = document.querySelector(el);\r\n\tlet headerOffset = offset;\r\n\tlet elementPosition = element.getBoundingClientRect().top;\r\n\tlet offsetPosition = elementPosition + window.pageYOffset - headerOffset;\r\n\twindow.scrollTo({\r\n\t\ttop: offsetPosition,\r\n\t\tbehavior: \"smooth\"\r\n\t});\r\n}\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (scrollToElement);\n\n//# sourceURL=webpack://2022-webpack-test/./assets/js/includes/scroll-to-element.js?");

/***/ }),

/***/ "./assets/js/includes/toggle-modals.js":
/*!*********************************************!*\
  !*** ./assets/js/includes/toggle-modals.js ***!
  \*********************************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony export */ __webpack_require__.d(__webpack_exports__, {\n/* harmony export */   \"default\": () => (__WEBPACK_DEFAULT_EXPORT__)\n/* harmony export */ });\nconst toggleModals = () => {\r\n    document\r\n        .querySelectorAll('.modal-toggle')\r\n        .forEach(item => {\r\n            item.addEventListener('click', () => {\r\n                let modal = \"visible-\" + item.dataset.modal;\r\n                document.querySelector('body').classList.toggle(modal);\r\n            })\r\n        });\r\n};\r\n\r\n/* harmony default export */ const __WEBPACK_DEFAULT_EXPORT__ = (toggleModals);\n\n//# sourceURL=webpack://2022-webpack-test/./assets/js/includes/toggle-modals.js?");

/***/ }),

/***/ "./assets/js/index.js":
/*!****************************!*\
  !*** ./assets/js/index.js ***!
  \****************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n/* harmony import */ var _includes_scroll_to_element__WEBPACK_IMPORTED_MODULE_0__ = __webpack_require__(/*! ./includes/scroll-to-element */ \"./assets/js/includes/scroll-to-element.js\");\n/* harmony import */ var _includes_toggle_modals__WEBPACK_IMPORTED_MODULE_1__ = __webpack_require__(/*! ./includes/toggle-modals */ \"./assets/js/includes/toggle-modals.js\");\n// Scripts`\r\n// import initialiseMenu from './includes/menu-primary';\r\n\r\n\r\n// import fetch_posts from './includes/fetch-posts';\r\n// import './includes/carousel-slider';\r\n\r\n\r\nwindow.scrollToElement = _includes_scroll_to_element__WEBPACK_IMPORTED_MODULE_0__[\"default\"];\r\n// window.fetchPosts = fetch_posts;\r\n\r\n(() => {\r\n    \r\n    document.addEventListener('DOMContentLoaded', () => {\r\n        (0,_includes_toggle_modals__WEBPACK_IMPORTED_MODULE_1__[\"default\"])();\r\n        // initialiseMenu();\r\n\r\n        setTimeout(() => document.querySelector('.logo').classList.remove('translate-y-[-200px]'), 100);\r\n\r\n        document.querySelector('#back-to-top').addEventListener('click', () => (0,_includes_scroll_to_element__WEBPACK_IMPORTED_MODULE_0__[\"default\"])('body'));\r\n    });\r\n\r\n    // change navbar on scroll:\r\n    document.addEventListener('scroll', () => {\r\n        let navbar = document.querySelector('.nav-bar')\r\n        \r\n        if(document.body.getBoundingClientRect().top < -75){\r\n            navbar.classList.add('bar-shadow');\r\n        } else {\r\n            navbar.classList.remove('bar-shadow');\r\n\r\n        }\r\n    });\r\n})();\r\n\r\n\r\n\r\n// misschien nodig? dan converteren naar vanilla js\r\n// $('#menu-main-menu-mobile > .menu-item-has-children > a').on('click', function() {\r\n//     $(this).parent().toggleClass('active');\r\n//     $('#menu-main-menu-mobile > .menu-item').each(function() {\r\n//         if ($('#menu-main-menu-mobile > .menu-item.active').length < 1) {\r\n//             $(this).removeClass('not-active');\r\n//         } else if ($(this).hasClass('active') == false) {\r\n//             $(this).addClass('not-active');\r\n//         }\r\n//     })\r\n\r\n// });\n\n//# sourceURL=webpack://2022-webpack-test/./assets/js/index.js?");

/***/ }),

/***/ "./assets/css/index.css":
/*!******************************!*\
  !*** ./assets/css/index.css ***!
  \******************************/
/***/ ((__unused_webpack_module, __webpack_exports__, __webpack_require__) => {

eval("__webpack_require__.r(__webpack_exports__);\n// extracted by mini-css-extract-plugin\n\n\n//# sourceURL=webpack://2022-webpack-test/./assets/css/index.css?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	// The module cache
/******/ 	var __webpack_module_cache__ = {};
/******/ 	
/******/ 	// The require function
/******/ 	function __webpack_require__(moduleId) {
/******/ 		// Check if module is in cache
/******/ 		var cachedModule = __webpack_module_cache__[moduleId];
/******/ 		if (cachedModule !== undefined) {
/******/ 			return cachedModule.exports;
/******/ 		}
/******/ 		// Create a new module (and put it into the cache)
/******/ 		var module = __webpack_module_cache__[moduleId] = {
/******/ 			// no module.id needed
/******/ 			// no module.loaded needed
/******/ 			exports: {}
/******/ 		};
/******/ 	
/******/ 		// Execute the module function
/******/ 		__webpack_modules__[moduleId](module, module.exports, __webpack_require__);
/******/ 	
/******/ 		// Return the exports of the module
/******/ 		return module.exports;
/******/ 	}
/******/ 	
/************************************************************************/
/******/ 	/* webpack/runtime/define property getters */
/******/ 	(() => {
/******/ 		// define getter functions for harmony exports
/******/ 		__webpack_require__.d = (exports, definition) => {
/******/ 			for(var key in definition) {
/******/ 				if(__webpack_require__.o(definition, key) && !__webpack_require__.o(exports, key)) {
/******/ 					Object.defineProperty(exports, key, { enumerable: true, get: definition[key] });
/******/ 				}
/******/ 			}
/******/ 		};
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/hasOwnProperty shorthand */
/******/ 	(() => {
/******/ 		__webpack_require__.o = (obj, prop) => (Object.prototype.hasOwnProperty.call(obj, prop))
/******/ 	})();
/******/ 	
/******/ 	/* webpack/runtime/make namespace object */
/******/ 	(() => {
/******/ 		// define __esModule on exports
/******/ 		__webpack_require__.r = (exports) => {
/******/ 			if(typeof Symbol !== 'undefined' && Symbol.toStringTag) {
/******/ 				Object.defineProperty(exports, Symbol.toStringTag, { value: 'Module' });
/******/ 			}
/******/ 			Object.defineProperty(exports, '__esModule', { value: true });
/******/ 		};
/******/ 	})();
/******/ 	
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_require__("./assets/js/index.js");
/******/ 	var __webpack_exports__ = __webpack_require__("./assets/css/index.css");
/******/ 	
/******/ })()
;