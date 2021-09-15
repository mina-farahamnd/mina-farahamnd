$(document).ready(function () {
	$('.menu').click(function() {	
	  	var $this = $(this);
		if ($this.next().hasClass('show')) {
			$this.next().removeClass('show');
			$this.next().slideUp(350);
			$this.css({
				"background-color": "#ffffff",          
				"border-top-left-radius": "", 
				"border-top-right-radius": "",
			});

			$this.animate({
				"margin-top":"0",
			});

			$('.menu').animate({
				"margin-top":"0",
			});

			$this.siblings().animate({
				"margin-bottom":"0",
			});

      $('.menu').siblings().animate({
				"margin-bottom":"0",
			}, 30);

			$this.children().css({
				"color" : "black",
				"padding-right": "",
				"padding-left": "",
			});

			// $(this).parent().css({
			// 	"border-bottom": "1px solid #c8c8c8", 
			// });

			// $(this).parent().prev().css({
			// 	"border-bottom": "1px solid #c8c8c8", 
			// });
			// $(this).parent().siblings().css({
			// 	"border-bottom": "1px solid #c8c8c8",
			// });

		} else {
			$this.parent().parent().find('li .sub-menu-collapse').removeClass('show');
			$this.parent().parent().find('li .sub-menu-collapse').slideUp(350);
			$this.next().toggleClass('show');
			$this.next().slideToggle(350);
			$this.css({
				"background-color": "black",          
				"border-top-left-radius": "2rem", 
				"border-top-right-radius": "2rem", 
			});

			$this.animate({
				"margin-top":"2rem",				
			});

			// $('.menu').animate({
			// 	"margin-top":"2rem",				
			// });

			$this.siblings().animate({
				"margin-bottom":"2rem",
			}, 30);

      // $('.menu').siblings().animate({
			// 	"margin-bottom":"2rem",
			// }, 30);

			$this.children().css({
				"color" : "#ffffff",
				"padding-right": "1rem",
				"padding-left": "1rem",
			});

			$this.siblings().css({
				"background-color": "#ffffff",
				"border" : "1px solid black",
				"border-bottom-left-radius": "2rem", 
				"border-bottom-right-radius": "2rem",
			});			
			
			$(this).parent().siblings().children(".menu").css({
				"background-color": "#ffffff",  

			});

			$(this).parent().siblings().children(".menu").children().css({
				"color" : "black", 
				"padding-right": "",
				"padding-left": "",
			});

			// $(this).parent().css({
			// 	"border-bottom": "1px solid #c8c8c8", 
			// });
			
			// $(this).parent().prev().css({
			// 	"border-bottom": "1px solid #c8c8c8", 
			// });

			// $(this).parent().next().css({
			// 	"border-bottom": "1px solid #c8c8c8", 
			// });
		}
  });






	// $('.sub-menu-collapse').on('show.bs.collapse', function () {		
	// 	$(this).css({
	// 		"background-color": "#ffffff",
	// 		"border" : "1px solid black",
	// 		"border-bottom-left-radius": "2rem", 
	// 		"border-bottom-right-radius": "2rem", 
	// 	});
	// 	$(this).siblings().css({
	// 		"background-color": "black",          
	// 		"border-top-left-radius": "2rem", 
	// 		"border-top-right-radius": "2rem",   
	// 	});

	// 	$(this).siblings().children().css({
	// 		"color" : "#ffffff",
	// 		"padding-right": "1rem",
	// 		"padding-left": "1rem",

	// 	});	

	// 	$(this).parent().css({
	// 		"border-bottom": "0", 
	// 	});

	// 	$(this).parent().prev().css({
	// 		"border-bottom": "0", 
	// 	});

	// 	$(this).animate({
	// 		"margin-bottom":"2rem",
	// 	},500);
	
	// });


	// $('.sub-menu-collapse').on('hide.bs.collapse', function (e){

	// 	$(this).siblings().css({
	// 		"background-color": "#ffffff",          
	// 		"border-top-left-radius": "", 
	// 		"border-top-right-radius": "",   
	// 	});

	// 	$(this).siblings().children().css({
	// 		"color" : "black",
	// 		"padding-right": "",
	// 		"padding-left": "",
	// 	});

	// 	$(this).parent().css({
	// 		"border-bottom": "1px solid #c8c8c8", 
	// 	});

	// 	$(this).parent().prev().css({
	// 		"border-bottom": "1px solid #c8c8c8", 
	// 	});

	// 	$(this).animate({
	// 		"margin-bottom":"0",
	// 	},100);
	// });

// design menu mobile
//   $(".menu").click(function(){
//     var isOpen = $(this).attr('aria-expanded');
//     if(isOpen == "false"){

//       $(this).css({
//           "background-color": "black",          
//           "border-top-left-radius": "2rem", 
//           "border-top-right-radius": "2rem",   
//       });

// 	  $(this).siblings().animate({
// 		"margin-bottom":"2rem",
// 		},500);

// 	  $(this).parent().css({
// 		"border-bottom": "0", 
// 	  });

// 	  $(this).parent().prev().css({
// 		"border-bottom": "0", 
// 	  });

//       $(this).find(".menu-name").css({
//         "padding-right": "1rem",
//         "color" : "white",
//       });

//       $(this).find(".menu-arrow").css({
//         "margin-left": "1rem",
//         "color" : "white",
//       }); 
//       $(this).siblings().css({
//         "border" : "1px solid black",
//         "border-bottom-left-radius": "2rem", 
//         "border-bottom-right-radius": "2rem", 
//       });

//     }else{

//       $(this).css({
//           "background-color": "white",          
//       });

// 	  $(this).siblings().animate({
// 		"margin-bottom":"0",
// 	},100);

// 	  $(this).parent().css({
// 		"border-bottom": "1px solid #c8c8c8", 
// 	  });

// 	  $(this).parent().prev().css({
// 		"border-bottom": "1px solid #c8c8c8", 
// 	  });

//       $(this).find(".menu-name").css({
//         "padding-right": "0",
//         "color" : "black",
//       });

//       $(this).find(".menu-arrow").css({
//         "margin-left": "0",
//         "color" : "black",
//       }); 

//     }
  
//   });
// design menu mobile

  
// scroll top in footer
  $("a[href='#top']").click(function () {
    $("html, body").animate({ scrollTop: 0 }, "slow");
    return false;
  });
// scroll top in footer


// for loading
  $("body").removeClass("loading");
  $body = $("body");

// $body = $("body");

// $(document).on({
//     ajaxStart: function() { $body.addClass("loading");    },
//      ajaxStop: function() { $body.removeClass("loading"); }    
// });



// for loading


// header handeling
  $(".original-item").hover(function () {
    $(this).find(".menu__sub--item:first-child .menu__sub--collapse").show();
  });
  $(".menu__sub--btn").hover(function () {
    $(".menu__sub--collapse").hide();
    $(this).siblings(".menu__sub--collapse").show();
  });
// header handeling


// home and other page: carousel
  $(".option__carousel").owlCarousel({
    rtl: true,
    autoplay: true,
    autoplayHoverPause: true,
    dots: false,
    margin: 20,
    autoHeight: true,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      768: {
        items: 1,
        nav: true,
      },
      992: {
        items: 2,
        nav: true,
      },
    },
  });

  $(".products__card").owlCarousel({
    rtl: true,
    autoplay: true,
    autoplayHoverPause: true,
    dots: false,
    margin: 20,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      768: {
        items: 2,
        nav: true,
      },
      992: {
        items: 3,
        nav: true,
      },
      1200: {
        items: 4,
        nav: true,
      },
      1440: {
        items: 5,
        nav: true,
      },
    },
  });

  $(".discount__card").owlCarousel({
    rtl: true,
    autoplay: true,
    autoplayHoverPause: true,
    dots: false,
    margin: 20,
    responsive: {
      0: {
        items: 1,
        nav: true,
      },
      768: {
        items: 2,
        nav: true,
      },
      992: {
        items: 3,
        nav: true,
      },
      1200: {
        items: 4,
        nav: true,
      },
      1440: {
        items: 5,
        nav: true,
      },
    },
  });
  // home and other page: carousel

