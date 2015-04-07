<?php

namespace AppBundle\Service;

use Symfony\Component\HttpFoundation\Session\Session;
use AppBundle\Entity\Product;


/**
 * Description of Order
 *
 * @author adam
 */
class Order
{
    private $session;
    
    public function __construct(Session $session)
    {
        $this->session = $session;
    }
    
    public function getProducts()
    {
        return $this->session->get('order', array());
    }
    
    public function add(Product $product)
    {
        $products = $this->getProducts();
        
        if(!array_key_exists($product->getId(), $products)){
            $products[$product->getId()] = array(
                'id' => $product->getId(),
                'name' => $product->getName(),
                'color' => $product->getColor(),
                'height' => $product->getHeight(),
                'quantity' => 1,
            );
        }
        
        $this->session->set('order', $products);
        
        return $this;
    }
    
    
    public function remove(Product $product)
    {
        $orders = $this->getProducts();
        
        unset($orders[$product->getId()]);
        
        $this->session->set('order', $orders);
        
        return $this;
    }
    
    
    public function clear()
    {
        $this->session->set('order', array());
        
        return $this;
    }
    
}
