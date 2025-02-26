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

/***/ "./js/fadeAnimations.js":
/*!******************************!*\
  !*** ./js/fadeAnimations.js ***!
  \******************************/
/***/ (() => {

eval("document.addEventListener('DOMContentLoaded', function () {\n  var observer = new IntersectionObserver(function (entries) {\n    entries.forEach(function (entry) {\n      if (entry.isIntersecting) {\n        entry.target.classList.add('visible');\n        observer.unobserve(entry.target);\n      }\n    });\n  }, {\n    threshold: 0.1\n  });\n  var skillsSection = document.querySelector('#skills');\n  var testimonialsSection = document.querySelector('#testimonials');\n  var lucidSection = document.querySelector('#lucid');\n  var personalSection = document.querySelector('#personal');\n  var twiteeSection = document.querySelector('#twitee');\n  var contactSection = document.querySelector('#contact');\n  if (skillsSection) {\n    observer.observe(skillsSection);\n  }\n  if (testimonialsSection) {\n    observer.observe(testimonialsSection);\n  }\n  if (lucidSection) {\n    observer.observe(lucidSection);\n  }\n  if (personalSection) {\n    observer.observe(personalSection);\n  }\n  if (twiteeSection) {\n    observer.observe(twiteeSection);\n  }\n  if (contactSection) {\n    observer.observe(contactSection);\n  }\n});\n\n//# sourceURL=webpack://my-portfolio/./js/fadeAnimations.js?");

/***/ }),

/***/ "./js/slider.js":
/*!**********************!*\
  !*** ./js/slider.js ***!
  \**********************/
/***/ (() => {

eval("function _typeof(o) { \"@babel/helpers - typeof\"; return _typeof = \"function\" == typeof Symbol && \"symbol\" == typeof Symbol.iterator ? function (o) { return typeof o; } : function (o) { return o && \"function\" == typeof Symbol && o.constructor === Symbol && o !== Symbol.prototype ? \"symbol\" : typeof o; }, _typeof(o); }\nfunction ownKeys(e, r) { var t = Object.keys(e); if (Object.getOwnPropertySymbols) { var o = Object.getOwnPropertySymbols(e); r && (o = o.filter(function (r) { return Object.getOwnPropertyDescriptor(e, r).enumerable; })), t.push.apply(t, o); } return t; }\nfunction _objectSpread(e) { for (var r = 1; r < arguments.length; r++) { var t = null != arguments[r] ? arguments[r] : {}; r % 2 ? ownKeys(Object(t), !0).forEach(function (r) { _defineProperty(e, r, t[r]); }) : Object.getOwnPropertyDescriptors ? Object.defineProperties(e, Object.getOwnPropertyDescriptors(t)) : ownKeys(Object(t)).forEach(function (r) { Object.defineProperty(e, r, Object.getOwnPropertyDescriptor(t, r)); }); } return e; }\nfunction _defineProperty(e, r, t) { return (r = _toPropertyKey(r)) in e ? Object.defineProperty(e, r, { value: t, enumerable: !0, configurable: !0, writable: !0 }) : e[r] = t, e; }\nfunction _toPropertyKey(t) { var i = _toPrimitive(t, \"string\"); return \"symbol\" == _typeof(i) ? i : i + \"\"; }\nfunction _toPrimitive(t, r) { if (\"object\" != _typeof(t) || !t) return t; var e = t[Symbol.toPrimitive]; if (void 0 !== e) { var i = e.call(t, r || \"default\"); if (\"object\" != _typeof(i)) return i; throw new TypeError(\"@@toPrimitive must return a primitive value.\"); } return (\"string\" === r ? String : Number)(t); }\n$(document).ready(function () {\n  var slickSettings = {\n    dots: true,\n    infinite: true,\n    autoplay: true,\n    autoplaySpeed: 10000,\n    arrows: false,\n    fade: true,\n    mobileFirst: true\n  };\n  $('.slider').slick(_objectSpread({}, slickSettings));\n});\n\n//# sourceURL=webpack://my-portfolio/./js/slider.js?");

/***/ })

/******/ 	});
/************************************************************************/
/******/ 	
/******/ 	// startup
/******/ 	// Load entry module and return exports
/******/ 	// This entry module can't be inlined because the eval devtool is used.
/******/ 	__webpack_modules__["./js/fadeAnimations.js"]();
/******/ 	var __webpack_exports__ = {};
/******/ 	__webpack_modules__["./js/slider.js"]();
/******/ 	
/******/ })()
;