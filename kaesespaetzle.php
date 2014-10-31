<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>4 cups cooked <a href='http://revealedsingularity.net/recipes/spaetzle.php'>sp&#0228;tzle</a></li>
  <li>1 onion, diced</li>
  <li>1/2 pound grated gruyere or emmenthaler cheese</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Saute onion in 2 T butter until brown. Add sp&#0228;tzle and saute until it too
  is browned.</li>
  <li>Gradually add cheese on low heat until melted and
  incorporated. Serve hot.</li>
</ol>

<?php
include('footer.inc');
?>
