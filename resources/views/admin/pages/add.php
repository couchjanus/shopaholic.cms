<?php include_once VIEWS.'/includes/admin/header.php'; ?>
<script src="/js/tinymce/tinymce.min.js"></script>
<script>
        tinymce.init({
            selector: "textarea",
            plugins: [
                "advlist autolink lists link image charmap print preview anchor",
                "searchreplace visualblocks code fullscreen",
                "insertdatetime media table contextmenu paste"
            ],
            toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image"
        });
</script>

<main>
        <h1><?= $title;?></h1>
        <h1>Добавить новую page</h1>
        <form action='' method='post'>
            <p><label>Заголовок</label><br />
            <input type='text' name='title' value=''></p>
            <p><label>Контент</label><br />
            <textarea name='content' cols='60' rows='10'></textarea></p>
            <p><label>description</label><br />
            <input type='text' name='description' value=''></p>
            <p><label>tags</label><br />
            <input type='text' name='tags' value=''></p>
            <p><input type='submit' name='submit' value='Сохранить'></p>
        </form>
</main>

<?php
include_once VIEWS.'/includes/admin/footer.php';
