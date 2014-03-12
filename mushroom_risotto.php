<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 Tbsp olive oil</li>
  <li>1 medium/large onion</li>
  <li>2 cups sliced mushrooms</li>
  <li>1 clove garlic</li>
  <li>1.5 cups milk</li>
  <li>1 cup rice</li>
  <li>5 cups chicken broth</li>
  <li>1 tsp butter</li>
  <li>1.25 cups cheese (parmesan and asiago)</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Heat olive oil and saute&#233; onion and garlic.</li>
  <li>Add mushrooms, reduce heat to low, and cook till mushrooms are
  soft.</li>
  <li>Pour milk into skillet, and stir in rice.  Heat to a simmer.</li>
  <li>Stir chicken broth into rice one cup at a time until absorbed.</li>
  <li>When rice is done, add butter and cheese, stir in, and serve hot.</li>
</ol>

<?php
include('footer.inc');
?>
