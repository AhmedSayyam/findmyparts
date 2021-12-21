// const moment = require("../assets/js/moment");
app.controller("foot_cont", function($scope, $http){
    // console.log("test footer");
});
app.controller("head_cont", function($scope,$translate, $http, $route, $rootScope,$localStorage, $sessionStorage, $window, $log, $interval){
    // console.log("head_cont Controller");
    $("#search_box").hide();
    $rootScope.lang = 'en';
    $rootScope.is_login = false;
    $rootScope.product_array = [];
     $rootScope.localCheck = false;
    $rootScope.a_total = 0;
    $rootScope.tax = 0;
    $rootScope.shipping = 0;
    $rootScope.part_check = false;
    $rootScope.to_currency = "USD";

    $rootScope.from_currency = "USD";
    // $rootScope.amount_converted = 0;
    // $rootScope.exchange_rate = 0;
    if (window.performance) {
        // console.info("window.performance works fine on this browser");
    }
    console.info(performance.navigation.type);
    if (performance.navigation.type == performance.navigation.TYPE_RELOAD) {
        // console.info( "This page is reloaded" );
        $rootScope.product_array = $localStorage.product_array;
        $rootScope.shipping = $localStorage.shipping;
        $rootScope.a_total = $localStorage.a_total;
        // console.log("local products = ", $rootScope.product_array);
    } else {
        // console.info( "This page is not reloaded");
    }

    $scope.current_time = moment(new Date).format("HH:mm:ss");
    if($scope.current_time > $localStorage.is_session){
       $localStorage.is_login = false;
       window.location.href = "#!home";
    }

    if($localStorage.is_login){
        $rootScope.is_login = true;
        $rootScope.profile_data = $localStorage.profile_data;
    }
    else{
        $rootScope.is_login = false;
        $rootScope.profile_data = '';
    }
    $rootScope.grand_total = parseFloat($rootScope.a_total) + parseFloat($rootScope.tax) + parseFloat($rootScope.shipping);
   
    
    $(".spinner-border").hide();
    
    $scope.search_part_fun = function(){
        // console.log('enter pressed');
        $scope.search_part($scope.ng_search);
        // setTimeout(function() 
        //         {
        //             $scope.blank();
                   
        //         }, 3000);
    }
    $scope.blank = function(){
         $scope.ng_search = '';
        //  console.log('empmty');
    }
    
    // $('#search_input').keypress(function(event){
    //     var keycode = (event.keyCode ? event.keyCode : event.which);
    //     if(keycode == '13'){
    //          console.log("enter pressed");
    //         $scope.search_part($scope.ng_search);
             
    //     }
    // });
    
    // $("#search_input").keypress(function(event) {
    //     var keycode = (event.keyCode ? event.keyCode : event.which);
    //     if (keycode == '13') {
    //         // event.preventDefault();
    //         $scope.search_part($scope.ng_search);
    //         console.log("enter pressed");
    //     }
    // });

    $scope.search_part = function(part_no){
        window.location.href = "#!search_part/"+part_no;
        // $scope.ng_search = '';
        
//         $scope.no_old_part = false;
//         $scope.no_new_part = false;
//          $scope.no_product_found = false;
//         $(".search__dropdown").show();
//         $(".spinner-border").show();
//         var postData = $.param({
// 			part_no: part_no
//     	});
//     	$http
//             .post("https://www.virtualsoft.pk/Site/product_search", postData, {
//                 headers: {
//                     "Content-Type": "application/x-www-form-urlencoded",
//                 },
//             })
//             .then(function(response) {
                
//                 if (response.status == 200) {
//                 	if(response.data.data == false){ 
//                         $(".spinner-border").hide();
//                         $scope.no_product_found = true;
//                 	}
//                 	else{
//                         $scope.search_product = response.data.data[0];
//                         $scope.search_product_old = response.data.data[1];
//                         if($scope.search_product_old == ''){
//                             $(".spinner-border").hide();
//                             $scope.no_old_part = true;
//                         }
//                         if($scope.search_product == ''){
//                             $(".spinner-border").hide();
//                             $scope.no_new_part = true;
//                         }
                        
//                         $(".spinner-border").hide();
//                 	}
                	
//                 } else {
//                     console.log("Request Error>>>>>>>>>");
//                 }
//             });
    }
    
    $scope.remove_item = function(index,p_id,subTotal){
        $rootScope.a_total = $rootScope.a_total - subTotal;
         $rootScope.tax = (parseFloat(5/100) * $rootScope.a_total);
        if($rootScope.a_total < parseFloat(300)){
            $rootScope.shipping = parseFloat(30);
        }
        if($rootScope.a_total >= parseFloat(300)){
            $rootScope.shipping = parseFloat(0);
        }
        $rootScope.product_array.splice(index, 1);
        if($rootScope.product_array.length == 0){
            $rootScope.shipping = parseFloat(0);
             $rootScope.tax = parseFloat(0);
        }
    }

    $scope.login = function(){
        $scope.not_register = false;
        var postData = $.param({
			email: $scope.ng_useremail,
            password: $scope.ng_userpasssword
    	});
        $http
            .post("https://www.virtualsoft.pk/Site/login", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                	if(response.data.status == true){
                        $rootScope.is_login = true;
                        window.location.href = "#!dashboard";
                        $scope.not_register = false;
                        $rootScope.profile_data = response.data.data[0];
                        $localStorage.profile_data = $rootScope.profile_data;
                        $localStorage.is_login = true;
                        $localStorage.is_session = moment().add(120,'seconds').format("HH:mm:ss");
                        $rootScope.is_login = $localStorage.is_login;
                        $sessionStorage.is_login = true;
                	}
                    else{
                        console.log("not Found");
                        $scope.not_register = true;
                    }
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
        });
    }
    
    $scope.logout = function(){
        $localStorage.is_login = false;
        $rootScope.is_login = false;
        // console.log("Logout");
        window.location.href = "#!home";
    }

    $scope.currency_rates = function(){
        $http
        .get("https://openexchangerates.org/api/latest.json?app_id=fc6ff217b9d849cca7624b9540cff837", {
            headers: {
                "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            // console.log(response);
            if (response.status == 200) {
                // console.log(response.data);
                if ( typeof fx !== "undefined" && fx.rates ) {
                    fx.rates = response.data.rates;
                    fx.base = response.data.base;
                } else {
                    // If not, apply to fxSetup global:
                    var fxSetup = {
                        rates : response.data.rates,
                        base : response.data.base
                    }
                }
            } else {
                console.log("Request Error>>>>>>>>>");
            }
        });
        
    }
    $scope.currency_rates();
    $scope.convert_cuurency = function(my_to){
        $rootScope.to_currency = my_to;
    }
    $rootScope.getRate = function(money){
        var abc = fx.convert(money, {from: $rootScope.from_currency, to: $rootScope.to_currency}) ;
        return abc;
    }

    $scope.changeLanguage = function (key) {
        console.log("KEY: ",key);
        $rootScope.lang = key;
        $translate.use(key);
    };
    
    // $scope.getexchangerate = function(to) {
    //     $rootScope.to_currency = to;
    //     $log.info("FROM : " + $rootScope.from_currency);

    //     $log.info("TO : " + $rootScope.to_currency);

    //     $http.get("https://api.decoded.cf/currency.php?amount="+1200+"&from="+$rootScope.from_currency+"&to="+$rootScope.to_currency)
    //         .then(function(response) {

    //             $rootScope.exchange_rate = response.data.amount_converted;
    //             console.log("rate = ",$rootScope.exchange_rate);
    //             $rootScope.amount_converted = response.data.amount_converted;
    //             console.log("amount = ",$rootScope.amount_converted);
    //             $log.info(response.data.amount_converted);


    //     });

    // };
    $('#lang_usa').click(function(e) {  
        console.log("KEY: ",'en');
        $rootScope.lang = 'en';
        let abc = 'en'; 
        $translate.use(abc);
      });
      $('#lang_ar').click(function(e) {  
        console.log("KEY: ",'ar');
        $rootScope.lang = 'ar';
        let abc = 'ar'; 
        $translate.use(abc);
      });
      $('#lang_vt').click(function(e) {  
        console.log("KEY: ",'vn');
        $rootScope.lang = 'vn';
        let abc = 'en'; 
        $translate.use(abc);
      });
      $('#lang_th').click(function(e) {  
        console.log("KEY: ",'th');
        $rootScope.lang = 'th';
        let abc = 'th'; 
        $translate.use(abc);
      });
      $('#lang_rus').click(function(e) {  
        console.log("KEY: ",'rus');
        $rootScope.lang = 'rus';
        let abc = 'rus'; 
        $translate.use(abc);
      });

});