//same height card in option- related-discount class
  // set height of all cards to max height

  // get array of all '.card' elements
  const cards = Array.from(document.querySelectorAll(".same-height"));

  // form array of card element heights (offsetHeight)
  const cardHeights = cards.map((card) => card.offsetHeight);

  // find the maximum value of cardHeights array
  const maxCardHeight = Math.max(...cardHeights);
  //   const maxCardHeight = Math.max(600);

  // set all card `height` styles to `maxCardHeight`
  cards.forEach((card) => {
    card.style.height = maxCardHeight + "px";
  });
//same height card in option- related-discount class


// home page for : new__pruduction class for same height in cards, and resposnsive
  function setHeight() {
    var cw = $(".card-same-height").width();
    $(".card-same-height").css({ height: cw + "px" });
  }

  setHeight();
  $(window).resize(function () {
    setHeight();
  });
// home page for : new__pruduction class for same height in cards, and resposnsive


// home page: my card
		// $("#my-cart").hide();
		// $(".header__desktop--icon--cart").on("click", function () {
		//     $("#my-cart").show();
		// });
		// $("#my-cart").on("mouseleave", function () {
		//     $("#my-cart").hide();
		// })

  function myShop() {
    $(".my-cart").hide();
  }
  myShop();

  $(".header__desktop--icon--cart").on("click", function () {
    $(".my-cart").toggle();
  });
  $(".my-cart-close").click(function (e) {
    myShop();
  });

  $(document).mouseup(function (e) {
    var container = $(".my-cart");

    // if the target of the click isn't the container nor a descendant of the container
    if (!container.is(e.target) && container.has(e.target).length === 0) {
      container.hide();
    }
  });

