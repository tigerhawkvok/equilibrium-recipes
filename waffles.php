<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>2 cups flour</li>
  <li>1 Tbsp sugar</li>
  <li>1 Tbsp baking powder</li>
  <li>0.25 tsp salt</li>
  <li>1.75 cups milk</li>
  <li>2 eggs</li>
  <li>2 Tbsp canola oil</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Whisk dry ingredients together</li>
  <li>Whisk wet ingredients together in a seperate bowl</li>
  <li>Whisk wet into dry ingredients until well mixed.</li>
  <li>Pour 1 cup of batter at a time into waffle iron, then flip. <strong>Bake 4 minutes</strong></li>
</ol>

<?php
include('footer.inc');
?>
