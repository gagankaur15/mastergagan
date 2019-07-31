<?php
/** Make sure that the WordPress bootstrap has run before continuing. */
require (dirname ( __FILE__ ) . '/wp-load.php');

// header('Content-type: application/json');
// Authentication for web service
$authusername='MPSadi@tgl.com';
$authpassword='Zserfv$';
$headers = array(
    	 'Content-Type: application/json',
    	 'Accept: application/json',
		 'Authorization: Basic '. base64_encode(trim($authusername).":".trim($authpassword)),		 
		 'MPS-API-TOKEN: eyJhbGciOiJIUzUxMiJ9.eyJ1c2VybmFtZSI6Ik1QU2FkaUB0Z2wuY29tIiwicGFzc3dvcmQiOiJac2VyZnYkIiwiZXhwaXJlVGltZSI6MS41MTgyNDc0NDY5NTdFMTJ9.iMl1l0zYwfNsxVjZ8q5-xexQPWaYOPPAAQfPamyqt33x-NzvcFIRCGrW8JOC3QFbUBscOrI9IAtR0JJzgJzZWw'
		 
		 );


if (isset ( $_POST ['query'] )) {
	$service_url = TGL_WEBSERVICE_URL . '/rest/autosuggest';
	$curl = curl_init ( $service_url );
	$curl_post_data = json_encode ( array (
			"query" => $_POST ['query'] 
	) );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
	curl_setopt ( $curl, CURLOPT_POST, true );
	curl_setopt ( $curl, CURLOPT_POSTFIELDS, $curl_post_data );
	curl_setopt ( $curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	$curl_response = curl_exec ( $curl );
	curl_close ( $curl );
	$res = json_decode ( $curl_response );
	// print_r($res); exit;
	$results = ( array ) $res;
	$terms = $results ['terms']->content;
	foreach ( $terms as $key => $value ) {
		if ($key % 2 == 1) {
			unset ( $terms [$key] );
		}
	}
	echo json_encode ( array (
			"terms" => $terms 
	) );
	exit ();
} else {
	json_encode ( array (
			"terms" => '' 
	) );
}
if(isset($_REQUEST['refreshusername']) && $_REQUEST['refreshusername'] != ''){
	$service_url = TGL_WEBSERVICE_URL . '/rest/updatelogginstatus';
	$curl = curl_init ( $service_url );
	$curl_post_data = json_encode ( array (
			"userName" => $_REQUEST ['refreshusername'],
	) );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);	
	curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
	curl_setopt ( $curl, CURLOPT_POST, true );
	curl_setopt ( $curl, CURLOPT_POSTFIELDS, $curl_post_data );
	curl_setopt ( $curl, CURLOPT_HTTPHEADER, $headers );
	curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	$curl_response = curl_exec ( $curl );
	curl_close ( $curl );
	$res = json_decode ( $curl_response );

	echo $curl_response;
	exit ();
}
if (isset ( $_REQUEST ['u'] ) && ! empty ( $_REQUEST ['u'] ) && isset ( $_REQUEST ['p'] ) && ! empty ( $_REQUEST ['p'] ) && isset ( $_REQUEST ['cdplogin'] )) {
	$_REQUEST ['userName'] = base64_decode ( $_REQUEST ['u'] );
	$_REQUEST ['password'] = base64_decode ( $_REQUEST ['p'] );
	$service_url = TGL_WEBSERVICE_URL . '/rest/login';
	
	// echo $_REQUEST['userName'].'<br> '.$_REQUEST['password'];
	
	$curl = curl_init ( $service_url );
	$curl_post_data = json_encode ( array (
			"userName" => $_REQUEST ['userName'],
			'password' => $_REQUEST ['password'],
			"isCorp" => "1" 
	) );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);	
	curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
	curl_setopt ( $curl, CURLOPT_POST, true );
	curl_setopt ( $curl, CURLOPT_POSTFIELDS, $curl_post_data );
	curl_setopt ( $curl, CURLOPT_HTTPHEADER, $headers );
	curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	$curl_response = curl_exec ( $curl );
	curl_close ( $curl );
	$res = json_decode ( $curl_response );
	
	// print_r($curl_response);
	
	// $results = (array)$res;
	if($res){
	if (isset ( $res->status ) && ($res->status == 'SUCCESS' || $res->status == 'SUCCESSMIGRATEDCHILD')) {
		// server should keep session data for AT LEAST 1 hour
		ini_set('session.gc_maxlifetime', 4 * 3600);

		// each client should remember their session id for EXACTLY 1 hour
		session_set_cookie_params(4 * 3600);
		@session_start ();
		
		$_SESSION['start'] = time(); // Taking now logged in time.
		// Ending a session in 1 hour from the starting time.
		$_SESSION['expire'] = $_SESSION['start'] + (4 *60 * 60);

		$_SESSION ['cdplogin'] = ( array ) $res;
		
		$sw_url = TGL_WEBSERVICE_URL . '/rest/indsubscription';
		$chs = curl_init ( $sw_url );
		$chs_post_data = json_encode ( array (
				"userName" => $res->email 
		) );
		curl_setopt( $chs, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt ( $chs, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $chs, CURLOPT_POST, true );
		curl_setopt ( $chs, CURLOPT_POSTFIELDS, $chs_post_data );
		curl_setopt ( $chs, CURLOPT_HTTPHEADER, $headers );
		curl_setopt($chs,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
		$chs_response = curl_exec ( $chs );
		$res->sub_curl_info = curl_getinfo($chs);
		curl_close ( $chs );
		$res_sub = json_decode ( $chs_response );
		$res->res_sub = $res_sub;
		$subscription = 'other';
		if($res_sub){
			foreach ( $res_sub as $skey => $svalue ) {
				if ($svalue->composite == 1 && $svalue->subscriptioncategory == 'Individual') {
					$subscription = 'etgcomplete';
				}
			}
		}
		$res->subscription = $subscription;

		$_SESSION ['cdplogin'] ['subscription'] = $subscription;
	} elseif (isset ( $res->status ) && $res->status == 'Login inactive') {
		$res->status = 'You are already logged in, please logout from another machine.';	
	} else {
		$res->status = 'Incorrect username or password. Please try again.';
	}
	}else{
		$res = (object)$res;
		$res->status = 'something went wrong!';
		$res->curl_info = $curl_info;
	}
	$url = TGL_DELIVERY_URL . '/showMyProfile?fromLogin=yes';
	//echo json_encode ( $res );
	// print_r($_SESSION['cdplogin']); exit;
	flush();
	//header ( 'Location:' . $url . '' );
	echo "<script type='text/javascript'>window.top.location='". $url . "';</script>";
	exit ();
}

if (isset ( $_POST ['userName'] ) && ! empty ( $_POST ['userName'] ) && isset ( $_POST ['password'] ) && ! empty ( $_POST ['password'] )) {
	
	$service_url = TGL_WEBSERVICE_URL . '/rest/login';
	$curl = curl_init ( $service_url );
	$curl_post_data = json_encode ( array (
			"userName" => $_POST ['userName'],
			'password' => $_POST ['password'] 
	) );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
	// curl_setopt( $curl, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt ( $curl, CURLOPT_POST, true );
	curl_setopt ( $curl, CURLOPT_POSTFIELDS, $curl_post_data );
	curl_setopt ( $curl, CURLOPT_HTTPHEADER, $headers );
	curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	// curl_setopt($curl, CURLINFO_HEADER_OUT, true);
	 // print_r($headers);
	$curl_response = curl_exec ( $curl );
	$curl_info = curl_getinfo($curl);
	// echo "<pre>"; print_r(curl_getinfo($curl)); exit;
	curl_close ( $curl );
	$res = json_decode ( $curl_response );
	 // print_r($curl_response); exit;
	// $results = (array)$res;
	if($res){
	if (isset ( $res->status ) && ($res->status == 'SUCCESS' || $res->status == 'SUCCESSMIGRATEDCHILD')) {
		// server should keep session data for AT LEAST 2 hour
		ini_set('session.gc_maxlifetime', 4 * 3600);

		// each client should remember their session id for EXACTLY 1 hour
		session_set_cookie_params(4 * 3600);
		@session_start ();
		
		$_SESSION['start'] = time(); // Taking now logged in time.
		// Ending a session in 2 hour from the starting time.
		$_SESSION['expire'] = $_SESSION['start'] + (4 * 60 * 60);

		$_SESSION ['cdplogin'] = ( array ) $res;
		
		$sw_url = TGL_WEBSERVICE_URL . '/rest/indsubscription';
		$chs = curl_init ( $sw_url );
		$chs_post_data = json_encode ( array (
				"userName" => $res->email 
		) );
		curl_setopt( $chs, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt ( $chs, CURLOPT_RETURNTRANSFER, true );
		curl_setopt ( $chs, CURLOPT_POST, true );
		curl_setopt ( $chs, CURLOPT_POSTFIELDS, $chs_post_data );
		curl_setopt ( $chs, CURLOPT_HTTPHEADER, $headers );
		curl_setopt($chs,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
		$chs_response = curl_exec ( $chs );
		$res->sub_curl_info = curl_getinfo($chs);
		curl_close ( $chs );
		$res_sub = json_decode ( $chs_response );
		$res->res_sub = $res_sub;
		$subscription = 'other';
		if($res_sub){
			foreach ( $res_sub as $skey => $svalue ) {
				if ($svalue->composite == 1 && $svalue->subscriptioncategory == 'Individual') {
					$subscription = 'etgcomplete';
				}
			}
		}
		$res->subscription = $subscription;

		$_SESSION ['cdplogin'] ['subscription'] = $subscription;
	} elseif (isset ( $res->status ) && $res->status == 'Login inactive') {
		$res->status = 'You are already logged in, please logout from another machine.';	
	} else {
		$res->status = 'Incorrect username or password. Please try again.';
	}
	}else{
		$res = (object)$res;
		$res->status = 'something went wrong!';
		$res->curl_info = $curl_info;
	}
	
	header ( 'Content-type: application/json' );
	
	echo json_encode ( $res );
	exit ();
}

if (isset ( $_POST ['forgotemail'] ) && ! empty ( $_POST ['forgotemail']) ){
	$service_url = TGL_WEBSERVICE_URL . '/rest/forgetPasswordreset';
	$curl = curl_init ( $service_url );
	$curl_post_data = json_encode ( array (
			"email" => $_POST ['forgotemail'],
	) );
	curl_setopt( $curl, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt ( $curl, CURLOPT_RETURNTRANSFER, true );
	curl_setopt ( $curl, CURLOPT_POST, true );
	curl_setopt ( $curl, CURLOPT_POSTFIELDS, $curl_post_data );
	curl_setopt ( $curl, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($curl,CURLOPT_USERAGENT,'Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.13) Gecko/20080311 Firefox/2.0.0.13');
	$curl_response = curl_exec ( $curl );
	curl_close ( $curl );
	$res = json_decode ( $curl_response );

	echo $curl_response;
	exit ();
}

echo 'error';
exit ();
?>