app.controller("main_cont", function($scope, $http, $rootScope, $route, $window,$localStorage, $sessionStorage,){
    // console.log("Main Controller");

    $scope.search_product = function(){
        window.location.href = "#!search/"+$scope.ng_vehicle+'/'+$scope.ng_model;
    }

    $scope.get_parts = function(){
        $("#products-dimmer").show();
        $http
        .get("https://www.virtualsoft.pk/Site/universal_parts_by_limit/30", {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            // console.log("Response:",response);
            if (response.status == 200) {
                // console.log("Data:",response.data.data);
                $rootScope.universal_parts_list = response.data.data;
                $rootScope.part_check = true;
                $("#products-dimmer").hide();
                // console.log("Universal List",$scope.universal_parts_list);
            } else {
                console.log("Failed request");
            }
        });
    }

    
    if($rootScope.part_check == false){
        $scope.get_parts();
        // console.log("called");
    }
    else{
        // console.log("no called");
        $("#products-dimmer").hide();
    }
    
        
    // console.log("Slider Data 1:",$rootScope.universal_parts_list);

    $http
        .get("https://www.virtualsoft.pk/Site/make", {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            // console.log("Response:",response);
            if (response.status == 200) {
                // console.log("Data:",response.data.data);
                $scope.vehicles_list = response.data.data;
                // console.log("Vehicle List:",$scope.vehicles_list);
            } else {
                console.log("Failed request");
            }
    });

    $scope.get_model = function(v_id){
        var postData = $.param({
			make_id: v_id
    	});
    	$http
            .post("https://www.virtualsoft.pk/Site/model_name", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                	if(response.data.data == ''){
                       console.log("");
                	}
                	else{
                        $scope.model_list = response.data.data;
                        
                	}
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });
            
    }

    

});

app.controller("about_cont", function($scope, $http, $route){
    // console.log("About Controller");

});
app.controller("message_cont", function($scope, $http, $route,  $routeParams){
    console.log("Message Controller");
    $scope.abcd = $routeParams.location;
    if($scope.abcd == 'location'){
        console.log($scope.abcd);
        $('#location_box').focus();
    }
    $scope.message_flag = false;
    $scope.send_message = function(){
        var postData = $.param({
			label: $scope.ng_mname,
            email: $scope.ng_memail,
            subject: $scope.ng_msubject,
            message: $scope.ng_mmessage
    	});
    	$http
            .post("https://www.virtualsoft.pk/Site/contact_us", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                	if(response.data.status == true){
                        $scope.message_flag = true;
                        
                        // $scope.ng_name = '';
                        // $scope.ng_email = '';
                        // $scope.ng_subject = '';
                        // $scope.ng_message = '';
                	}
                    else{
                        console.log("not null");
                    }
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });
    }

});


app.controller("contact_cont", function($scope, $http, $route, $routeParams){
    console.log("Contact Controller");
    $scope.abcd = $routeParams.location;
    if($scope.abcd == 'location'){
        console.log($scope.abcd);
        $('#location_box').focus();
    }
    $scope.message_flag = false;
    $scope.send_message = function(){
        var postData = $.param({
			label: $scope.ng_name,
            email: $scope.ng_email,
            subject: $scope.ng_subject,
            message: $scope.ng_message
    	});
    	$http
            .post("https://www.virtualsoft.pk/Site/contact_us", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                	if(response.data.status == true){
                        $scope.message_flag = true;
                        
                        // $scope.ng_name = '';
                        // $scope.ng_email = '';
                        // $scope.ng_subject = '';
                        // $scope.ng_message = '';
                	}
                    else{
                        console.log("not null");
                    }
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });
    }

});

