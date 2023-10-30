<?php /* Template Name: Contact Us Page */ ?>

<?php get_header(); ?>

<section id="" class="pilot_project_sec partner_banner_sec  contact_us_banner">
  <div class="container">
    <p id="breadcrumbs">
      <span>
        <span>
          <a href="https://ruggedrobotics.kinsta.cloud/">Home</a>
        </span> / <span>
          <a href="http://ruggedrobotics.kinsta.cloud/about/">About</a>
        </span> / <span class="breadcrumb_last" aria-current="page">Contact Us</span>
      </span>
    </p>    
    <div class="pilot_project_sec_row d-flex">
      <div class="pilot_project_left">
        <h1>Ready to take your projects to <span class="orng_txt">new</span> heights?</h1>
      </div>
      <div class="pilot_project_right">
        <p>Reach out with any questions you have about how we can help modernize your layouts—allowing your crew to stay upright and focused on what they do best, while our robot-powered technology takes your construction to new heights.</p>
      </div>
    </div>
  </div>
</section>

<section id="" class="form_block pilot_wrapper rr_contact_form_sec">
  <div class="container">
    <div class="form-inner">
      <div class="form-inner-block">
        <h3 class="uppercase">Send us a<span class="orng_txt"> message! </span></h3>

        <div class="hs-form">
            <script charset="" utf-8="" type="text/javascript"  src="//js.hsforms.net/forms/embed/v2.js"></script>
            <script>
                hbspt.forms.create({
                    region: "na1",
                    portalId: "23668539",
                    formId: "d9208d90-583a-425e-ac10-7c34e70f9a80"
                });
            </script>
        </div>

      </div> 
    </div>
  </div>
</section>



<section class="rr_map_contact_sec rr_u_doodle rr_diamond_doodle">
  <div class="container">
      <div class="rr_map_contact_row d-flex flex-wrap">
        <div class="rr_map_col w-100">
          <div id="map"></div>
        </div>
        <div class="rr_contact_col  w-100">
            <h2>Prefer getting in touch another way?</h2>
            <p>We’re here and ready to answer all of your questions about our full-service layout. Here’s how to reach us:</p>
            <a href="tel:xxx-xxx-xxxx">xxx-xxx-xxxx</a>
            <div class="address">
              <p>6501 Navigation Blvd Suite K1, Houston, TX 77011</p>
            </div>
            <a href="mailto:info@rugged-robotics.com">info@rugged-robotics.com</a>
        </div>
      </div>
  </div>
</section>

<section id="" class="rr_comm_footer_cta_sec rr_partner_footer_cta_sec rr_bg_orange ">
  <div class="container">
    <div class="rr_comm_footer_cta_main_row d-flex justify-space-between  flex-wrap">
      <div class="rr_comm_footer_cta_lft d-flex  flex-wrap flex-direction">
        <h2 class="uppercase">Looking to get a project started?</h2>
        <p>Let’s talk about how Rugged’s full-service layout can help propel your commercial construction projects to new heights.</p>
      </div>
      <div class="rr_comm_footer_cta_rgt">
        <ul class="rr_comm_footer_cta_row">
          <li class="rr_comm_footer_cta_single">
            <h3>Want to give Rugged a try first?</h3>
            <div>
              <p>Curious about working with us? Start with a pilot project—we’ll come to your jobsite and give you a taste of the Rugged experience.</p>
            </div>
            <a target="_self" href="/pilot/" class="comm_btn btn_underline rr_white_border btn_orange ">START A PILOT PROJECT <span class="btn_arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                  <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                </svg>
                <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31" class="hover_arrow">
                  <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#f25c07"></path>
                  <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"></line>
                </svg>
              </span>
            </a>
          </li>
          <li class="rr_comm_footer_cta_single">
            <h3>Need layout done ASAP?</h3>
            <div>
              <p>Got a job that needs to be done pronto? We got you! Get in touch with our expert team—we’ll schedule a time to be on your worksite as soon as possible.</p>
            </div>
            <a target="_self" href="/urgent/" class="comm_btn btn_underline rr_white_border btn_orange ">GET STARTED <span class="btn_arrow">
                <svg xmlns="http://www.w3.org/2000/svg" width="17.5" height="17" viewBox="0 0 17.5 17" class="default_arrow">
                  <path id="Path_316951" data-name="Path 316951" d="M8.5,0V7H0v3H8.5v7l9-8.5Z" fill="#000"></path>
                </svg>
                <svg id="Group_1518" data-name="Group 1518" xmlns="http://www.w3.org/2000/svg" width="22.061" height="12.31" viewBox="0 0 22.061 12.31" class="hover_arrow">
                  <path id="Polygon_7" data-name="Polygon 7" d="M6.155,0,12.31,6.517H0Z" transform="translate(22.061) rotate(90)" fill="#f25c07"></path>
                  <line id="Line_8" data-name="Line 8" x1="18.802" transform="translate(0 6.155)" fill="none" stroke="#f25c07" stroke-width="3"></line>
                </svg>
              </span>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>




 



<!-- map script -->
<script>
    var map;
    function initMap() {
        var mapStyle = [
            {
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#f1f3f4"
                    }
                ]
            },
            {
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "color": "#2496bc"
                    }
                ]
            },
            {
                "elementType": "labels.text.fill",
                "stylers": [
                    {
                        "color": "#677d84"
                    }
                ]
            },
            {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#f1f3f4"
                    },
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "poi",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "visibility": "simplified"
                    }
                ]
            },
            {
                "featureType": "road",
                "elementType": "labels.icon",
                "stylers": [
                    {
                        "visibility": "off"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#beefff"
                    }
                ]
            },
            {
                "featureType": "road.highway",
                "elementType": "geometry.stroke",
                "stylers": [
                    {
                        "color": "#47caf5"
                    }
                ]
            },
            {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [
                    {
                        "color": "#90cce1"
                    }
                ]
            }
        ];

        map = new google.maps.Map(document.getElementById('map'), {
            center: { lat: 29.749989, lng: -95.306892 },
            zoom: 14,
            styles: mapStyle
        });
    }
</script>
<!-- map script -->
<!-- Include the Google Maps JavaScript API with your API Key -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCSL_eVjeM1bAI7Pgt-aBTQKbr4QaMgwmg&callback=initMap"></script>
<!-- Replace 'YOUR_API_KEY' with your actual Google Maps API Key -->


<?php get_footer(); ?>