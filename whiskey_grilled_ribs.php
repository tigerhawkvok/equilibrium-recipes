<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>2 (2 pound) slabs baby back pork ribs</li>
  <li>Salt, Pepper, Chili Powder</li></ul><br />
<ul>
<li>2 1/4 T Vegetable Oil</li>
<li>1/2 cup Minced Onions</li>
<li>1 1/2 cups Water</li>
<li>1/2 cup Tomato Paste</li>
<li>1/2 cup White Vinegar</li>
<li>1/2 cup Brown Sugar</li>
<li>2 1/2 T Honey</li>
<li>2 T Worcestershire Sauce</li>
<li>2 t Salt</li>
<li>1/4 t Black Pepper</li>
<li>1 1/4 t Liquid Smoke</li>
<li>2 t Whiskey</li>
<li>2 t Onion Powder</li>
<li>1 T Dark Molasses</li>
<li>1/2 t Ground Red Chili Pepper</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Pregeat oven to 300. Cut each full rack in half to make 4 half
  racks. Rub with salt, pepper, and chili powder, wrap in foil, and
  bake 2 1/2 hours.</li>
<li>Meanwhile, heat oil in saucepan, Saute onions 5 minutes, then
  stir in all other ingredients. Bring to boil, the reduce heat and
  simmer 1 1/4 hours uncovered (until sauce thickens)</li>
<li>Remove ribs from oven, let stand 10 minutes. Remove from foil,
  and place on hot grill for 3-4 minutes per side. Brush with sauce
  as they grill.</li>
</ol>

<p>Bonus Challenge: bake with the sauce?</p>

<?php
include('footer.inc');
?>
