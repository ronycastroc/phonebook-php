<?php
  include_once("templates/header.php");
?>
<div class="container">
  <?php include_once("templates/backbtn.html"); ?>
  <h1 id="main-title">Add Contact</h1>
  <form id="create-form" action="<?= $BASE_URL ?>/config/process.php" method="POST">
    <input type="hidden" name="type" value="create">
    <div class="mb-3">
      <label for="exampleInputText1" class="form-label">Contact name:</label>
      <input type="text" class="form-control" id="exampleInputText1" name="name" placeholder="Enter the name" required>
    </div>
    <div class="mb-3">
      <label for="exampleInputText1" class="form-label">Contact phone:</label>
      <input type="text" class="form-control" id="exampleInputText1" name="phone" placeholder="Enter the phone" required>
    </div>
    <div class="mb-3">
      <label for="exampleFormControlTextarea1" class="form-label">Observations:</label>
      <textarea class="form-control" id="exampleFormControlTextarea1" name="observations" placeholder="Insert the remarks" rows="3"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Done</button>
  </form>
</div>
<?php
  include_once("templates/footer.php");
?>