<?php
  
  include '_header.php';
  
  // First we make a request to the API for the current user's person and save the response
  $response = $client->familytree()->readPersonForCurrentUser();
  
  // Check for errors
  if($response->hasError()){
    handleErrors($response);
  } 
  
  // No errors
  else {
  
    // Then we get the person from the response
    $person = $response->getPerson();
    
    // Display the person's information
    echo '<pre>',print_r($person, true),'</pre>';
  
  }
  
  include '_footer.php';