<?php
  include '../header.php';

if ($_POST) {

  $name = $_POST["name"];

  mysqli_query($mysqli,"INSERT INTO Rooms
    (name,description,category,capacity)
    VALUES
    ('$name', 'description', 'category', 3)");
}
?>
  <h1>Nieuwe kamer</h1>
<?php
  include 'form.php';
  include '../footer.php';
?>
