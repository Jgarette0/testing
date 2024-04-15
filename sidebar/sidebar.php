<!-- Controls the functionality of the sidebar toggle icon -->
<!-- This section manages the behavior of the icon responsible for toggling the visibility of the sidebar. -->
<div class="icon">
 <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
  stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="svg">
  <path d="m9 18 6-6-6-6" />
 </svg>
</div>

<div class="aside">
 <div class="topAside">
 </div>
 <div class="border"></div>
 <div class="asideContains">


  <?php

$host = 'localhost';
$dbname = 'appsdev';
$dbusername = 'root';
$dbpassword = 'jilian';

try{
$pdo = new PDO("mysql:host=$host;dbname=$dbname", $dbusername, $dbpassword);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
  die("Connection failed: ".$e->getMessage());
}



$query = "SELECT * FROM classrooms;";



try {
    $stmt = $pdo->prepare($query);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    foreach ($results as $row) {
        echo '<div class="teacherDetail">';
        echo '<div class="teacherName">';
        echo '<div>' . htmlspecialchars($row["classroom_name"]) . '</div>';
        echo '</div>';
        echo '</div>';
    }
} catch (PDOException $e) {
    // Handle any database errors
    echo "Error: " . $e->getMessage();
}

$pdo = null;
$stmt = null;
?>


  <!-- echo '<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor"
stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="nameSvg">
<path d="m9 18 6-6-6-6" />
</svg>'; -->

 </div>
 <div class="border"></div>
 <div class="bottomAside"></div>
</div>