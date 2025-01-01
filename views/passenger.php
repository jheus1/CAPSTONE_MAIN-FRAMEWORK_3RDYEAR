<!DOCTYPE html>
<html>
   <?php include '../includes/head_links.php'; ?>
   <?php include '../includes/topbar1.php'; ?>
   <!--BODY -->
   <body>
      <div class="container">
      <div class="row">
      <!-- First row -->
      <div class="col-md-3">
      <?php include '../includes/col1.php'; ?>
      </div>
      <!-- Tab Content/Second Row-->
      <div class="col-md-6">
         <div class="tab-content" id="v-pills-tabContent">
         <?php include '../includes/col2.php'; ?>
         <?php include '../includes/profile.php'; ?>
         <?php include '../includes/message.php'; ?>
         <?php include '../includes/settings.php'; ?>
         <?php include '../includes/bookmark.php'; ?>
         </div>
      </div>
      <!-- Third row -->
      <div class="col-md-3">
      <?php include './includes/col3.php'; ?>
      </div>
   </body>
   <?php include '../includes/library1.php'; ?>
   <?php include '../includes/library2.php'; ?>
</html>