<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 8oz package of cream cheese</li>
  <li>1.5 cups (3 sticks) butter</li>
  <li>3 cups white sugar</li>
  <li>6 eggs</li>
  <li>1 tsp vanilla extract</li>
  <li>2 tsp almond extract</li>
  <li>3 cups flour</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Preheat oven to 325 F and grease a 10 in tube pan or 9x13 pan.</li>
  <li>Allow all ingredients to reach room temperature. You will not get a smooth consistency if you do not, and the next step will be much more difficult.</li>
  <li>In a large bowl, cream butter and cream cheese until smooth.</li>
  <li>Add sugar gradually and beat until fluffy</li>
  <li>Add eggs in two at a time, beating well after each addition.</li>
  <li>Add vanilla and almond extacts and mix in</li>
  <li>Add flour and mix in</li>
  <li>Pour into pan and put into oven. Check for done-ness at 1 hour; it may take up to 1 hr and 20 min to finish.</li>
</ol>

<?php
include('footer.inc');
?>
