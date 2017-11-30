<?php
include('Controller.php');

class Index extends Controller {

  protected function show($tpl) {
    parent::show(LAYOUT_DIR . DIRECTORY_SEPARATOR . $tpl . DIRECTORY_SEPARATOR . 'index.html');
  }

  public function render($path) {
    // set __SSR_INITIAL_STATE__ according to your business
    $initState = array(
      'global' => array(
        'islogin'=>true
      ),
      'page' => array(
        'orders' => array(
          array('oid'=>1, 'name'=>'订单1'),
          array('oid'=>2, 'name'=>'订单2'),
        )
      )
    );
    $this->templateValue('__SSR_INITIAL_STATE__', json_encode($initState));
    $this->show($path);
  }

}

