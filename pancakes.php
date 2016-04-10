<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1.5 cups flour</li>
  <li>3.5 tsp baking powder</li>
  <li>1 tsp salt</li>
  <li>0.5 tsp sugar</li>
  <li>05 tsp honey</li>
  <li>0.75 cup milk</li>
  <li>0.5 cup cream</li>
  <li>1 egg</li>
  <li>3 tbsp butter (melted)</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Whisk together dry ingredients</li>
  <li>Melt butter, and mix it with the rest of the wet ingredients</li>
  <li>Blend ingredients together until smooth</li>
  <li>Using butter or oil, cook on pan over medium heat. Too high heat will burn the outside and leave the inside raw.</li>
</ol>

<?php
include('footer.inc');
?>