app.controller("blog_cont", function($scope, $http, $route){
    // console.log("Blog Controller");
    $scope.no_data = false;
    
       
    $scope.pageChangeHandler = function(num) {
        console.log('going to page ' + num);
      };

    $("#blogs-dimmer").show();
    $http
        .get("https://www.virtualsoft.pk/Site/blog", {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            if (response.status == 200) {
                if(response.data.data == ''){
                    $scope.no_data = true;
                }
                $scope.blogs_list = response.data.data;
                $("#blogs-dimmer").hide();
            } else {
                console.log("Failed request");
            }
    });

    $scope.setPagingData = function(page) {
        var pagedData = $scope.blogs_list.slice(
          (page - 1) * $scope.itemsPerPage,
          page * $scope.itemsPerPage
        );
        $scope.blogs_list = pagedData;
    }

    $http
        .get("https://www.virtualsoft.pk/Site/blog_category", {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            if (response.status == 200) {
                $scope.blog_category_list = response.data.data;
            } else {
                console.log("Failed request");
            }
        });

});

app.controller("faq_cont", function($scope, $http, $route){
    // console.log("FAQ Controller");

});

app.controller("shop_cont", function($scope, $http, $route){
    
    $scope.no_category = false;
    $scope.no_product_list = false;
    $("#categories-dimmer").hide();
    $("#products-dimmer").show();
    
    
        $http
        .get("https://www.virtualsoft.pk/Site/universal_parts", {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            // console.log("Response:",response);
            if (response.status == 200) {
                if(response.data.data == ''){
                    $scope.no_product_list = true;
                     $("#products-dimmer").hide();
                    $("#product-list").hide();
                }
                else{
                    $scope.parts_list = response.data.data;
                    $scope.no_product_list = false;
                    $("#products-dimmer").hide();
                }
                
                // console.log("Universal List",$scope.universal_parts_list);
            } else {
                console.log("Failed request");
            }
        });
   

        $scope.pageChangeHandlerP = function(num) {
            console.log('going to page ' + num);
        };

        $scope.pageChangeHandlerC = function(num) {
            console.log('going to page ' + num);
        };

        $http
        .get("https://www.virtualsoft.pk/Site/categories_list", {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            // console.log("Response:",response);
            if (response.status == 200) {
                $scope.category_list = response.data.data;
                $scope.no_category = false;
                $("#products-dimmer").hide();
                // console.log("Universal List",$scope.universal_parts_list);
            } else {
                console.log("Failed request");
            }
        });

    $scope.byCategory = function(cid){

        $("#categories-dimmer").show();
        if(cid == 0 || cid == ''){
            $("#product-list").show();
            $("#category-list").hide();
            $("#categories-dimmer").hide();
            $scope.no_category = false;
        }
        else{
            $http
            .get("https://www.virtualsoft.pk/Site/related_products/"+cid, {
                headers: {
                    "Content-Type": "application/json",
                },
            })
            .then(function(response) {
                // console.log("Response:",response);
                if (response.status == 200) {
                    if(response.data.data == ''){
                        $scope.no_category = true;
                        $("#product-list").hide();
                        $("#category-list").hide();
                        $("#categories-dimmer").hide();
                    }
                    else{
                        $scope.related_category_data = response.data.data;
                        $scope.no_category = false;
                        $("#product-list").hide();
                        $("#categories-dimmer").hide();
                        $("#category-list").show();
                        
                    }
                    
                } else {
                    console.log("Failed request");
                }
            });
        }
        
    }

});

// app.controller("wheel_cont", function($scope, $http, $route){
//     // console.log("Shop Controller");
    
//     $("#products-dimmer").show();
//         $http
//         .get("https://www.virtualsoft.pk/Site/universal_parts", {
//             headers: {
//                  "Content-Type": "application/json",
//             },
//         })
//         .then(function(response) {
//             // console.log("Response:",response);
//             if (response.status == 200) {
//                 // console.log("Data:",response.data.data);
//                 $scope.wheels_list = response.data.data;
//                 $("#products-dimmer").hide();
//                 // console.log("Universal List",$scope.universal_parts_list);
//             } else {
//                 console.log("Failed request");
//             }
//         });
//         $scope.pageChangeHandlerP = function(num) {
//             console.log('going to page ' + num);
//           };

// });

app.controller("universal_cont", function($scope, $http, $route){
    // console.log("Shop Controller");
    $scope.no_data = false;
    $("#products-dimmer").show();
        $http
        .get("https://www.virtualsoft.pk/Site/universal_parts", {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            // console.log("Response:",response);
            if (response.status == 200) {
                // console.log("Data:",response.data.data);
                $scope.parts_list = response.data.data;
                $("#products-dimmer").hide();
                // console.log("Universal List",$scope.universal_parts_list);
            } else {
                console.log("Failed request");
            }
        });
        $scope.pageChangeHandlerP = function(num) {
            console.log('going to page ' + num);
          };

});

app.controller("wishlist_cont", function($scope, $http, $route){
    // console.log("Wishlist Controller");

});

app.controller("login_cont", function($scope, $http, $route, $rootScope, $localStorage, $sessionStorage, $window){
    // console.log("Login Controller");


    $scope.login = function(){
        $scope.not_register = false;
        var postData = $.param({
			email: $scope.ng_usermail,
            password: $scope.ng_userpassword
    	});
        $http
            .post("https://www.virtualsoft.pk/Site/login", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                	if(response.data.status == true){
                        $rootScope.is_login = true;
                        window.location.href = "#!dashboard";
                        $scope.not_register = false;
                        $rootScope.profile_data = response.data.data[0];
                        $localStorage.profile_data = $rootScope.profile_data;
                        $localStorage.is_login = true;
                        $localStorage.is_session = moment().add(120,'seconds').format("HH:mm:ss");
                        $rootScope.is_login = $localStorage.is_login;
                        $sessionStorage.is_login = true;
                	}
                    else{
                        console.log("not Found");
                        $scope.not_register = true;
                    }
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
        });
    }
    
    
});

app.controller("logout_cont", function($scope, $http, $route, $rootScope, $localStorage, $sessionStorage, $window){
    // console.log("Login Controller");

    $scope.current_time = moment(new Date).format("HH:mm:ss");
    if($scope.current_time > $localStorage.is_session){
       $localStorage.is_login = false;
       window.location.href = "#!login";
    }

    if($localStorage.is_login == true){
        $localStorage.is_login = false;
        $rootScope.is_login = false;
        window.location.href = "#!login";
    }

    
    
});

