<?php
/**
 * Created by PhpStorm.
 * User: dtome
 * Date: 18/02/17
 * Time: 17:50
 */

namespace Slx\UserInterface\Controllers\Home;

use Silex\Application;

class HomeController
{

    /**
     * @var Application
     */
    private $application;

    /**
     * HomeController constructor.
     *
     * @param Application $application
     */
    public function __construct(Application $application)
    {
        $this->application = $application;
    }

    /**
     * @return mixed
     */
    public function indexAction()
    {
        return $this->application['twig']->render('views/home/home.html.twig', []);
    }
}