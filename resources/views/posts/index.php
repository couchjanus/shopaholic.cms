<?php
include_once VIEWS.'/includes/header.php';
?>
<div class="wrapper">
  <main>
     <div class="breadcrumb"><?= $breadcrumb;?></div>

              <h1 class="heading-a u-align-center"><?= $title;?></h1>
                <ul>
                    <?php foreach($posts as $singleItem): ?>
                    <li>
                        <h2 class="sub-heading-a u-align-center"><?php echo $singleItem['title']?></h3>
                        <p  class="body-a u-align-center"><?php echo $singleItem['formated_date'];?></p>
                        <a href="/post/<?php echo $singleItem['id']; ?>">Read More</a>
                    </li>
                    <?php endforeach; ?>
               </ul> <!-- gallery-items -->
  </main>
</div>

<?php

include_once VIEWS.'/includes/footer.php';