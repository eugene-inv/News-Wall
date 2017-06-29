<?php

namespace AppBundle\Controller;

use AppBundle;
use eZ\Bundle\EzPublishCoreBundle\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class
DefaultController extends Controller
{
    /**
     * @Route("/", name="index")
     */
    public function indexAction()
    {

        $response = $this->render(
            '@App/NewswallCore/homepage/index.html.twig'
        );

        return $response;
    }

    /**
     * @Route("/article", name="article")
     */
    public function articleAction()
    {

        $response = $this->render(
            '@App/NewswallCore/article/article-list.html.twig'
        );

        return $response;
    }


    /**
     * @Route("/category/{category}", name="category", requirements={"category": "\d+"})
     */
    public function categoryAction($category) {
        return $this->render(
            '@App/NewswallCore/content/category.html.twig', array('category' => $category)
        );
    }
}