<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->redirectToRoute('sonata_admin_dashboard');
    }

    public function dashboardAction()
    {
        $em = $this->getDoctrine()->getEntityManager();
        $category1 = $em->getRepository('AppBundle:Signature')->getCategoryCount(1);
        $category2 = $em->getRepository('AppBundle:Signature')->getCategoryCount(2);
        $category3 = $em->getRepository('AppBundle:Signature')->getCategoryCount(3);

        return $this->render('AppBundle::dashboard.html.twig', array(
            'category1' => $category1,
            'category2' => $category2,
            'category3' => $category3
        ));
    }
}
