<?php

class HomeController
{
  public $title = "Home Page";

  public function view($file, $data = [])
  {
      extract($data);

      return require VIEWS."/{$file}.php";
  }

	public function index()
	{
        $con = Connection::make();
        $con->exec("set names utf8mb4");
        $posts = null;

        if ($con){
          $this->title .=' Hello From DATABASE!';
        }
        $sql = "SELECT * FROM posts";
        // Выполняем запрос
        $res = $con->query($sql);
        $posts = $res->fetch();
        $this->view('index', ['title'=>$this->title, 'posts'=>$posts]);

	}

}
