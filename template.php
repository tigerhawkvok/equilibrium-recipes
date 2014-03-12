<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 Ingredient 1</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Step 1</li>
</ol>

<?php
include('footer.inc');
?>
