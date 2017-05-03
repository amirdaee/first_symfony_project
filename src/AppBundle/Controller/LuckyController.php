<?php
// src/AppBundle/Controller/LuckyController.php
namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends  Controller
{
    /**
     * @Route("/lucky/number" , name="lucuu_number")
     */
    public function numberAction()
    {
        $number = mt_rand(0, 100);
        return $this->render('lucky/number.html.twig', array(
            'number' => $number,
        ));
        
    }
    /**
     * @Route("/lucky/numberShow")
     */
    public function numberShowAction($slug)
    {

        return $this->render('lucky/number.html.twig', array(
            
        ));
    }
}