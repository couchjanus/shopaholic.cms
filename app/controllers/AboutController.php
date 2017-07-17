<?php

class AboutController extends Controller
{
  public $title =  "About StartUp Page";

	public function index()
	{
        $this->_view->render('about', ['title'=>$this->title]);
        // require_once(VIEWS . '/about.php');
	}

}
