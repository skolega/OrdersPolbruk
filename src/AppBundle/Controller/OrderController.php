<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use AppBundle\Entity\Product;

class OrderController extends Controller
{

    /**
     * @Route("/zamowienie", name="order")
     * @Template()
     */
    public function indexAction()
    {
        $order = $this->get('order');
        return array(
            'order' => $order,
        );
    }

    /**
     * @Route("/zamowienie/{id}/dodaj", name="add_to_order")
     * 
     */
    public function addAction(Product $product = null)
    {

        $order = $this->get('order');
        $order->add($product);

        return $this->redirectToRoute('products_list');
    }

    /**
     * @Route("/zamowienie/{id}/usun", name="remove_from_order")
     * 
     */
    public function removeAction(Product $product = null)
    {
        $order = $this->get('order');
        $order->remove($product);

        return $this->redirectToRoute('order');
    }

    /**
     * @Route("/zamowienie/{id}/edit/{quntity}")
     * @Template()
     */
    public function editQuantityAction($id, $quntity)
    {
        return array(
                // ...
        );
    }

    /**
     * @Route("/zamowienie/order")
     * @Template()
     */
    public function orderAction()
    {
        return array(
                // ...
        );
    }

    /**
     * @Route("/zamowienie/clear", name="clear_order")
     * 
     */
    public function clearAction()
    {
        
        $orders = $this->get('order');
        
        $orders->clear();
        
        return $this->redirectToRoute('products_list');
    }

}
