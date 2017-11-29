<?php
include('Controller.php');

class Index extends Controller {

  public function render($path) {
    // set __SSR_INITIAL_STATE__ according to your business
    $this->templateValue('__SSR_INITIAL_STATE__', 1);
    $this->show($path.'/index.html1');
  }

}

