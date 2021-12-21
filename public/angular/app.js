var app =angular.module("myApp", ['ngRoute','ngStorage','slickCarousel','angularUtils.directives.dirPagination','ui.bootstrap', 'pascalprecht.translate']);

app.config(['$routeProvider', function($routeProvider){
	$routeProvider.
    when('/', {
		templateUrl: 'public/pages/main.html',
		controller: 'main_cont',
	}).
    when('/home', {
		templateUrl: 'public/pages/main.html',
		controller: 'main_cont',
	}).
	when('/about', {
		templateUrl: 'public/pages/about-us.html',
		controller: 'about_cont',
	}).
	when('/message', {
		templateUrl: 'public/pages/testi.html',
		controller: 'message_cont',
	}).
	when('/message/:location', {
		templateUrl: 'public/pages/testi.html',
		controller: 'message_cont',
	}).
	when('/contact_us', {
		templateUrl: 'public/pages/contact-us-v1.html',
		controller: 'contact_cont',
	}).
	when('/contact_us/:location', {
		templateUrl: 'public/pages/contact-us-v1.html',
		controller: 'contact_cont',
	}).
	when('/blog', {
		templateUrl: 'public/pages/blog-list-right-sidebar.html',
		controller: 'blog_cont',
	}).
	when('/category/:cid', {
		templateUrl: 'public/pages/category-list.html',
		controller: 'category_cont',
	}).
	when('/faq', {
		templateUrl: 'public/pages/faq.html',
		controller: 'faq_cont',
	}).
    when('/shop', {
		templateUrl: 'public/pages/category-6-columns-full.html',
		controller: 'shop_cont',
	}).
	when('/universal', {
		templateUrl: 'public/pages/universal.html',
		controller: 'universal_cont',
	}).
    when('/wishlist', {
		templateUrl: 'public/pages/wishlist.html',
		controller: 'wishlist_cont',
	}).
    when('/login', {
		templateUrl: 'public/pages/account-login.html',
		controller: 'login_cont',
	}).
	when('/logout', {
		templateUrl: 'public/pages/account-login.html',
		controller: 'logout_cont',
	}).
	when('/forgot', {
		templateUrl: 'public/pages/forgot.html',
		controller: 'forgot_cont',
	}).
	when('/reset', {
		templateUrl: 'public/pages/reset.html',
		controller: 'reset_cont',
	}).
    when('/dashboard', {
		templateUrl: 'public/pages/account-dashboard.html',
		controller: 'dashboard_cont',
	}).
    when('/garage', {
		templateUrl: 'public/pages/account-garage.html',
		controller: 'garage_cont',
	}).
    when('/profile', {
		templateUrl: 'public/pages/account-profile.html',
		controller: 'profile_cont',
	}).
    when('/orders', {
		templateUrl: 'public/pages/account-orders.html',
		controller: 'orders_cont',
	}).
    when('/account-address', {
		templateUrl: 'public/pages/account-addresses.html',
		controller: 'address_cont',
	}).
    when('/edit-address', {
		templateUrl: 'public/pages/account-edit-address.html',
		controller: 'edit-address_cont',
	}).
    when('/password', {
		templateUrl: 'public/pages/account-password.html',
		controller: 'password_cont',
	}).
    when('/order-details/:oid', {
		templateUrl: 'public/pages/account-order-details.html',
		controller: 'order-details_cont',
	}).
    when('/track-order', {
		templateUrl: 'public/pages/track-order.html',
		controller: 'track-order_cont',
	}).
    when('/cart', {
		templateUrl: 'public/pages/cart.html',
		controller: 'cart_cont',
	}).
    when('/product-detail/:part/:id/:cat_id/:part_no', {
		templateUrl: 'public/pages/product-full.html',
		controller: 'product-detail_cont',
	}).
	when('/old-detail/:part/:id/:part_no', {
		templateUrl: 'public/pages/old-detail.html',
		controller: 'old-detail_cont',
	}).
	when('/old-list/:part_no', {
		templateUrl: 'public/pages/old_parts_list.html',
		controller: 'old-list_cont',
	}).
    when('/error', {
		templateUrl: 'public/pages/404.html',
		controller: 'error_cont',
	}).
    when('/checkout', {
		templateUrl: 'public/pages/checkout.html',
		controller: 'checkout_cont',
	}).
    when('/terms', {
		templateUrl: 'public/pages/terms.html',
		controller: 'terms_cont',
	}).
	when('/terms/:topic', {
		templateUrl: 'public/pages/terms.html',
		controller: 'terms_cont',
	}).
	when('/search/:make/:model', {
		templateUrl: 'public/pages/product_list.html',
		controller: 'search-prod_cont',
	}).
	when('/search_part/:part', {
		templateUrl: 'public/pages/search-part.html',
		controller: 'search_part_cont',
	}).
	when('/blog-detail/:id', {
		templateUrl: 'public/pages/post-full-width.html',
		controller: 'blog-detail_cont',
	}).
	when('/received', {
		templateUrl: 'public/pages/received.html',
		controller: 'receive_cont',
	}).
	otherwise({
		redirectTo: '/'
	});
}]);


