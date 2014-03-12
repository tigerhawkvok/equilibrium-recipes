<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>4 cups cooked cut green beans</li>
  <li>1 (10 3/4 oz) can cream of mushroom soup</li>
  <li>1/2 cup milk</li>
  <li>1 t soy sauce</li>
  <li>1 1/3 cup fried onions</li>
  <li>Salt and pepper</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Preheat oven to 350. Mix soup, milk, soy sauce, pepper, 2/3
  cups onions, and beans.</li>
  <li>Pour into 1 1/2 quart casserole dish. Bake 25 minutes.</li>
  <li>Stir and top with remaining onions. Bake 5 minutes more.</li>
</ol>

<?php
include('footer.inc');
?>