app.controller("dashboard_cont", function($scope, $http, $route, $rootScope){
    // console.log("Dashboard Controller");

    


});

app.controller("garage_cont", function($scope, $http, $route){
    // console.log("Garage Controller");

});

app.controller("profile_cont", function($scope, $http, $route, $rootScope){
    // console.log("Profile Controller");
    $scope.update_flag = false;
    $scope.no_changes = false;
    $scope.ng_myname = $rootScope.profile_data.full_name;
    $scope.ng_mymail = $rootScope.profile_data.email;
    $scope.ng_myphone = $rootScope.profile_data.phone;
    $scope.ng_mycountry = $rootScope.profile_data.country;
    $scope.ng_myaddress = $rootScope.profile_data.address;
    $scope.ng_mycity = $rootScope.profile_data.city;
    $scope.ng_mypostcode = $rootScope.profile_data.post_code;
    $scope.update = function(){
        var postData = $.param({
            id: $rootScope.profile_data.id,
            full_name: $scope.ng_myname,   
            email: $scope.ng_mymail,
            phone: $scope.ng_myphone,
            country: $scope.ng_mycountry,
            address: $scope.ng_myaddress,
            city: $scope.ng_mycity,
            post_code: $scope.ng_mypostcode
        });
        $http
            .post("https://www.virtualsoft.pk/Site/customer_edit_profile", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    if(response.data.status == true){
                        $scope.update_flag = true;
                        // console.log("OK");
                        setTimeout(
                            function() 
                            {
                                window.location.href = "#!dashboard";
                            }, 2000);
                    }
                    else if(response.data.status == false){
                        $scope.no_changes = true;
                    }
                    
                } else {
                    // console.log("Request Error>>>>>>>>>");
                }
        });
    }

});

app.controller("orders_cont", function($scope, $http, $route, $rootScope){
    // console.log("Orders Controller",$rootScope.profile_data.id);
    $("#orders-dimmer").show();
    $scope.pageChangeHandler = function(num) {
        console.log('going to page ' + num);
      };
    $http
        .get("https://www.virtualsoft.pk/Site/customer_orders/"+$rootScope.profile_data.id, {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            if (response.status == 200) {
                $scope.orders_list = response.data.data;
                $("#orders-dimmer").hide();
            } else {
                console.log("Failed request");
            }
    });

});
app.controller("address_cont", function($scope, $http, $route){
    // console.log("Address Controller");

});
app.controller("edit-address_cont", function($scope, $http, $route, $rootScope){
    // console.log("Edit Address Controller");

});
app.controller("password_cont", function($scope, $http, $route, $rootScope, $localStorage){
    // console.log("Password Controller");
    $scope.change = false;
    $scope.not_change = false;
    $scope.user = {  
        password: "",  
        confirmPassword: ""  
    };  

    $scope.change_pass = function(){
        var postData = $.param({
			id: $rootScope.profile_data.id,
            password: $scope.re_pass
    	});
    	$http
            .post("https://www.virtualsoft.pk/Site/change_password", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    if(response.data.status == true){
                       $scope.change = true;
                       setTimeout(
                        function() 
                        {
                            window.location.href = "#!home";
                            $rootScope.is_login = false;
                            $localStorage.is_login = false;
                        }, 2000);
                    }
                	else{
                        $scope.not_change = true;
                	}
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });
    }

});
app.controller("order-details_cont", function($scope, $http, $route, $routeParams){
    // console.log("Order Details Controller");
    var order_id = $routeParams.oid;
    var postData = $.param({
        order_no: order_id
    });
    $http
        .post("https://www.virtualsoft.pk/Site/customer_orders", postData, {
            headers: {
                "Content-Type": "application/x-www-form-urlencoded",
            },
        })
        .then(function(response) {
            
            if (response.status == 200) {
                if(response.data.status == true){
                    // $rootScope.is_login = true;
                    // console.log("Email found");
                    // window.location.href = "#!dashboard";
                    // $scope.not_register = false;
                    $scope.order_detail_data = response.data.data.order_detail;
                    $scope.order_number = response.data.data.order_detail[0].order_no;
                    $scope.created_on = response.data.data.order_detail[0].created_on;
                    $scope.order_total_amount = response.data.data.total_amount[0];
                    // console.log("Order:",$scope.order_detail_data); 
                    // $scope.email_not_found = false;
                    // $scope.email_found = true;
                    // setTimeout(
                    //     function() 
                    //     {
                    //         window.location.href = "#!login";
                    //     }, 2000);
                    // $rootScope.product_array = '';
                    // $rootScope.a_total = 0;
                    //$route.reload();
                }
                else{
                    // console.log("not Order");
                    // $scope.not_register = true;
                    // $scope.email_found = false;
                    // $scope.email_not_found = true;
                }
                
            } else {
                console.log("Request Error>>>>>>>>>");
            }
    });


});

app.controller("track-order_cont", function($scope, $http, $route){
    // console.log("Track Order Controller");

});

