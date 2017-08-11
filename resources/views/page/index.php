<?php include_once VIEWS.'/includes/header.php'; ?>
<div class="wrapper">
  <main>
    <div class="breadcrumb"><?= $breadcrumb;?></div>
            <h1 class="heading-a u-align-center"><?= $page['title'];?></h1>
            <p>
              <div>
                  <?= $page['article'];?>
              </div>
            </p>
  </main>
</div>
<?php
include_once VIEWS.'/includes/footer.php';
            