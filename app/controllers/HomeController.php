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
        $this->view('index', ['title'=>'HOME PAGE']);
        // $this->view('index', ['title'=>$this->title]);
        // require_once(VIEWS . '/index.php');
	}

}
