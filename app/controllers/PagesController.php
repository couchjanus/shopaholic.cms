<?php

class PagesController extends Controller
{
	public function index($vars)
	{		
        extract($vars);
		$page = Page::findBySlug($slug);
		$data['page'] = $page;
        $data['title'] = 'Post Page ';
        
        $breadcrumb = new Breadcrumb();

        $data['breadcrumb'] = $breadcrumb->build(array(
           $page['title'] => '#',
        ));

        $this->_view->render('page/index', $data);

	}

}