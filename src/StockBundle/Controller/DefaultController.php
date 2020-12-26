<?php

namespace StockBundle\Controller;

use StockBundle\Entity\Stock;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/stock/{id}", methods={"GET","HEAD"})
     */
    public function indexAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $taskRepository = $entityManager->getRepository(Stock::class);
        $task = $taskRepository->findOneBy(['id'=>$id]);
        var_dump($task);die;
        return $task;
    }
}
