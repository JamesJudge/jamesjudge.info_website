<?php
/**
 * Created by PhpStorm.
 * User: devel
 * Date: 3/17/2019
 * Time: 11:55 AM
 */
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class SkillsController extends AbstractController
{

    /**
     * @Route("/skills")
     */
    public function view()
    {


        return $this->render('skills/list.html.twig', [
            'section' => 'Skills List',
        ]);
    }
}