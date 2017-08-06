<?php
include_once VIEWS.'/includes/header.php';
?>
<div class="wrapper">
  <main>
    <div class="breadcrumb"><?= $breadcrumb;?></div>
              
            <h1 class="heading-a u-align-center"><?= $post['title'];?></h1>
            <p>
              <div>
                  <?= $post['content'];?>
              </div>
              Create At: <?= $post['formated_date'];?>
            </p>
  </main>
</div>

<?php
include_once VIEWS.'/includes/footer.php';
            