<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */
?>


<footer>
	<div class="back-to-top visible-xs text-center">
		<span class="half-circle"> <a href="#top"><i
				class="fa fa-angle-double-up fa-2x mTop3px"></i></a>
		</span>
	</div>
	<div class="footer-top-block">
		<div class="container">
                <?php wp_nav_menu( array( 'theme_location' => 'footer', 'menu_class' => 'menu sf-js-enabled sf-arrows', 'menu_id' => 'menu-footermenu' ) ); ?>
            </div>
	</div>
	<div>
		<div class="container">
			<p class="copyright">All site content &#169; Therapeutic Guidelines
				Limited 2011. &bull; Therapeutic Limited, Ground Floor, 473 Victoria
				Street, West Melbourne, Victoria 3003, Australia</p>
		</div>
	</div>
</footer>
<?php wp_footer(); ?>

<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script
	src="<?php echo get_template_directory_uri(); ?>/js/extlib/colorbox/jquery.colorbox.js"></script>
<script
	src="<?php echo get_template_directory_uri(); ?>/js/extlib/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript"
	src="<?php echo get_template_directory_uri(); ?>/js/extlib/bootstrap/bootstrap3-typeahead.min.js"></script>
<script
	src="http://cdn.jsdelivr.net/jquery.mixitup/latest/jquery.mixitup.min.js"></script>
<script>
            $(function() {
                $('#Container').mixItUp();
            });

        </script>

<div class="modal fade" id="loginBox" tabindex="-1" role="dialog"
	aria-labelledby="loginBoxLabel">
	<div class="modal-dialog-login" role="document">
		<div class="modal-body">
			<button type="button" class="close close1" data-dismiss="modal"
				aria-label="Close" style="margin-bottom: -26px">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 nopadding">
				<div class="greyboxLoginTop login">
					<div class="loginLogBg">
						<svg width="200" height="60">
                                    <image
								xlink:href="<?php echo get_template_directory_uri(); ?>/images/svgassets/eTG_complete_Logo.svg"
								src="assets/images/etgCmplnew.png" width="200" height="60"
								alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" />
                                </svg>
					</div>
				</div>
				<div class="greyboxLogin login" id="cdploginBox">
					<h4 class="login-heading">Log in</h4>
					<form id="cdplogin" role="form" method="post"
						action="<?php echo TGL_DELIVERY_URL.'/userlogin'; ?>">
						<div class="form-group mrginBtm25px">
							<input type="text" name="username" value=""
								class="form-control noBorder" id="userName"
								placeholder="User name" required="true"> <span id="usererror"
								class="red hidden" style="color: red">Please enter a valid email
								address.</span>
						</div>
						<div class="form-group mrginBtm25px">
							<input type="password" name="password" value=""
								class="form-control noBorder" id="pwd" placeholder="Password"
								required="true"> <span id="passworderror" class="red hidden"
								style="color: red">Please enter your password.</span>
						</div>

						<button type="button" onclick=""
							class="tgldlogin btn btn-info btn-block">Log in</button>
						<!-- <button type="submit"  onclick="" class="btn btn-info btn-block">Log in</button> -->
					</form>
					<p class="mTop12px">
						Forgot your password? <a
							href="javascript:<?php //echo TGL_DELIVERY_URL.'/showforgotPassword'; ?>"
							id="forgotLink" class="underline">Click here</a>
					</p>
					<hr class="line" />
					<h4 class="login-heading">Sign up</h4>
					<p>Don't have an account yet?</p>
					<p>
						<a type="button"
							href="<?php echo TGL_DELIVERY_URL.'/userSignup'; ?>"
							target="_parent" class="btn btn-info btn-block">Create account</a>
					</p>
				</div>              <div id="forgotBox" class="greyboxLogin login"

					style="display: none;">
					<h4 class="login-heading">Forgot password</h4>

					<div class="alert alert-danger alert-dismissable" id="invalidemail"
						style="display: none;">
						<a href="#" data-dismiss="alert" class="close">×</a> Please enter
						valid email Id.
					</div>



					<form id="forgotpwd" name="forgotForm" action="forgotPassword"
						method="post" autocomplete="off">
						<div class="form-group">
							<div class="form-group">
								<input type="text" name="user.email" value="" id="emailAddress"
									class="form-control" placeholder="Email address"
									required="true"> <span id="emailerror" class="red hidden"
									style="color: red">Please enter a valid email address.</span>
							</div>
						</div>
						<p>
							<button type="button" id="forgotID"
								class="btn btn-info btn-block borderNone" value="Submit"
								theme="simple">Submit</button>
						</p>
					</form>



				</div>
			</div>
		</div>
	</div>
