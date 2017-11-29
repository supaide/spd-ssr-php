<?php
include('Controller.php');

class Index extends Controller {

  protected function show($tpl) {
    parent::show(LAYOUT_DIR . DIRECTORY_SEPARATOR . $tpl . DIRECTORY_SEPARATOR . 'index.html');
  }

  public function render($path) {
    // set __SSR_INITIAL_STATE__ according to your business
    $this->templateValue('__SSR_INITIAL_STATE__', 1);
    $this->show($path);
  }

}