app.run(['$rootScope', function($rootScope) {
    $rootScope.lang = 'en';
}]);


app.config(["$translateProvider", function($translateProvider){

    $translateProvider.useStaticFilesLoader({
        prefix: '/public/locales/locale-',
        suffix: '.json'
    })
    .useSanitizeValueStrategy('sanitizeParameters')    
    .preferredLanguage('en');
}]);

// app.directive('pagination', function() {
// 	return {
// 	  restrict: 'E',
// 	  scope: {
// 		numPages: '=',
// 		currentPage: '=',
// 		onSelectPage: '&'
// 	  },
// 	  templateUrl: 'public/pages/pagination.html',
// 	  replace: true,
// 	  link: function(scope) {
// 		scope.$watch('numPages', function(value) {
// 		  scope.pages = [];
// 		  for(var i=1;i<=value;i++) {
// 			scope.pages.push(i);
// 		  }
// 		  if ( scope.currentPage > value ) {
// 			scope.selectPage(value);
// 		  }
// 		});
// 		scope.noPrevious = function() {
// 		  return scope.currentPage === 1;
// 		};
// 		scope.noNext = function() {
// 		  return scope.currentPage === scope.numPages;
// 		};
// 		scope.isActive = function(page) {
// 		  return scope.currentPage === page;
// 		};
  
// 		scope.selectPage = function(page) {
// 		  if ( ! scope.isActive(page) ) {
// 			scope.currentPage = page;
// 			scope.onSelectPage({ page: page });
// 		  }
// 		};
  
// 		scope.selectPrevious = function() {
// 		  if ( !scope.noPrevious() ) {
// 			scope.selectPage(scope.currentPage-1);
// 		  }
// 		};
// 		scope.selectNext = function() {
// 		  if ( !scope.noNext() ) {
// 			scope.selectPage(scope.currentPage+1);
// 		  }
// 		};
// 	  }
// 	};
//   });

app.directive("compareTo", function ()  
    {  
        return {  
            require: "ngModel",  
            scope:  
            {  
                confirmPassword: "=compareTo"  
            },  
            link: function (scope, element, attributes, modelVal)  
            {  
                modelVal.$validators.compareTo = function (val)  
                {  
                    return val == scope.confirmPassword;  
                };  
                scope.$watch("confirmPassword", function ()  
                {  
                    modelVal.$validate();  
                });  
            }  
        };  
    });

	app.directive('wrapOwlcarousel', function () { 

		return { 
	   
		restrict: 'E', 
	   
		link: function (scope, element, attrs) { 
	   
		var options = scope.$eval($(element).attr('data-options')); 
	   
		$(element).owlCarousel(options); 
	   
		} 
	   
		}; 
	   
	   }); 

app.directive("owlCarousel", function() {
	return {
		restrict: 'E',
		transclude: false,
		link: function (scope) {
			scope.initCarousel = function(element) {
			  // provide any default options you want
				var defaultOptions = {
				};
				var customOptions = scope.$eval($(element).attr('data-options'));
				// combine the two options objects
				for(var key in customOptions) {
					defaultOptions[key] = customOptions[key];
				}
				// init carousel
				$(element).owlCarousel(defaultOptions);
			};
		}
	};
});

app.directive('owlCarouselItem', [function() {
	return {
		restrict: 'A',
		transclude: false,
		link: function(scope, element) {
		  // wait for the last item in the ng-repeat then call init
			if(scope.$last) {
				scope.initCarousel(element.parent());
			}
		}
	};
}]);

