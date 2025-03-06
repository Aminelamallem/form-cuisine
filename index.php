<?php
include_once("components/header.php");


if (isset($_POST["titre"])&&isset($_POST["description"])&&isset($_POST["difficultes"])&& isset($_POST["calorie"])&&isset($_POST["image"])){
$titre = $_POST['titre'];
$description = $_POST['description'];
$difficulte = $_POST['difficultes'];
$calorie = $_POST['calorie'];
$image = $_POST['image'];}

?>


<form action="" method="post" class="  text-light">
    <div class="container bg-dark">
<div class="mb-3">
  <label for="titre" class="form-label">Titre Recette</label>
  <input type="text" class="form-control" name="titre" id="titre" placeholder="Nom Recette">
</div>
<div class="mb-3">
  <label for="description" class="form-label">Description</label>
  <textarea class="form-control" name="description" id="description" placeholder="Description" rows="3"></textarea>
</div>
<div class="mb-3">
<select class="form-select" name="difficultes" aria-label="Default select example">
  <option selected>Niveau de difficulter</option>
  <option value="1">Facile</option>
  <option value="2">Moyen</option>
  <option value="3">Difficile</option>
</select>
</div>
<div class="mb-3">
  <label for="calorie" class="form-label">Calorie</label>
  <input type="number" class="form-control" name="calorie"  id="calorie" placeholder="Nombre de calorie">
</div>
<div class="mb-3">
  <label for="imgae" class="form-label">Image</label>
  <input type="text" class="form-control" name="image" id="image" placeholder="Lien de l'image">
</div>
<br><br>
<button class="btn btn-danger m-3"  type="submit">valider</button>
</div>
</form>

<?php   
include_once("components/footer.php")
?>