app.controller("cart_cont", function($scope, $http, $route, $rootScope){
    // console.log("Cart Controller");
    // console.log("Cart:",$rootScope.product_array);
    
    $scope.remove_item = function(index,p_id,subTotal){
        $rootScope.a_total = $rootScope.a_total - subTotal;
        $rootScope.tax = (parseFloat(5/100) * $rootScope.a_total);
         if($rootScope.a_total < parseFloat(300)){
            $rootScope.shipping = parseFloat(30);
        }
        if($rootScope.a_total >= parseFloat(300)){
            $rootScope.shipping = parseFloat(0);
        }
        $rootScope.product_array.splice(index, 1);
        if($rootScope.product_array.length == 0){
            $rootScope.shipping = parseFloat(0);
            $rootScope.tax = parseFloat(0);
        }
    }

    $scope.increment = function(product){
        angular.forEach($rootScope.product_array,function(value,key){
            if(value.product_id == product.product_id){
                // console.log("qty = ",value.qty);
                // console.log("qty = ",value.sub_total);
                value.qty = parseFloat(value.qty) + 1;
                value.sub_total = parseFloat(value.sub_total) + parseFloat(value.price);
                $rootScope.a_total = parseFloat($rootScope.a_total) + parseFloat(value.price);
                $rootScope.tax = (parseFloat(5/100) * $rootScope.a_total);
                 if($rootScope.a_total < parseFloat(300)){
                    $rootScope.shipping = parseFloat(30);
                }
                if($rootScope.a_total >= parseFloat(300)){
                    $rootScope.shipping = parseFloat(0);
                }
                // $("#my_qty").val(parseFloat(value.qty+1));
            }
        });
        // console.log("Products = ",$rootScope.product_array);
    }

    $scope.decrement = function(index,product){
        angular.forEach($rootScope.product_array,function(value,key){
            
            if(value.product_id == product.product_id){
                value.qty = parseFloat(value.qty) - 1;
                value.sub_total = parseFloat(value.sub_total) - parseFloat(value.price);
                $rootScope.a_total = parseFloat($rootScope.a_total) - parseFloat(value.price);
                $rootScope.tax = (parseFloat(5/100) * $rootScope.a_total);
                 if($rootScope.a_total < parseFloat(300)){
                    $rootScope.shipping = parseFloat(30);
                }
                if($rootScope.a_total >= parseFloat(300)){
                    $rootScope.shipping = parseFloat(0);
                }
                // $("#my_qty").val(parseFloat(value.qty-1));
            }
            if(value.product_id == product.product_id){
                if(value.qty < 1 && value.qty == 0){
                    $rootScope.product_array.splice(index, 1); 
                    if($rootScope.product_array.length == 0){
                        $rootScope.shipping = parseFloat(0);
                    }
                }
            }
        });
        // console.log("Products = ",$rootScope.product_array);
    }

});

app.controller("old-list_cont", function($scope, $http, $route, $routeParams, $rootScope, $sce, $window){
    var par_no = $routeParams.part_no;
    $("#old-products-dimmer").show();
    $scope.get_old_products = function(){
        var postData = $.param({
            part_no: par_no
        });
        $http
            .post("https://www.virtualsoft.pk/Site/old_product", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    if(response.data.status == true){
                        if(response.data.data != ''){
                            $scope.old_parts_list = response.data.data;
                            $("#old-products-dimmer").hide();
                        }
                       console.log(response.data.data);
                    }
                    else{
                        // console.log("not null");
                    }
                    
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
        });
    }
    $scope.get_old_products();
});

app.controller("product-detail_cont", function($scope, $http, $route, $routeParams, $rootScope, $sce, $window, $localStorage){
    // console.log("Product Detail Controller");
    $scope.ng_quantity = 1;
    $scope.product_list = [];
    $scope.continue_shop = false;
    var id = $routeParams.id;
    var cat_id = $routeParams.cat_id;
    var par_no = $routeParams.part_no;
    $scope.abcd = $routeParams.part;
    if($scope.abcd == 'part'){
        // console.log($scope.abcd);
        $('#product_box').focus();
    }
    // console.log("Product ID:",id);
    // console.log("Category ID:",cat_id);
    $scope.get_old_products = function(){
        var postData = $.param({
            part_no: par_no
        });
        $http
            .post("https://www.virtualsoft.pk/Site/old_product", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    if(response.data.status == true){
                        if(response.data.data != ''){
                            $scope.avail = true;
                        }
                        else{
                            $scope.avail = false;
                        }
                       // console.log(response.data.data);
                    }
                    else{
                        // console.log("not null");
                    }
                    
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
        });
    }
    $scope.get_old_products();

    $scope.gotoOldProducts = function(part_number){
        window.location.href = "#!old-list/"+part_number;
    }

    $scope.gotoCart = function(){
        window.location.href = "#!cart";
    }
    
    $scope.product_content = false;
    $scope.$on('$viewContentLoaded', function () {
        $scope.product_content = true;
    });

    $http
        .get("https://www.virtualsoft.pk/Site/universal_parts/"+id, {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            // console.log("Response:",response);
            if (response.status == 200) {
                // console.log("Product Data:",response.data.data);
                $scope.product_data = response.data.data[0];
                if($scope.product_data.image1 == null){
                    $scope.product_content = false;
                }
                else{
                    $scope.product_content = true;
                }
                $scope.desc = $sce.trustAsHtml($scope.product_data.description);
                // console.log($scope.product_data);
            } else {
                // console.log("Failed request");
            }
    });
    $scope.pageChangeHandler = function(num) {
        console.log('going to page ' + num);
    };

    $http
        .get("https://www.virtualsoft.pk/Site/related_products/"+cat_id, {
            headers: {
                 "Content-Type": "application/json",
            },
        })
        .then(function(response) {
            // console.log("Response:",response);
            if (response.status == 200) {
                // console.log("Related Products Data:",response.data.data);
                $scope.related_product_data = response.data.data;
                // console.log($scope.related_product_data);
            } else {
                console.log("Failed request");
            }
    });

    $scope.add_cart = function(){  
        $scope.continue_shop = true;
         if($rootScope.localCheck == false){
            $localStorage.product_array = [];
            $localStorage.shipping = 0;
            $localStorage.a_total = 0;
            $rootScope.localCheck = true;
        }
        $rootScope.product_array.push({
            product_id: $scope.product_data.id,
            product_name: $scope.product_data.product_name,
            part_no: $scope.product_data.part_no,
            type: $scope.product_data.type,
            type_label: $scope.product_data.type_label,
            image: $scope.product_data.image1,
            category: $scope.product_data.category,
            category_id: $scope.product_data.category_id,
            price: $scope.product_data.price,
            qty: $scope.ng_quantity,
            sub_total: parseFloat($scope.product_data.price) * parseFloat($scope.ng_quantity)
        });
        // console.log("Product List First Time:",$rootScope.product_array);
        $rootScope.a_total = parseFloat($rootScope.a_total) + (parseFloat($scope.product_data.price) * parseFloat($scope.ng_quantity));
        $rootScope.tax = (parseFloat(5/100) * $rootScope.a_total);
        if($rootScope.a_total < parseFloat(300)){
            $rootScope.shipping = parseFloat(30);
        }
        if($rootScope.a_total >= parseFloat(300)){
            $rootScope.shipping = parseFloat(0);
        }
        // console.log("Total = ",$rootScope.a_total);
        $localStorage.product_array.push({
            product_id: $scope.product_data.id,
            product_name: $scope.product_data.product_name,
            part_no: $scope.product_data.part_no,
            type: $scope.product_data.type,
            type_label: $scope.product_data.type_label,
            image: $scope.product_data.image1,
            category: $scope.product_data.category,
            category_id: $scope.product_data.category_id,
            price: $scope.product_data.price,
            qty: $scope.ng_quantity,
            sub_total: parseFloat($scope.product_data.price) * parseFloat($scope.ng_quantity),
        });
        $localStorage.shipping = $rootScope.shipping;
        $localStorage.a_total = $rootScope.a_total;
    }

    $scope.gotoShop = function(){
        window.location.href = "#!shop";
    }
    
});

