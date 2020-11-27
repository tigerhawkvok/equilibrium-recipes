<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 Tbsp yeast</li>
  <li>3/4 Tbsp salt (~ 1/2 Tbsp + 1/2 tsp)</li>
  <li>2 Tbsp olive oil</li>
  <li>2 Tbsp sugar</li>
  <li>2 cups warm water (~49 C)</li>
  <li>~4-5 cups flour</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Mix yeast, salt, olive oil, water, and sugar. Let stand for 5m.</li>
  <li>Add the flour, and keep adding until dough pulls away from the sides.</li>
  <li>Let rise 1-3 hours, covered</li>
  <li>Pinch off buns over a well-floured surface, tucking soft dough into the center.</li>
  <li>Let stand on baking sheet + parchment until you don't want to wait anymore (1-5h)</li>
  <li>Bake at 400 F for 12 minutes until top is brown and they sound hollow</li>
</ol>

<?php
include('footer.inc');
?>
