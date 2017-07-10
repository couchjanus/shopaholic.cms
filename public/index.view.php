<?php
require_once('header.php');
?>
<header>
  <hgroup>
     <h1>My Web Shop</h1>
  </hgroup>
</header>

<div class="wrapper">
  <main>

    <input id="tab1" type="radio" name="tabs" checked>
    <label for="tab1">Условия</label>

    <input id="tab2" type="radio" name="tabs">
    <label for="tab2">Циклы</label>

    <input id="tab3" type="radio" name="tabs">
    <label for="tab3">Массивы</label>

    <input id="tab4" type="radio" name="tabs">
    <label for="tab4">Функции</label>

    <section id="content1">
      <h2>Конструкция if</h2>
      <p>Конструкция if предоставляет возможность условного выполнения фрагментов кода. Структура if реализована в PHP по аналогии с языком C:
      </p>
      <p>
           if (выражение)      инструкция
      </p>
      <p>
      Если выражение принимает значение TRUE, PHP выполнит инструкцию, а если оно принимает значение FALSE - проигнорирует.
      <pre>
        $a = 50; $b = 20;
        if ($a > $b)
          echo "a больше b";

      </pre>

      <?php
      $a = 50; $b = 20;
      if ($a > $b)
        echo "a больше b";
      ?>
      </p>
      <h2>Конструкция else</h2>
      <p>
        else расширяет оператор if, чтобы выполнить выражение, в случае если условие в операторе if равно FALSE.
        <pre>
          $b = 50;
          if ($a > $b) {
            echo "a больше, чем b";
          } else {
            echo "a НЕ больше, чем b";
          }
        </pre>
        <?php
        $b = 50;
        if ($a > $b) {
          echo "a больше, чем b";
        } else {
          echo "a НЕ больше, чем b";
        }?>
    <hr />
    Выражение else выполняется только, если выражение if эквивалентно FALSE, и если нет других любых выражений elseif, или если они все равны FALSE .
      </p>
      <h2>Конструкция elseif</h2>
      <p>
        Конструкция elseif - это сочетание if и else.
        <pre>
          $b = 50;
          if ($a > $b) {
              echo "a больше, чем b";
          } else if ($a == $b) {
              echo "a равен b";
          } else {
              echo "a меньше, чем b";
          }
        </pre>
        <?php
        if ($a > $b) {
            echo "a больше, чем b";
        } else if ($a == $b) {
            echo "a равен b";
        } else {
            echo "a меньше, чем b";
        }
        ?>
      </p>
      <h2>Альтернативный синтаксис</h2>
      <pre>
        if($a > $b):
            echo $a." больше, чем ".$b;
        elseif($a == $b): // Заметьте, тут одно слово.
            echo $a." равно ".$b;
        else:
            echo $a." не больше и не равно ".$b;
        endif;
      </pre>
      <hr />
      <p>
          <?php
            if($a > $b):
                echo $a." больше, чем ".$b;
            elseif($a == $b): // Заметьте, тут одно слово.
                echo $a." равно ".$b;
            else:
                echo $a." не больше и не равно ".$b;
            endif;
          ?>
      </p>
      <hr />
    </section>

    <section id="content2">
      <h2>Циклы while</h2>
      <p>
        Циклы while являются простейшим видом циклов в PHP.
        <pre>
          while (expr)
              statement
        </pre>

      </p>
      <p>
        Следующие примеры идентичны, и оба выведут числа от 1 до 10:
        <h3>пример 1</h3>
        <pre>
          $i = 1;
          while ($i <= 10) {
              echo $i++;
          /* выводится будет значение переменной
             $i перед её увеличением
             (post-increment) */
          }
        </pre>
        <?php
        /* пример 1 */
        $i = 1;
        while ($i <= 10) {
            echo $i++;  /* выводится будет значение переменной
                           $i перед её увеличением
                           (post-increment) */
        }
        ?>
        <h3>пример 2</h3>
        <pre>
          $i = 1;
          while ($i <= 10):
              echo $i;
              $i++;
          endwhile;
        </pre>
        <?php
        /* пример 2 */

        $i = 1;
        while ($i <= 10):
            echo $i;
            $i++;
        endwhile;
        ?>
      </p>

      <h2>Цикл do-while</h2>
      <p>
      Цикл do-while похож на цикл while, с тем отличием, что истинность выражения проверяется в конце итерации, а не в начале. Главное отличие от обычного цикла while в том, что первая итерация цикла do-while гарантированно выполнится, тогда как она может не выполниться в обычном цикле while (истинность выражения которого проверяется в начале выполнения каждой итерации). Есть только один вариант синтаксиса цикла do-while:
      <pre>
          $i = 0;
          do {
              echo $i;
          } while ($i > 0);
        </pre>
        <hr />
        <?php
        $i = 0;
        do {
            echo $i;
        } while ($i > 0);
         ?>
      </p>

      <h2>Цикл for</h2>
      <p>
        <pre>
        for (expr1; expr2; expr3)
           statement
        </pre>

        Первое выражение (expr1) всегда вычисляется (выполняется) только один раз в начале цикла.

        В начале каждой итерации оценивается выражение expr2. Если оно принимает значение TRUE, то цикл продолжается, и вложенные операторы будут выполнены. Если оно принимает значение FALSE, выполнение цикла заканчивается.

        В конце каждой итерации выражение expr3 вычисляется (выполняется ).

          for ($i = 1, $j = 0;
          <pre>
               $i <= 10; $j += $i,
               print $i, $i++);
      </pre>

        <?php
        for ($i = 1, $j = 0; $i <= 10; $j += $i, print $i, $i++);
         ?>
      <hr />
      PHP также поддерживает альтернативный синтаксис с двоеточием для циклов for.
      <pre>
      for (expr1; expr2; expr3):
          statement
          ...
      endfor;
      </pre>
      </p>

    </section>

    <section id="content3">
      <h2>Массивы  в PHP</h2>
      <p>
        Массивы  в PHP - это упорядоченное отображение, которое устанавливает соответствие между значением и ключом. Массивы  в PHP можно использовать как собственно массив, список (вектор), хэш-таблицу (являющуюся реализацией карты), словарь, коллекцию, стек или очередь. Так как значением массива может быть другой массив PHP, можно также создавать деревья и многомерные массивы.
        Массив (тип array) может быть создан языковой конструкцией array(). В качестве параметров она принимает любое количество разделенных запятыми пар key => value (ключ => значение).

        <pre>
          array(
                key  => value,
                key2 => value2,
                key3 => value3,
                … )
        </pre>

        key может быть либо типа integer, либо типа string. value может быть любого типа.
      </p>
      <p>
        Если несколько элементов в объявлении массива используют одинаковый ключ, то только последний будет использоваться, а все другие будут перезаписаны.

        <pre>
          $array = array(
              1    => "a",
              "1"  => "b",
              1.5  => "c",
              true => "d",
          );
          var_dump($array);
        </pre>
        <?php
        $array = array(
            1    => "a",
            "1"  => "b",
            1.5  => "c",
            true => "d",
        );
        var_dump($array);
         ?>
    </p>
    <h2>Массивы в PHP могут содержать ключи типов integer и string</h2>
    <p>
    Массивы в PHP могут содержать ключи типов integer и string одновременно, так как PHP не делает различия между индексированными и ассоциативными массивами.
    </p>
    <pre>
      $array = array(
          "foo" => "bar",
          "bar" => "foo",
          100   => -100,
          -100  => 100,
      );
      var_dump($array);
    </pre>
    <?php
    $array = array(
        "foo" => "bar",
        "bar" => "foo",
        100   => -100,
        -100  => 100,
    );
    var_dump($array);
     ?>


    <h2>Индексированные массивы без ключа</h2>
    <p>
      Индексированные массивы без ключа
    </p>

    <pre>
      $array = array("foo", "bar", "hallo", "world");
      var_dump($array);
    </pre>
    <?php
    $array = array("foo", "bar", "hallo", "world");
    var_dump($array);
     ?>

    <h2>Возможно указать ключ только для некоторых элементов и пропустить для других</h2>
    <p>
      Возможно указать ключ только для некоторых элементов и пропустить для других:
    </p>
    <pre>
      $array = array(
               "a",
               "b",
          6 => "c",
               "d",
      );
      var_dump($array);
    </pre>
    <?php
    $array = array(
             "a",
             "b",
        6 => "c",
             "d",
    );
    var_dump($array);
     ?>

     <h2>Доступ к элементам массива</h2>
    <p>
      Доступ к элементам массива может быть осуществлен с помощью синтаксиса array[key].
    </p>
    <pre>
      $array = array(
          "foo"   => "bar",
          42      => 24,
          "multi" => array(
            "dimensional" => array(
            "array" => "foo"
            )
            )
           );

      var_dump($array["foo"]);
      var_dump($array[42]);
      var_dump($array["multi"]["dimensional"]["array"]);
    </pre>
    <?php
    $array = array("foo" => "bar", 42    => 24, "multi" => array(
             "dimensional" => array(
                 "array" => "foo") )
    );
    var_dump($array["foo"]);
    var_dump($array[42]);
    var_dump($array["multi"]["dimensional"]["array"]);
     ?>

    <h2>Пример рекурсивного использования count()</h2>
    <pre>
      $food = array('fruits' =>
      array('orange', 'banana', 'apple'),
      'veggie' => array('carrot', 'collard', 'pea'));

      // рекурсивный count
      echo count($food, COUNT_RECURSIVE);
      // выводит 8

      // обычный count
      echo count($food); // выводит 2

    </pre>
    <?php
    // Пример рекурсивного использования count()
    $food = array('fruits' => array('orange', 'banana', 'apple'),
    'veggie' => array('carrot', 'collard', 'pea'));

    // рекурсивный count
    echo count($food, COUNT_RECURSIVE); // выводит 8
    echo '<h2>Пример использования count()</h2>';
    // обычный count
    echo count($food); // выводит 2

     ?>

   <h2>Перебор массивов</h2>
   <pre>
     for ($i = 0; $i < count($categories); $i++)
       {
          echo $categories[$i]['id'].'
         '.$categories[$i]['parent_id'].'
         '.$categories[$i]['name'];
       }
   </pre>