</div>



<script>
            $(document).ready(function() {
                // Activate Carousel
                // $("#myCarousel").carousel();	
            });

            jQuery('.mobnav-subarrow').click(

                function() {
                    jQuery(this).parent().toggleClass("xpopdrop");
                    jQuery(this).find('i').toggleClass("flaticon-downarrow25  flaticon-uparrow45");

                });
$(function() {
    $("#cdplogin input").keypress(function (e) {
        if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
            $('#cdplogin .tgldlogin').click();
            return false;
        } else {
            return true;
        }
    });
    $("#forgotpwd input").keypress(function (e) {
        if ((e.which && e.which == 13) || (e.keyCode && e.keyCode == 13)) {
            $('#forgotID').click();
            return false;
        } else {
            return true;
        }
    });
});

            function login() {

                $.colorbox({
                    html: $("#login").html(),
                });
            }

            /*
            function login(){
            	 var screenWidth  = screen.availWidth;
            	 var is_chrome = navigator.vendor;
            	 var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
            	//var is_chrome = navigator.userAgent;
            	
            	if(is_chrome == "Google Inc."){
            			if(screenWidth <= 480){
            				 $.colorbox({
            				 html : $("#login").html(),
            				 width   : '80%',            
            				 height:'90%' ,
            				});
            			}
            		else if(screenWidth <= 1024){
            			$.colorbox({
            	 html : $("#login").html(),
            	 iframe : true,
            	 width   : '60%',            
            	 height:'88%' ,
            	});
            			}
            		else{
            		$.colorbox({
            	 html : $("#login").html(),
            	 width   : '25%',            
            	 height:'80%'
            	});
            		}
            		}else if(is_firefox == true){
            			
            			if(screenWidth <= 480){
            				 $.colorbox({
            				 html : $("#login").html(),
            				 width   : '80%',            
            				 height:'92%' ,
            				});
            			}
            		else if(screenWidth <= 1024){
            			$.colorbox({
            	 html : $("#login").html(),
            	 width   : '80%',            
            	 height:'92%' ,
            	});
            			}
            		else{
            		$.colorbox({
            	 html : $("#login").html(),
            	 width   : '25%',            
            	 height:'80%' ,
            	});
            		}
            			}
            			else{
            				$.colorbox({
            	 html : $("#login").html(),
            	 width   : '25%',            
            	 height:'80%' ,
            	});
            				}
            		
            	
             }
            */
            function menuToggle() {
                $(".appnav").toggle();
                $(".bars").find('i').toggleClass('flaticon-menu31 flaticon-cross97');
            }

            function organisationToggle() {
                //alert(1);
                $(".sublist").toggle();
            }

            function closeModal() {
                jQuery(".nivo-lightbox-overlay").removeClass('nivo-lightbox-open');
            }

        </script>
<script
	src="<?php echo get_template_directory_uri(); ?>/js/autocomplete/jquery-ui.js"></script>
<link
	href="<?php echo get_template_directory_uri(); ?>/js/autocomplete/jquery-ui.css"
	rel="stylesheet">
<script>
            /*
                                                                                                $(document).ready(function(){
                                                                                                	$(".typeahead").typeahead({
                                                                                                	name: 'searchdata',
                                                                                                	prefetch: '<?php echo get_template_directory_uri(); ?>/searchdata.json',
                                                                                                	limit: 10
                                                                                                });
                                                                                                });
                                                                                                */

