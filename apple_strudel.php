<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>4 green apples - peeled, cored, sliced</li>
  <li>1 cup brown sugar</li>
  <li>1 cup golden raisins</li>
  <li>2 Tbsp dark or spiced rum</li>
  <li>1/2 cup chopped semisweet chocolate chips</li>
  <li></li>
  <li>1 sheet frozen puff pastry</li>
  <li>1 egg</li>
  <li>2 tsp sugar</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Thaw frozen pastry puff in refrigerator</li>
  <li>Preheat oven to 400F, and prepare a baking sheet with parchment paper or tin foil.  </li>
  <li>Make the filling, mix well</li>
  <li>Pour way more than you think you need onto the frozen pastry puff.  </li>
  <li>Fold pastry puff just so that the ends meet together in the middle (DO NOT roll like a burrito - just make the ends meet - it's okay if it's not perfect)</li>
  <li>Whisk eggs and sugar in bowl, brush onto the pastry as much as you can.  </li>
  <li>Bake  25-30 minutes.  Top with confectioner's sugar if desired.</li>
</ol>

<?php
include('footer.inc');
?>
