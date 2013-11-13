<?php
namespace User\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class UserController extends AbstractActionController
{
    public function indexAction()
    {
		
		$userStatus = array('status' => "Logged Successfully");
        return new ViewModel(
			array('status' => "Logged Successfully")
        );
    }
}
