<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController as Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Index Controller
 */
class IndexController extends Controller
{
  public function index()
  {
    return $this->render('frontend/index.html.twig');
  }
}
