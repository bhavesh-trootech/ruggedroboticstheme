/**done typing js**/
  (function($){
    $.fn.extend({
        donetyping: function(callback,timeout){
            timeout = timeout || 1e3; // 1 second default timeout
            var timeoutReference,
                doneTyping = function(el){
                    if (!timeoutReference) return;
                    timeoutReference = null;
                    callback.call(el);
                };
            return this.each(function(i,el){
                var $el = $(el);
                // Chrome Fix (Use keyup over keypress to detect backspace)
                // thank you @palerdot
                $el.is(':input') && $el.on('keyup keypress paste',function(e){
                    // This catches the backspace button in chrome, but also prevents
                    // the event from triggering too preemptively. Without this line,
                    // using tab/shift+tab will make the focused element fire the callback.
                    if (e.type=='keyup' && e.keyCode!=8) return;
                    
                    // Check if timeout has been set. If it has, "reset" the clock and
                    // start over again.
                    if (timeoutReference) clearTimeout(timeoutReference);
                    timeoutReference = setTimeout(function(){
                        // if we made it here, our timeout has elapsed. Fire the
                        // callback
                        doneTyping(el);
                    }, timeout);
                }).on('blur',function(){
                    // If we can, fire the event since we're leaving the field
                    doneTyping(el);
                });
            });
        }
    });
})(jQuery);

function updateCount(postId){
    jQuery.ajax({
      type: 'POST',
      url:rr_ajax_object.ajaxurl,
       data: {
        action: "update_count_case_study",
        postId : postId,
      },
      success: function (response) {
        //alert('Count incremented!');
      },
      error: function () {
        //alert('Error incrementing count');
      }
    });
}

jQuery(document).ready(function ($) {

    //solutions page
    $(document).click(function(event) {
    if (!$(event.target).closest(".filter_dropdown").length && !$(event.target).is(".filter_dropdown")) {
      $(".filter_dropdown").removeClass('active');
    }
    });
    /****/

	$(".rr_solutions_post_listing .filter_dropdown").click(function(){
		$(this).toggleClass("active");
	});

	jQuery('body').on('click', '.rr_solutions_post_listing .dropdown li', function() {
        var catslug = jQuery(this).data('slug');
        var catName = jQuery(this).text();

        $(".rr_solutions_post_listing .dropdown_value").text(catName);

         jQuery.ajax({
          type:"POST",
          url:rr_ajax_object.ajaxurl,
          data: {
            action: "filter_solution_by_select",
            catslug : catslug,
          },
          success: function (result) {
          	console.log(result);
                $(".solutions_posts").html(result);
              },
              error: function(err){
                  console.log(err);
              }
        });

	});
	/*****/
	//search solutions
	jQuery('#search_solution').donetyping(function(){
                var searchWord = jQuery(this).val();

                jQuery.ajax({
		          type:"POST",
		          url:rr_ajax_object.ajaxurl,
		          data: {
		            action: "filter_solution_by_input",
		            searchWord : searchWord,
		          },
		          success: function (result) {
		          	console.log(result);
		                $(".solutions_posts").html(result);
		              },
		              error: function(err){
		                  console.log(err);
		              }
		        });
               
              });

	/****/
//success stories js 

    $(".rr_sucess_story_list_sec .filter_dropdown").click(function(){
        $(this).toggleClass("active");
    });

/****/
jQuery(function ($) {

    var page = 2; // Initial page number
    var loading = false;
    var popular = false;

    function load_posts() {
        if (!loading) {
            loading = true;

        $.ajax({
      type: 'POST',
      url:rr_ajax_object.ajaxurl,
       data: {
        action: 'load_more_casestudy',
        page: page,
        popular: popular,
      },
      success: function (response) {
        if (response) {

        $('.rr_sucess_story_list_data').append(response);

         if($("#btn_load_more").hasClass("popularActive")){
            var popularmaxpag = $("a#btn_load_more").data('popularmaxp');
             maxpag = popularmaxpag;
         }

         if(!$("#btn_load_more").hasClass("popularActive")){
            var maxp = $("a#btn_load_more").data('maxp');
             maxpag = maxp;
         }

         if(maxpag == page){
           $('#btn_load_more').hide();
         }else{
            $('#btn_load_more').show();
         }
        loading = false;
        page++;
        
    }
        //alert('Count incremented!');
      },
      error: function () {
        //alert('Error incrementing count');
      }
    });
    }

    }

    $('#btn_load_more').on('click', function () {
        var maxpag = $("a#btn_load_more").data('maxp');
        load_posts(maxpag);
    });

    $('.mostpopular').on('click', function () {
    $("a#btn_load_more").hide();
       $("a#btn_load_more").addClass("popularActive");
       var listName = jQuery(this).text();
        $(".rr_sucess_story_list_row .dropdown_value").text(listName);

        popular = true;
        page = 1; // Reset page to 2
        $('.rr_sucess_story_list_data').empty(); // Clear existing posts
        var maxpag = $("a#btn_load_more").data('popularmaxp');
        load_posts(maxpag);
    });

    $('.mostrecent').on('click', function () {
        $("a#btn_load_more").hide();
        $("a#btn_load_more").removeClass("popularActive");
        var listName1 = jQuery(this).text();
        $(".rr_sucess_story_list_row .dropdown_value").text(listName1);

        popular = false;
        page = 1; // Reset page to 2
        $('.rr_sucess_story_list_data').empty(); // Clear existing posts

        var maxpag = $("a#btn_load_more").data('maxp');
        load_posts(maxpag);
    });


    $('.allcasestudy').on('click', function () {
        $("a#btn_load_more").hide();
        $("a#btn_load_more").removeClass("popularActive");
        var listName2 = jQuery(this).text();
        $(".rr_sucess_story_list_row .dropdown_value").text(listName2);

        popular = false;
        page = 1; // Reset page to 2
        $('.rr_sucess_story_list_data').empty(); // Clear existing posts

        var maxpag = $("a#btn_load_more").data('maxp');
        load_posts(maxpag);
    });


});

/**End success stories js***/

});