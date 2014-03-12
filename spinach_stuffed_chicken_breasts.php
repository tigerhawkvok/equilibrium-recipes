<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>2 chicken breasts (skinless, boneless)</li>
  <li>1/4 cup mayonnaise</li>
  <li>1/4 cup crumbled feta</li>
  <li>1 clove garlic, chopped</li>
  <li>10 oz chopped spinach</li>
  <li>2 slices bacon</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>In a bowl, mix mayonnaise, spinach, feta, , and garlic until
  well blended. Set aside.</li>
  <li>Carefully <a href='http://www.goodhousekeeping.com/food/cooking/butterfly-chicken-breast'>butterfly</a>
  chicken breasts. Do <strong>not</strong> cut all the way through.</li>
  <li>Wrap each with a peice of bacon, and secure with a
  toothpick</li>
  <li>Place in and cover a shallow baking dish, and bake at 375 F for
  1 hour</li>
</ol>

<?php
include('footer.inc');
?>
