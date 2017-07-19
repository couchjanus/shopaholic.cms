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

        // $sql = "INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `status`) VALUES (1, 'Test post', 'test-post', '2017-07-15 06:18:28', 1)";
        // $sql = "INSERT INTO `posts` (`id`, `title`, `content`, `created_at`, `status`) VALUES (2, 'Test post 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.', '2017-07-18 08:18:28', 1)";

        // $sql = "SELECT * FROM posts";

        // $sql = "SELECT id, title, content, created_at FROM posts WHERE id = 2";
        //
        // //Выполняем запрос
        // $res = $con->query($sql);
        //
        // $posts = $res->fetch();
        //
        // $this->view('index', ['title'=>$this->title, 'posts'=>$posts]);

	}

}