// home page: my card


// home page: resize in responsive
  $(window).resize(function () {
    var viewportWidth = $(window).width();

    if (viewportWidth < 991) {
      $(".new__pruduction").after($(".discount"));
      $(".discount").after($(".search"));
    }
  });
//home page: resize in responsive


//login and register page: password-icon
  $(".password-icon")
    .on("pointerdown", function () {
      $(".password-input").attr("type", "text");
      $(".password-icon").attr("src", "/assets/front/icon/eye.svg");
    })
    .on("pointerup", function () {
      $(".password-input").attr("type", "password");
      $(".password-icon").attr("src", "/assets/front/icon/not-eye.svg");
    })
    .on("pointerout", function () {
      $(".password-icon").attr("src", "/assets/front/icon/not-eye.svg");
      $(".password-input").attr("type", "password");
    });

//login and register page: password-icon


//reset page: password-icon-reset
  $(".password-icon-reset")
    .on("pointerdown", function () {
      $(".password-input-reset").attr("type", "text");
      $(".password-icon-reset").attr("src", "/assets/front/icon/eye-green.svg");
    })
    .on("pointerup", function () {
      $(".password-input-reset").attr("type", "password");
      $(".password-icon-reset").attr(
        "src",
        "/assets/front/icon/not-eye-green.svg"
      );
    })
    .on("pointerout", function () {
      $(".password-icon-reset").attr(
        "src",
        "/assets/front/icon/not-eye-green.svg"
      );
      $(".password-input-reset").attr("type", "password");
    });
//reset page: password-icon-reset

//catalog page: filters
  $(".filtering ").on("click", function () {
    var collapse = $(this);
    var collapse_status = $(this).siblings().is(":hidden");
    $(this).siblings().slideToggle({duration: 600,start: function () {if (collapse_status) {
      $(collapse).find(".filters__collapse--arrow").animate({ deg: 180 },{duration: 400,step: function (t) {
                    $(this).css({ transform: "rotate(" + t + "deg)" });
                  },
                }
              );
          } else {
            $(collapse).find(".filters__collapse--arrow").animate({ deg: 0 },
                {duration: 400,step: function (t) {
                    $(this).css({ transform: "rotate(" + t + "deg)" });
                },
                }
              );
          }
        },
      });
  });


