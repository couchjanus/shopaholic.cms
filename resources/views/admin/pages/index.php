<?php include_once VIEWS.'/includes/admin/header.php'; ?>
       <main>
            <h1><?= $title;?></h1>

       
<article class='large'>
        <a href="/admin/pages/add" class="add_item"><i class="fa fa-plus fa-2x" aria-hidden="true"></i> Добавить page
        </a>
        <h4>Все Страницы</h4>
        <table>
            <tr>
                <th>ID</th>
                <th>Заголовок</th>
                <th>Slug</th>
                <th colspan="2">Action</th>
            </tr>

            <?php foreach ($data['pages'] as $page):?>
                <tr>
                    <td><?php echo $page['id']?></td>
                    <td><?php echo $page['title']?></td>
                    <td><?php echo $page['slug']?></td>
                    <td><a title="Редактировать" href="/admin/pages/edit/<?php echo $page['id']?>" class="del">
                            <i class="fa fa-pencil-square-o fa-2x" aria-hidden="true"></i>
                        </a></td>
                    <td><a title="Удалить" href="/admin/pages/delete/<?php echo $page['id']?>" class="del">
                            <i class="fa fa-times fa-2x" aria-hidden="true"></i>
                        </a></td>
                </tr>
            <?php endforeach;?>
        </table>
</article>
</main>
<?php
include_once VIEWS.'/includes/admin/footer.php';
