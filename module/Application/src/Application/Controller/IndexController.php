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
//use Application\Repository\UserRepository;

class IndexController extends AbstractActionController
{
    public function indexAction()
    {
        $dm = $this->getServiceLocator()->get('doctrine.documentmanager.odm_default');
        $users = $dm->getRepository('Application\Document\User')->findUserById("5663846fce96b6e4b00041a8");
        $repo = $dm->getRepository('Application\Document\User');
        //die(print_r($repo));
        //$users = $dm->getRepository('Application\Document\User')->find(new \MongoId("5663846fce96b6e4b00041a8"));
        //$users = $repo->findAll();
        //$users = $repo->findUserById("5663846fce96b6e4b00041a8");
        $users = $dm->getRepository('Application\Document\User')->findAll();
        dump($users);
        /*$user = new User();
        $user->setName("Gembul");
        $dm->persist($user);
        $dm->flush();*/

        return new ViewModel();
    }


}
