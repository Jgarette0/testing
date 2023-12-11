<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>Dynamic Content Update</title>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
 <div id="content" contenteditable="true">
  devel
  <?php
        $file = 'content.txt';
        if (file_exists($file)) {
            echo file_get_contents($file);
        }
        ?>
 </div>

 <script>
 let currentContent = $('#content').html();

 // Function to save content via AJAX
 function saveContent(newContent) {
  $.ajax({
   url: 'saveContent.php',
   type: 'POST',
   data: {
    content: newContent
   },
   success: function(response) {
    console.log('Content saved successfully!');
   }
  });
 }

 // Check for changes in content and save
 $('#content').on('input', function() {
  let newContent = $(this).html();
  if (newContent !== currentContent) {
   saveContent(newContent);
   currentContent = newContent;
  }
 });

 // Save content when Ctrl + S is pressed
 $(document).keydown(function(event) {
  if ((event.ctrlKey || event.metaKey) && event.keyCode === 83) { // Check for Ctrl + S
   event.preventDefault(); // Prevent default browser save action
   saveContent($('#content').html());
  }
 });
 </script>
</body>

</html>