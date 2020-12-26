<?php

namespace LocationBundle\Controller;

use LocationBundle\Entity\Location;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/location/{id}", methods={"GET","HEAD"})
     */
    public function indexAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $taskRepository = $entityManager->getRepository(Location::class);
        $task = $taskRepository->findOneBy(['id'=>$id]);
        var_dump($task);die;
        return $task;
    }
}
