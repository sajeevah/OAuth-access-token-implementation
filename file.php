<?php 
    include_once("header.php");
?>

<div class="container">
  <div class="row" style="align-items: center;">
  <div class="col-md-4 col-md-offset-4">
    <form action="upload.php" method="post">
        <input type="file" class="form-control-file" name="uploadfile">
        Click this button to upload a file<button type="submit" class="btn btn-primary">Upload</button>
    </form>
    </div>
  </div>
</div>

<?php
    include_once("footer.php");
?>
