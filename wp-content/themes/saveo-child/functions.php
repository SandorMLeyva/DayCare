<?php
/**
 * Child-Theme functions and definitions
 */

 function wpb_hook_style(){
	 wp_enqueue_style('child-theme',get_stylesheet_directory_uri().'/style.css');
 }

function wpb_hook_javascript(){
	?>
	<script type="text/javascript">
		document.addEventListener('DOMContentLoaded', function(event){
      
     
	 
			var h = document.getElementsByClassName("wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left");
			h[0].style.height = "72px";
			
			var m = document.getElementsByClassName("sc_content_container");
			m[0].style.margin = "auto";
			
			var mm = document.getElementsByClassName("wpb_wrapper");
			mm[0].style = "-32px";
			
			var headerNavBar = document.getElementsByClassName("vc_row wpb_row vc_inner vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex");
			headerNavBar[0].height = "31px";
			
			var navBar = document.getElementsByClassName("wpb_column vc_column_container vc_col-sm-12 sc_layouts_column_icons_position_left");
			navBar[1].style.marginBottom = "5px";
			navBar[2].style.marginBottom = "-50px";
			if(document.location.pathname != "/"){
				navBar[3].style.marginBottom = "-50px";

			}
			navBar[2].style.marginTop = "-50px";

			var socialIcons = document.getElementsByClassName('socials_wrap');
			socialIcons[0].childNodes[0].remove();
			socialIcons[0].childNodes[0].href = "https://www.facebook.com/Esencia-De-La-Vida-Adult-Day-Care-301147906679581/ ";
			socialIcons[0].childNodes[0].target = "blank";
			socialIcons[0].childNodes[1].remove();
			//aqui poner los iconos de correo y localizacion
			socialIcons[0].innerHTML += "<a target='blank' href='mailto:esenciadelavida@yahoo.com' class='social_item social_item_style_icons social_item_type_icons'><span style='background-color:#02b1e8' class='social_icon social_facebook'><span class='icon-mail-empty'></span></span></a><a target='_blank' href='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.9828478348986!2d-80.27486078553538!3d25.771130083632514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b77c5f96fa57%3A0x5d9e186ae1c1ec82!2s4750+W+Flagler+St%2C+Miami%2C+FL+33134%2C+EE.+UU.!5e0!3m2!1ses-419!2scu!4v1554411762341!5m2!1ses-419!2scu' class='social_item social_item_style_icons social_item_type_icons'><span style='background-color:#f4894a' class='social_icon social_youtube'><span class='icon-location'></span></span></a>";
			
			var phone =document.getElementsByClassName('sc_layouts_item_link sc_layouts_iconed_text_link');
			phone[0].href="tel:+17862186085";
			
			var phoneText =document.getElementsByClassName('sc_layouts_item_details_line1 sc_layouts_iconed_text_line1');
			phoneText[0].firstChild.textContent = "+1 786-218-6085";
			
			
			var searchPlaceHolder = document.getElementsByClassName("search_field");
			searchPlaceHolder[0].placeholder="Buscar";

		
			var contactPhone = document.getElementsByClassName('contacts_phone');

			for (var i = 0; i < contactPhone.length; i++) {
				contactPhone[i].innerHTML = "<a target='blank' href='tel:7864883503'>Adm: 786-488-3503</a> <br> <a target='blank' href='tel:7862186085'>Tel: 786-218-6085</a>  <br> <a target='blank' href='fax:3052655271' style='color: black'>Fax: 305-265-5271</a>";
			}

			var contactAddr = document.getElementsByClassName('contacts_address');
			for (let i = 0; i < contactAddr.length; i++) {
					contactAddr[i].innerHTML = "<a target='blank' href='https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3592.9828478348986!2d-80.27486078553538!3d25.771130083632514!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88d9b77c5f96fa57%3A0x5d9e186ae1c1ec82!2s4750+W+Flagler+St%2C+Miami%2C+FL+33134%2C+EE.+UU.!5e0!3m2!1ses-419!2scu!4v1554411762341!5m2!1ses-419!2scu'>4750 West Flagler Street Miami, Fl 33134</a>";
				
			}

			var contactEmail = document.getElementsByClassName('contacts_email');

			var items = document.getElementsByClassName('sc_services_item_icon');
			var items2 = document.getElementsByClassName('sc_services_item_title');
			


			for (var i = 0; i < items.length; i++) {
				items[i].href = 'servicios';

			}

			for (var i = 0; i < items2.length; i++) {
				items2[i].firstChild.href = 'servicios';
			}

			var services = document.getElementsByClassName("sc_services_item_content");
			for (var i = 0; i < services.length; i++) {
				if(document.location.pathname == "/" && services[i].children.length > 0){
					services[i].children[0].style.display = "none"
				}
			}

      
      
			var servicesHome =document.getElementsByClassName("sc_services_item with_content with_icon sc_services_item_featured_top");
			if(servicesHome.length >= 7){
				servicesHome[0].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-03.png'>";

				servicesHome[1].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-01.png'>";

				servicesHome[2].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-02.png'>";

				servicesHome[3].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-05.png'>";

				servicesHome[4].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-04.png'>";

				servicesHome[5].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-06.png'>";

				servicesHome[6].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-08.png'>";

				servicesHome[7].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-09.png'>";

			servicesHome[8].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-07.png'>";
			}
      
      var servicesHome =document.getElementsByClassName("sc_services_item with_content with_icon sc_services_item_featured_left");
			if(servicesHome.length >= 7){
				servicesHome[0].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-03.png'>";

				servicesHome[1].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-01.png'>";

				servicesHome[2].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-02.png'>";

				servicesHome[3].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-05.png'>";

				servicesHome[4].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-04.png'>";

				servicesHome[5].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-06.png'>";

				servicesHome[6].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-08.png'>";

				servicesHome[7].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-09.png'>";

			servicesHome[8].children[0].innerHTML = "<img src='/wp-content/uploads/2019/04/icons-adult-day-care-07.png'>";
			}
				
      if(document.location.pathname=="/contacto/"){
        var contact = document.getElementsByClassName("wpb_column vc_column_container vc_col-sm-6 sc_layouts_column_icons_position_left")[0];
//         contact.style = "text-align:center";
        contact.children[0].children[0].children[0].children[0].childNodes[0].children[0].classList.add("contact_center_a")
//         contact.children[0].children[0].children[0].children[0].childNodes[0].children[0].style.marginLeft = "129px";
      }
      
		});
		
	</script>
	<?php
}
add_action('wp_head','wpb_hook_style');
add_action('wp_head','wpb_hook_javascript');

?>