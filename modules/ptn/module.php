<?php
 
$Module = array( 'name' => 'Template Module - Informatica Trentina SpA' );
$ViewList = array();
 
$ViewList['newsletter'] = array( 'script' => 'newsletter.php',
                                 'functions' => array( 'newsletter' ),
                                 'params' => array(),
                                 'unordered_params' => array() 
                               );

$ViewList['header_image'] = array( 'script' => 'header_image.php',
                                 'functions' => array( 'header_image' ),
                                 'params' => array(),
                                 'unordered_params' => array() 
                               );

$ViewList['force_playlist_import'] = array(
    'script' => 'force_playlist_import.php',
    'params' => array( 'ParentNodeID' ),
    'unordered_params' => array()
);


$ViewList['forceSiteColor'] = array( 
    'script' => 'force_Site_Color.php',
    'params' => array( 'SiteColor' ),
    'unordered_params' => array()
); 

$ViewList['imalive'] = array( 
    'script' => 'imalive.php',
    'params' => array(),
    'unordered_params' => array()
); 



$FunctionList = array();
$FunctionList['newsletter'] = array();
$FunctionList['header_image'] = array();
$FunctionList['forceSiteColor'] = array();
$FunctionList['imalive'] = array();
