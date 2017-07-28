<?php

/**
 *Контроллер для просмотра и управления списком всех товаров, имеющихся в базе
 */
class AdminProductsController extends Controller {

    /**
     * Просмотр всех товаров
     * @return bool
     */
    public function index () {
        $data['products'] = Product::index();
        $data['title'] = 'Admin Product List Page ';
        $this->_view->render('admin/products/index', $data);
    }

/**
* Добавление товара
*
* @return bool
*/
public function add () {
  //Принимаем данные из формы
  if (isset($_POST) and !empty($_POST)) {
    $options['name'] = trim(strip_tags($_POST['name']));
    $options['code'] = trim(strip_tags($_POST['code']));
    $options['price'] = trim(strip_tags($_POST['price']));
    $options['category'] = trim(strip_tags($_POST['category']));
    $options['brand'] = trim(strip_tags($_POST['brand']));
    $options['description'] = trim(strip_tags($_POST['description']));
    $options['is_new'] = trim(strip_tags($_POST['is_new']));
    $options['status'] = trim(strip_tags($_POST['status']));

    try{
      //Если все ок, записываем новый товар
      $id = Product::addProduct($options);

      // Если запись добавлена

      $target_path = UDLOADPATH."/".$id."/";

      if (!is_dir($target_path)) {
         mkdir($target_path, 0777, true);
      }

      $j = 0;     // Индекструем uploaded image.

      // Цикл по всем загружаемым элементам

      for ($i = 0; $i < count($_FILES['file']['name']); $i++) {

      // Допустимые расширения
      $validextensions = array("jpeg", "jpg", "png");

      // Разбиваем имя файла (.)

      $ext = explode('.',basename($_FILES['file']['name'][$i]));

      // Сохраняем расширение.
      $file_extension = end($ext);

      // Установка пути назначения для файла
      $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];
      // следующий файл
      $j = $j + 1;

      // Проверим, загружалось ли через форму изображение
      // размер загружаемого файла
      if (($_FILES["file"]["size"][$i] < 100000) &&     in_array($file_extension, $validextensions))
      {
        if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path))
        {
         // Если загружалось, переместим его в нужную папку, дадим новое имя
           echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
         } else {     //  File не найден
           echo $j. ').<span id="error">please try again!.</span><br/><br/>';
         }
         } else {
           //   Если File Size и File Type некорректны.
           echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
         }
        }
        } catch (Exception $e) {
              echo $e->getMessage(); //выведет \\\"Exception message\\\"
            }
        header('Location: /admin/products');
      }

      $data['title'] = 'Admin Product Add Page ';
      $data['categories'] = Category::index();
      $this->_view->render('admin/products/add',$data);

    }

    /**
     * Удаление конкретного товара
     *
     * @param $id товара
     * @return bool
     */
    public function delete ($vars) {
        extract($vars);
        //Проверяем форму
        if (isset($_POST['submit'])) {
            //Если отправлена, то удаляем нужный товар
            Product::deleteProductById($id);
            //и перенаправляем на страницу товаров
            header('Location: /admin/products');
        }

        $data['product_id'] = $id;
        $data['title'] = 'Admin Product Delete Page ';
        $this->_view->render('admin/products/delete',$data);

    }
    /**
     * Редатирование товара
     *
     * @param $id
     * @return bool
     */
    public function edit ($vars) {
        //Получаем информацию о выбранном товаре
        extract($vars);
        //Принимаем данные из формы
        if (isset($_POST) and !empty($_POST)) {
            $options['name'] = trim(strip_tags($_POST['name']));
            $options['code'] = trim(strip_tags($_POST['code']));
            $options['price'] = trim(strip_tags($_POST['price']));
            $options['category'] = trim(strip_tags($_POST['category']));
            $options['brand'] = trim(strip_tags($_POST['brand']));
            $options['description'] = trim(strip_tags($_POST['description']));
            $options['is_new'] = trim(strip_tags($_POST['is_new']));
            $options['status'] = trim(strip_tags($_POST['status']));

            Product::editProduct($id, $options);
            try{
            $target_path = UDLOADPATH."/".$id."/";

            if (!is_dir($target_path)) {
               mkdir($target_path, 0777, true);
            }

            $j = 0;     // Индекструем uploaded image.

            // Цикл по всем загружаемым элементам

            for ($i = 0; $i < count($_FILES['file']['name']); $i++) {

            // Допустимые расширения
            $validextensions = array("jpeg", "jpg", "png");

            // Разбиваем имя файла (.)

            $ext = explode('.',basename($_FILES['file']['name'][$i]));

            // Сохраняем расширение.
            $file_extension = end($ext);

            // Установка пути назначения для файла
            $target_path = $target_path . md5(uniqid()) . "." . $ext[count($ext) - 1];
            // следующий файл
            $j = $j + 1;

            // Проверим, загружалось ли через форму изображение
            // размер загружаемого файла
            if (($_FILES["file"]["size"][$i] < 100000) &&     in_array($file_extension, $validextensions))
            {
              if (move_uploaded_file($_FILES['file']['tmp_name'][$i], $target_path))
              {
               // Если загружалось, переместим его в нужную папку, дадим новое имя
                 echo $j. ').<span id="noerror">Image uploaded successfully!.</span><br/><br/>';
               } else {     //  File не найден
                 echo $j. ').<span id="error">please try again!.</span><br/><br/>';
               }
               } else {
                 //   Если File Size и File Type некорректны.
                 echo $j. ').<span id="error">***Invalid file Size or Type***</span><br/><br/>';
               }
              }
              } catch (Exception $e) {
                    echo $e->getMessage(); //выведет \\\"Exception message\\\"
              }
            header('Location: /admin/products');
        }
        $data['product'] = Product::getProductById($id);
        $data['images'] = Product::getImages($id);

        $data['categories'] = Category::index();
        $data['title'] = 'Admin Product Edit Page ';
        $this->_view->render('admin/products/edit',$data);

    }

}