app.config(['slickCarouselConfig', function (slickCarouselConfig) {
    slickCarouselConfig.dots = true;
    slickCarouselConfig.autoplay = true;
  }]);


  'use strict';

  angular
	.module('slickCarousel', [])
	//global config
	.constant('slickCarouselConfig', {
	  method: {},
	  event: {}
	})
	.directive('slick', [
	  '$timeout', 'slickCarouselConfig', function ($timeout, slickCarouselConfig) {
		var slickMethodList, slickEventList;
		slickMethodList = ['slickGoTo', 'slickNext', 'slickPrev', 'slickPause', 'slickPlay', 'slickAdd', 'slickRemove', 'slickFilter', 'slickUnfilter', 'unslick'];
		slickEventList = ['afterChange', 'beforeChange', 'breakpoint', 'destroy', 'edge', 'init', 'reInit', 'setPosition', 'swipe', 'lazyLoaded', 'lazyLoadError'];
  
		return {
		  scope: {
			settings: '=',
			enabled: '@',
			accessibility: '@',
			adaptiveHeight: '@',
			autoplay: '@',
			autoplaySpeed: '@',
			arrows: '@',
			asNavFor: '@',
			appendArrows: '@',
			prevArrow: '@',
			nextArrow: '@',
			centerMode: '@',
			centerPadding: '@',
			cssEase: '@',
			customPaging: '&',
			dots: '@',
			draggable: '@',
			fade: '@',
			focusOnSelect: '@',
			easing: '@',
			edgeFriction: '@',
			infinite: '@',
			initialSlide: '@',
			lazyLoad: '@',
			mobileFirst: '@',
			pauseOnHover: '@',
			pauseOnDotsHover: '@',
			respondTo: '@',
			responsive: '=?',
			rows: '@',
			slide: '@',
			slidesPerRow: '@',
			slidesToShow: '@',
			slidesToScroll: '@',
			speed: '@',
			swipe: '@',
			swipeToSlide: '@',
			touchMove: '@',
			touchThreshold: '@',
			useCSS: '@',
			variableWidth: '@',
			vertical: '@',
			verticalSwiping: '@',
			rtl: '@'
		  },
		  restrict: 'AE',
		  link: function (scope, element, attr) {
			//hide slider
			angular.element(element).css('display', 'none');
  
			var options, initOptions, destroy, init, destroyAndInit, currentIndex;
  
			initOptions = function () {
			  options = angular.extend(angular.copy(slickCarouselConfig), {
				enabled: scope.enabled !== 'false',
				accessibility: scope.accessibility !== 'false',
				adaptiveHeight: scope.adaptiveHeight === 'true',
				autoplay: scope.autoplay === 'true',
				autoplaySpeed: scope.autoplaySpeed != null ? parseInt(scope.autoplaySpeed, 10) : 3000,
				arrows: scope.arrows !== 'false',
				asNavFor: scope.asNavFor ? scope.asNavFor : void 0,
				appendArrows: scope.appendArrows ? angular.element(scope.appendArrows) : angular.element(element),
				prevArrow: scope.prevArrow ? angular.element(scope.prevArrow) : void 0,
				nextArrow: scope.nextArrow ? angular.element(scope.nextArrow) : void 0,
				centerMode: scope.centerMode === 'true',
				centerPadding: scope.centerPadding || '50px',
				cssEase: scope.cssEase || 'ease',
				customPaging: attr.customPaging ? function (slick, index) {
				  return scope.customPaging({slick: slick, index: index});
				} : void 0,
				dots: scope.dots === 'true',
				draggable: scope.draggable !== 'false',
				fade: scope.fade === 'true',
				focusOnSelect: scope.focusOnSelect === 'true',
				easing: scope.easing || 'linear',
				edgeFriction: scope.edgeFriction || 0.15,
				infinite: scope.infinite !== 'false',
				initialSlide: parseInt(scope.initialSlide) || 0,
				lazyLoad: scope.lazyLoad || 'ondemand',
				mobileFirst: scope.mobileFirst === 'true',
				pauseOnHover: scope.pauseOnHover !== 'false',
				pauseOnDotsHover: scope.pauseOnDotsHover === "true",
				respondTo: scope.respondTo != null ? scope.respondTo : 'window',
				responsive: scope.responsive || void 0,
				rows: scope.rows != null ? parseInt(scope.rows, 10) : 1,
				slide: scope.slide || '',
				slidesPerRow: scope.slidesPerRow != null ? parseInt(scope.slidesPerRow, 10) : 1,
				slidesToShow: scope.slidesToShow != null ? parseInt(scope.slidesToShow, 10) : 1,
				slidesToScroll: scope.slidesToScroll != null ? parseInt(scope.slidesToScroll, 10) : 1,
				speed: scope.speed != null ? parseInt(scope.speed, 10) : 300,
				swipe: scope.swipe !== 'false',
				swipeToSlide: scope.swipeToSlide === 'true',
				touchMove: scope.touchMove !== 'false',
				touchThreshold: scope.touchThreshold ? parseInt(scope.touchThreshold, 10) : 5,
				useCSS: scope.useCSS !== 'false',
				variableWidth: scope.variableWidth === 'true',
				vertical: scope.vertical === 'true',
				verticalSwiping: scope.verticalSwiping === 'true',
				rtl: scope.rtl === 'true'
			  }, scope.settings);
  
			};
  
			destroy = function () {
			  var slickness = angular.element(element);
			  if (slickness.hasClass('slick-initialized')) {
				slickness.remove('slick-list');
				slickness.slick('unslick');
			  }
  
			  return slickness;
			};
  
			init = function () {
			  initOptions();
  
			  var slickness = angular.element(element);
  
			  if (angular.element(element).hasClass('slick-initialized')) {
				if (options.enabled) {
				  return slickness.slick('getSlick');
				} else {
				  destroy();
				}
			  } else {
				if (!options.enabled) {
				  return;
				}
				// Event
				slickness.on('init', function (event, slick) {
				  if (typeof options.event.init !== 'undefined') {
					options.event.init(event, slick);
				  }
				  if (typeof currentIndex !== 'undefined') {
					return slick.slideHandler(currentIndex);
				  }
				});
  
				$timeout(function () {
				  angular.element(element).css('display', 'block');
				  slickness.not('.slick-initialized').slick(options);
				});
			  }
  
			  scope.internalControl = options.method || {};
  
			  // Method
			  slickMethodList.forEach(function (value) {
				scope.internalControl[value] = function () {
				  var args;
				  args = Array.prototype.slice.call(arguments);
				  args.unshift(value);
				  slickness.slick.apply(element, args);
				};
			  });
  
			  // Event
			  slickness.on('afterChange', function (event, slick, currentSlide) {
				currentIndex = currentSlide;
				if (typeof options.event.afterChange !== 'undefined') {
				  $timeout(function () {
					scope.$apply(function () {
					  options.event.afterChange(event, slick, currentSlide);
					});
				  });
				}
			  });
  
			  slickness.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
				if (typeof options.event.beforeChange !== 'undefined') {
				  $timeout(function () {
					$timeout(function () {
					  scope.$apply(function () {
						options.event.beforeChange(event, slick, currentSlide, nextSlide);
					  });
					});
				  });
				}
			  });
  
			  slickness.on('reInit', function (event, slick) {
				if (typeof options.event.reInit !== 'undefined') {
				  $timeout(function () {
					scope.$apply(function () {
					  options.event.reInit(event, slick);
					});
				  });
				}
			  });
  
			  if (typeof options.event.breakpoint !== 'undefined') {
				slickness.on('breakpoint', function (event, slick, breakpoint) {
				  $timeout(function () {
					scope.$apply(function () {
					  options.event.breakpoint(event, slick, breakpoint);
					});
				  });
				});
			  }
			  if (typeof options.event.destroy !== 'undefined') {
				slickness.on('destroy', function (event, slick) {
				  $timeout(function () {
					scope.$apply(function () {
					  options.event.destroy(event, slick);
					});
				  });
				});
			  }
			  if (typeof options.event.edge !== 'undefined') {
				slickness.on('edge', function (event, slick, direction) {
				  $timeout(function () {
					scope.$apply(function () {
					  options.event.edge(event, slick, direction);
					});
				  });
				});
			  }
  
			  if (typeof options.event.setPosition !== 'undefined') {
				slickness.on('setPosition', function (event, slick) {
				  $timeout(function () {
					scope.$apply(function () {
					  options.event.setPosition(event, slick);
					});
				  });
				});
			  }
			  if (typeof options.event.swipe !== 'undefined') {
				slickness.on('swipe', function (event, slick, direction) {
				  $timeout(function () {
					scope.$apply(function () {
					  options.event.swipe(event, slick, direction);
					});
				  });
				});
			  }
			  if (typeof options.event.lazyLoaded !== 'undefined') {
				slickness.on('lazyLoaded', function (event, slick, image, imageSource) {
				  $timeout(function () {
					scope.$apply(function () {
					  options.event.lazyLoaded(event, slick, image, imageSource);
					});
				  });
				});
			  }
			  if (typeof options.event.lazyLoadError !== 'undefined') {
				slickness.on('lazyLoadError', function (event, slick, image, imageSource) {
				  $timeout(function () {
					scope.$apply(function () {
					  options.event.lazyLoadError(event, slick, image, imageSource);
					});
				  });
				});
			  }
			};
  
			destroyAndInit = function () {
			  destroy();
			  init();
			};
  
			element.one('$destroy', function () {
			  destroy();
			});
  
			return scope.$watch('settings', function (newVal, oldVal) {
			  if (newVal !== null) {
				return destroyAndInit();
			  }
			}, true);
  
		  }
		};
	  }
	]);