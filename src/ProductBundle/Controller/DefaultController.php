<?php

namespace ProductBundle\Controller;

use ProductBundle\Entity\Product;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/product/{barcode}", methods={"GET","HEAD"})
     */
    public function getProductByBarcodeAction(string $barcode)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $productRepository = $entityManager->getRepository(Product::class);
        $product = $productRepository->findOneBy(['barcode'=>$barcode]);

        return $product;
    }
}
