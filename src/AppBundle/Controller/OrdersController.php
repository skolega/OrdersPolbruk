<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class OrdersController extends Controller
{

    /**
     * @Route("/", name="orders_list")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
        );
    }

    /**
     * @Route("/add")
     * @Template()
     */
    public function addAction()
    {
        return array(
                // ...
        );
    }

    /**
     * @Route("/edit/{id}")
     * @Template()
     */
    public function editAction($id)
    {
        return array(
                // ...
        );
    }

    /**
     * @Route("/remove/{id}")
     * @Template()
     */
    public function removeAction($id)
    {
        return array(
                // ...
        );
    }

    /**
     * @Route("/send/{id}")
     * @Template()
     */
    public function sendAction($id)
    {
        return array(
                // ...
        );
    }

}
