<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1/2 cup melted butter</li>
  <li>2/3 cup cocoa powder</li>
  <li>3 cups powdered sugar</li>
  <li>1/3 cup milk</li>
  <li>1 t vanilla</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Stir cocoa into melted butter. Alternate sugar and milk,
  beating to a spreading consistency.</li>
  <li>If needed, add a bit more milk. Stir in vanilla; makes 2 cups.</li>
</ol>

<?php
include('footer.inc');
?>
