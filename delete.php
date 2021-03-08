<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('_connect.php');

    // redirect to home if user go to delete directly
    if(empty($_GET['id'])){
      header("Location: index.php");
      exit;       
    }

  // Step 2: (20 points) Delete the existing 'supers' row from the database
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
    $sql = "DELETE FROM supers WHERE id = {$_GET['id']}";

  // Step 3: (16 points) Perform basic error handling and redirect the user with a success or error message
  // Ensure you store the messages into the $_SESSION
  // Ensure you exit after your redirect
  // CREATE YOUR ERROR HANDLING BELOW THIS LINE
  
  $resp = mysqli_query($conn,$sql);
  session_start();
  
  if ($resp){
        
    $_SESSION['notification'] = "The new super deleted successfully";
    
  }else{
    $_SESSION['notification'] = "There was an error :" . mysqli_error($conn);
  }
  
  header("Location: notification.php");
  exit; 
  
  // TOTAL POINTS POSSIBLE: 38
?>