<?php

require '../database/database-connection.php';
?>

<?php
// Retrieve user data from the database
$query = "SELECT * FROM user";
$result = $pdo->query($query);

// Display user data using a foreach loop
if ($result && $result->rowCount() > 0) {
    foreach ($result as $row) {
        echo ' <div class="name-container">' . $row['username'] . '</div>';
        echo '<div class="somethingElse" id="user' . $row['user_id'] . '">' . $row['email'] . '</div>';
    }
} else {
    echo '<p>No users found</p>';
}

// Close the database connection
$pdo = null;
?>





<script>
 const nameContainers = document.querySelectorAll('.name-container');
 nameContainers.forEach((container, index) => {
   const user = document.querySelector(`#user${index + 1}`);
   container.addEventListener('click', () => {
     user.classList.toggle('somethingElseNewClass');
   });
 });
</script>







<style>
 body{
  margin:1;
 }

 .name-container{
  display: flex;
  flex-direction: row;
  cursor: pointer;
 }
 svg{
  padding-right: 5px;
 }
 .name-container,.somethingElse{
  width: 92%;
  font-family: helvetica;
  color: #BCBCBC;
  padding: 15px;
  margin:5px;
  border-radius: 3px;
  cursor:pointer;
  overflow: auto;
  font-size:x-large;
  background-color: #181818;
  margin: none;
  width: 100%;
  box-sizing:border-box;
 }
 .name-container:hover,.somethingElse:hover{
  color: #fbfbfb;
  background-color:#252525;
  
 }
 .somethingElse{
  padding-left: 10%;
  display: none;

 }
 .svg{
  transition: transform .3s;
  padding-right: 10px;

 }
 .svgNewClass{
  transform: rotate(90deg) translateX(3px);
  padding-right: 10px;
 }
.somethingElseNewClass{
 width: 92%;
  font-family: helvetica;
  color: #BCBCBC;
  padding: 15px;
  margin:5px;
  border-radius: 3px;
  cursor:pointer;
  overflow: auto;
  font-size:x-large;
  background-color: #181818;
  margin: none;
  width: 100%;
  box-sizing:border-box;
  padding-left: 10%;
  display: block;
}
</style>
