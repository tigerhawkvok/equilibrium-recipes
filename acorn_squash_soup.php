<?php
// Save this file as name_of_recipe.php
$title=ucwords(str_replace("_"," ",basename($_SERVER["REQUEST_URI"],'.php')));
include('header.inc');

?>

<ul id='ingredients'>
  <!-- Ingredients in unordered list -->
  <li>1 small onion, diced</li>
  <li>1/4 cup chopped celery</li>
  <li>2 T butter</li>
  <li>2 T flour</li>
  <li>1 t chicken bouillon</li>
  <li>1/2 t dill</li>
  <li>1/4 t curry powder</li>
  <li>dash cayenne pepper</li>
  <li>2 cups chicken broth</li>
  <li> 1 (12 oz) can evaporated milk</li>
  <li>3 cups mashed cooked acorn squash</li>
  <li>salt, pepper</li>
  <li>5 strips bacon for garnish (if desired)</li>
</ul>

<ol id='process'>
  <!-- Steps as ordered list elements -->
  <li>Cut squash in half, scoop out stringy flesh, wrap each half in
  foil and bake at 400 for one hour. Scoop out flesh and set aside.</li>
  <li>In saucepan, saute onion and celery in butter. Stir in flour,
  bouillon, dill, curry and cayenne until blended. Gradually add
  broth and milk.</li>
  <li>Bring to boil, cook and stir for 2 minutes. Add squash, salt,
  and pepper; heat through.</li>
  <li>In blender, process soup in batches until smooth. Pour into
  bowls and garnish with bacon.</li>
</ol>

<?php
include('footer.inc');
?>