app.controller("old-detail_cont", function($scope, $http, $route, $routeParams, $rootScope, $sce, $window,  $localStorage){
    // console.log("Product Detail Controller");
    $scope.ng_quantity = 1;
    $scope.product_list = [];
    $scope.continue_shop = false;
    var id = $routeParams.id;
    var par_no = $routeParams.part_no;
    $scope.abcd = $routeParams.part;
    if($scope.abcd == 'part'){
        // console.log($scope.abcd);
        $('#old_product_box').focus();
    }
    // console.log("Product ID:",id);
    // console.log("Category ID:",cat_id);
    $scope.old_product_content = false;
    $scope.$on('$viewContentLoaded', function () {
        $scope.old_product_content = true;
    });
        var postData = $.param({
            id: id,
            part_no: par_no
        });
        $http
            .post("https://www.virtualsoft.pk/Site/old_product", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    if(response.data.status == true){
                    //    console.log(response.data.data);
                       $scope.old_product = response.data.data[0];
                       if($scope.old_product.image1 == null){
                        $scope.old_product_content = false;
                        }
                        else{
                            $scope.old_product_content = true;
                        }
                    //    console.log("Old product = ",$scope.old_product);
                    }
                    else{
                        // console.log("not null");
                    }
                    
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
        });
        $scope.get_old_products = function(){
            var postData = $.param({
                part_no: par_no
            });
            $http
                .post("https://www.virtualsoft.pk/Site/old_product", postData, {
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                })
                .then(function(response) {
                    
                    if (response.status == 200) {
                        if(response.data.status == true){
                        //    console.log(response.data.data);
                           $scope.old_related = response.data.data;
                        }
                        else{
                            // console.log("not null");
                        }
                        
                    } else {
                        console.log("Request Error>>>>>>>>>");
                    }
            });
        }
        $scope.get_old_products();
    

    
    $scope.pageChangeHandler = function(num) {
        console.log('going to page ' + num);
    };

    

    $scope.add_cart = function(){  
        $scope.continue_shop = true;
         if($rootScope.localCheck == false){
            $localStorage.product_array = [];
            $localStorage.shipping = 0;
            $localStorage.a_total = 0;
            $rootScope.localCheck = true;
        }
        $rootScope.product_array.push({
            oid: $scope.old_product.id,
            product_id: $scope.old_product.product_id,
            product_name: $scope.old_product.product_name,
            part_no: $scope.old_product.part_no,
            type: $scope.old_product.type,
            type_label: $scope.old_product.type_label,
            image: $scope.old_product.image1,
            category: $scope.old_product.category,
            category_id: $scope.old_product.category_id,
            price: $scope.old_product.price,
            qty: $scope.ng_quantity,
            sub_total: parseFloat($scope.old_product.price) * parseFloat($scope.ng_quantity)
        });
        // console.log("Product List First Time:",$rootScope.product_array);
        $rootScope.a_total = parseFloat($rootScope.a_total) + (parseFloat($scope.old_product.price) * parseFloat($scope.ng_quantity));
        $rootScope.tax = (parseFloat(5/100) * $rootScope.a_total);
         if($rootScope.a_total < parseFloat(300)){
            $rootScope.shipping = parseFloat(30);
        }
        if($rootScope.a_total >= parseFloat(300)){
            $rootScope.shipping = parseFloat(0);
        }
        
        $localStorage.product_array.push({
            product_id: $scope.product_data.id,
            product_name: $scope.product_data.product_name,
            part_no: $scope.product_data.part_no,
            type: $scope.product_data.type,
            type_label: $scope.product_data.type_label,
            image: $scope.product_data.image1,
            category: $scope.product_data.category,
            category_id: $scope.product_data.category_id,
            price: $scope.product_data.price,
            qty: $scope.ng_quantity,
            sub_total: parseFloat($scope.product_data.price) * parseFloat($scope.ng_quantity),
        });
        $localStorage.shipping = $rootScope.shipping;
        $localStorage.a_total = $rootScope.a_total;
    }

    $scope.gotoShop = function(){
        window.location.href = "#!shop";
    }
    $scope.gotoCart = function(){
        window.location.href = "#!cart";
    }
    
});

app.controller("error_cont", function($scope, $http, $route){
    // console.log("Error Controller");

});


