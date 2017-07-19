<?php
include_once VIEWS.'/includes/header.php';
?>
<div class="wrapper">
  <main>

            <h1><?= $title;?></h1>
<?php if($posts): ?>
            <h2><?= $posts['title'];?></h2>
            <div>
              <?= $posts['content'];?>
            </div>
            <p>
              <?= $posts['create_at'];?>
            </p>
<?php endif ?>
  </main>
</div>

<?php
include_once VIEWS.'/includes/footer.php';
