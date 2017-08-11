<?php include_once VIEWS.'/includes/admin/header.php'; ?>
<script src="/js/tinymce/tinymce.min.js"></script>
    <script>
    tinymce.init({
        selector: "textarea",theme: "modern",width: 680,height: 300,
        plugins: [
             "advlist autolink link image lists charmap print preview hr anchor pagebreak",
             "searchreplace wordcount visualblocks visualchars insertdatetime media nonbreaking",
             "table contextmenu directionality emoticons paste textcolor responsivefilemanager code"
       ],
       toolbar1: "undo redo | bold italic underline | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | styleselect",
       toolbar2: "| responsivefilemanager | link unlink anchor | image media | forecolor backcolor  | print preview code ",
       image_advtab: true ,
       external_filemanager_path:"/filemanager/",
       filemanager_title:"Responsive Filemanager" ,
       external_plugins: { "filemanager" : "/filemanager/plugin.min.js"}
     });
    </script>
        <main>
            <h1><?= $title;?></h1>
        </main>
        <h1>Изменить page</h1>
        <form action="#" method="post" id="add_form">
            <p><label>Заголовок</label><br />
            <input type='text' name='title' value="<?php echo $data['page']['title']?>"></p>
            <p><label>Контент</label><br />
            <textarea name='content' cols='60' rows='10'><?php echo $data['page']['article']?></textarea></p>
            <p><label>description</label><br />
            <input type='text' name='description' value="<?php echo $data['page']['description']?>"></p>
            <p><label>tags</label><br />
            <input type='text' name='tags' value="<?php echo $data['page']['tags']?>"></p>
            <input type=submit name="submit" value="Сохранить" id="add_btn">
        </form>
<?php
include_once VIEWS.'/includes/admin/footer.php';
