<?php

namespace Livraria\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $cartegoriaService = $this->getServiceLocator()->get('Livraria\Model\CartegoriaService');
        $cartegorias = $cartegoriaService->fetchAll();
        
        return new ViewModel(array( 
            'cartegorias' => $cartegorias
            )    
        );
    }
}
