<?php
include_once VIEWS.'/includes/admin/header.php';
?>
        <main>
            <h1><?= $title;?></h1>
        </main>

<article class='large'>

        <h1>Добавить новый товар</h1>
            <form action="#" method="post" id="add_form" enctype="multipart/form-data">

                <p>Название товара</p>
                <input required type="text" name="name">

                <p>Код товара</p>
                <input required type="text" name="code">

                <p>Стоимость</p>
                <input required type="text" name="price">

                <p>Категория</p>
                <input required type="text" name="category">

                <p>Производитель</p>
                <input required type="text" name="brand">

                <p>Детальное описание</p>
                <textarea id="add_description" name="description"></textarea>

                <p>Новинка</p>
                <select name="is_new">
                    <option value="1" selected>Да</option>
                    <option value="0">Нет</option>
                </select>
                <p>Recommended</p>
                <select name="is_recommended">
                    <option value="1" selected>Да</option>
                    <option value="0">Нет</option>
                </select>

                <p>Статус</p>
                <select name="status">
                    <option value="1" selected>Отображается</option>
                    <option value="0">Скрыт</option>
                </select>
                <input type=submit name="submit" value="Сохранить" id="add_btn">
            </form>

<div class="appendix"></div>
</article>

<?php

include_once VIEWS.'/includes/admin/footer.php';
