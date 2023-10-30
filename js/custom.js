
// custom tab js
jQuery(document).ready(function () {
  jQuery('.tab-a.rfyou').click(function () {
    jQuery(".tab.rfyou").removeClass('tab-active');
    jQuery(".tab.rfyou[data-id='" + jQuery(this).attr('data-id') + "']").addClass("tab-active");
    jQuery(".tab-a.rfyou").removeClass('active-a');
    jQuery(this).parent().find(".tab-a.rfyou").addClass('active-a');
  });
  /****/
  jQuery('.tab-a.rfe').click(function () {
    jQuery(".tab.rfe").removeClass('tab-active');
    jQuery(".tab.rfe[data-id='" + jQuery(this).attr('data-id') + "']").addClass("tab-active");
    jQuery(".tab-a.rfe").removeClass('active-a');
    jQuery(this).parent().find(".tab-a.rfe").addClass('active-a');
  });

  /****/
  jQuery(window).scroll(function () {
    var sticky = jQuery('header'),
      scroll = jQuery(window).scrollTop();

    if (scroll >= 90) sticky.parents('body').addClass('header_fixed');
    else sticky.parents('body').removeClass('header_fixed');
  });

  jQuery('.rr_testimonial_row').owlCarousel({
    loop: false, // Disable continuous loop
    margin: 0,
    nav: true,
    dots: false, 
    responsiveClass: true,
    navText: [
      `<svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="40.182" height="36.757" viewBox="0 0 40.182 36.757">
        <path id="Polygon_7" data-name="Polygon 7" d="M18.378,0,36.757,19.46H0Z" transform="translate(40.182 0) rotate(90)" fill="#fff"/>
        <rect id="Rectangle_4024" data-name="Rectangle 4024" width="32.844" height="11.943" transform="translate(0 11.941)" fill="#fff"/>
        </svg>`,
      `<svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="40.182" height="36.757" viewBox="0 0 40.182 36.757">
        <path id="Polygon_7" data-name="Polygon 7" d="M18.378,0,36.757,19.46H0Z" transform="translate(40.182 0) rotate(90)" fill="#fff"/>
        <rect id="Rectangle_4024" data-name="Rectangle 4024" width="32.844" height="11.943" transform="translate(0 11.941)" fill="#fff"/>
        </svg>`
    ],
    items: 1,
    responsive: {
      0: {
        dots: true,
        margin: 10,
      },
      1025: {
        dots: false,
        margin: 0,
      }
    }
  });


  if (jQuery(window).width() <= 767 ) { 
    jQuery('.slicer.owl-carousel').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: true,  
        autoHeight:true,
        responsiveClass: true, 
        navText: [
          `<svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="40.182" height="36.757" viewBox="0 0 40.182 36.757">
            <path id="Polygon_7" data-name="Polygon 7" d="M18.378,0,36.757,19.46H0Z" transform="translate(40.182 0) rotate(90)" fill="#fff"/>
            <rect id="Rectangle_4024" data-name="Rectangle 4024" width="32.844" height="11.943" transform="translate(0 11.941)" fill="#fff"/>
            </svg>`,
          `<svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="40.182" height="36.757" viewBox="0 0 40.182 36.757">
            <path id="Polygon_7" data-name="Polygon 7" d="M18.378,0,36.757,19.46H0Z" transform="translate(40.182 0) rotate(90)" fill="#fff"/>
            <rect id="Rectangle_4024" data-name="Rectangle 4024" width="32.844" height="11.943" transform="translate(0 11.941)" fill="#fff"/>
            </svg>`
        ],
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 1
            },
            1000:{
                items: 1
            }
        }
    }) 
  }

  if (jQuery(window).width() <= 1023 ) {

    jQuery('.owl-carousel.image_content_slider_inner').owlCarousel({
        loop: false,
        margin: 0,
        nav: true,
        dots: true, 
        autoHeight:true,
        responsiveClass: true,
        navText: [
          `<svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="40.182" height="36.757" viewBox="0 0 40.182 36.757">
            <path id="Polygon_7" data-name="Polygon 7" d="M18.378,0,36.757,19.46H0Z" transform="translate(40.182 0) rotate(90)" fill="#fff"/>
            <rect id="Rectangle_4024" data-name="Rectangle 4024" width="32.844" height="11.943" transform="translate(0 11.941)" fill="#fff"/>
            </svg>`,
          `<svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="40.182" height="36.757" viewBox="0 0 40.182 36.757">
            <path id="Polygon_7" data-name="Polygon 7" d="M18.378,0,36.757,19.46H0Z" transform="translate(40.182 0) rotate(90)" fill="#fff"/>
            <rect id="Rectangle_4024" data-name="Rectangle 4024" width="32.844" height="11.943" transform="translate(0 11.941)" fill="#fff"/>
            </svg>`
        ],
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 1
            },
            1000:{
                items: 1
            }
        }
    })

  }

  jQuery('#horizontalTab').easyResponsiveTabs({
    type: 'default', //Types: default, vertical, accordion           
    width: 'auto', //auto or any width like 600px
    fit: true 
  });

  if (jQuery(window).width() > 767 && jQuery(window).width() < 1025) {
    const list = jQuery("#mega-menu-menu-1");
    const items = jQuery("#mega-menu-menu-1 > li");

    if (items.length % 2 === 0) {
      // If there is an even number of list items, split them into two groups.
      const group1 = jQuery("<div></div>").addClass("group");
      for (let i = 0; i < items.length / 2; i++) {
        group1.append(items[i]);
      }

      const group2 = jQuery("<div></div>").addClass("group");
      for (let i = items.length / 2; i < items.length; i++) {
        group2.append(items[i]);
      }

      // Replace the original list with the two new groups.
      list.empty();
      list.append(group1);
      list.append(group2);
    }

  }
  
});
setInterval(() => {
  
jQuery(".group>li.mega-menu-item > .mega-menu-link > span.mega-indicator").on('click', function () {    
  var parentGroup = jQuery(this).parents(".group");
  var otherItems = parentGroup.siblings().find("li.mega-menu-item");
        if (otherItems.hasClass("mega-toggle-on")) {
            otherItems.removeClass("mega-toggle-on");
       }    
       if (jQuery(this).parents("li.mega-menu-item").hasClass("mega-toggle-on")) {
        jQuery(this).closest("li.mega-menu-item").siblings().removeClass("mega-toggle-on");
      }    
});
}, 1);




/** end mobile menu **/

/** mobile menu **/
// function landmobile() {
//   if (jQuery(window).width() > 767 && jQuery(window).width() < 1025) {
//     jQuery("ul.max-mega-menu").on("after_mega_menu_init", function () {
//       var menu = jQuery(this);
//       jQuery("li.mega-menu-item>.mega-menu-link> span.mega-indicator").on('click', function (e) {
 
//         jQuery("ul#mega-menu-menu-1 li.mega-menu-item").removeClass("mega-toggle-on");
//         jQuery(this).closest("li.mega-menu-item").toggleClass("mega-toggle-on");

//       });
//     });
//   }
// }
// jQuery(document).ready(function () {
//   landmobile();
// });
// jQuery(window).resize(function () {
//   landmobile();
// });

// Check if any li.mega-menu-item has the class .mega-toggle-on
/** end mobile menu **/