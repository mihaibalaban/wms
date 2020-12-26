<?php

namespace TaskBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use TaskBundle\Entity\Task;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/task/{id}", methods={"GET","HEAD"})
     */
    public function indexAction($id)
    {
        $entityManager = $this->getDoctrine()->getManager();

        $taskRepository = $entityManager->getRepository(Task::class);
        $task = $taskRepository->findOneBy(['id'=>$id]);
var_dump($task);die;
        return $task;
    }
}
