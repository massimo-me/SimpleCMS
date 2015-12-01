<?php

namespace CMS\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class HomeController extends Controller
{
    /**
     * @Route("/", name="cms_core.home.show")
     * @Template("CMSCoreBundle:Home:show.html.twig")
     * @return array
     */
    public function showAction()
    {
        return [
            'base_dir' => $this->container->get('kernel')->getRootDir()
        ];
    }
}
