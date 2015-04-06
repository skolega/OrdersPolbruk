<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Form\ProductType;

class ProductsController extends Controller
{

    /**
     * @Route("/products", name="products_list")
     * @Template()
     */
    public function indexAction()
    {
        $products = $this->getDoctrine()
                ->getRepository('AppBundle:Product')
                ->findAll();

        return array(
            'products' => $products,
        );
    }

    /**
     * @Route("/products/add", name="products_add")
     * @Template()
     */
    public function addAction(Request $request)
    {
        $form = $this->createForm(new ProductType());
        $form->handleRequest($request);

        return ['form' => $form->createView(),];
    }

    /**
     * @Route("/produkty/usun/{id}", name="product_remove")
     * 
     */
    public function removeAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $product = $this->getDoctrine()
                ->getRepository('AppBundle:Product')
                ->find($id);
        dump($product);
        $em->remove($product);
        $em->flush();

        return $this->redirectToRoute('products_list');
    }

    /**
     * @Route("/produkty/edit/{id}")
     * @Template()
     */
    public function editAction($id)
    {
        return array(
                // ...
        );
    }

}
