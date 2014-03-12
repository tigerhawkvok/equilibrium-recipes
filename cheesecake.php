<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>15 graham crackers</li>
  <li>2 Tbsp butter</li>
  <li>4x8oz packs cream cheese</li>
  <li>1.5 cups sugar</li>
  <li>3/4 cups milk (whole)</li>
  <li>4 eggs</li>
  <li>1 cup sour cream</li>
  <li>1 Tbsp vanilla extract</li>
  <li>1/4 cup white flour</li>
  <li>1 tsp cream of tartar</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Allow all ingredients to reach room temperature. This is very
  important!</li>
  <li>Grease the sides of a springform pan with butter</li>
  <li>Mix crushed graham crackers and butter and press into the bottom
  of a springform pan to form a crust.</li>
  <li>Preheat the oven to 350<sup>o</sup>F / 175<sup>o</sup>C</li>
  <li>Mix cream cheese and sugar BY HAND until smooth. Do not
  overmix.</li>
  <li>Blend in milk, then mix in the eggs one at a time until
  incorporated. Mix in sour cream, vanilla, flour, and cream of tartar
  until smooth, all BY HAND. Pour into crust.</li>
  <li>Bake in preheated oven for one hour.</li>
  <li>Fill a cookie sheet or shallow pan with some boiling water and
  place it on a shelf under the cake in the oven, then turn off the
  oven. Leave alone in closed oven for 5-6 hours.</li>
  <li>Chill in refrigerator until serving.</li>
</ol>

<?php
include('footer.inc');
?>
