<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>
<p><strong>Version 1</strong>: Multiple ingredients</p>
<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>4 tomoatoes</li>
  <li>4 cups tomato juice</li>
  <li>~14 leaves basil</li>
  <li>1 cup heavy whipping cream</li>
  <li>1/2 cup butter</li>
  <li>Salt and pepper</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Place tomatoes and juice in pot over medium heat. Simmer for 30
  minutes.</li>
  <li>Pure&#233; the mixture with basil leaves</li>
  <li>Place blend in pot with other ingredients over medium
  heat. Season with salt and pepper. Do not boil.</li>
  <li>Serve when hot.</li>
</ol>

<p><strong>Version 2</strong>: Tomato Sauce Only</p>
<ul>
  <li>2.5 cups tomato sauce</li>
  <li>2 cups water</li>
  <li>~14 leaves basil</li>
  <li>1 cup heavy whipping cream</li>
  <li>1/2 cup butter</li>
  <li>Salt and pepper</li>
</ul>

<ol>
  <!-- Steps as ordered list elements -->
  <li>Pure&#233; basil leaves with enough tomato sauce to be easy (1-2
  cups)</li>
  <li>Place blend in pot with other ingredients over medium
  heat. Season with salt and pepper. Do not boil.</li>
  <li>Serve when hot.</li>
</ol>

<?php
include('footer.inc');
?>
