<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class OrderController extends AbstractActionController
{
    public function indexAction()
    {
        $this->layout('layout/alternativeLayout');
        return new ViewModel();
    }
}
