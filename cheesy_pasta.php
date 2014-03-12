<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>2 T butter</li>
  <li>2 T flour</li>
  <li>1 cup milk or half-and-half</li>
  <li>2 cups shredded cheddar cheese</li>
  <li>1/3 cup white wine</li>
  <li>dash Worcestershire sauce</li>
  <li>pepper, mustard powder, paprika to taste</li>
  <li>1 pound pasta</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Melt butter on medium-low heat (keep this temp throughout!). Add flour to form roux, cook
  until golden.</li>
  <li>Gradually add milk until absorbed and creamy. Gradually add
  shredded cheese until melted.</li>
  <li>Stir in wine, Worcestershire sauce, and spices. Pour over
  cooked pasta and serve.</li>
</ol>

<?php
include('footer.inc');
?>
