<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 lbs Whole Chunk crab meat (fresh, Maine or Maryland best)</li>
  <li>8 oz unsalted butter (2 sticks)</li>
  <li>4 Tbsp chopped shallots</li>
  <li>2 oz whiskey</li>
  <li>4 oz Reisling</li>
  <li>20 oz tomato sauce</li>
  <li>1 pint heavy cream</li>
  <li>salt</li>
  <li>pepper</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Add butter and shallots into a saute&#0233; pan and saute&#0233; until shallots are translucent.</li>
  <li>Add the crab and saute&#0233; for 2-3 minutes</li>
  <li>Remove the saut&#0233; pan and add the whiskey, then place back on heat to cook off the alcohol. (There may be a flame)</li>
  <li>When the flame stops, add the tomato sauce and cream and salt until it reduces half way and becomes creamy</li>
  <li>Add pepper to taste. It's ready to server.</li>
</ol>

<?php
include('footer.inc');
?>
