<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>
<p><strong>Note:</strong> This recipe is calibrated for two people.</p>
<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>
    Primary food substrate. Beef, tofu, chicken, and shrimp have all been tested with this recipe.
  </li>
  <li>8 medium garlic cloves</li>
  <li>1/2 Tbsp pepper (white or Schezuan preferred)</li>
  <li>4 Tbsp fish sauce</li>
  <li>2 Tbsp weak veggie stock (too strong will render the dish very salty)</li>
  <li>3 Tbsp peanut oil</li>
  <li>1 tsp sugar</li>
  <li>Need ready: water</li>
  <li>Need ready: Cilantro (garnish)</li>
  <li>Prepare: rice</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Coat bottom of pan with oil</li>
  <li>Finely dice all garlic </li>
  <li>Mix pepper, stock, and sugar in bowl </li>
  <li>Coat the primary food ingredient in the mixture </li>
  <li>Heat the pan very hot </li>
  <li>Saute&#0233; the garlic until very lightly browned. Letting this step go too long will burn the garlic in the end dish. </li>
  <li>Add the coated food and stir. </li>
  <li>Add the fish sauce and stir. </li>
  <li>At this point,the dish will tend to get dry and sticky. Keep adding water until the food finishes cooking, maintaining the consistency of the sauce. </li>
  <li>Serve over rice and garnish with cilantro. </li>
</ol>

<?php
include('footer.inc');
?>
