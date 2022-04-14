<?php
require('wp-config.php');

$api_key = '8e669cf47c';
$private_key = 'fc83ec552485789';
 
$route = 'forms/1/entries';

function calculate_signature( $string, $private_key ) {
    $hash = hash_hmac( 'sha1', $string, $private_key, true );
    $sig = rawurlencode( base64_encode( $hash ) );
    return $sig;
}

$expires = strtotime( '+60 mins' );
$string_to_sign = sprintf( '%s:%s:%s:%s', $api_key, 'POST', $route, $expires );
$sig = calculate_signature( $string_to_sign, $private_key );
$url = get_site_url() . '/gravityformsapi/' . $route . '?api_key=' . $api_key . '&signature=' . $sig . '&expires=' . $expires;

$entries = array(
    array(
        'date_created' => date('Y-m-d H:i:s'),
        'is_starred'   => 0,
        'is_read'      => 0,
        'ip'           => '::1',
        'source_url'   => $_GET['URL'],
        'currency'     => 'USD',
        'created_by'   => 1,
        'user_agent'   => 'Mozilla/5.0 (Windows NT 6.1; WOW64; rv:38.0) Gecko/20100101 Firefox/38.0',
        'status'       => 'active',
        '1'          => $_POST['name'],
        '3'          => $_POST['insta'],
        '4'          => $_POST['email'],
        '6'          => $_POST['comments'],
        '8'          => $_POST['SourceURL'],
       
    )
);

$entry_json = json_encode( $entries );
$response = wp_remote_request( $url , array( 'method' => 'POST', 'body' => $entry_json, 'timeout' => 25 ) );
if ( (wp_remote_retrieve_response_code( $response ) != 200) || (  wp_remote_retrieve_body( $response ) =="" ) ){
    die( 'There was an error attempting to access the API.' );
    
}

$body = json_decode( wp_remote_retrieve_body( $response ), true );





if( $body['status'] > 202 ){
    $error = $body['response'];
 
        //entry update failed, get error information, error could just be a string
    if ( is_array( $error )){
        $error_code     = $error['code'];
        $error_message  = $error['message'];
        $error_data     = isset( $error['data'] ) ? $error['data'] : '';
        $status     = "Code: {$error_code}. Message: {$error_message}. Data: {$error_data}.";
    }
    else{
        $status = $error;
    }
    die( "Could not post entries. {$status}" );
}
else
{
    
}

header('Location: ./thank-you/');

?>