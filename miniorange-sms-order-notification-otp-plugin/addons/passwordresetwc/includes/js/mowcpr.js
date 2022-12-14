jQuery(document).ready( function() {
    $mo = jQuery;

    if($mo('input[name="reset_key"]').length == 0){



    var html = "<div id='mo_message' hidden style='background-color: #f7f6f7;padding: 1em 2em 1em 3.5em;'>"+
                    "<img src='"+mowcprvar.imgURL+"'>"+
                "</div>";

    var button2=html+
                '<div class="woocommerce-Input woocommerce-Input " id="verify_div" hidden>'+
                    '<div class="woocommerce-Input woocommerce-Input">'+
                        '<input autocomplete="off"  style ="margin:10px 0 10px" class="woocommerce-Input woocommerce-Input" type="text" name="verify_field" '+
                            'id="verify_field" value="" placeholder="Enter Verification code here">'+
                    '</div>'+
                '</div>'+
                '<div class="woocommerce-form-row form-row">'+
                    '<div class="woocommerce-form-row ">'+
                        '<input type="button" style = "background-color: #3ba1da" value="'+mowcprvar.buttontext+'" '+
                            'class="woocommerce-Button button" id="mo_wc_send_otp_pass">'+
                        '<input type="submit" style ="margin-left:20px" value="Verify" class="wc-button wc-alt" id="mo_wc_verify_pass" >'+
                    '</div>'+
                    // '<div class="woocommerce-form-row ">'+
                    //     '<input type="submit" value="Verify" class="wc-button wc-alt" id="mo_wc_verify_pass" disabled>'+
                    // '</div>'+
             
                '</div>';

    if($mo(".woocommerce-ResetPassword").length>0) {
         $mo('label[for=user_login]').remove();
         $mo(".woocommerce-ResetPassword .woocommerce-Button").remove();
         $mo(button2).insertAfter('input[name="wc_reset_password"]');
         $mo("input#user_login").attr('placeholder',mowcprvar.phText);
         $mo('.lost_reset_password p:first').text(mowcprvar.resetLabelText);
        //  console.log('sads');
         $mo('#mo_wc_verify_pass').attr('disabled','disabled');
    }
    $mo("#mo_wc_send_otp_pass").click(function(e){
        e.preventDefault();
        mo_wc_send_pass();
        });
    } 
});

function mo_wc_send_pass() {
    var e = $mo('[id^='+mowcprvar.fieldKey+']').val();

    $mo("#mo_message").empty();
    $mo("#mo_message").show();
    $mo.ajax( {
        url: mowcprvar.siteURL,
        type:"POST",
        data:{username:e,security:mowcprvar.nonce,action:mowcprvar.action.send},
        crossDomain:!0,dataType:"json",
        success:function(o){
            $mo("#mo_wc_send_otp_pass").removeAttr("disabled");
            if(o.result=="success"){
                $mo("#verify_div").show();
                $mo("#mo_wc_verify_pass").removeAttr("disabled");
                $mo("#mo_message").empty(),$mo("#mo_message").append(o.message),
                $mo("#mo_message").css("border-top","3px solid green");
            }else{
                $mo("#verify_div").hide();
                $mo("#mo_message").empty(),$mo("#mo_message").append(o.message),
                $mo("#mo_message").css("border-top","3px solid red");
            }
        },
        error:function(o){
            $mo("#mo_wc_send_otp_pass").removeAttr("disabled");
            $mo("#mo_message").empty(),$mo("#mo_message").append(o.message),
            $mo("#mo_message").css("border-top","3px solid red");
        }
    });
}