// catalog page: filters

  // filtered-products page: pagination
  // $(".pagination li:first-child span").text("صفحه قبل");
  // $(".pagination li:first-child a").text("صفحه قبل");
  //
  // $(".pagination li:last-child a").text("صفحه بعد");
  // $(".pagination li:last-child span").text("صفحه بعد");
  // filtered-products page: pagination
// catalog page: filters


// your cart page
		//   $(".user__modal--btn--yes").on("click", function () {
		//     $(".user-cart").remove();
		//     if ($(this).remove()) {
		//       $(".user__modal").hide();
		//     }
		//   });
// your cart page


// harvest page new
  $(".harvest-img").on("click", function () {
    var harvestImage = $(this).attr("src");
    $(".harvest-container").attr("src", harvestImage);
  });


  // modal
  $(".harvest-modal-img").on("click", function () {
    var harvestModalImage = $(this).attr("src");
    $(".harvest-modal-container").attr("src", harvestModalImage);
  });
  // modal

  // Zoom image
  /*var zoomConfig = { zoomType: "lens", lensShape: "round", lensSize: 200 };
  var image = $("#gallery-product img");
  var zoomImage = $("img#image-original");

  zoomImage.elevateZoom(zoomConfig);
  image.on("click", function () {
    $(".zoomContainer").remove();
    zoomImage.removeData("elevateZoom");
    zoomImage.attr("src", $(this).data("image"));
    zoomImage.data("zoom-image", $(this).data("zoom-image"));
    zoomImage.elevateZoom(zoomConfig);
  });*/


  $(window).resize(function () {
    var viewportWidth = $(window).width();
    if (viewportWidth < 1024) {
		$(this).removeData('elevateZoom');
     	$(".zoomContainer").remove();
     	// $(".zoomContainer").hide();
    }
  });
// Zoom image


// harvest number
  $("body").on("click", ".prev",function () {
    var prev = $(this).closest(".spinner").find("input").val();
    if (prev == 1) {
      $(this).closest(".spinner").find("input").val(1);
    } else {
      var prevVal = prev - 1;
      $(this).closest(".spinner").find("input").val(prevVal);
    }
  });

  $("body").on("click", '.next',function () {
    var next = $(this).closest(".spinner").find("input").val();
    if (next == 100) {
      $(this).closest(".spinner").find("input").val(100);
    } else {
      var nextVal = ++next;
      $(this).closest(".spinner").find("input").val(nextVal);
    }
  });
// harvest number

  $('input[name="sort"]').click(function (){
    if (this.previous) {
      this.checked = false;
    }
    this.previous = this.checked;
  });

  $("body").on('click','div .change-product-quantity',function () {
    var input = $(this).closest(".spinner").find(".number-input");
    changeProductQuantitu(input);
  });

  function changeProductQuantitu(input) {
    var sizes = "";
    var size_qty = "";
    var size_price = "";
    var size_key = "";
    var total = "";
    var stock = $("#stock").val();
    var keys = "";
    var prices = "";
    var colors = "";
    var values = "";
    var method = "fix";

    var qty = $(input).val();
    var pid = $(input).data("proid");
    if ($(input).data("color")) {
      colors = $(input).data("color");
    }
    if ($(input).data("warranty")) {
      values = [$(input).data("warranty")];
    }

    $.ajax({
      type: "GET",
      url: mainurl + "/addnumcart",
      data: {
        id: pid,
        qty: qty,
        size: sizes,
        color: colors,
        size_qty: size_qty,
        size_price: size_price,
        size_key: size_key,
        keys: keys,
        values: values,
        prices: prices,
        method: method,
      },
      success: function (data) {
        if (data.error == 'inventory'){
          toastr.error(data.msg);

        }
          $("#user-product").html("");
          $("#user-product").load(mainurl+'/checkout/products/');

          $("#tab-1").fadeIn(1);
          $("html, body").animate({ scrollTop: 0 }, "slow");


      },
    });
  }


