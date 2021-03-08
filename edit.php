<?php
  // Step 1: (2 points) Include your connection
  // CREATE YOUR CONNECTION BELOW THIS LINE
  include('_connect.php');
  // Step 2: (8 points) Retrieve the 'supers' row from your database
  // Ensure you use the condition to get only the one specific row
  // CREATE YOUR QUERY LOGIC BELOW THIS LINE
  $result = mysqli_query($conn, "SELECT * FROM supers WHERE id = {$_GET['id']}");
  $row = mysqli_fetch_assoc($result);
  
  // redirect to home if user go to edit directly
  if(empty($_GET['id'])){
    header("Location: index.php");
    exit;       
  }

?>

<!-- Step 3: (2 points) Include your header here -->
<?php include('_header.php') ?>
<!-- Step 4: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<nav>
  <h2>Edit Super</h2>
</nav>
<!-- Step 5: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 6: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->

<!-- Step 7: (10 points) Prepopulate the form with the values from the retrieved row -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->

<div class="container">
  <form action="update.php" method="post" id="form">

    <input type="hidden" name="id" value="<?= $row['id'] ?>">
    <label for="first_name">First Name</label>
    <input name="first_name" value="<?= $row['first_name'] ?>">

    <label for="last_name">Last Name</label>
    <input name="last_name" value="<?= $row['last_name'] ?>">

    <label for="date_of_birth">Birthday</label>
    <input name="date_of_birth" type="date" value="<?= $row['date_of_birth'] ?>">

    <label for="alias">Alias</label>
    <input name="alias" value="<?= $row['alias'] ?>">

    <label for="active">Active</label>
    <input name="active" id="active" value="<?= $row['active'] ?>">

    <label for="hero">Hero</label>
    <input name="hero" id="hero" value="<?= $row['hero'] ?>">

      <button type="submit">Update</button>
  </form>
</div>  

<!-- Step 8: (2 points) Include your footer here -->
<?php include('_footer.php') ?>



<!-- TOTAL POINTS POSSIBLE: 44 -->