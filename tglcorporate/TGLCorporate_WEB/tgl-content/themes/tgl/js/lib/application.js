 jQuery('.mobnav-subarrow').click(

function () {
	jQuery(this).parent().toggleClass("xpopdrop");
	jQuery(this).find('i').toggleClass("flaticon-downarrow25  flaticon-uparrow45");
		
});


function login(){
	 var screenWidth  = screen.availWidth;
	 var is_chrome = navigator.vendor;
	 var is_firefox = navigator.userAgent.toLowerCase().indexOf('firefox') > -1;
	//var is_chrome = navigator.userAgent;
	
	if(is_chrome == "Google Inc."){
			if(screenWidth <= 480){
				 $.colorbox({
				 href : 'login.html',
				 iframe : true,
				 width   : '80%',            
				 height:'90%' ,
				});
			}
		else if(screenWidth <= 1024){
			$.colorbox({
	 href : 'login.html',
	 iframe : true,
	 width   : '60%',            
	 height:'90%' ,
	});
			}
		else{
		$.colorbox({
	 href : 'login.html',
	 iframe : true,
	 width   : '25%',            
	 height:'90%'
	});
		}
		}else if(is_firefox == true){
			
			if(screenWidth <= 480){
				 $.colorbox({
				 href : 'login.html',
				 iframe : true,
				 width   : '80%',            
				 height:'92%' ,
				});
			}
		else if(screenWidth <= 1024){
			$.colorbox({
	 href : 'login.html',
	 iframe : true,
	 width   : '80%',            
	 height:'92%' ,
	});
			}
		else{
		$.colorbox({
	 href : 'login.html',
	 iframe : true,
	 width   : '25%',            
	 height:'90%' ,
	});
		}
			}
			else{
				$.colorbox({
	 href : 'login.html',
	 iframe : true,
	 width   : '25%',            
	 height:'90%' ,
	});
				}
		
	
 }

 function menuToggle(){	
    $(".appnav").toggle();
	$(".bars").find('i').toggleClass('flaticon-menu31 flaticon-cross97');
 }
 function organisationToggle(){
	//alert(1);
    $(".sublist").toggle();
 }