<?php
  $categories = [
    ['id'=>1, 'name'=>'Computer', 'parent_id'=>0, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>2, 'name'=>'Laptops', 'parent_id'=>1, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>3, 'name'=>'Tablets', 'parent_id'=>1, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>4, 'name'=>'Monitors', 'parent_id'=>1, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>5, 'name'=>'Printers', 'parent_id'=>1, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>6, 'name'=>'Scanners', 'parent_id'=>1, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>7, 'name'=>'Phones', 'parent_id'=>0, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>8, 'name'=>'iPhone', 'parent_id'=>7, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>9, 'name'=>'Speakers', 'parent_id'=>7, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>10, 'name'=>'Subwoofers', 'parent_id'=>7, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>11, 'name'=>'Amplifiers', 'parent_id'=>7, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>12, 'name'=>'Players', 'parent_id'=>7, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>13, 'name'=>'iPods', 'parent_id'=>7, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>14, 'name'=>'TVs', 'parent_id'=>7, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>15, 'name'=>'Clothes', 'parent_id'=>0, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>16, 'name'=>'Jumpers', 'parent_id'=>15, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>17, 'name'=>'Cardigans', 'parent_id'=>15, 'sort_order'=>0, 'status'=>1 ],
    ['id'=>18, 'name'=>'Clothes', 'parent_id'=>15, 'sort_order'=>0, 'status'=>1 ],
];

	echo '<h2>Перебор массивов</h2>';
    // Перебор массивов
    for ($i = 0; $i < count($categories); $i++)
        {
             echo $categories[$i]['id'].' '.$categories[$i]['parent_id'].' '.$categories[$i]['name'].'<br />';
         }

 ?>