function validateEmail(email) {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( email );
}
$(document).on('click', '#forgotLink', function() {
	$("#cdploginBox").hide();
	$("#forgotBox").show();
});
$(document).on('click', '#loginButton', function() {
	$("#cdploginBox").show();
	$("#forgotBox").hide();
	$("#emailerror").addClass("hidden");
	$("#usererror").addClass("hidden");
	$("#passworderror").addClass("hidden");
});
$(document).on('click', '#forgotID', function() {
	var validate = 1;
	if ($("#emailAddress").val() == '') {
		$("#emailerror").removeClass("hidden");
		validate = 0;
	} else {
		if(validateEmail($("#emailAddress").val())) {
						$("#emailerror").addClass("hidden");
		}else{
			
						$("#emailerror").removeClass("hidden");
						validate = 0;

		}
	}
	if (validate == 1) {
	$.ajax({
			url : "<?php echo esc_url( home_url( '/service.php' ) ); ?>",
			type : "POST",
			data : {						
					forgotemail :jQuery("#emailAddress").val()
			},
			dataType: 'json',
			success : function(data) 
			{
				if(data.status == 'success'){
                    $("#emailerror").html('<span style="color:green">Password instruction sent to your email address.</span>');
                    $("#emailerror").removeClass("hidden");
                    jQuery("#emailAddress").val('');
                }else{
                    $("#emailerror").removeClass("hidden"); 
                }
			}
	});
	}
});


            $(document).ready(function() {
				
                $(document).on('click', '#cdplogin .tgldlogin', function() {
                    var validate = 1;
                    if ($("#userName").val() == '') {
                        $("#usererror").removeClass("hidden");
                        validate = 0;
                    } else {
						if(validateEmail($("#userName").val())) {
										$("#usererror").addClass("hidden");
						}else{
							
										$("#usererror").removeClass("hidden");
										validate = 0;

						}
                    }
                    if ($("#pwd").val() == '') {
                        $("#passworderror").removeClass("hidden");
                        validate = 0;
                    } else {
                        $("#passworderror").addClass("hidden");
                    }

                    if (validate == 1) {
                        			$.ajax({
                        					url : "<?php echo esc_url( home_url( '/service.php' ) ); ?>",
                        					type : "POST",
                        					dataType : "json",
                        					data : {									
                        							userName : $("#userName").val(),
                        							password : $("#pwd").val(),			
                        					},
                        					success : function(jsonResponse) {
                        							//var json_obj  = $.parseJSON(jsonResponse);
                        							if(jsonResponse.status == 'SUCCESS' ){
                        								jQuery('#cdplogin').submit();
                        								// window.location.href = "<?php echo esc_url( home_url() ); ?>";
                        							}else{
                        								$("#usererror").html(jsonResponse.status);
                        								$("#usererror").removeClass("hidden");
                        								return false;
                        							}
                        					}
                        			});
                        // $.ajax({
                        //     url: "<?php echo esc_url( home_url( '/service.php' ) ); ?>",
                        //     type: "POST",
                        //     dataType: "json",
                        //     data: {
                        //         userName: $("#userName").val(),
                        //         password: $("#pwd").val(),
                        //     },
                        //     success: function(jsonResponse) {
                        //         //var json_obj  = $.parseJSON(jsonResponse);
                        //         if (jsonResponse.response == 'pass') {
                        //             //jQuery('#cdplogin').submit();
                        //             var redirect = '';
                        //             if(jsonResponse.subscription == 'etgcomplete'){
                        //                 redirect = '<?php echo TGL_DELIVERY_URL; ?>/etgAccess';
                        //             }else{
                        //                 redirect = '<?php echo TGL_DELIVERY_URL; ?>/showMyProfile';
                        //             }

                        //             window.location.href = redirect;
                        //         } else {
                        //             $("#usererror").html('Login failed! Please provide valid user/password');
                        //             $("#usererror").removeClass("hidden");
                        //             return false;
                        //         }
                        //     }
                        // });
                    }

                })
                $(function() {
                    jQuery("#search_input").autocomplete({

                        source: function(request, response) {

                            $.ajax({
                                url: "<?php echo esc_url( home_url( '/service.php' ) ); ?>",
                                type: "POST",
                                dataType: "json",
                                data: {
                                    query: request.term
                                },
                                success: function(jsonResponse) {
                                    //var json_obj  = $.parseJSON(jsonResponse);
                                    //alert(json_obj );
                                    response(jsonResponse.terms);
                                }
                            });
                        }
                    });
                });
            });

        </script>
</body>

</html>
