<?php

namespace Drupal\hello_world\Controller;

include 'Displayer.php';

function requester($data)
{
  if($data == null){
    $response = file_get_contents('http://localhost/dataAPI/actions');
    $parsed_json = json_decode($response, true);
    $parsed_json = $parsed_json['records'];
    display('experience', $parsed_json );
  }
  else{

  }
    $response = file_get_contents('http://localhost/dataAPI/Communication?q=' . t($data));
    $parsed_json = json_decode($response, true);
    $parsed_json = $parsed_json['records'];
    display('experience', $parsed_json );

}
