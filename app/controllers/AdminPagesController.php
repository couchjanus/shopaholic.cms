<?php

class AdminPagesController extends Controller{

    public function index()
    {       
        $pages = Page::index();
        $data['title'] = 'Admin Pages';
        $data['pages'] = $pages;
        $this->_view->render('admin/pages/index', $data);
    }

    public function add () {
        if (isset($_POST) and !empty($_POST)) {
            $options['title'] = trim(strip_tags($_POST['title']));
            $options['content'] = trim(strip_tags($_POST['content']));
            $options['description'] = trim(strip_tags($_POST['description']));
            $options['tags'] = trim(strip_tags($_POST['tags']));
            $id = Page::add($options);
            header('Location: /admin/pages');
        }
        $data['title'] = 'Admin Add Page ';
        $this->_view->render('admin/pages/add', $data);
    }

    public function edit ($vars){
        extract($vars);
        $page = Page::get($id);
        if(isset($_POST) and !empty($_POST)){
            $options['title'] = trim(strip_tags($_POST['title']));
            $options['content'] = trim($_POST['content']);
            $options['description'] = trim(strip_tags($_POST['description']));
            $options['tags'] = trim(strip_tags($_POST['tags']));
            Page::update($id, $options);
            header('Location: /admin/pages');
        }
        $data['page'] = $page;
        $data['title'] = 'Admin Page Edit Page ';
        $this->_view->render('admin/pages/edit',$data);
    }

    public function delete ($vars) {
        extract($vars);
        if (isset($_POST['submit'])) {
            Page::delete($id);
            header('Location: /admin/pages');
        }
        $data['id'] = $id;
        $data['title'] = 'Admin Pages Delete Page ';
        $this->_view->render('admin/pages/delete',$data);
    }
}
