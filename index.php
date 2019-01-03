<?php include 'includes/header.php';?>
  <div id="content">
    <?php
    if(isset($_GET['about'])) {
      include 'src/about.php';
    }else if(isset($_GET['home'])) {
      include 'src/home.php';
    }else if(isset($_GET['characters'])){
      include 'src/characters.php';
    }else if(isset($_GET['contact'])) {
      include 'src/contact.php';
    }
    ?>
  </div>

<?php include 'includes/footer.php'; ?>