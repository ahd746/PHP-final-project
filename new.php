<!-- Step 1: (2 points) Include your header here -->
<?php include('_header.php') ?>

<!-- Step 2: (1 points) Create a link back to home.php -->
<!-- CREATE YOUR LINK BELOW THIS LINE -->
<nav>
    <a href="index.php">Home</a>
</nav>
<!-- Step 3: (15 points) Create a form that has a field for the following columns -->
<!-- first_name, last_name, date_of_birth,  alias, active -->
<!-- Ensure you don't forget the name attribute for each field -->

<!-- Step 4: (4 points) Add the action and method attributes -->
<!-- Ensure you use the correct HTTP method and point the action at the correct processing page -->
<!-- CREATE YOUR FORM BELOW THIS LINE -->

<div class="container">

    <form action="insert.php" method="post" id="form">

        <label for="first_name">First Name</label>
        <input name="first_name" required>

        <label for="last_name">Last Name</label>
        <input name="last_name" required>

        <label for="date_of_birth">Birthday</label>
        <input name="date_of_birth" type="date" required>

        <label for="alias">Alias</label>
        <input name="alias" required>

        <label for="active">Active</label>
        <input name="active" id="active" placeholder="Enter 1 or 0" required>

        <label for="hero">Hero</label>
        <input name="hero" id="hero" placeholder="Enter 1 or 0" required>
        
        <button type="submit">Create</button>
    </form>
</div>

<!-- Step 5: (2 points) Include your footer here -->
<?php include('_footer.php') ?>


<!-- TOTAL POINTS POSSIBLE: 24 -->