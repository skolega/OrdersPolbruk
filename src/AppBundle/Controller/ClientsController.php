<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class ClientsController extends Controller
{
    /**
     * @Route("/klienci", name="clients_list")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/klienci/dodaj")
     * @Template()
     */
    public function addAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/klienci/usun/{id}")
     * @Template()
     */
    public function removeAction($id)
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/klienci/edytuj/{id}")
     * @Template()
     */
    public function editAction($id)
    {
        return array(
                // ...
            );    }

}
