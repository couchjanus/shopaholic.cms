<?php
include_once VIEWS.'/includes/header.php';
?>
 <div class="wrapper">
  <main>
    <div class="breadcrumb"><?= $breadcrumb;?></div>
        <h1><?= $title;?></h1>

                <?php if (isset($data['errors']) && is_array($data['errors'])):?>
                    <ul class="errors">
                        <?php foreach($data['errors'] as $error):?>
                            <li> - <?php echo $error;?></li>
                        <?php endforeach;?>
                    </ul>
                <?php endif;?>

                <?php if ($data['success'] == true):?>
                    <h3><?= $data['num_rows']?></h3>
                <ul>
                    <?php foreach($posts as $singleItem): ?>
                    <li>
                        <h3><?php echo $singleItem['title']?></h3>
                        <p><?php echo $singleItem['formated_date'];?></p>
                        <a href="/post/<?php echo $singleItem['id']; ?>">Read More</a>
                    </li>
                    <?php endforeach; ?>
                </ul> 
                <?php endif;?>
  </main>
</div>
       

<?php

include_once VIEWS.'/includes/footer.php';