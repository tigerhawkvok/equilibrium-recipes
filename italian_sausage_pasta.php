<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 package sausages</li>
  <li>2 tomatoes</li>
  <li>Basil (to taste)</li>
  <li>1 Tbsp olive oil</li>
  <li>1 lb pasta</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Put pasta on boil.</li>
  <li>Slice the sausages, and brown them in a skillet with olive
  oil</li>
  <li>Add tomatoes to skillet and chopped basil leaves.</li>
  <li>Cook for ~5 minutes</li>
  <li>Salt and pepper to taste, then serve over pasta.</li>
</ol>

<?php
include('footer.inc');
?>
