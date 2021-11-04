<?php

namespace AppBundle\Controller;

use http\Env\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        $a = 123;
        $someArray = [1, 2, 3];
        $someValue = false;

        return $this->render('@App/default/index.html.twig', [
            'a' => $a,
            'some_array' => $someArray,
            'some_value' => $someValue
        ]);
    }

    /**
     * @Route("/feedback", name="feedback")
     */
    public function feedbackAction()
    {
        return $this->render('@App/default/feedback.html.twig');
    }

}
