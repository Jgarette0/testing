<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <title>Submit Form</title>
 <style>
 /* CSS to remove border and underline when input is empty */
 input[type="text"]:focus {
  outline: none;
  border: none;
  border-bottom: 1px solid black;
  /* Add underline on focus */
 }

 input[type="text"]:not(:placeholder-shown) {
  border: none;
  border-bottom: 1px solid black;
  /* Add underline when text is present */
 }
 </style>
</head>

<body>
 <?php include 'UIDContainer.php'; ?>
 <input type="text" name="outputField" value="<?php echo htmlspecialchars($output); ?>" placeholder="Enter value here">
 <?php if (!empty($output)) : ?>
 <button onclick="openModal()">Open Modal</button>
 <?php endif; ?>

 <!-- Modal - Replace this with your actual modal code -->
 <div id="myModal" style="display: none;">
  This is a modal. Replace this with your modal content.
 </div>

 <script>
 function openModal() {
  document.getElementById('myModal').style.display = 'block';
 }
 </script>
</body>

</html>