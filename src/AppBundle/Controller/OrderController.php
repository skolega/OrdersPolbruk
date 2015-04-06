<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class OrderController extends Controller
{
    /**
     * @Route("/zamowienie", name="order")
     * @Template()
     */
    public function indexAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/zamowienie/dodaj")
     * @Template()
     */
    public function addAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/zamowienie/remove")
     * @Template()
     */
    public function removeAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/zamowienie/{id}/edit/{quntity}")
     * @Template()
     */
    public function editQuantityAction($id, $quntity)
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/zamowienie/order")
     * @Template()
     */
    public function orderAction()
    {
        return array(
                // ...
            );    }

    /**
     * @Route("/zamowienie/clear")
     * @Template()
     */
    public function clearAction()
    {
        return array(
                // ...
            );    }

}
