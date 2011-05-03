<?php
/**
 * Created by Daniel Gomes <daniel.gomes@reset.pt>
 * Date: 03/05/11
 */

namespace Acme\CompassBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class WelcomeController extends Controller
{
    /**
     * @extra:Route("/compass", name="_compass")
     * @extra:Template
     */
    public function indexAction()
    {
        return array();
    }
}
