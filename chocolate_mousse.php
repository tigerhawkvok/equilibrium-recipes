<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1/4 pound chopped bittersweet chocolate</li>
  <li>4 eggs, separated</li>
<li>1 T sugar</li>
<li>3/4 cup heavy cream</li>
<li>salt</li>
<li>2 t kirshwasser (if wanted)</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Melt chocolate in pan over water. Stir until smooth, allowing
  to cool slightly. Mix in egg yolks (+kirshwasser).</li>
  <li>Whip heavy cream to stiff peaks without becoming grainy.</li>
<li>In separate bowl, whip egg whites with salt until peaks
  form. Sprinkle in sugar and continue whipping.</li>
<li>Fold in chocolate mixture, then fold in whipped cream until
  incorporated. Spoon into dessert cups and chill 1 hour.</li>
</ol>

<?php
include('footer.inc');
?>
