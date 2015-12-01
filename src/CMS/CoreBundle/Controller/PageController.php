<?php

namespace CMS\CoreBundle\Controller;

use CMS\CoreBundle\Document\Page;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;

class PageController extends Controller
{
    /**
     * @Route("/{slug}", name="cms_core.page.show")
     * @Template("CMSCoreBundle:Page:show.html.twig")
     * @ParamConverter("page", class="CMSCoreBundle:Page", options={"mapping": {"slug" = "slug"}})
     * @param Page $page
     * @return array
     */
    public function showAction(Page $page)
    {
        return [
            'page' => $page
        ];
    }
}