app.controller("checkout_cont", function($scope, $http, $route, $rootScope, $window){
    // console.log("Checkout Controller");
    $("#checkout_spinner").hide();
    $scope.email_found = false;
    $scope.email_not_found = false;
    $scope.no_product = false;
    if($rootScope.is_login == true){
        $scope.ng_name = $rootScope.profile_data.full_name;
        $scope.ng_country = $rootScope.profile_data.country;
        $scope.ng_city = $rootScope.profile_data.city;
        $scope.ng_postcode = $rootScope.profile_data.post_code;
        $scope.ng_address = $rootScope.profile_data.address;
        $scope.ng_mail = $rootScope.profile_data.email;
        $scope.ng_phone = $rootScope.profile_data.phone;
        $scope.ng_detail = $rootScope.profile_data.note;
        
    }
    
    $("#checkout-email").focusout(function(){
        console.log("After Focus");
        if(!$rootScope.is_login){
            var postData = $.param({
                email: $scope.ng_mail
            });
            $http
                .post("https://www.virtualsoft.pk/Site/check_email", postData, {
                    headers: {
                        "Content-Type": "application/x-www-form-urlencoded",
                    },
                })
                .then(function(response) {
                    
                    if (response.status == 200) {
                        if(response.data.status == true){
                            console.log("Email found");
                            $scope.email_not_found = false;
                            $scope.email_found = true;
                            setTimeout(
                                function() 
                                {
                                    window.location.href = "#!login";
                            }, 2000);    
                        }
                        else{
                            console.log("not Found");
                            $scope.email_found = false;
                            $scope.email_not_found = true;
                        }
                        
                    } else {
                        console.log("Request Error>>>>>>>>>");
                    }
            });
        }

        
    });

    $scope.checkout = function(){
        
        if($rootScope.product_array == ''){
            $scope.no_product = true;
        }
        else{
            if($rootScope.is_login){
                $("#checkout_spinner").show();
                var postData = $.param({
                    c_id: $rootScope.profile_data.id,
                    email: $rootScope.profile_data.email,   
                    products: $rootScope.product_array,
                    total_amount: parseFloat($rootScope.a_total)+parseFloat($rootScope.tax)+parseFloat($rootScope.shipping),
                    shipment: $rootScope.shipping,
                    currency: $rootScope.to_currency,
                    tax: $rootScope.tax
                });
                $http
                    .post("https://www.virtualsoft.pk/Site/checkout", postData, {
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                    })
                    .then(function(response) {
                        
                        if (response.status == 200) {
                            if(response.data.status == true){
                                $("#checkout_spinner").hide();
                                window.location.href = "#!received";
                                $rootScope.product_array = [];
                                $rootScope.a_total = 0;
                                $rootScope.shipping = 0;
                                $rootScope.tax = 0;
                                //$route.reload();
                            }
                            else{
                                // console.log("not null");
                            }
                            
                        } else {
                            console.log("Request Error>>>>>>>>>");
                        }
                });
            }
            else{
                var isChecked = $("#checkout-different-address").is(":checked");
                if(isChecked){
                    var ship_address = $scope.ng_ship;
                    // console.log("Checked:",ship_address);
                }
                else{
                    $scope.ng_ship = $scope.ng_address+' '+$scope.ng_city+' '+$scope.ng_postcode+' '+$scope.ng_country;
                    
                    var ship_address = $scope.ng_ship;
                    // console.log("Without Checked:",ship_address);
                }
                $("#checkout_spinner").show();
                var postData = $.param({
                    full_name: $scope.ng_name,
                    country: $scope.ng_country,
                    city: $scope.ng_city,
                    post_code: $scope.ng_postcode,
                    address: $scope.ng_address,
                    email: $scope.ng_mail,
                    phone: $scope.ng_phone,
                    note: $scope.ng_detail,
                    shipping_address: ship_address,
                    products: $rootScope.product_array,
                    total_amount: parseFloat($rootScope.a_total)+parseFloat($rootScope.tax)+parseFloat($rootScope.shipping),
                    shipment: $rootScope.shipping,
                    currency: $rootScope.to_currency,
                    tax: $rootScope.tax
                });
                $http
                    .post("https://www.virtualsoft.pk/Site/checkout", postData, {
                        headers: {
                            "Content-Type": "application/x-www-form-urlencoded",
                        },
                    })
                    .then(function(response) {
                        
                        if (response.status == 200) {
                            if(response.data.status == true){
                                $("#checkout_spinner").hide();
                                window.location.href = "#!received";
                                $rootScope.product_array = [];
                                $rootScope.a_total = 0;
                                $rootScope.shipping = 0;
                                $rootScope.tax = 0;
                                //$route.reload();
                            }
                            else{
                                // console.log("not null");
                            }
                            
                        } else {
                            console.log("Request Error>>>>>>>>>");
                        }
                });
            }
        }

        
        
    }

    $("#ship-box").hide();

    $('#checkout-different-address').click(function(){
        if($(this).prop("checked") == true){
            $("#ship-box").slideDown();
            // console.log("Checkbox is checked.");
        }
        else if($(this).prop("checked") == false){
            $("#ship-box").slideUp();
            // $scope.ng_ship = $scope.ng_address+' '+$scope.ng_city+' '+$scope.ng_postcode+' '+$scope.ng_country;
            // console.log($scope.ng_ship);
            // console.log("Checkbox is unchecked.");
        }
    });
    

});

app.controller("terms_cont", function($scope, $http, $route, $routeParams){
    // console.log("Terms Controller");
     $scope.abcd = $routeParams.topic;
    if($scope.abcd == 'delivery'){
        // console.log($scope.abcd);
        $('#delivery_box').focus();
    }
    if($scope.abcd == 'returns'){
        // console.log($scope.abcd);
        $('#return_box').focus();
    }
    if($scope.abcd == 'conditions'){
        // console.log($scope.abcd);
        $('#condition_box').focus();
    }
    if($scope.abcd == 'cancellation'){
        // console.log($scope.abcd);
        $('#cancel_box').focus();
    }

});


app.controller("search-prod_cont", function($scope, $http, $route, $routeParams){
    // console.log("search-prod_cont Controller");
    $("#products-dimmer").show();
    if($routeParams.make == ''){
        var make_id = 0;
    }
    if($routeParams.model == ''){
        var model_id = 0;
    }
    var make_id = $routeParams.make;
    var model_id = $routeParams.model;
    // console.log("Product ID:",make_id);
    // console.log("Category ID:",model_id);
    $scope.no_data = false;
    
        var postData = $.param({
			make_id: make_id,
            model_id: model_id
    	});
    	$http
            .post("https://www.virtualsoft.pk/Site/search_product", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                	if(response.data.data == ''){
                       // console.log("No Data");
                        $scope.no_data = true;
                        $("#products-dimmer").hide();
                	}
                	else{
                        $scope.search_products = response.data.data;
                        $("#products-dimmer").hide();
                        // console.log("Search Data:",$scope.search_products);
                        
                	}
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });
    
    // $http
    //     .get("https://www.virtualsoft.pk/Site/universal_parts/"+id, {
    //         headers: {
    //              "Content-Type": "application/json",
    //         },
    //     })
    //     .then(function(response) {
    //         // console.log("Response:",response);
    //         if (response.status == 200) {
    //             // console.log("Product Data:",response.data.data);
    //             $scope.product_data = response.data.data[0];
    //             // console.log($scope.product_data);
    //         } else {
    //             console.log("Failed request");
    //         }
    // });

    // $http
    //     .get("https://www.virtualsoft.pk/Site/related_products/"+cat_id, {
    //         headers: {
    //              "Content-Type": "application/json",
    //         },
    //     })
    //     .then(function(response) {
    //         // console.log("Response:",response);
    //         if (response.status == 200) {
    //             // console.log("Related Products Data:",response.data.data);
    //             $scope.related_product_data = response.data.data;
    //             // console.log($scope.related_product_data);
    //         } else {
    //             console.log("Failed request");
    //         }
    // });
    
    $scope.pageChangeHandlerS = function(num) {
        console.log('going to page ' + num);
    };
});

