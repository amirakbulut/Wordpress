/*
 * ATTENTION: The "eval" devtool has been used (maybe by default in mode: "development").
 * This devtool is neither made for production nor for readable output files.
 * It uses "eval()" calls to create a separate source file in the browser devtools.
 * If you are trying to read the output file, select a different devtool (https://webpack.js.org/configuration/devtool/)
 * or disable the default devtool with "devtool: false".
 * If you are looking for production-ready output files, see mode: "production" (https://webpack.js.org/configuration/mode/).
 */
/******/ (() => { // webpackBootstrap
/******/ 	var __webpack_modules__ = ({

/***/ "./assets/js/admin.js":
/*!****************************!*\
  !*** ./assets/js/admin.js ***!
  \****************************/
/***/ (() => {

eval("function acf_cta_cards_fetch_terms_of_chosen_tax()\r\n{\r\n    // cancel if ACF isn't defined\r\n    if (typeof acf == 'undefined') { return; }\r\n\r\n    // hook onto AJAX request of select field\r\n    acf.add_filter('select2_ajax_data', function( data, args, $input, field, instance ){\r\n\r\n        if(args.field.data.name == 'cards_post_type_category'){\r\n            // get the chosen post type\r\n            let post_type_field = acf.getFields({ name: 'cards_post_type' });\r\n            let chosen_post_type_key = post_type_field[0].data.key;\r\n            let chosen_post_type = document.querySelectorAll('.values [data-key=' + chosen_post_type_key + '] select')[0].value;\r\n\r\n            // include it with the AJAX request so it knows which terms to return\r\n            data.chosen_post_type = chosen_post_type;\r\n        }\r\n        \r\n        return data;\r\n    });\r\n}\r\n\r\nfunction acf_cta_cards_fetch_chosen_term()\r\n{\r\n    // cancel if ACF isn't defined\r\n    if (typeof acf == 'undefined') { return; }\r\n\r\n    // hook onto preperation of specific field\r\n    acf.addAction('prepare_field/name=cards_post_type_category', (field) => {\r\n\r\n        // grab current post ID from GET parameter\r\n        let urlParamsString = window.location.search;\r\n        let urlParams = new URLSearchParams(urlParamsString);\r\n\r\n        let post_id = urlParams.get('post');\r\n\r\n        // only run if there is a post ID (so not when creating a new item)\r\n        if(post_id)\r\n        {\r\n            // fetch current value using custom endpoint\r\n            let block = 'cta-cards';\r\n            let url = '/wp-json/rima/acf/get-flexible-field?post_id=' + post_id + '&block=' + block + '&field=' + field.data.name;\r\n            \r\n            fetch(url, {\r\n                method: 'GET',\r\n                credentials: 'same-origin',\r\n                headers: {\r\n                    'Cache-Control': 'no-cache',\r\n                },\r\n            })\r\n            .then(response => response.json())\r\n            .then(response => {\r\n                // set current value to be the value of the ACF field\r\n                let post_type_field = acf.getFields({ name: 'cards_post_type_category' });\r\n                let chosen_post_type_key = post_type_field[0].data.key;\r\n                let field = document.querySelectorAll('.values [data-key=' + chosen_post_type_key + '] .description')[0];\r\n\r\n                field.innerText =  'Huidige selectie: ' + response.value;\r\n            })\r\n            .catch(err => console.log(err));\r\n        }\r\n\r\n    });\r\n}\r\n\r\nfunction set_default_color_palette()\r\n{\r\n    acf.add_filter('color_picker_args', function( args, $field ){\r\n        args.palettes = ['#cf0000', '#fff4f4', '#f7f7f7', '#ffffff']\r\n        return args;\r\n    });\r\n}\r\n\r\n(()=> {\r\n    // includes the selected post type in the AJAX request to return the right terms\r\n    acf_cta_cards_fetch_terms_of_chosen_tax();\r\n    // fetch current selected term from custom endpoint\r\n    acf_cta_cards_fetch_chosen_term();\r\n    // default color palette\r\n    set_default_color_palette();\r\n})();\n\n//# sourceURL=webpack://2022-webpack-test/./assets/js/admin.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./assets/js/admin.js"]();
/******/ 	
/******/ })()
;