//   // your cart page: remove goods
//   $(".user__discount--image").on("click", function () {
//     //$(this).parent().parent().remove();
//   });
//   // your cart page: remove goods

//   $(".hmping").hide();
//   $(".hmp").on("click", function () {
//     $(".hmping").slideDown(1000, "click", function () {
//       $(this).slideUp(1000);
//     });
//     // $(".hmpcollapse").slideDown(1000);
//     // $(".questions-open").css("transform","rotate(-180deg)");
//   });


});

function addCommas(nStr) {
  nStr += "";
  x = nStr.split(".");
  x1 = x[0];
  x2 = x.length > 1 ? "." + x[1] : "";
  var rgx = /(\d+)(\d{3})/;
  while (rgx.test(x1)) {
    x1 = x1.replace(rgx, "$1" + "," + "$2");
  }
  return x1 + x2;
}

function priceWithGuarantee(guarantee) {
  var price = $(guarantee).find(":selected").data("price");
  if (typeof price == 'number') {
    var priceWithOutGuarantee = $("#product-price-without-guarantee").val();
    if(price == 0)
    {
      $("#sizeprice").text(
          addCommas(parseInt(priceWithOutGuarantee))
      );
    }else{
      $("#sizeprice").text(
          addCommas(parseInt(priceWithOutGuarantee) + parseInt(price))
    );
    }

  }
}

function check_inventory(color_input){
  var inventory = $(color_input).data('inventory');
  if (inventory == "0"){
    $(".harvest__btn--interest--black").hide();
    $(".harvest__btn--interest--green").removeClass('w-50').addClass('w-100');
    $(".inventory-text").removeClass('harvest__checkmark').addClass('harvest__close').text("در انبار موجود نیست");
  }else{
    $(".harvest__btn--interest--black").show();
    $(".harvest__btn--interest--green").removeClass('w-100').addClass('w-50');
    $(".inventory-text").removeClass('harvest__close').addClass('harvest__checkmark').text("در انبار موجود است");
  }
}










// $(".menu").click(function(){
//     var isOpen = $(this).attr('aria-expanded');
//     if(isOpen == "false"){

//       $(this).css({
//           "background-color": "black",          
//           "border-top-left-radius": "2rem", 
//           "border-top-right-radius": "2rem",   
//       });

// 	  $(this).siblings().animate({
// 		"margin-bottom":"2rem",
// 	},500);

// 	  $(this).parent().css({
// 		"border-bottom": "0", 
// 	  });

// 	  $(this).parent().prev().css({
// 		"border-bottom": "0", 
// 	  });

//       $(this).find(".menu-name").css({
//         "padding-right": "1rem",
//         "color" : "white",
//       });

//       $(this).find(".menu-arrow").css({
//         "margin-left": "1rem",
//         "color" : "white",
//       }); 
//       $(this).siblings().css({
//         "border" : "1px solid black",
//         "border-bottom-left-radius": "2rem", 
//         "border-bottom-right-radius": "2rem", 
//       });

//     }else{

//       $(this).css({
//           "background-color": "white",          
//       });

// 	  $(this).siblings().animate({
// 		"margin-bottom":"0",
// 	},100);

// 	  $(this).parent().css({
// 		"border-bottom": "1px solid #c8c8c8", 
// 	  });

// 	  $(this).parent().prev().css({
// 		"border-bottom": "1px solid #c8c8c8", 
// 	  });

//       $(this).find(".menu-name").css({
//         "padding-right": "0",
//         "color" : "black",
//       });

//       $(this).find(".menu-arrow").css({
//         "margin-left": "0",
//         "color" : "black",
//       }); 

//     }
  
//   });