<?php

namespace GMUD\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController{
    public function IndexAction() {
        return new ViewModel();
    }
}