<h2>break прерывает выполнение текущей структуры for</h2>
<p>
  break прерывает выполнение текущей структуры for, foreach, while, do-while или switch.
	break принимает необязательный числовой аргумент, который сообщает ему выполнение какого количества вложенных структур необходимо прервать. Значение по умолчанию 1, только ближайшая структура будет прервана.
</p>
	<pre>
    $arr = array(
    'один', 'два', 'три', 'четыре', 'стоп', 'пять'
    );
  	while (list(, $val) = each($arr)) {
  	    if ($val == 'стоп') {
  	        break; /* можно было написать 'break 1;'. */
  	    }
  	    echo "$val\n";
  	}
  </pre>
  <?php

	$arr = array('один', 'два', 'три', 'четыре', 'стоп', 'пять');
	while (list(, $val) = each($arr)) {
	    if ($val == 'стоп') {
	        break;    /* Тут можно было написать 'break 1;'. */
	    }
	    echo "$val<br />\n";
	}
  ?>

    <h2>Использование дополнительного аргумента</h2>
    <pre>
      $i = 0;
    	while (++$i) {
    	  switch ($i) {
    	    case 5:
            echo "Итерация 5\n";
    	      break 1;  /* Выйти только из switch. */
    	    case 10:
            echo "Итерация 10; выходим\n";
            break 2;  /* Выходим из switch и из цикла while. */
    	    default:
            break;
    	    }
    	}
    </pre>
    <?php
	$i = 0;
	while (++$i) {
	    switch ($i) {
	    case 5:        echo "Итерация 5<br />\n";
	        break 1;  /* Выйти только из конструкции switch. */
	    case 10:         echo "Итерация 10; выходим<br />\n";
	        break 2;  /* Выходим из конструкции switch и из цикла while. */
	    default:        break;
	    }
	}
  ?>
	<h2>continue</h2>
	<pre>
    $i = 0;
  	while ($i++ < 5) {
  	    echo "Снаружи\n";
  	    while (1) { echo "В середине\n";
  	        while (1) {  echo "Внутри\n";
  	            continue 3;
  	        }
  	        echo "Это никогда не будет выведено.\n";
  	    }
  	    echo "Это тоже.\n";
  	}
  </pre>
  <?php
	$i = 0;
	while ($i++ < 5) {
	    echo "Снаружи<br />\n";
	    while (1) { echo "В середине<br />\n";
	        while (1) {  echo "Внутри<br />\n";
	            continue 3;
	        }
	        echo "Это никогда не будет выведено.<br />\n";
	    }
	    echo "Это тоже.<br />\n";
	}
 ?>

    </section>

    <section id="content4">
      <h2>Функции, определяемые пользователем</h2>
