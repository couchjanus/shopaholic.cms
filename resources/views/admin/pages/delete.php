<?php include_once VIEWS.'/includes/admin/header.php'; ?>
        <main>
            <h1><?= $title;?></h1>
        </main>
<article class='large'>
        <h1>Удалить page #<?php echo $data['id']; ?></h1>
        <p>Вы действительно хотите удалить эту page?</p>
        <form method="post">
            <input type="submit" name="submit" value="Удалить" />
        </form>
</article>
<?php
include_once VIEWS.'/includes/admin/footer.php';
