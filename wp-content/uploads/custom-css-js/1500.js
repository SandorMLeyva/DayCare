<!-- start Simple Custom CSS and JS -->
<script type="text/javascript">
 

jQuery(document).ready(function( $ ){
 	 textUsWidget()
});
function textUsWidget(){
    var $contactform = jQuery('#text-2');
    var $boxContact =  jQuery('#box-contact');

    var rights = '<div class="clearfix"></div><p class="terms">Sending this information I agree to be contacted from Pini Insurance representatives and understand that no consent to texting is required for purchase of services. <a target="_blank" href="https://qualgrow.com/software/textusterms" rel="noopener noreferrer">See Terms</a></p>';
    var poweredBy = '<a id="powerby" target="_blank" href="https://qualgrow.com" rel="noopener noreferrer">powered by | <span>Qualgrow Corp.</span></a>';

    var $contactMessageEle = $contactform.find('.your-message');
    $contactMessageEle.each(function(){
        jQuery(this).after(rights);
    });

    //$contactform.clone().appendTo($boxContact);


    jQuery('.form_text_us').hide();
    jQuery('.textus').click(function () {
        jQuery('.textus').hide();
        jQuery('.form_text_us').removeClass('hidden');
        jQuery('.form_text_us').fadeIn();

    });
    jQuery('.cerrar').click(function () {
        jQuery('.form_text_us').fadeOut();
        jQuery('.textus').show();
        //  $('.form_text_us').addClass('textusform');
    });
}</script>
<!-- end Simple Custom CSS and JS -->
