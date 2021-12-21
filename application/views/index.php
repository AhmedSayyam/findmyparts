<!DOCTYPE html>
<html lang="{{ lang }}" dir="ltr" ng-app="myApp">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="format-detection" content="telephone=no" />
    <title>Find My Parts</title>
    <link rel="icon" type="image/ico" href="public/assets/images/favicon.ico" />
    <!-- fonts -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css?family=Roboto:400,400i,500,500i,700,700i"
    />
    <!-- css -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>vendor/bootstrap/css/bootstrap.css" />
    <link
      rel="stylesheet"
      href="<?php echo base_url('public/assets/');?>vendor/owl-carousel/assets/owl.carousel.min.css"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url('public/assets/');?>vendor/owl-carousel/assets/owl.theme.default.min.css"
    />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.css" integrity="sha512-RWhcC19d8A3vE7kpXq6Ze4GcPfGe3DQWuenhXAbcGiZOaqGojLtWwit1eeM9jLGHFv8hnwpX3blJKGjTsf2HxQ==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.css" integrity="sha512-itF/9I/NigY9u4ukjw9s7/kG6SC7LJ5Q4pRNMnTbGZAsO4/RSUelfVuYBk8AkSk23qEcucIqdUlzzpy2qf7jGg==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>vendor/photoswipe/photoswipe.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css" integrity="sha512-4ioNqjewIy2hSnYs7smFWpvzAB4xcD6NnR2z6ydUZEBg0UDVW3IoKATPoVYMyzKexe8yFU6sPd2VypoH2ZjCTQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link
      rel="stylesheet"
      href="<?php echo base_url('public/assets/');?>vendor/photoswipe/default-skin/default-skin.css"
    />
    <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>vendor/select2/css/select2.min.css" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>css/style.css" />
    <link
      rel="stylesheet"
      href="<?php echo base_url('public/assets/');?>css/style.header-spaceship-variant-one.css"
      media="(min-width: 1200px)"
    />
    <link
      rel="stylesheet"
      href="<?php echo base_url('public/assets/');?>css/style.mobile-header-variant-one.css"
      media="(max-width: 1199px)"
    />
    <!-- font - fontawesome -->
    <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>vendor/fontawesome/css/all.min.css" />

    <!-- Slick Slider -->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css">-->
    <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css">-->
    <!-- <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>slick/slick/slick.css" />
    <link rel="stylesheet" href="<?php echo base_url('public/assets/');?>slick/slick/slick-theme.css" /> -->
    <script src="<?php echo base_url('public/assets/');?>js/money.js"></script>
    <script src="<?php echo base_url('public/assets/');?>js/moment.js"></script>

    <!-- <link data-require="bootstrap-css@2.3.2" 
      data-semver="2.3.2" 
      rel="stylesheet" 
      href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" /> -->
    <!-- owl-carousel starts -->
    <!-- owl-carousel ends -->  
       <!-- scripts -->
       <script src="<?php echo base_url('public/assets/');?>vendor/jquery/jquery.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="<?php echo base_url('public/assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/owl-carousel/owl.carousel.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script> -->
    <script src="<?php echo base_url('public/assets/');?>vendor/nouislider/nouislider.min.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/photoswipe/photoswipe.min.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/photoswipe/photoswipe-ui-default.min.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/select2/js/select2.min.js"></script>
    <script src="<?php echo base_url('public/assets/');?>js/number.js"></script>
  
    <script src="<?php echo base_url('public/assets/');?>js/main.js"></script>
    <!-- <script src="<?php echo base_url('public/assets/');?>js/test.js"></script> -->
    <!-- <script src="<?php echo base_url('public/assets/');?>vendor/jquery/jquery.js"></script>  -->
<!-- <script src="<?php echo base_url('public/assets/');?>slick/slick/slick.js"></script>  -->
<!-- <script src="https://www.google.com/recaptcha/api.js" async defer></script> -->

    <!-- Angular js Route and min.js file -->
    <script src="<?php echo base_url('public/assets/');?>vendor/angular/angular.min.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/angular/angular-route.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/ngstorage/0.3.6/ngStorage.min.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/angular/angular-parse-ext.min.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/angular/angular-animate.min.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/angular/angular-sanitize.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/angular/dirPagination.js"></script>
    <script src="<?php echo base_url('public/assets/');?>vendor/angular/ui-bootstrap-tpls-2.5.0.min.js"></script>
    
    <script src="//cdnjs.cloudflare.com/ajax/libs/angular-translate/2.18.1/angular-translate.min.js"></script>
 <script src="//cdnjs.cloudflare.com/ajax/libs/angular-translate/2.18.1/angular-translate-loader-static-files/angular-translate-loader-static-files.min.js"></script>


    <script src="<?php echo base_url('public/angular');?>/app.js"></script>    
    
    <script src="<?php echo base_url('public/angular');?>/controller.js"></script>
    <style>
        [ng-cloak]  
        {  
            display: none !important;
        }
    </style>

  </head>
  <!--<script src="https://app.wotnot.io/chat-widget/pWrQqckgu9K8063440443547NO0Dcjz7.js" defer></script> -->
  <script src="https://app.wotnot.io/chat-widget/pWrQqckgu9K8063440443547NO0Dcjz7.js" defer></script>
  <body >
    <!-- site -->
    <div class="site" class="ng-cloak"  ng-controller="head_cont" ng-cloak>
   
      <!-- site__mobile-header -->
      <header class="site__mobile-header">
        <div class="mobile-header" style="height: 65px">
          <div class="container">
            <div class="mobile-header__body">
              <button class="mobile-header__menu-button" type="button">
                <svg width="18px" height="14px">
                  <path
                    d="M-0,8L-0,6L18,6L18,8L-0,8ZM-0,-0L18,-0L18,2L-0,2L-0,-0ZM14,14L-0,14L-0,12L14,12L14,14Z"
                  />
                </svg>
              </button>
              <a class="mobile-header__logo" href="#!home">
                <!-- mobile-logo -->
                <img
                  src="<?php echo base_url('public/assets/');?>images/logow.jpeg"
                  width="100"
                  height="70"
                  class="mt-2"
                  alt="logo-image"
                />
               <!--id="search_input"-->
              </a>
              <div class="mobile-header__search mobile-search" >
                <form class="mobile-search__body">
                  <!-- search modal input field on mobile header -->
                  <input
                    type="text"
                    class="mobile-search__input"
                     ng-keypress="($event.which === 13)?search_part_fun():0"
                    ng-model="ng_search"
                    placeholder="{{ 'ENTER_PART' | translate }}"
                  />
                  <!-- search modal vehicle icon button on mobile header -->
                  <!-- <button
                    type="button"
                    class="mobile-search__vehicle-picker"
                    aria-label="Select Vehicle">
                    <svg width="20" height="20">
                      <path
                        d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1
                          c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2
                          C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9
                          c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0
                          c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0
                          C15.5,10.2,14,11.3,14,12z"
                      />
                    </svg>
                    <span class="mobile-search__vehicle-picker-label"
                      >Vehicle</span
                    >
                  </button> -->
                  <!-- search modal search button on mobile header -->
                  <button
                    type="submit"
                    class="mobile-search__button mobile-search__button--search"
                    ng-click="search_part(ng_search)" >
                      <!--data-toggle="modal" data-target="#result_modal"-->
                    <svg width="20" height="20">
                      <path
                        d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
                            c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
                            c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"
                      />
                    </svg>
                  </button>
                  <!-- search modal close button on mobile header -->
                 
                  <button
                    type="button"
                    class="mobile-search__button mobile-search__button--close" >
                    <svg width="20" height="20">
                      <path
                        d="M16.7,16.7L16.7,16.7c-0.4,0.4-1,0.4-1.4,0L10,11.4l-5.3,5.3c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L8.6,10L3.3,4.7
                          c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L10,8.6l5.3-5.3c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L11.4,10l5.3,5.3
                          C17.1,15.7,17.1,16.3,16.7,16.7z"
                      />
                    </svg>
                  </button>
                  <div class="mobile-search__field"></div>
                </form>
                
              </div>
              
              <div class="mobile-header__indicators">
                <!-- // search icon on mobile header -->
                <div class="mobile-indicator mobile-indicator--search d-md-none">
                  <button type="button" class="mobile-indicator__button">
                    <span class="mobile-indicator__icon"
                      ><svg width="20" height="20">
                        <path
                          d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
                            c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
                            c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"
                        />
                      </svg>
                    </span>
                  </button>
                </div>
                <!-- // login or user icon on mobile header -->
                <div class="mobile-indicator d-md-block">
                  <span ng-if="is_login == true">
                    <a href="#!dashboard" class="mobile-indicator__button">
                      <span class="mobile-indicator__icon"
                        ><svg width="20" height="20">
                          <path
                            d="M20,20h-2c0-4.4-3.6-8-8-8s-8,3.6-8,8H0c0-4.2,2.6-7.8,6.3-9.3C4.9,9.6,4,7.9,4,6c0-3.3,2.7-6,6-6s6,2.7,6,6
                            c0,1.9-0.9,3.6-2.3,4.7C17.4,12.2,20,15.8,20,20z M14,6c0-2.2-1.8-4-4-4S6,3.8,6,6s1.8,4,4,4S14,8.2,14,6z"
                          />
                        </svg>
                      </span>
                    </a>
                  </span>
                  <span ng-if="is_login == false">
                    <a href="#!login" class="mobile-indicator__button">
                      <span class="mobile-indicator__icon"
                        ><svg width="20" height="20">
                          <path
                            d="M20,20h-2c0-4.4-3.6-8-8-8s-8,3.6-8,8H0c0-4.2,2.6-7.8,6.3-9.3C4.9,9.6,4,7.9,4,6c0-3.3,2.7-6,6-6s6,2.7,6,6
                            c0,1.9-0.9,3.6-2.3,4.7C17.4,12.2,20,15.8,20,20z M14,6c0-2.2-1.8-4-4-4S6,3.8,6,6s1.8,4,4,4S14,8.2,14,6z"
                          />
                        </svg>
                      </span>
                    </a>
                  </span>
                </div>
                <!-- // Wishlist Icon on mpbile header -->
                <div class="mobile-indicator d-none d-md-block">
                  <a href="wishlist.html" class="mobile-indicator__button">
                    <span class="mobile-indicator__icon">
                      <svg width="20" height="20">
                        <path
                          d="M14,3c2.2,0,4,1.8,4,4c0,4-5.2,10-8,10S2,11,2,7c0-2.2,1.8-4,4-4c1,0,1.9,0.4,2.7,1L10,5.2L11.3,4C12.1,3.4,13,3,14,3 M14,1
                              c-1.5,0-2.9,0.6-4,1.5C8.9,1.6,7.5,1,6,1C2.7,1,0,3.7,0,7c0,5,6,12,10,12s10-7,10-12C20,3.7,17.3,1,14,1L14,1z"
                        />
                      </svg>
                    </span>
                  </a>
                </div>
                <!-- // Cart Icon on mobile header -->
                <div class="mobile-indicator">
                  <a href="#!cart" class="mobile-indicator__button">
                    <span class="mobile-indicator__icon">
                      <svg width="20" height="20">
                        <circle cx="7" cy="17" r="2" />
                        <circle cx="15" cy="17" r="2" />
                        <path
                          d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
                            V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
                            C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"
                        />
                      </svg>
                      <span class="mobile-indicator__counter">{{product_array.length}}</span>
                    </span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- site__mobile-header / end -->

      <!-- site__header -->
      <header class="site__header">
        <div class="header">
          <div class="header__megamenu-area megamenu-area"></div>
          <div class="header__topbar-start-bg"></div>
          <div class="header__topbar-start">
            <div class="topbar topbar--spaceship-start">
              <div class="topbar__item-text d-none d-xxl-flex">
                {{'CALL' | translate}} : +971507995291
              </div>
              <div class="topbar__item-text">
                <a class="topbar__link" href="#!about">
                {{ 'ABOUT_US' | translate }}
                <!-- About Us -->
                </a>
              </div>
              <div class="topbar__item-text">
                <a class="topbar__link" href="#!terms">{{'PRIVACY_POLICY' | translate}} </a>
              </div>
            </div>
          </div>
          <div class="header__topbar-end-bg"></div>
          <div class="header__topbar-end">
            <div class="topbar topbar--spaceship-end">
              <!--<div class="topbar__item-button">-->
              <!--  <a href="" class="topbar__button">-->
              <!--    <span class="topbar__button-label">Compare:</span>-->
              <!--    <span class="topbar__button-title">5</span>-->
              <!--  </a>-->
              <!--</div>-->
              <div class="topbar__item-button topbar__menu">
                <button
                  class="
                    topbar__button topbar__button--has-arrow topbar__menu-button
                  " type="button">
                  <span class="topbar__button-label">{{'CURRENCY' | translate}}:</span>
                  <span class="topbar__button-title">{{to_currency}}</span>
                  <span class="topbar__button-arrow"
                    ><svg width="7px" height="5px">
                      <path
                        d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z"
                      />
                    </svg>
                  </span>
                </button>
                <div class="topbar__menu-body extra-body">
                  <!-- <select class="custom-select" name="" id="" ng-model="ng_toCurrency" ng-change="convert_cuurency(ng_toCurrency)">
                    <option class="topbar__menu-item" value="EUR" >€ Euro</option>
                    <option value="PKR">Rs Pakistan</option>
                    <option value="USD" >$ US Dollar</option>
                    <option value="RUB" >₽ Russian Ruble</option>
                  </select> -->
                  <a class="topbar__menu-item" ng-click="convert_cuurency('AED')">&#1583;.&#1573; AED</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('EUR')">&#128; EUR</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('PKR')">&#8360; PKR</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('USD')">&#36; USD</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('RUB')">₽ RUB</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('GBP')">&#163; GBP</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('AFN')">&#1547; AFN</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('ARS')"> &#36; ARS</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('AUD')"> &#36; AUD</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('AZN')">&#1084;&#1072;&#1085; AZN</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('BRL')">&#82;&#36; BRL</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('CAD')"> &#36; CAD</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('CNY')">&#165; CNY</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('COP')">&#36; COP</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('EGP')"> &#163; EGP</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('HKD')">&#36; HKD</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('IDR')">&#82;&#112; IDR</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('INR')">&#x20B9; INR</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('IRR')">&#65020; IRR</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('JPY')">&#165; JPY</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('KGS')"> &#1083;&#1074; KGS</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('KHR')"> &#6107; KHR</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('KPW')">&#8361; KPW</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('KRW')">&#8361; KRW</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('KWD')">Kuwaiti dinar</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('KZT')">&#1083;&#1074; KZT</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('LKR')">&#8360; LKR</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('LRD')"> &#36; LRD</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('MXN')">&#36; MXN</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('NZD')"> &#36; NZD</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('TRY')">&#8356; TRY</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('UZS')">&#1083;&#1074; UZS</a>
                  <a class="topbar__menu-item" ng-click="convert_cuurency('UAH')">&#8372; UAH</a>
                </div>
              </div>
              <div class="topbar__menu">
                <button
                  class="
                    topbar__button topbar__button--has-arrow topbar__menu-button
                  "
                  type="button"
                >
                  <span class="topbar__button-label">Language:</span>
                  <span class="topbar__button-title" style="text-transform: uppercase !important;">{{lang}}</span>
                  <span class="topbar__button-arrow"
                    ><svg width="7px" height="5px">
                      <path
                        d="M0.280,0.282 C0.645,-0.084 1.238,-0.077 1.596,0.297 L3.504,2.310 L5.413,0.297 C5.770,-0.077 6.363,-0.084 6.728,0.282 C7.080,0.634 7.088,1.203 6.746,1.565 L3.504,5.007 L0.262,1.565 C-0.080,1.203 -0.072,0.634 0.280,0.282 Z"
                      />
                    </svg>
                  </span>
                </button>
                <div class="topbar__menu-body">
                  <span class="topbar__menu-item" ng-click="changeLanguage('en')">
                    <img src="public/assets/images/languages/usa.png" alt="" />
                    <span>English</span>
                  </span>
                  <span class="topbar__menu-item" ng-click="changeLanguage('vn')">
                    <img src="public/assets/images/languages/veitnam.png" alt="" />
                    <span>Vietnam</span>
                  </span>
                  <span class="topbar__menu-item" ng-click="changeLanguage('ar')">
                    <img src="public/assets/images/languages/dubai.png" alt="" />
                    <span>Arabic</span>
                  </span>
                  <span class="topbar__menu-item" ng-click="changeLanguage('th')">
                    <img src="public/assets/images/languages/thailand.png" alt="" />
                    <span>Thai</span>
                  </span>
                  <span class="topbar__menu-item" ng-click="changeLanguage('rus')">
                    <img src="public/assets/images/languages/russia.png" alt="" />
                    <span>Russian</span>
                  </span>
                </div>
              </div>
            </div>
          </div>
          <div class="header__navbar">
            <!-- <div class="header__navbar-departments">
              <div class="departments">
                <button class="departments__button" type="button">
                  <span class="departments__button-icon"
                    ><svg width="16px" height="12px">
                      <path
                        d="M0,7L0,5L16,5L16,7L0,7ZM0,0L16,0L16,2L0,2L0,0ZM12,12L0,12L0,10L12,10L12,12Z"
                      />
                    </svg>
                  </span>
                  <span class="departments__button-title">Menu</span>
                  <span class="departments__button-arrow"
                    ><svg width="9px" height="6px">
                      <path
                        d="M0.2,0.4c0.4-0.4,1-0.5,1.4-0.1l2.9,3l2.9-3c0.4-0.4,1.1-0.4,1.4,0.1c0.3,0.4,0.3,0.9-0.1,1.3L4.5,6L0.3,1.6C-0.1,1.3-0.1,0.7,0.2,0.4z"
                      />
                    </svg>
                  </span>
                </button>
                <div class="departments__menu">
                  <div class="departments__arrow"></div>
                  <div class="departments__body">
                    <ul class="departments__list">
                      <li
                        class="departments__list-padding"
                        role="presentation"
                      ></li>
                      <li
                        class="
                          departments__item
                          departments__item--submenu--megamenu
                          departments__item--has-submenu
                        "
                      >
                        <a href="" class="departments__item-link">
                          Headlights & Lighting
                          <span class="departments__item-arrow"
                            ><svg width="7" height="11">
                              <path
                                d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                  C-0.1,9.8-0.1,10.4,0.3,10.7z"
                              />
                            </svg>
                          </span>
                        </a>
                        <div class="departments__item-menu">
                          <div
                            class="
                              megamenu
                              departments__megamenu
                              departments__megamenu--size--xl
                            "
                          >
                            <div class="megamenu__image">
                              <img
                                src="public/assets/images/departments/departments-2.jpg"
                                alt=""
                              />
                            </div>
                            <div class="row">
                              <div class="col-1of5">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Body Parts</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Bumpers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Hoods</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Grilles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Fog Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Door Handles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Car Covers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tailgates</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Suspension</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Steering</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Fuel Systems</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Transmission</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Air Filters</a
                                    >
                                  </li>
                                </ul>
                              </div>
                              <div class="col-1of5">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Headlights & Lighting</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Headlights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tail Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Fog Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Turn Signals</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Switches & Relays</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Corner Lights</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Brakes & Suspension</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Brake Discs</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Wheel Hubs</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Air Suspension</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Ball Joints</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Brake Pad Sets</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-1of5">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Interior Parts</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Floor Mats</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Gauges</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Consoles & Organizers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Mobile Electronics</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Steering Wheels</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Cargo Accessories</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Engine & Drivetrain</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Air Filters</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Oxygen Sensors</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Heating</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Exhaust</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Cranks & Pistons</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-1of5">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Tools & Garage</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Repair Manuals</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Car Care</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Code Readers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tool Boxes</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li
                        class="
                          departments__item
                          departments__item--submenu--megamenu
                          departments__item--has-submenu
                        "
                      >
                        <a href="" class="departments__item-link">
                          Interior Parts
                          <span class="departments__item-arrow"
                            ><svg width="7" height="11">
                              <path
                                d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                C-0.1,9.8-0.1,10.4,0.3,10.7z"
                              />
                            </svg>
                          </span>
                        </a>
                        <div class="departments__item-menu">
                          <div
                            class="
                              megamenu
                              departments__megamenu
                              departments__megamenu--size--lg
                            "
                          >
                            <div class="megamenu__image">
                              <img
                                src="public/assets/images/departments/departments-1.jpg"
                                alt=""
                              />
                            </div>
                            <div class="row">
                              <div class="col-3">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Body Parts</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Bumpers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Hoods</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Grilles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Fog Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Door Handles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Car Covers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tailgates</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Suspension</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Steering</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Fuel Systems</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Transmission</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Air Filters</a
                                    >
                                  </li>
                                </ul>
                              </div>
                              <div class="col-3">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Headlights & Lighting</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Headlights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tail Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Fog Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Turn Signals</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Switches & Relays</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Corner Lights</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Brakes & Suspension</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Brake Discs</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Wheel Hubs</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Air Suspension</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Ball Joints</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Brake Pad Sets</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-3">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Interior Parts</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Floor Mats</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Gauges</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Consoles & Organizers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Mobile Electronics</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Steering Wheels</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Cargo Accessories</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-3">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Tools & Garage</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Repair Manuals</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Car Care</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Code Readers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tool Boxes</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li
                        class="
                          departments__item
                          departments__item--submenu--megamenu
                          departments__item--has-submenu
                        "
                      >
                        <a href="" class="departments__item-link">
                          Switches & Relays
                          <span class="departments__item-arrow"
                            ><svg width="7" height="11">
                              <path
                                d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                  C-0.1,9.8-0.1,10.4,0.3,10.7z"
                              />
                            </svg>
                          </span>
                        </a>
                        <div class="departments__item-menu">
                          <div
                            class="
                              megamenu
                              departments__megamenu
                              departments__megamenu--size--md
                            "
                          >
                            <div class="megamenu__image">
                              <img
                                src="public/assets/images/departments/departments-3.jpg"
                                alt=""
                              />
                            </div>
                            <div class="row">
                              <div class="col-4">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Body Parts</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Bumpers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Hoods</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Grilles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Fog Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Door Handles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Car Covers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tailgates</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Suspension</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Steering</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Fuel Systems</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Transmission</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Air Filters</a
                                    >
                                  </li>
                                </ul>
                              </div>
                              <div class="col-4">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Headlights & Lighting</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Headlights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tail Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Fog Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Turn Signals</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Switches & Relays</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Corner Lights</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Brakes & Suspension</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Brake Discs</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Wheel Hubs</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Air Suspension</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Ball Joints</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Brake Pad Sets</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                              <div class="col-4">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Interior Parts</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Floor Mats</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Gauges</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Consoles & Organizers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Mobile Electronics</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li
                        class="
                          departments__item
                          departments__item--submenu--megamenu
                          departments__item--has-submenu
                        "
                      >
                        <a href="" class="departments__item-link">
                          Tires & Wheels
                          <span class="departments__item-arrow"
                            ><svg width="7" height="11">
                              <path
                                d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                C-0.1,9.8-0.1,10.4,0.3,10.7z"
                              />
                            </svg>
                          </span>
                        </a>
                        <div class="departments__item-menu">
                          <div
                            class="
                              megamenu
                              departments__megamenu
                              departments__megamenu--size--nl
                            "
                          >
                            <div class="megamenu__image">
                              <img
                                src="public/assets/images/departments/departments-4.jpg"
                                alt=""
                              />
                            </div>
                            <div class="row">
                              <div class="col-6">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Body Parts</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Bumpers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Hoods</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Grilles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Fog Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Door Handles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Car Covers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tailgates</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Suspension</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Steering</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Fuel Systems</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Transmission</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Air Filters</a
                                    >
                                  </li>
                                </ul>
                              </div>
                              <div class="col-6">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Headlights & Lighting</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Headlights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tail Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Fog Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Turn Signals</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li
                        class="
                          departments__item
                          departments__item--submenu--megamenu
                          departments__item--has-submenu
                        "
                      >
                        <a href="" class="departments__item-link">
                          Tools & Garage
                          <span class="departments__item-arrow"
                            ><svg width="7" height="11">
                              <path
                                d="M0.3,10.7L0.3,10.7c0.4,0.4,0.9,0.4,1.3,0L7,5.5L1.6,0.3C1.2-0.1,0.7,0,0.3,0.3l0,0c-0.4,0.4-0.4,1,0,1.3l4,3.9l-4,3.9
	                                C-0.1,9.8-0.1,10.4,0.3,10.7z"
                              />
                            </svg>
                          </span>
                        </a>
                        <div class="departments__item-menu">
                          <div
                            class="
                              megamenu
                              departments__megamenu
                              departments__megamenu--size--sm
                            "
                          >
                            <div class="row">
                              <div class="col-12">
                                <ul
                                  class="
                                    megamenu__links
                                    megamenu-links
                                    megamenu-links--root
                                  "
                                >
                                  <li
                                    class="
                                      megamenu-links__item
                                      megamenu-links__item--has-submenu
                                    "
                                  >
                                    <a class="megamenu-links__item-link" href=""
                                      >Body Parts</a
                                    >
                                    <ul class="megamenu-links">
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Bumpers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Hoods</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Grilles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Fog Lights</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Door Handles</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Car Covers</a
                                        >
                                      </li>
                                      <li class="megamenu-links__item">
                                        <a
                                          class="megamenu-links__item-link"
                                          href=""
                                          >Tailgates</a
                                        >
                                      </li>
                                    </ul>
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Suspension</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Steering</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Fuel Systems</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Transmission</a
                                    >
                                  </li>
                                  <li class="megamenu-links__item">
                                    <a class="megamenu-links__item-link" href=""
                                      >Air Filters</a
                                    >
                                  </li>
                                </ul>
                              </div>
                            </div>
                          </div>
                        </div>
                      </li>
                      <li class="departments__item">
                        <a href="" class="departments__item-link"> Clutches </a>
                      </li>
                      <li class="departments__item">
                        <a href="" class="departments__item-link">
                          Fuel Systems
                        </a>
                      </li>
                      <li class="departments__item">
                        <a href="" class="departments__item-link"> Steering </a>
                      </li>
                      <li class="departments__item">
                        <a href="" class="departments__item-link">
                          Suspension
                        </a>
                      </li>
                      <li class="departments__item">
                        <a href="" class="departments__item-link">
                          Body Parts
                        </a>
                      </li>
                      <li class="departments__item">
                        <a href="" class="departments__item-link">
                          Transmission
                        </a>
                      </li>
                      <li class="departments__item">
                        <a href="" class="departments__item-link">
                          Air Filters
                        </a>
                      </li>
                      <li
                        class="departments__list-padding"
                        role="presentation"
                      ></li>
                    </ul>
                    <div class="departments__menu-container"></div>
                  </div>
                </div>
              </div>
            </div> -->
            <div class="header__navbar-menu">
              <div class="main-menu">
                <ul class="main-menu__list">
                <li class="menu__item">
                  <!-- <button ng-click="changeLanguage('vn')">Vietnam</button> -->
                    <a href="#!home" class="menu__link">
                      {{'HOME' | translate}}
                      <!-- Home -->
                    </a>
                  </li>
                  <li class="menu__item">
                    <a href="#!shop" class="menu__link">
                      {{'SHOP' | translate}}
                      <!-- Shop -->
                    </a>
                  </li>
                  <li class="menu__item">
                    <a href="#!blog" class="menu__link">
                      <!-- Blog -->
                      {{'BLOG' | translate}}
                    </a>
                  </li>
                  
                  <!--<li class="menu__item">-->
                  <!--  <a href="#!faq" class="menu__link"> -->
                  <!--  {{'FAQ' | translate}}  -->
                  <!-- </a>-->
                  <!--</li>-->
                  <li class="menu__item">
                    <a href="#!message" class="menu__link">
                      <!-- Contact Us -->
                      {{'CONTACT_US' | translate}}
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="header__logo">
            <a href="#!home" class="logo">
              <div class="logo__image">
                <img
                  src="<?php echo base_url('public/assets/') ?>images/logow.jpeg"
                  width="175"
                  height="120"
                  alt="logo-image"
                />
               <!--id="search_input"-->
              </div>
            </a>
          </div>
          <div class="header__search " >
            <div class="search">
              <form name="searchPartForm" class="search__body">
                <div class="search__shadow"></div>
                <input
                  class="search__input"
                  type="text"
                  
                   ng-keypress="($event.which === 13)?search_part_fun():0"
                  placeholder="{{ 'ENTER_PART' | translate }}"
                  ng-model="ng_search"
                />
                <button
                  class="search__button search__button--start"
                   ng-click="search_part(ng_search)"
                >
                  <span class="search__button-icon"
                    ><svg width="20" height="20">
                      <path
                        d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1
                          c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2
                          C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9
                          c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0
                          c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0
                          C15.5,10.2,14,11.3,14,12z"
                      />
                    </svg>
                  </span>
                  <span class="search__button-title">Select Vehicle</span>
                </button>
                <button
                  class="search__button search__button--end"
                  ng-disabled="searchPartForm.$pristine|| searchPartForm.$invalid"
                  ng-click="search_part(ng_search)"
                >
                  <span class="search__button-icon"
                    ><svg width="20" height="20">
                      <path
                        d="M19.2,17.8c0,0-0.2,0.5-0.5,0.8c-0.4,0.4-0.9,0.6-0.9,0.6s-0.9,0.7-2.8-1.6c-1.1-1.4-2.2-2.8-3.1-3.9C10.9,14.5,9.5,15,8,15
                          c-3.9,0-7-3.1-7-7s3.1-7,7-7s7,3.1,7,7c0,1.5-0.5,2.9-1.3,4c1.1,0.8,2.5,2,4,3.1C20,16.8,19.2,17.8,19.2,17.8z M8,3C5.2,3,3,5.2,3,8
                          c0,2.8,2.2,5,5,5c2.8,0,5-2.2,5-5C13,5.2,10.8,3,8,3z"
                      />
                    </svg>
                  </span>
                </button>
                <div class="search__box"></div>
                <div class="search__decor">
                  <div class="search__decor-start"></div>
                  <div class="search__decor-end"></div>
                </div>
                <div class="search__dropdown search__dropdown--suggestions suggestions">
                  <div class="suggestions__group">
                    <div class="suggestions__group-title">Parts</div>
                    <div class="suggestions__group-content">
                    <div class="d-flex justify-content-center">
                      <div class="spinner-border" role="status">
                        <span class="sr-only">
                        {{'LOADING' | translate}}.......  
                        <!-- Loading... -->
                      </span>
                      </div>
                    </div>
                      
                      <div class="text-center" ng-show="no_product_found">
                        <span class="text-danger">
                        {{'NO_NEW_PART' | translate}}!  
                        <!-- New Part Not Found! -->
                        </span>
                      </div>
                       <div class="text-center" ng-show="no_new_part">
                        <span class="text-danger">
                          {{'NO_NEW_PART' | translate}}!  
                        </span>
                      </div>
                     <!--  <div class="text-center" ng-if="search_prod.in_stock == 0">
                        <span class="text-danger">Part is out of stock.</span>
                      </div> -->
                      
                      <div ng-hide="no_product_found"> 
                        <!-- New Part Search Code  -->
                        <div ng-hide="no_new_part" ng-repeat="search_prod in search_product">                    
                          <a class="suggestions__item suggestions__product"
                            href="#!product-detail/part/{{search_prod.product_id}}/{{search_prod.category_id}}/{{search_prod.part_no}}" >
                            <div class="suggestions__product-image image image--type--product">
                              <div class="image__body">
                                <span ng-if="search_prod.image1 != null">
                                  <img ng-src="{{search_prod[0].image1}}" alt="" class="image__tag">
                                </span>
                                <span ng-if="search_prod.image1 == null">
                                  <img src="public/assets/images/default-2.jpg" alt="" class="image__tag">
                                </span>
                              </div>
                            </div>
                            <div class="suggestions__product-info">
                              <div class="suggestions__product-name" >
                                <span style="text-transform:capitalize;">
                                <strong>{{search_prod.product_name}}</strong> &nbsp;
                                <small class="text-primary">({{search_prod.type_label}})</small></span><br>
                                <small>{{search_prod.part_no}}</small>
                              </div>
                              
                            </div>
                            <div class="suggestions__product-price">{{search_prod.price  | currency:to_currency:2}} </div>
                          </a>
                        </div>
                        <!-- Old Part Search Code -->
                        <div class="text-center py-2 mt-2 bg-danger shadow-sm" ng-hide="no_old_part">
                          <a class="text-white" href="#!old-list/{{search_product_old[0].part_no}}">{{'OLD_PART_AVAIL' | translate}}</a>
                        </div>
                      </div>
                      
                      
                      <!--<div ng-hide="no_product_found">  -->
                      <!--  <div ng-repeat="search_prod in search_product">                    -->
                      <!--  <a class="suggestions__item suggestions__product"-->
                      <!--    href="#!product-detail/{{search_prod[0].product_id}}/{{search_prod[0].category_id}}/{{search_prod[0].part_no}}" >-->
                      <!--    <div class="suggestions__product-image image image--type--product">-->
                      <!--      <div class="image__body">-->
                      <!--        <span ng-if="search_prod[0].image1 != null">-->
                      <!--          <img ng-src="{{search_prod[0].image1}}" alt="" class="image__tag">-->
                      <!--        </span>-->
                      <!--        <span ng-if="search_prod[0].image1 == null">-->
                      <!--          <img src="public/assets/images/default-2.jpg" alt="" class="image__tag">-->
                      <!--        </span>-->
                      <!--      </div>-->
                      <!--    </div>-->
                      <!--    <div class="suggestions__product-info">-->
                      <!--      <div class="suggestions__product-name" >-->
                      <!--        <span style="text-transform:capitalize;">-->
                      <!--        <strong>{{search_prod[0].product_name}}</strong> &nbsp;-->
                      <!--        <small class="text-primary">({{search_prod[0].type}})</small></span><br>-->
                      <!--        <small>{{search_prod[0].part_no}}</small>-->
                      <!--      </div>-->
                            
                      <!--    </div>-->
                      <!--    <div class="suggestions__product-price">{{search_prod[0].price  | currency:to_currency:2}} </div>-->
                      <!--  </a>-->
                      <!--  </div>-->
                      <!--</div>-->
                      <!--<div class="text-center py-2 mt-2 bg-danger shadow-sm" ng-if="searched_old_part[0] != ''">-->
                      <!--  <a class="text-white" href="#!old-list/{{searched_old_part[0].part_no}}">-->
                      <!--      {{'OLD_PART_AVAIL' | translate}}-->
                      <!--      </a>-->
                      <!--</div>-->
                      <!--<div class="text-center py-2 mt-2 bg-danger shadow-sm" ng-if="search_prod_old[0] != ''">-->
                      <!--  <a class="text-white" href="#!old-list/{{search_prod_old[0].part_no}}">Old Parts are also available.</a>-->
                      <!--</div>-->
                      <!-- <div ng-repeat="spo in search_prod_old">
                        <a class="suggestions__item suggestions__product"
                          href="#!old-detail/{{spo.id}}/{{spo.part_no}}" 
                          ng-show="flag_b">
                          <div class="suggestions__product-image image image--type--product">
                            <div class="image__body">
                              <img class="image__tag" ng-src="{{spo.image1}}" alt="" />
                            </div>
                          </div>
                          <div class="suggestions__product-info">
                            <div class="suggestions__product-name" >
                              <span style="text-transform:capitalize;">
                              <strong>{{spo.product_name}}</strong> &nbsp;
                              <small class="text-primary">({{spo.type_label}})</small></span><br>
                              <small>{{spo.part_no}}</small>
                            </div>
                            
                          </div>
                          <div class="suggestions__product-price">AED {{spo.price}}</div>
                        </a>
                      </div> -->
                    </div>
                  </div>
                  <!-- <div class="suggestions__group">
                    <div class="suggestions__group-title">Categories</div>
                    <div class="suggestions__group-content">
                      <a class="suggestions__item suggestions__category" href=""
                        >Headlights & Lighting</a
                      >
                      <a class="suggestions__item suggestions__category" href=""
                        >Fuel System & Filters</a
                      >
                      <a class="suggestions__item suggestions__category" href=""
                        >Body Parts & Mirrors</a
                      >
                      <a class="suggestions__item suggestions__category" href=""
                        >Interior Accessories</a
                      >
                    </div>
                  </div> -->
                </div>
                <!-- <div
                  class="
                    search__dropdown search__dropdown--vehicle-picker
                    vehicle-picker
                  ">
                  <div class="search__dropdown-arrow"></div>
                  <div
                    class="
                      vehicle-picker__panel
                      vehicle-picker__panel--list
                      vehicle-picker__panel--active
                    "
                    data-panel="list">
                    <div class="vehicle-picker__panel-body">
                      <div class="vehicle-picker__text">
                        Select a vehicle to find exact fit parts
                      </div>
                      <div class="vehicles-list">
                        <div class="vehicles-list__body">
                          <label class="vehicles-list__item">
                            <span class="vehicles-list__item-radio input-radio">
                              <span class="input-radio__body">
                                <input
                                  class="input-radio__input"
                                  name="header-vehicle"
                                  type="radio"
                                />
                                <span class="input-radio__circle"></span>
                              </span>
                            </span>
                            <span class="vehicles-list__item-info">
                              <span class="vehicles-list__item-name"
                                >2011 Ford Focus S</span
                              >
                              <span class="vehicles-list__item-details"
                                >Engine 2.0L 1742DA L4 FI Turbo</span
                              >
                            </span>
                            <button
                              type="button"
                              class="vehicles-list__item-remove"
                            >
                              <svg width="16" height="16">
                                <path
                                  d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"
                                />
                              </svg>
                            </button>
                          </label>
                          <label class="vehicles-list__item">
                            <span class="vehicles-list__item-radio input-radio">
                              <span class="input-radio__body">
                                <input
                                  class="input-radio__input"
                                  name="header-vehicle"
                                  type="radio"
                                />
                                <span class="input-radio__circle"></span>
                              </span>
                            </span>
                            <span class="vehicles-list__item-info">
                              <span class="vehicles-list__item-name"
                                >2019 Audi Q7 Premium</span
                              >
                              <span class="vehicles-list__item-details"
                                >Engine 3.0L 5626CC L6 QK</span
                              >
                            </span>
                            <button
                              type="button"
                              class="vehicles-list__item-remove"
                            >
                              <svg width="16" height="16">
                                <path
                                  d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"
                                />
                              </svg>
                            </button>
                          </label>
                        </div>
                      </div>
                      <div class="vehicle-picker__actions">
                        <button
                          type="button"
                          class="btn btn-primary btn-sm"
                          data-to-panel="form"
                        >
                          Add A Vehicle
                        </button>
                      </div>
                    </div>
                  </div>
                  <div
                    class="vehicle-picker__panel vehicle-picker__panel--form"
                    data-panel="form">
                    <div class="vehicle-picker__panel-body">
                      <div class="vehicle-form vehicle-form--layout--search">
                        <div
                          class="vehicle-form__item vehicle-form__item--select" >
                          <select
                            class="form-control form-control-select2" aria-label="Year">
                            <option value="none">Select Year</option>
                            <option>2010</option>
                            <option>2011</option>
                            <option>2012</option>
                            <option>2013</option>
                            <option>2014</option>
                            <option>2015</option>
                            <option>2016</option>
                            <option>2017</option>
                            <option>2018</option>
                            <option>2019</option>
                            <option>2020</option>
                          </select>
                        </div>
                        <div
                          class="vehicle-form__item vehicle-form__item--select">
                          <select
                            class="form-control form-control-select2" aria-label="Brand" disabled>
                            <option value="none">Select Brand</option>
                            <option>Audi</option>
                            <option>BMW</option>
                            <option>Ferrari</option>
                            <option>Ford</option>
                            <option>KIA</option>
                            <option>Nissan</option>
                            <option>Tesla</option>
                            <option>Toyota</option>
                          </select>
                        </div>
                        <div
                          class="vehicle-form__item vehicle-form__item--select">
                          <select
                            class="form-control form-control-select2"
                            aria-label="Model"
                            disabled>
                            <option value="none">Select Model</option>
                            <option>Explorer</option>
                            <option>Focus S</option>
                            <option>Fusion SE</option>
                            <option>Mustang</option>
                          </select>
                        </div>
                        <div
                          class="vehicle-form__item vehicle-form__item--select">
                          <select
                            class="form-control form-control-select2"
                            aria-label="Engine"
                            disabled>
                            <option value="none">Select Engine</option>
                            <option>Gas 1.6L 125 hp AT/L4</option>
                            <option>Diesel 2.5L 200 hp AT/L5</option>
                            <option>Diesel 3.0L 250 hp MT/L5</option>
                          </select>
                        </div>
                        <div class="vehicle-form__divider">Or</div>
                        <div class="vehicle-form__item">
                          <input
                            type="text"
                            class="form-control"
                            placeholder="Enter VIN number"
                            aria-label="VIN number"/>
                        </div>
                      </div>
                      <div class="vehicle-picker__actions">
                        <div class="search__car-selector-link">
                          <a href="" data-to-panel="list"
                            >Back to vehicles list</a>
                        </div>
                        <button
                          type="button"
                          class="btn btn-primary btn-sm"
                          disabled
                        >
                          Add A Vehicle
                        </button>
                      </div>
                    </div>
                  </div>
                </div> -->
              </form>
            </div>
          </div>
          <div class="header__indicators">
            <!-- <div class="indicator">
              <a href="#!wishlist" class="indicator__button">
                <span class="indicator__icon">
                  <svg width="32" height="32">
                    <path
                      d="M23,4c3.9,0,7,3.1,7,7c0,6.3-11.4,15.9-14,16.9C13.4,26.9,2,17.3,2,11c0-3.9,3.1-7,7-7c2.1,0,4.1,1,5.4,2.6l1.6,2l1.6-2
                          C18.9,5,20.9,4,23,4 M23,2c-2.8,0-5.4,1.3-7,3.4C14.4,3.3,11.8,2,9,2c-5,0-9,4-9,9c0,8,14,19,16,19s16-11,16-19C32,6,28,2,23,2L23,2
                          z"
                    />
                  </svg>
                </span>
              </a>
            </div> -->
            <div class="indicator indicator--trigger--click">
              <a href="#!login" class="indicator__button">
                <span class="indicator__icon">
                  <svg width="32" height="32">
                    <path
                      d="M16,18C9.4,18,4,23.4,4,30H2c0-6.2,4-11.5,9.6-13.3C9.4,15.3,8,12.8,8,10c0-4.4,3.6-8,8-8s8,3.6,8,8c0,2.8-1.5,5.3-3.6,6.7
	                      C26,18.5,30,23.8,30,30h-2C28,23.4,22.6,18,16,18z M22,10c0-3.3-2.7-6-6-6s-6,2.7-6,6s2.7,6,6,6S22,13.3,22,10z"
                    />
                  </svg>
                </span>
                <span ng-if="is_login== false" class="indicator__title">
                {{'HELLO' | translate}}, {{'LOGIN' | translate}} 
                <!-- Hello, Log In -->
                </span>
                <span ng-if="is_login== true" class="indicator__title">
                {{'WELCOME' | translate}}
                <!-- Welcome -->
                </span>
                <span ng-if="is_login== false" class="indicator__value">
                {{'MY_ACCOUNT' | translate}}
                <!-- My Account -->
                </span>
                <span ng-if="is_login== true" class="indicator__value">{{profile_data.full_name}}</span>
              </a>
              <div class="indicator__content">
                <div class="account-menu">
                  <form class="account-menu__form" name="loginForm" novalidate ng-hide="is_login">
                    <div class="account-menu__form-title">
                    {{'LOGIN_SENT' | translate}}  
                    <!-- Log In to Your Account -->
                    </div>
                    <div class="form-group">
                      <label for="header-signin-email" class="sr-only">
                        {{'EMAIL' | translate}}
                        <!-- Email address -->
                        </label
                      >
                      <input
                        id="header-signin-email"
                        type="email"
                        class="form-control form-control-sm"
                        placeholder="{{ 'EMAIL' | translate }}"
                        pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$" required="required"
                          name="user_email"
                          ng-model="ng_useremail"
                      />
                      <div ng-show="loginForm.user_email.$dirty && loginForm.user_email.$invalid">
                          <small class="text-danger" ng-show="loginForm.user_email.$invalid">
                        {{'INVALID_FORMAT' | translate}}    
                          <!-- Invalid Format! -->
                        </small> <br>
                          <small class="text-danger" ng-show="loginForm.user_email.$error.required">
                          {{'REQUIRED' | translate}}  
                          <!-- Required. -->

                          </small>
                        </div>
                    </div>
                    <div class="form-group">
                      <label for="header-signin-password" class="sr-only"
                        >
                        {{'PASSWORD' | translate}}
                        <!-- Password -->
                        </label
                      >
                      <div class="account-menu__form-forgot">
                        <input
                          id="header-signin-password"
                          type="password"
                          class="form-control form-control-sm"
                          placeholder="{{ 'PASSWORD' | translate }}"
                          required="required"
                          maxlength="16"
                          name="user_password"
                          ng-model="ng_userpasssword"
                        />
                        <div ng-show="loginForm.user_password.$dirty && loginForm.user_password.$invalid">
                          <small class="text-danger" ng-show="loginForm.user_password.$invalid">
                          {{'INVALID' | translate}}!
                          <!-- Invalid! -->
                          </small> <br>
                          <small class="text-danger" ng-show="loginForm.user_password.$error.required">
                          {{'REQUIRED' | translate}}  
                          <!-- Required. -->
                        </small>
                        </div>
                        <!-- <a href="" class="account-menu__form-forgot-link"
                          >Forgot?</a
                        > -->
                      </div>
                    </div>
                    <div class="text-center" ng-show="not_register">
                      <small class="d-block text-danger">
                        <!-- Invalid Email and Password -->
                      {{'INVALID_EMAIL' | translate}}
                      </small>
                    </div>
                    <div class="form-group account-menu__form-button">
                      <button type="submit" class="btn btn-primary btn-sm"
                        ng-disabled="loginForm.$invalid "
                        ng-click="login()"
                      >
                      {{'LOGIN' | translate}}
                        <!-- Login -->
                      </button>
                    </div>
                    <!-- <div class="account-menu__form-link">
                      <a href="account-login.html">Create An Account</a>
                    </div> -->
                  </form>
                  <div ng-hide="is_login">
                    <a href="#!forgot" class="text-primary text-right d-block p-1" style="font-size:13px;">
                    {{'FORGOT_PASSWORD' | translate}}?
                    <!-- Forgot Password? -->
                  </a>  
                  </div>
                  
                  <div class="account-menu__divider"></div>
                  <a href="" class="account-menu__user" ng-show="is_login">
                    <!--<div class="account-menu__user-avatar">-->
                    <!--  <img src="public/assets/images/avatars/avatar-4-70x70.jpg" alt="" />-->
                    <!--</div>-->
                    <div class="account-menu__user-info">
                      <div class="account-menu__user-name">{{profile_data.full_name}}</div>
                      <div class="account-menu__user-email">
                        {{profile_data.email}}
                      </div>
                    </div>
                  </a>
                  <div class="account-menu__divider"></div>
                  <ul class="account-menu__links" ng-show="is_login">
                    <li><a href="#!dashboard">
                    {{'DASHBOARD' | translate}}
                    <!-- Dashboard -->
                    </a></li>
                    <!-- <li><a href="#!garage">Garage</a></li> -->
                    <li><a href="#!profile">
                    {{'EDIT_PROFILE' | translate}}  
                    <!-- Edit Profile -->

                    </a></li>
                    <li><a href="#!orders">
                    {{'ORDER_HISTORY' | translate}}
                    <!-- Order History -->
                    </a></li>
                    <!-- <li><a href="#!account-address">Addresses</a></li> -->
                  </ul>
                  <div class="account-menu__divider" ng-show="is_login"></div>
                  <ul class="account-menu__links" ng-show="is_login">
                    <li><a href="" ng-click="logout()">
                    {{'LOGOUT' | translate}}
                    <!-- Logout -->
                    </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="indicator indicator--trigger--click">
              <a href="#!cart" class="indicator__button">
                <span class="indicator__icon">
                  <svg width="32" height="32">
                    <circle cx="10.5" cy="27.5" r="2.5" />
                    <circle cx="23.5" cy="27.5" r="2.5" />
                    <path
                      d="M26.4,21H11.2C10,21,9,20.2,8.8,19.1L5.4,4.8C5.3,4.3,4.9,4,4.4,4H1C0.4,4,0,3.6,0,3s0.4-1,1-1h3.4C5.8,2,7,3,7.3,4.3
                        l3.4,14.3c0.1,0.2,0.3,0.4,0.5,0.4h15.2c0.2,0,0.4-0.1,0.5-0.4l3.1-10c0.1-0.2,0-0.4-0.1-0.4C29.8,8.1,29.7,8,29.5,8H14
                        c-0.6,0-1-0.4-1-1s0.4-1,1-1h15.5c0.8,0,1.5,0.4,2,1c0.5,0.6,0.6,1.5,0.4,2.2l-3.1,10C28.5,20.3,27.5,21,26.4,21z"
                    />
                  </svg>
                  <span class="indicator__counter">{{product_array.length}}</span>
                </span>
                <span class="indicator__title">
                {{'SHOPPING_CART' | translate}}
                <!-- Shopping Cart -->
                </span>
                <span class="indicator__value">
                    {{getRate( a_total + tax + shipping) | currency:to_currency:2  }}
                    <!--{{getRate(a_total) | currency:to_currency:2 }}-->
                </span>
              </a>
              <div class="indicator__content">
                <div class="dropcart" ng-show="product_array.length == 0">
                {{'NO_PART_IN_CART' | translate}}  
                <!-- No part in cart! -->
                </div>
                <div class="dropcart" ng-hide="product_array.length == 0">
                  <ul class="dropcart__list">
                    <li class="dropcart__item" ng-repeat="pa in product_array">
                      <div
                        class="dropcart__item-image image image--type--product"
                      >
                        <a class="image__body" 
                          href="#!product-detail/part/{{pa.prodduct_id}}/{{pa.category_id}}/{{pa.part_no}}">
                          <span ng-if="pa.image != null">
                              <img ng-src="{{pa.image}}" alt="" class="image__tag">
                            </span>
                            <span ng-if="pa.image == null">
                              <img src="public/assets/images/default-2.jpg" alt="" class="image__tag">
                            </span>
                        </a>
                      </div>
                      <div class="dropcart__item-info">
                        <div class="dropcart__item-name">
                          <a href="" class="text-capitalize">
                              {{pa.product_name}}
                          </a>
                        </div>
                        <ul class="dropcart__item-features">
                          <li>
                            Category: {{pa.category}}
                          </li>
                        </ul>
                        <div class="dropcart__item-meta">
                          <div class="dropcart__item-quantity">{{pa.qty}}</div>
                          <div class="dropcart__item-price">{{getRate(pa.sub_total) | currency:to_currency:2 }}</div>
                        </div>
                      </div>
                      <button class="dropcart__item-remove" 
                      ng-click="remove_item($index,pa.product_id,pa.sub_total)"
                      >
                        <svg width="10" height="10">
                          <path
                            d="M8.8,8.8L8.8,8.8c-0.4,0.4-1,0.4-1.4,0L5,6.4L2.6,8.8c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L3.6,5L1.2,2.6
                              c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L5,3.6l2.4-2.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L6.4,5l2.4,2.4
                              C9.2,7.8,9.2,8.4,8.8,8.8z"
                          />
                        </svg>
                      </button>
                    </li>
                    
                    
                    <li class="dropcart__divider" role="presentation"></li>
                  </ul>
                  <div class="dropcart__totals">
                    <table>
                      <tr>
                        <th>
                      {{'SUBTOTAL' | translate}}    
                        <!-- Subtotal -->
                      </th>
                        <td>{{getRate(a_total) | currency:to_currency:2  }}</td>
                      </tr>
                      <tr>
                        <th>
                         {{'SHIPPING' | translate}} 
                        <!-- Shipping -->
                      </th>
                        <td>{{getRate(shipping) | currency:to_currency:2   }}</td>
                      </tr>
                      <tr>
                        <th>
                        {{'TAX' | translate}}  
                        <!-- Tax -->
                      </th>
                        <td>{{getRate(tax) | currency:to_currency:2   }}</td>
                      </tr>
                      <tr>
                        <th>
                        {{'TOTAL' | translate}}  
                        <!-- Total -->
                      </th>
                        <td>{{getRate( a_total + tax + shipping) | currency:to_currency:2  }}</td>
                      </tr>
                    </table>
                  </div>
                  <div class="dropcart__actions">
                    <a href="#!cart" class="btn btn-secondary">
                     {{'VIEW_CART' | translate}} 
                    <!-- View Cart -->
                  </a>
                    <a href="#!checkout" class="btn btn-primary">
                    {{'CHECKOUT' | translate}}  
                    <!-- Checkout -->
                  </a>
                  </div>
                  <div ng-show="continue_shop" class=" p-0 pt-2 col-md-12">
                            <button class="btn btn-block btn-success " ng-click="gotoShop()">
                              {{'CONTINUE_SHOPPING' | translate}}
                            <!-- Continue Shopping -->
                            </button>
                          </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- site__header / end -->
      

      <!-- Angular View Starts -->
      <div ng-view></div>
      <!-- Angular View Ends  -->
      <!-- site__footer -->
      <footer class="site__footer">
        <div class="site-footer">
          <div class="decor site-footer__decor decor--type--bottom">
            <div class="decor__body">
              <div class="decor__start"></div>
              <div class="decor__end"></div>
              <div class="decor__center"></div>
            </div>
          </div>
          <div class="site-footer__widgets">
            <div class="container">
              <div class="row">
                <div class="col-12 col-xl-4">
                  <div class="site-footer__widget footer-contacts">
                    <h5 class="footer-contacts__title">
                    {{'CONTACT_US' | translate}}
                    <!-- Contact Us -->
                    </h5>
                    <address class="footer-contacts__contacts">
                      <dl>
                        <dt>
                        {{'PHONE' | translate}}  
                        <!-- Phone Number -->
                      </dt>
                        <dd>+971507995291</dd>
                      </dl>
                      <dl>
                        <dt>
                        <!--{{'EMAIL' | translate}}  -->
                         Email Address 
                      </dt>
                        <dd>Sales@findmyparts.net</dd>
                      </dl>
                      <dl>
                        <dt>
                        <!--{{'LOCATION' | translate}}  -->
                         Our Location 
                      </dt>
                        <dd>Shop No.28, Street#4, Industrial 11 Sharjah, UAE</dd>
                      </dl>
                      <dl>
                        <dt>
                        {{'WORKING_Hours' | translate}}  
                        <!-- Working Hours -->
                      </dt>
                        <dd>Sat-Thr 08:00 AM - 06:00 PM</dd>
                      </dl>
                    </address>
                  </div>
                </div>
                <div class="col-6 col-md-3 col-xl-2">
                  <div class="site-footer__widget footer-links">
                    <h5 class="footer-links__title">
                    {{'INFORMATION' | translate}}  
                    <!-- Information -->
                  </h5>
                    <ul class="footer-links__list">
                      <li class="footer-links__item">
                        <a href="#!about" class="footer-links__link">
                        {{'ABOUT_US' | translate}}  
                        <!-- About Us -->
                      </a>
                      </li>
                      <li class="footer-links__item">
                        <a href="#!terms" class="footer-links__link">
                        {{'PRIVACY_POLICY' | translate}}  
                        <!-- Privacy Policy -->
                      </a>
                      </li>
                       <li class="footer-links__item">
                        <a href="#!terms/conditions" class="footer-links__link">
                        {{'TERMS' | translate}}  
                        <!-- Brands -->
                      </a>
                      </li>
                      <li class="footer-links__item">
                        <a href="#!terms/delivery" class="footer-links__link">
                          {{'SHIPPING_POLICY' | translate}}
                          <!-- Delivery Information -->
                          </a>
                      </li>
                      
                     
                      <li class="footer-links__item">
                        <a href="#!terms/returns" class="footer-links__link">
                        {{'REFUND' | translate}} / {{'RETURN' | translate}}  
                        <!-- Returns -->
                      </a>
                      </li>
                      <li class="footer-links__item">
                        <a href="#!terms/cancellation" class="footer-links__link">
                        {{'CANCELLATION_POLICY' | translate}}  
                        <!-- Site Map -->
                      </a>
                      </li>
                    </ul>
                  </div>
                </div>
                <div class="col-6 col-md-3 col-xl-2">
                  <div class="site-footer__widget footer-links">
                    <h5 class="footer-links__title">
                    {{'MY_ACCOUNT' | translate}}  
                    <!-- My Account -->
                  </h5>
                    <ul class="footer-links__list">
                      <li class="footer-links__item">
                        <a href="#!message/location" class="footer-links__link">
                      {{'STORE_LOCATION' | translate}}    
                        <!-- Store Location -->
                      </a>
                      </li>
                      <li class="footer-links__item">
                        <a href="#!login" class="footer-links__link">
                        {{'ORDER_HISTORY' | translate}}    
                        <!-- Order History -->
                      </a>
                      </li>
                      <!--<li class="footer-links__item">-->
                      <!--  <a href="#!error" class="footer-links__link">-->
                      <!--  {{'WISHLIST' | translate}}-->
                        <!-- Wish List -->
                      <!--</a>-->
                      <!--</li>-->
                      <!--<li class="footer-links__item">-->
                      <!--  <a href="#!error" class="footer-links__link">-->
                      <!--  {{'NEWSLETTER' | translate}}-->
                        <!-- Newsletter -->
                      <!--</a>-->
                      <!--</li>-->
                      <!--<li class="footer-links__item">-->
                      <!--  <a href="#!error" class="footer-links__link">-->
                      <!--  {{'SPECIALS' | translate}}-->
                        <!-- Specials -->
                      <!--</a>-->
                      <!--</li>-->
                      <!--<li class="footer-links__item">-->
                      <!--  <a href="#!error" class="footer-links__link">-->
                      <!--  {{'GIFT' | translate}}-->
                        <!-- Gift Certificates -->
                      <!--  </a>-->
                      <!--</li>-->
                    </ul>
                  </div>
                </div>
                <div class="col-12 col-md-6 col-xl-4">
                  <div class="site-footer__widget footer-newsletter">
                    <h5 class="footer-newsletter__title">
                    {{'SOCIAL' | translate}}  
                    <!-- Newsletter -->
                  </h5>
                    <!--<div class="footer-newsletter__text">-->
                    <!--  {{'FOOTER_TXT' | translate}}-->
                      
                    <!--</div>-->
                    <!--<form action="" class="footer-newsletter__form">-->
                    <!--  <label class="sr-only" for="footer-newsletter-address"-->
                    <!--    >-->
                    <!--    {{'EMAIL' | translate}}-->
                        <!-- Email Address -->
                    <!--    </label-->
                    <!--  >-->
                    <!--  <input-->
                    <!--    type="text"-->
                    <!--    class="footer-newsletter__form-input"-->
                    <!--    id="footer-newsletter-address"-->
                    <!--    placeholder="Email Address..."-->
                    <!--  />-->
                    <!--  <button class="footer-newsletter__form-button">-->
                    <!--    {{'SUBSCRIBE' | translate}}-->
                        <!-- Subscribe -->
                    <!--  </button>-->
                    <!--</form>-->
                    <div
                      class="
                        footer-newsletter__text footer-newsletter__text--social
                      "
                    >
                    {{'FOLLOW_ON' | translate}}
                      <!-- Follow us on social networks -->
                    </div>
                    <div class="footer-newsletter__social-links social-links">
                      <ul class="social-links__list">
                        <li
                          class="
                            social-links__item social-links__item--facebook
                          "
                        >
                          <a href="" target="_blank"
                            ><i class="fab fa-facebook-f"></i
                          ></a>
                        </li>
                        <li
                          class="social-links__item social-links__item--twitter"
                        >
                          <a href="" target="_blank"
                            ><i class="fab fa-twitter"></i
                          ></a>
                        </li>
                        <li
                          class="social-links__item social-links__item--youtube"
                        >
                          <a href="" target="_blank"
                            ><i class="fab fa-youtube"></i
                          ></a>
                        </li>
                        <li
                          class="
                            social-links__item social-links__item--instagram
                          "
                        >
                          <a href="" target="_blank"
                            ><i class="fab fa-instagram"></i
                          ></a>
                        </li>
                        <li class="social-links__item social-links__item--rss">
                          <a href="" target="_blank"
                            ><i class="fas fa-rss"></i
                          ></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="site-footer__bottom">
            <div class="container">
              <div class="site-footer__bottom-row">
                <div class="site-footer__copyright">
                  <!-- copyright -->
                  All Copyrights &copy are reserved by <a href="https://virtualsoft.pk">Virtualsoft.pk</a>
                  <!-- copyright / end -->
                </div>
                <div class="site-footer__payments">
                  <img src="<?php echo base_url('public/assets/') ?>images/payments.png" alt="" />
                </div>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- site__footer / end -->

      <div class="modal fade" id="result_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h6 class="modal-title" id="exampleModalLabel">
              {{'SEARCH_RESULT' | translate}}  
              <!-- Search Result -->
            </h6>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <div class="d-flex justify-content-center">
                <div class="spinner-border" role="status">
                  <span class="sr-only">
                  {{'LOADING' | translate}}  
                  <!-- Loading... -->
                </span>
                </div>
              </div>
              
              <!-- <div ng-show="stock_error">
                <span class="d-block text-center">{{stock_error_desc}}</span>
              </div> -->
              <div class="text-center" ng-show="no_product_found">
                <span class="text-danger">
                {{'NO_NEW_PART' | translate}}  
                <!-- New Part Not Found! -->
                </span>
              </div>
              <div class="text-center" ng-show="no_new_part">
                <span class="text-danger">
                    {{'NO_NEW_PART' | translate}}!  
                </span>
              </div>
              
              <div ng-hide="no_product_found">
                  <!--New Part Code-->
                       <div  ng-hide="no_new_part" ng-repeat="search_prod in search_product">  
                        <a class="suggestions__item suggestions__product"
                             href="#!product-detail/part/{{search_prod.product_id}}/{{search_prod.category_id}}/{{search_prod.part_no}}" >
                          <div class="d-flex justify-content-start">
                            <div class="image__body">
                            <span ng-if="search_prod.image1 != null">
                              <img ng-src="{{search_prod.image1}}" alt="" class="image__tag" width="100%" height="150px">
                            </span>
                            <span ng-if="search_prod.image1 == null">
                              <img src="public/assets/images/default-2.jpg" alt="" class="image__tag" width="100%" height="150px">
                            </span>
                            </div>
                          </div>
                          <div class="suggestions__product-info">
                            <div class="suggestions__product-name" >
                              <span style="text-transform:capitalize;">
                              <strong>{{search_prod.product_name}}</strong> &nbsp;
                              <small class="text-primary">({{search_prod.type}})</small></span><br>
                              <small>{{search_prod.part_no}}</small>
                            </div>          
                          </div>
                         <div class="suggestions__product-price">{{search_prod.price  | currency:to_currency:2}}</div>
                       </a>
                      </div>
                  
                  <!--Old Part Code-->
                    <div class="text-center pt-3" ng-hide="no_old_part">
                        <a class="text-dark" href="#!old-list/{{searched_old_part[0].part_no}}">
                            {{'OLD_PART_AVAIL' | translate}}  
                      <!-- Old Parts are also available. -->
                        </a>
                    </div>
              </div>
              
              
              
              
              
              
              
              <div ng-hide="no_product_found"> 
              <div ng-repeat="search_prod in search_product">  
                <a class="suggestions__item suggestions__product"
                  href="#!product-detail/part/{{search_prod[0].product_id}}/{{search_prod[0].category_id}}/{{search_prod[0].part_no}}" >
                  <div class="d-flex justify-content-start">
                    <div class="image__body">
                    <span ng-if="search_prod[0].image1 != null">
                      <img ng-src="{{search_prod[0].image1}}" alt="" class="image__tag" width="100%" height="150px">
                    </span>
                    <span ng-if="search_prod[0].image1 == null">
                      <img src="public/assets/images/default-2.jpg" alt="" class="image__tag" width="100%" height="150px">
                    </span>
                    </div>
                  </div>
                      <div class="suggestions__product-info">
                        <div class="suggestions__product-name" >
                          <span style="text-transform:capitalize;">
                          <strong>{{search_prod[0].product_name}}</strong> &nbsp;
                          <small class="text-primary">({{search_prod[0].type}})</small></span><br>
                          <small>{{search_prod[0].part_no}}</small>
                        </div>          
                      </div>
                    <div class="suggestions__product-price">{{search_prod[0].price  | currency:to_currency:2}}</div>
                  </a>
                  </div>
                </div> 
                <div class="text-center pt-3" ng-if="searched_old_part[0] != ''">
                  <a class="text-dark" href="#!old-list/{{searched_old_part[0].part_no}}">
                  {{'OLD_PART_AVAIL' | translate}}  
                  <!-- Old Parts are also available. -->
                </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      </div>
    <!-- site / end -->
<!-- Product Search Result modal Starts -->




<!-- Product Search Result modal Ends -->

    <div id="vehicle-picker-modal" class="modal fade"  tabindex="-1" role="dialog"  aria-hidden="true">
      <div class="vehicle-picker-modal modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <button type="button" class="vehicle-picker-modal__close">
            <svg width="12" height="12">
              <path
                d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
                  c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
                  C11.2,9.8,11.2,10.4,10.8,10.8z"
              />
            </svg>
          </button>
          <div
            class="
              vehicle-picker-modal__panel vehicle-picker-modal__panel--active
            "
            data-panel="list"
          >
            <div class="vehicle-picker-modal__title card-title">
              Select Vehicle
            </div>
            <div class="vehicle-picker-modal__text">
              Select a vehicle to find exact fit parts
            </div>
            <div class="vehicles-list">
              <div class="vehicles-list__body">
                <label class="vehicles-list__item">
                  <span class="vehicles-list__item-radio input-radio">
                    <span class="input-radio__body">
                      <input
                        class="input-radio__input"
                        name="header-vehicle"
                        type="radio"
                      />
                      <span class="input-radio__circle"></span>
                    </span>
                  </span>
                  <span class="vehicles-list__item-info">
                    <span class="vehicles-list__item-name"
                      >2011 Ford Focus S</span
                    >
                    <span class="vehicles-list__item-details"
                      >Engine 2.0L 1742DA L4 FI Turbo</span
                    >
                  </span>
                  <button type="button" class="vehicles-list__item-remove">
                    <svg width="16" height="16">
                      <path
                        d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"
                      />
                    </svg>
                  </button>
                </label>
                <label class="vehicles-list__item">
                  <span class="vehicles-list__item-radio input-radio">
                    <span class="input-radio__body">
                      <input
                        class="input-radio__input"
                        name="header-vehicle"
                        type="radio"
                      />
                      <span class="input-radio__circle"></span>
                    </span>
                  </span>
                  <span class="vehicles-list__item-info">
                    <span class="vehicles-list__item-name"
                      >2019 Audi Q7 Premium</span
                    >
                    <span class="vehicles-list__item-details"
                      >Engine 3.0L 5626CC L6 QK</span
                    >
                  </span>
                  <button type="button" class="vehicles-list__item-remove">
                    <svg width="16" height="16">
                      <path
                        d="M2,4V2h3V1h6v1h3v2H2z M13,13c0,1.1-0.9,2-2,2H5c-1.1,0-2-0.9-2-2V5h10V13z"
                      />
                    </svg>
                  </button>
                </label>
              </div>
            </div>
            <div class="vehicle-picker-modal__actions">
              <button
                type="button"
                class="
                  btn btn-sm btn-secondary
                  vehicle-picker-modal__close-button
                "
              >
                Cancel
              </button>
              <button
                type="button"
                class="btn btn-sm btn-primary"
                data-to-panel="form"
              >
                Add A Vehicle
              </button>
            </div>
          </div>
          <div class="vehicle-picker-modal__panel" data-panel="form">
            <div class="vehicle-picker-modal__title card-title">
              Add A Vehicle
            </div>
            <div class="vehicle-form vehicle-form--layout--modal">
              <div class="vehicle-form__item vehicle-form__item--select">
                <select
                  class="form-control form-control-select2"
                  aria-label="Year"
                >
                  <option value="none">Select Year</option>
                  <option>2010</option>
                  <option>2011</option>
                  <option>2012</option>
                  <option>2013</option>
                  <option>2014</option>
                  <option>2015</option>
                  <option>2016</option>
                  <option>2017</option>
                  <option>2018</option>
                  <option>2019</option>
                  <option>2020</option>
                </select>
              </div>
              <div class="vehicle-form__item vehicle-form__item--select">
                <select
                  class="form-control form-control-select2"
                  aria-label="Brand"
                  disabled
                >
                  <option value="none">Select Brand</option>
                  <option>Audi</option>
                  <option>BMW</option>
                  <option>Ferrari</option>
                  <option>Ford</option>
                  <option>KIA</option>
                  <option>Nissan</option>
                  <option>Tesla</option>
                  <option>Toyota</option>
                </select>
              </div>
              <div class="vehicle-form__item vehicle-form__item--select">
                <select
                  class="form-control form-control-select2"
                  aria-label="Model"
                  disabled
                >
                  <option value="none">Select Model</option>
                  <option>Explorer</option>
                  <option>Focus S</option>
                  <option>Fusion SE</option>
                  <option>Mustang</option>
                </select>
              </div>
              <div class="vehicle-form__item vehicle-form__item--select">
                <select
                  class="form-control form-control-select2"
                  aria-label="Engine"
                  disabled
                >
                  <option value="none">Select Engine</option>
                  <option>Gas 1.6L 125 hp AT/L4</option>
                  <option>Diesel 2.5L 200 hp AT/L5</option>
                  <option>Diesel 3.0L 250 hp MT/L5</option>
                </select>
              </div>
              <div class="vehicle-form__divider">Or</div>
              <div class="vehicle-form__item">
                <input
                  type="text"
                  class="form-control"
                  placeholder="Enter VIN number"
                  aria-label="VIN number"
                />
              </div>
            </div>
            <div class="vehicle-picker-modal__actions">
              <button
                type="button"
                class="btn btn-sm btn-secondary"
                data-to-panel="list"
              >
                Back to list
              </button>
              <button type="button" class="btn btn-sm btn-primary">
                Add A Vehicle
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile-menu -->
    <div class="mobile-menu">
      <div class="mobile-menu__backdrop"></div>
      <div class="mobile-menu__body">
        <button class="mobile-menu__close" type="button">
          <svg width="12" height="12">
            <path
              d="M10.8,10.8L10.8,10.8c-0.4,0.4-1,0.4-1.4,0L6,7.4l-3.4,3.4c-0.4,0.4-1,0.4-1.4,0l0,0c-0.4-0.4-0.4-1,0-1.4L4.6,6L1.2,2.6
                  c-0.4-0.4-0.4-1,0-1.4l0,0c0.4-0.4,1-0.4,1.4,0L6,4.6l3.4-3.4c0.4-0.4,1-0.4,1.4,0l0,0c0.4,0.4,0.4,1,0,1.4L7.4,6l3.4,3.4
                  C11.2,9.8,11.2,10.4,10.8,10.8z"
            />
          </svg>
        </button>
        <div class="mobile-menu__panel">
          <div class="mobile-menu__panel-header">
            <div class="mobile-menu__panel-title">Menu</div>
          </div>
          <div class="mobile-menu__panel-body">
            <div class="mobile-menu__settings-list">
              <div class="mobile-menu__setting" data-mobile-menu-item>
                <button
                  class="mobile-menu__setting-button"
                  title="Language"
                  data-mobile-menu-trigger
                >
                  <span class="mobile-menu__setting-icon">
                    <img src="public/assets/images/languages/language-1.png" alt="" />
                  </span>
                  <span class="mobile-menu__setting-title">English</span>
                  <span class="mobile-menu__setting-arrow"
                    ><svg width="6px" height="9px">
                      <path
                        d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z"
                      />
                    </svg>
                  </span>
                </button>
                <div class="mobile-menu__setting-panel" data-mobile-menu-panel>
                  <div class="mobile-menu__panel mobile-menu__panel--hidden">
                    <div class="mobile-menu__panel-header">
                      <button class="mobile-menu__panel-back" type="button">
                        <svg width="7" height="11">
                          <path
                            d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z"
                          />
                        </svg>
                      </button>
                      <div class="mobile-menu__panel-title">Language</div>
                    </div>
                    <div class="mobile-menu__panel-body">
                      <ul class="mobile-menu__links">
                      <!-- data-mobile-menu-item   -->
                      <li id="lang_usa">
                          <button
                            type="button"
                            class=""
                            ng-click="changeLanguage('en')"
                            
                          >
                          <!-- data-mobile-menu-trigger -->
                            <div class="mobile-menu__links-image">
                              <img
                                src="public/assets/images/languages/usa.png"
                                alt=""
                              />
                            </div>
                            English
                          </button>
                        </li>
                        <li  id="lang_vt">
                          <button
                            type="button"
                            class=""
                            ng-click="changeLanguage('vn')"

                          >
                            <div class="mobile-menu__links-image">
                              <img
                                src="public/assets/images/languages/veitnam.png"
                                alt=""
                              />
                            </div>
                            Vietnamese
                          </button>
                        </li>
                        <li  id="lang_ar">
                          <button
                            type="button"
                            class=""
                            ng-click="changeLanguage('ar')"

                          >
                            <div class="mobile-menu__links-image">
                              <img
                                src="public/assets/images/languages/dubai.png"
                                alt=""
                              />
                            </div>
                            Arabic
                          </button>
                        </li>
                        <li  id="lang_th">
                          <button
                            type="button"
                            class=""
                            ng-click="changeLanguage('th')"

                          >
                            <div class="mobile-menu__links-image">
                              <img
                                src="public/assets/images/languages/thailand.png"
                                alt=""
                              />
                            </div>
                            Thai
                          </button>
                        </li>
                        <li  id="lang_rus">
                          <button
                            type="button"
                            class=""
                            ng-click="changeLanguage('rus')"

                          >
                            <div class="mobile-menu__links-image">
                              <img
                                src="public/assets/images/languages/russia.png"
                                alt=""
                              />
                            </div>
                            Russian
                          </button>
                        </li>
                        
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="mobile-menu__setting" data-mobile-menu-item>
                <button
                  class="mobile-menu__setting-button"
                  title="Currency"

                  data-mobile-menu-trigger
                >
                  <span
                    class="
                      mobile-menu__setting-icon
                      mobile-menu__setting-icon--currency
                    "
                  >
                  &#1583;.&#1573;
                  </span>
                  <span class="mobile-menu__setting-title">UAE Dirham</span>
                  <span class="mobile-menu__setting-arrow"
                    ><svg width="6px" height="9px">
                      <path
                        d="M0.3,7.4l3-2.9l-3-2.9c-0.4-0.3-0.4-0.9,0-1.3l0,0c0.4-0.3,0.9-0.4,1.3,0L6,4.5L1.6,8.7c-0.4,0.4-0.9,0.4-1.3,0l0,0C-0.1,8.4-0.1,7.8,0.3,7.4z"
                      />
                    </svg>
                  </span>
                </button>
                <div class="mobile-menu__setting-panel" data-mobile-menu-panel>
                  <div class="mobile-menu__panel mobile-menu__panel--hidden">
                    <div class="mobile-menu__panel-header">
                      <button class="mobile-menu__panel-back" type="button">
                        <svg width="7" height="11">
                          <path
                            d="M6.7,0.3L6.7,0.3c-0.4-0.4-0.9-0.4-1.3,0L0,5.5l5.4,5.2c0.4,0.4,0.9,0.3,1.3,0l0,0c0.4-0.4,0.4-1,0-1.3l-4-3.9l4-3.9C7.1,1.2,7.1,0.6,6.7,0.3z"
                          />
                        </svg>
                      </button>
                      <div class="mobile-menu__panel-title">{{'CURRENCY' | translate}}</div>
                    </div>
                    <div class="mobile-menu__panel-body">
                      <ul class="mobile-menu__links">
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('AED')" class="" data-mobile-menu-trigger>
                          &#1583;.&#1573; AED
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('EUR')" class="" data-mobile-menu-trigger>
                          &#128; EUR
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('PKR')" class="" data-mobile-menu-trigger>
                          &#8360; PKR
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('USD')" class="" data-mobile-menu-trigger>
                          &#36; USD
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('RUB')" class="" data-mobile-menu-trigger>
                          ₽ RUB
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('GBP')" class="" data-mobile-menu-trigger>
                          &#163; GBP
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('AFN')" class="" data-mobile-menu-trigger>
                          &#1547; AFN
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('ARS')" class="" data-mobile-menu-trigger>
                          &#36; ARS
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('AUD')" class="" data-mobile-menu-trigger>
                          &#36; AUD
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('AZN')" class="" data-mobile-menu-trigger>
                          &#1084;&#1072;&#1085; AZN
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('BRL')" class="" data-mobile-menu-trigger>
                          &#82;&#36; BRL
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('CAD')" class="" data-mobile-menu-trigger>
                          &#36; CAD
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('CNY')" class="" data-mobile-menu-trigger>
                          &#165; CNY
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('COP')" class="" data-mobile-menu-trigger>
                          &#36; COP
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('EGP')" class="" data-mobile-menu-trigger>
                          &#163; EGP
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('HKD')" class="" data-mobile-menu-trigger>
                          &#36; HKD
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('IDR')" class="" data-mobile-menu-trigger>
                          &#82;&#112; IDR
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('INR')" class="" data-mobile-menu-trigger>
                          &#x20B9; INR
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('IRR')" class="" data-mobile-menu-trigger>
                          &#65020; IRR
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('JPY')" class="" data-mobile-menu-trigger>
                          &#165; JPY
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('KGS')" class="" data-mobile-menu-trigger>
                          &#1083;&#1074; KGS
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('KHR')" class="" data-mobile-menu-trigger>
                          &#6107; KHR
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('KRW')" class="" data-mobile-menu-trigger>
                          &#8361; KRW
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('KZT')" class="" data-mobile-menu-trigger>
                          &#1083;&#1074; KZT
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('LKR')" class="" data-mobile-menu-trigger>
                          &#8360; LKR
                          </button>
                        </li> 
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('LRD')" class="" data-mobile-menu-trigger>
                          &#36; LRD
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('MXN')" class="" data-mobile-menu-trigger>
                          &#36; MXN
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('NZD')" class="" data-mobile-menu-trigger>
                          &#36; NZD
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('UZS')" class="" data-mobile-menu-trigger>
                          &#1083;&#1074; UZS
                          </button>
                        </li>
                        <li data-mobile-menu-item>
                          <button type="button" ng-click="convert_cuurency('UAH')" class="" data-mobile-menu-trigger>
                          &#8372; UAH
                          </button>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="mobile-menu__divider"></div>
            <!-- <div class="mobile-menu__indicators">
              <a class="mobile-menu__indicator" href="wishlist.html">
                <span class="mobile-menu__indicator-icon">
                  <svg width="20" height="20">
                    <path
                      d="M14,3c2.2,0,4,1.8,4,4c0,4-5.2,10-8,10S2,11,2,7c0-2.2,1.8-4,4-4c1,0,1.9,0.4,2.7,1L10,5.2L11.3,4C12.1,3.4,13,3,14,3 M14,1
	                      c-1.5,0-2.9,0.6-4,1.5C8.9,1.6,7.5,1,6,1C2.7,1,0,3.7,0,7c0,5,6,12,10,12s10-7,10-12C20,3.7,17.3,1,14,1L14,1z"
                    />
                  </svg>
                </span>
                <span class="mobile-menu__indicator-title">Wishlist</span>
              </a>
              <a class="mobile-menu__indicator" href="account-dashboard.html">
                <span class="mobile-menu__indicator-icon">
                  <svg width="20" height="20">
                    <path
                      d="M20,20h-2c0-4.4-3.6-8-8-8s-8,3.6-8,8H0c0-4.2,2.6-7.8,6.3-9.3C4.9,9.6,4,7.9,4,6c0-3.3,2.7-6,6-6s6,2.7,6,6
	                      c0,1.9-0.9,3.6-2.3,4.7C17.4,12.2,20,15.8,20,20z M14,6c0-2.2-1.8-4-4-4S6,3.8,6,6s1.8,4,4,4S14,8.2,14,6z"
                    />
                  </svg>
                </span>
                <span class="mobile-menu__indicator-title">Account</span>
              </a>
              <a class="mobile-menu__indicator" href="cart.html">
                <span class="mobile-menu__indicator-icon">
                  <svg width="20" height="20">
                    <circle cx="7" cy="17" r="2" />
                    <circle cx="15" cy="17" r="2" />
                    <path
                      d="M20,4.4V5l-1.8,6.3c-0.1,0.4-0.5,0.7-1,0.7H6.7c-0.4,0-0.8-0.3-1-0.7L3.3,3.9C3.1,3.3,2.6,3,2.1,3H0.4C0.2,3,0,2.8,0,2.6
                      V1.4C0,1.2,0.2,1,0.4,1h2.5c1,0,1.8,0.6,2.1,1.6L5.1,3l2.3,6.8c0,0.1,0.2,0.2,0.3,0.2h8.6c0.1,0,0.3-0.1,0.3-0.2l1.3-4.4
                      C17.9,5.2,17.7,5,17.5,5H9.4C9.2,5,9,4.8,9,4.6V3.4C9,3.2,9.2,3,9.4,3h9.2C19.4,3,20,3.6,20,4.4z"
                    />
                  </svg>
                  <span class="mobile-menu__indicator-counter">3</span>
                </span>
                <span class="mobile-menu__indicator-title">Cart</span>
              </a>
              <a class="mobile-menu__indicator" href="account-garage.html">
                <span class="mobile-menu__indicator-icon">
                  <svg width="20" height="20">
                    <path
                      d="M6.6,2c2,0,4.8,0,6.8,0c1,0,2.9,0.8,3.6,2.2C17.7,5.7,17.9,7,18.4,7C20,7,20,8,20,8v1h-1v7.5c0,0.8-0.7,1.5-1.5,1.5h-1
                        c-0.8,0-1.5-0.7-1.5-1.5V16H5v0.5C5,17.3,4.3,18,3.5,18h-1C1.7,18,1,17.3,1,16.5V16V9H0V8c0,0,0.1-1,1.6-1C2.1,7,2.3,5.7,3,4.2
                        C3.7,2.8,5.6,2,6.6,2z M13.3,4H6.7c-0.8,0-1.4,0-2,0.7c-0.5,0.6-0.8,1.5-1,2C3.6,7.1,3.5,7.9,3.7,8C4.5,8.4,6.1,9,10,9
                        c4,0,5.4-0.6,6.3-1c0.2-0.1,0.2-0.8,0-1.2c-0.2-0.4-0.5-1.5-1-2C14.7,4,14.1,4,13.3,4z M4,10c-0.4-0.3-1.5-0.5-2,0
                        c-0.4,0.4-0.4,1.6,0,2c0.5,0.5,4,0.4,4,0C6,11.2,4.5,10.3,4,10z M14,12c0,0.4,3.5,0.5,4,0c0.4-0.4,0.4-1.6,0-2c-0.5-0.5-1.3-0.3-2,0
                        C15.5,10.2,14,11.3,14,12z"
                    />
                  </svg>
                </span>
                <span class="mobile-menu__indicator-title">Garage</span>
              </a>
            </div>
            <div class="mobile-menu__divider"></div> -->
            <ul class="mobile-menu__links">
              <li data-mobile-menu-item>
                <a href="#!shop" class="" data-mobile-menu-trigger>
                  {{'SHOP' | translate}}
                <!-- Shop -->
                </a>
              </li>
              <li data-mobile-menu-item>
                <a href="#!blog" class="" data-mobile-menu-trigger>
                {{'BLOG' | translate}}  
                <!-- Blog -->
                </a>
              </li>
              <li data-mobile-menu-item>
                <a href="#!about" class="" data-mobile-menu-trigger>
                {{'ABOUT_US' | translate}}  
                <!-- About Us -->
                </a>
              </li>
              <li data-mobile-menu-item>
                <a href="#!message" class="" data-mobile-menu-trigger>
                  <!-- Contact Us -->
                  {{'CONTACT_US' | translate}}
                </a>
              </li>
              <!--<li data-mobile-menu-item>-->
              <!--  <a href="#!faq" class="" data-mobile-menu-trigger> -->
              <!--  {{'FAQ' | translate}}  -->
              <!--</a>-->
              <!--</li>-->
              <li data-mobile-menu-item>
                <a href="#!terms" class="" data-mobile-menu-trigger> 
                {{'PRIVACY_POLICY' | translate}}
                <!-- FAQ  -->
              </a>
              </li>
            </ul>
            <div class="mobile-menu__spring"></div>
            <div class="mobile-menu__divider"></div>
            <a class="mobile-menu__contacts" href="">
              <div class="mobile-menu__contacts-subtitle">Free call 24/7</div>
              <div class="mobile-menu__contacts-title">+971507995291</div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- mobile-menu / -->
   <script>
     
     $(function() {
        $('.indicator--trigger--click .indicator__button').on('click', function(event) {
            event.preventDefault();

            const dropdown = $(this).closest('.indicator');

            if (dropdown.is('.indicator--open')) {
                dropdown.removeClass('indicator--open');
            } else {
                dropdown.addClass('indicator--open');
            }
        });

        $(document).on('click', function (event) {
            $('.indicator')
                .not($(event.target).closest('.indicator'))
                .removeClass('indicator--open');
        });
    });


    $(function() {
        $('.topbar__menu-button').on('click', function() {
            $(this).closest('.topbar__menu').toggleClass('topbar__menu--open');
        });

        $(document).on('click', function (event) {
            $('.topbar__menu')
                .not($(event.target).closest('.topbar__menu'))
                .removeClass('topbar__menu--open');
        });
    });
   </script>

    <script>
        var URL = 'http://localhost/findparts';
        // console.log(URL);

    </script>
   
  </body>
</html>
