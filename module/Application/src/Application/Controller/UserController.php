<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Document\User;

class UserController extends AbstractActionController
{
    public function indexAction()
    {
        $dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
        $users = $dm->getRepository('Application\Document\User')->findAll();
        dump($users);
        /*$user = new User();
        $user->setName("Gembul");
        $dm->persist($user);
        $dm->flush();*/

        return new ViewModel();
    }

    public function listAction()
    {
        die('list route');
        return new ViewModel();
    }
}
