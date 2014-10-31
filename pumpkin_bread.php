<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>15 oz pumpkin pure&eacute;</li>
  <li>4 eggs </li>
  <li>1 cup canola oil </li>
  <li>2/3 cup water </li>
  <li>3 cups white sugar </li>
  <li>3.5 cups flour </li>
  <li>2 tsp baking soda </li>
  <li>1.5 tsp salt </li>
  <li>1 tsp ground cinnamon </li>
  <li>1 tsp ground nutmeg </li>
  <li>1/2 tsp ground cloves </li>
  <li>1/2 tsp ground ginger </li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Preheat the oven to 350 and prepare 3 7x3 loaf pans</li>
  <li>In a large bowl, mix pure&eacute;, eggs, oil, water, and sugar until well blended </li>
  <li>In a seperate bowl, whisk together flour, baking soda, salt, and the spices. </li>
  <li>Stir the dry ingredients into the pumpkin mixture until well blended. </li>
  <li>Pour into prepared pans and bake for 50 minutes. </li>
</ol>

<?php
include('footer.inc');
?>
