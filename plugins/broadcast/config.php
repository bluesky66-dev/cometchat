<?php

include_once(dirname(dirname(dirname(__FILE__))).DIRECTORY_SEPARATOR.'config.php');

$camWidth = '450';
$camHeight = '335';

$webRTCServer =  setConfigValue('webRTCServer','r.chatforyoursite.com');
//$webRTCPHPServer = setConfigValue('webRTCPHPServer','s.chatforyoursite.com');
$webRTCPHPServer = $_SERVER['HTTP_HOST'].BASE_URL."transports/cometserviceselfhosted";

if(CS_TEXTCHAT_SERVER!=''&& TRANSPORT == 'cometserviceselfhosted' && USE_COMET == '1'){
	$webRTCServer = parse_url(CS_TEXTCHAT_SERVER, PHP_URL_HOST);
	$webRTCPHPServer = $_SERVER['HTTP_HOST'].BASE_URL."transports/cometserviceselfhosted";
}
