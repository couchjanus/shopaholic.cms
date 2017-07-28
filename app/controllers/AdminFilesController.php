<?php

class AdminFilesController extends Controller {

  public function deleteimage () {
    $filename = realpath($_SERVER['DOCUMENT_ROOT'].$_POST['imagefile']);
    if(file_exists($filename)) {
      @unlink($filename);
    }
  }
}