app.controller("search_part_cont", function($scope, $http, $route, $routeParams){
    // console.log("search_part_cont Controller");
    $("#products-dimmer").show();
    if($routeParams.part == ''){
        var part_no = '';
    }
    var part_no = $routeParams.part;
    // console.log(part_no);
    $scope.searching_part = part_no;

    $scope.no_data = false;

    $scope.search_part = function(part_no){
        $scope.no_old_part = false;
        $scope.no_new_part = false;
         $scope.no_product_found = false;
         $("#products-dimmer").show();
         $("#products-dimmer").show();
        var postData = $.param({
			part_no: part_no
    	});
    	$http
            .post("https://www.virtualsoft.pk/Site/product_search", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    // console.log("Data",response.data);
                	if(response.data.data == null){ 
                        $("#products-dimmer").hide();
                        $scope.no_product_found = true;
                        // console.log("yes");
                	}
                	else{
                        // console.log("New parts= ", response.data.data[0]);
                        // console.log("Old parts= ", response.data.data[1]);
                        $scope.search_product = response.data.data[0];
                        $scope.search_product_old = response.data.data[1];
                        if($scope.search_product_old == ''){
                            $("#products-dimmer").hide();
                            $scope.no_old_part = true;
                        }
                        if($scope.search_product == ''){
                            $("#products-dimmer").hide();
                            $scope.no_new_part = true;
                        }
                        
                        $("#products-dimmer").hide();
                	}
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });
    }

    $scope.search_part(part_no);
    
        // var postData = $.param({
		// 	make_id: make_id,
        //     model_id: model_id
    	// });
    	// $http
        //     .post("https://www.virtualsoft.pk/Site/search_product", postData, {
        //         headers: {
        //             "Content-Type": "application/x-www-form-urlencoded",
        //         },
        //     })
        //     .then(function(response) {
                
        //         if (response.status == 200) {
        //         	if(response.data.data == ''){
        //                // console.log("No Data");
        //                 $scope.no_data = true;
        //                 $("#products-dimmer").hide();
        //         	}
        //         	else{
        //                 $scope.search_products = response.data.data;
        //                 $("#products-dimmer").hide();
        //                 // console.log("Search Data:",$scope.search_products);
                        
        //         	}
                	
        //         } else {
        //             console.log("Request Error>>>>>>>>>");
        //         }
        //     });
    // $scope.pageChangeHandlerS = function(num) {
    //     console.log('going to page ' + num);
    // };
});

app.controller("blog-detail_cont", function($scope, $http, $route, $routeParams, $sce){
    // console.log("blog-detail_cont Controller");
    
    var blog_id = $routeParams.id;
    
        var postData = $.param({
			blog_id: blog_id
    	});
    	$http
            .post("https://www.virtualsoft.pk/Site/blog", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    if(response.data == ''){  
                        console.log("No Data");
                    }
                	if(response.data.data == ''){
                       console.log("No Data");
                	}
                	else{
                        $scope.blog_data = response.data.data[0];
                        $scope.SomeHtml = $sce.trustAsHtml($scope.blog_data.body); 
                	}
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });
    
    
});

app.controller("category_cont", function($scope, $http, $route, $routeParams){
    // console.log("category_cont Controller");
    $scope.no_data = false;
    $scope.pageChangeHandler = function(num) {
        console.log('going to page ' + num);
      };
    $("#categories-dimmer").show();
    var cat_id = $routeParams.cid;
    
        var postData = $.param({
			category_id: cat_id
    	});
    	$http
            .post("https://www.virtualsoft.pk/Site/category_blog", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    if(response.data.data == ''){
                        $("#categories-dimmer").hide();
                        $scope.no_data = true;
                        // console.log("No Data");
                    }
                	else{
                        $scope.category_data = response.data.data;
                        $("#categories-dimmer").hide();
                        // console.log("Category Data:",$scope.category_data);
                	}
                	
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });

            $http
            .get("https://www.virtualsoft.pk/Site/blog_category", {
                headers: {
                     "Content-Type": "application/json",
                },
            })
            .then(function(response) {
                // console.log("Response:",response);
                if (response.status == 200) {
                    // console.log("Data:",response.data.data);
                    $scope.blog_category_list = response.data.data;
                  
                    // console.log("Universal List",$scope.universal_parts_list);
                } else {
                    console.log("Failed request");
                }
            });
    
    
});

app.controller("receive_cont", function($scope, $http, $route, $routeParams){
    console.log("receive_cont");
    
});


app.controller("forgot_cont", function($scope, $http, $route){
    // console.log("Terms Controller");
    $scope.forgot = function(){
        $scope.forgot_msg = false;
        $scope.user_invalid = false;
        var postData = $.param({
            email: $scope.useremail
        });
        $http
            .post("https://www.virtualsoft.pk/Site/forgot", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    // console.log(response);
                    if(response.data.status == true){
                        $scope.forgot_msg = true;
                        setTimeout(
                            function() 
                            {
                                window.location.href = "#!reset";
                            }, 2000);
                    }
                    else{
                        $scope.user_invalid = true;
                    }
                    
                    
                    
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });
    }
});

app.controller("reset_cont", function($scope, $http, $route){
    // console.log("Terms Controller");
    $scope.reset_pass = function(){
        $scope.reset_msg = false;
        var postData = $.param({
            email: $scope.resetemail,
            passwd: $scope.pass,
            cpasswd: $scope.re_pass,
            token: $scope.ng_otp
        });
        $http
            .post("https://www.virtualsoft.pk/Site/reset_password", postData, {
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded",
                },
            })
            .then(function(response) {
                
                if (response.status == 200) {
                    console.log(response);
                    if(response.data.status == true){
                        $scope.reset_msg = true;
                        setTimeout(
                            function() 
                            {
                                window.location.href = "#!login";
                            }, 2000);
                    }
                    
                    
                    
                } else {
                    console.log("Request Error>>>>>>>>>");
                }
            });
    }
});