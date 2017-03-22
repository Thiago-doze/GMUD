<?php

namespace Base\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\Paginator\Paginator;
use Zend\Paginator\Adapter\ArrayAdapter;

abstract class AbstractController extends AbstractActionController {

    protected $em;
    protected $entity;
    protected $service;
    protected $route;
    protected $form;

    public function indexAction() {
        $list = $this->getEm()->getRepository($this->entity)->findAll();

        $page = $this->params()->fromRoute('page');

        $paginator = new Paginator(new ArrayAdapter($list));
        $paginator->setCurrentPageNumber($page)->setDefaultItemCountPerPage(10);

        return new ViewModel(array('data' => $list));
    }

    public function inserirAction() {
        if (is_string($this->form)) {
            $form = new $this->form;
        } else {
            $form = $this->form;

            $request = $this->getRequest();

            if ($request->isPost()) {
                $form->setData($request->getPost());

                if ($form->isValid()) {
                    $service = $this->getServiceLocator()->get($this->service);

                    if ($service->save($request->getPost()->toArray())) {
                        $this->flashMessenger()->addSuccessMessage('Cadastrado com Sucesso !');
                    } else {
                        $this->flashMessenger()->addErrorMessage('Erro ao Cadastrar !');
                    }
                    return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
                }
            }
        }

        if ($this->flashMessenger()->hasSuccessMessages()) {
            return new ViewModel(array('form' => $form, 'success' => $this->flashMessenger()->getSuccessMessenger()));
        }

        if ($this->flashMessenger()->hasErrorMessages()) {
            return new ViewModel(array('form' => $form, 'error' => $this->flashMessenger()->getErrorMessenger()));
        }

        $this->flashMessenger()->clearMessages();

        return new ViewModel(array('form' => $form));
    }

    public function editarAction() {
        if (is_string($this->form)) {
            $form = new $this->form;
        } else {
            $form = $this->form;
        }

        $request = $this->getRequest();
        $param = $this->params()->fromRoute('id', 0);

        $repository = $this->getEm()->getRepository($this->entity)->find($param);

        if ($repository) {
            if ($request->isPost()) {
                $form->setData($request->getPost());

                if ($form->isValid()) {
                    $service = $this->getServiceLocator()->get($this->service);
                    
                    $data = $request->getPost()->toArray();
                    $data['id'] = (int) $param;

                    if ($service->save($data)) {
                        $this->flashMessenger()->addSuccessMessage('Atualizado com Sucesso !');
                    } else {
                        $this->flashMessenger()->addErrorMessage('Erro ao Atualizar !');
                    }
                    return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
                }
            }
        } else {
            $this->flashMessenger()->addInfoMessage('Registro não foi encontrado!');
            return $this->redirect()->toRoute($this->route, array('controller' => $this->controller));
        }
        
        if ($this->flashMessenger()->hasSuccessMessages()) {
            return new ViewModel(array('form' => $form, 'success' => $this->flashMessenger()->getSuccessMessenger(),'id' => $param));
        }

        if ($this->flashMessenger()->hasErrorMessages()) {
            return new ViewModel(array('form' => $form, 'error' => $this->flashMessenger()->getErrorMessenger(),'id' => $param));
        }
            
        if ($this->flashMessenger()->hasInfoMessages()) {
            return new ViewModel(array('form' => $form, 'warning' => $this->flashMessenger()->getInfoMessenger(),'id' => $param));
        }
        
        $this->flashMessenger()->clearMessages();

        return new ViewModel(array('form' => $form, 'id' => $param));
    }

    public function excluirAction() {
        
    }

    public function getEm() {
        if ($this->em == null) {
            $this->em = $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
        }

        return $this->em;
    }
    
    //teste

}
