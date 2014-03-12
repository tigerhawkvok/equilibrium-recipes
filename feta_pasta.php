<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1-2 packages feta</li>
  <li>1 Tbsp garlic powder</li>
  <li>1 Tbsp onion powder</li>
  <li>1/2 Tbsp oregano</li>
  <li>1/2 tsp seasoned salt</li>
  <li>1/2 tsp paprika</li>
  <li>3 roma tomatoes (diced)</li>
  <li>Equivalent of 1/4-1/2 bunch of cilantro leaves, finely
  chopped</li>
  <li>3 Tbsp olive oil</li>
  <li>1 lb farfalle</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Put water on boil for pasta.</li>
  <li>Mix remaining ingredients while water heats, then put in
  fridge.</li>
  <li>Boil pasta. When done, serve</li>
  <li>Top with cheese topping to taste.</li>
</ol>

<?php
include('footer.inc');
?>
