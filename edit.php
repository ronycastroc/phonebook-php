<?php
  include_once("templates/header.php");
?>
<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Edit Contact</h1>
  <form id="create-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
    <input type="hidden" name="type" value="edit">
    <input type="hidden" name="id" value="<?= $contact["id"] ?>">
    <div class="mb-3">
      <label for="exampleInputText1" class="form-label">Contact name:</label>
      <input type="text" class="form-control" id="exampleInputText1" name="name" value="<?= $contact["name"] ?>" placeholder="Enter the name" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputText1" class="form-label">Contact phone:</label>
      <input type="text" class="form-control" id="exampleInputText1" name="phone" value="<?= $contact["phone"] ?>" placeholder="Enter the phone" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Observations:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="observations" placeholder="Insert the remarks" rows="3"><?= $contact["observations"] ?></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
  </form>
</div>
<?php
  include_once("templates/footer.php");
?>