<pre>
  function foo($arg_1, $arg_2, /* ..., */ $arg_n)
  {
      echo "Example function.\n";
      return $retval;
  }
</pre>

    <p>
      Можно вызывать функции PHP рекурсивно.
    </p>
    <pre>
      function recursion($a)
      {
          if ($a < 20) {
              echo "$a\n";
              recursion($a + 1);
          }
      }
    </pre>

      	<p>
          PHP поддерживает передачу аргументов по значению (по умолчанию), передачу аргументов по ссылке, и значения по умолчанию.
        </p>
<pre>
  function takes_array($input)
  {
      echo "$input[0] + $input[1] = ", $input[0]+$input[1];
  }
</pre>

<h2>Функция может определять значения по умолчанию</h2>
<p>
  Функция может определять значения по умолчанию в стиле C++ для скалярных аргументов, например:
</p>
<pre>
  function makecoffee($type = "капуччино")    {
      return "Готовим чашку $type.\n";
  }
  echo makecoffee();
  echo makecoffee(null);
  echo makecoffee("эспрессо");

</pre>
<p>
  все аргументы, для которых установлены значения по умолчанию, должны находиться правее аргументов, для которых значения по умолчанию не заданы
</p>
<?php
function makecoffee($type = "капуччино")    {
    return "Готовим чашку $type.\n";
}
echo makecoffee();
echo makecoffee(null);
echo makecoffee("эспрессо");
 ?>
</section>

  </main>
</div><!-- /container -->
<?php
require_once('footer.php');
?>
