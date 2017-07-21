<?php

/**
 *Контроллер dashboard
 */
class AdminController extends Controller {

    /**
     * Admin dashboard
     * @return bool
     */
    public function index () {
        $data['title'] = 'Admin Dashboard Page ';
        $this->_view->render('admin/index', $data);
    }

}
