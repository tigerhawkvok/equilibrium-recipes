<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 package chocolate cake mix</li>
  <li>1 small package vanilla instant pudding</li>
  <li>4 eggs</li>
  <li>1 cup sour cream</li>
  <li>1/2 cup vegetable oil</li>
  <li>1/4 cup Kahlua</li>
  <li>1 small package semisweet chocolate chips</li>
  <li>Powdered sugar</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Preheat oven to 350.</li>
  <li>Mix together cake mix and pudding. Add sour cream, eggs, and
  oil. Mix for 5 minutes.</li>
  <li>Add chocolate chips and Kahlua; mix. Pour into greased bundt pan and
  bake 55 minutes.</li>
  <li>Remove from oven and pan. Sprinkle with powdered sugar.</li>
</ol>

<?php
include('footer.inc');
?>
