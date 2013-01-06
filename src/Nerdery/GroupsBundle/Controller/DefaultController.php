<?php
/**
 * DefaultController
 *
 * @category NerderyGroupsBundle
 * @package Controller
 * @author Maxwell Vandervelde <Maxwell.Vandervelde@nerdery.com>
 * @license http://creativecommons.org/licenses/by-nc-sa/3.0/legalcode
 *          Attribution-NonCommercial-ShareAlike 3.0 Unported
 *          Some Rights Reserved
 */

namespace Nerdery\GroupsBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * DefaultController
 *
 * Base website controller landed on
 *
 * @category NerderyGroupsBundle
 * @package Controller
 * @author Maxwell Vandervelde <Maxwell.Vandervelde@nerdery.com>
 */
class DefaultController extends Controller
{
    /**
     * indexAction
     *
     * The default index page for the website
     *
     * @Route("/hello/{name}")
     * @Template()
     * @param string $name Demo string to echo
     * @return array
     */
    public function indexAction($name)
    {
        return array('name' => $name);
    }
}
