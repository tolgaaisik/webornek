<?php
namespace App\Controller ;
use App\Entity\Article;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
class ArticleController extends AbstractController {
 /*
   * @Route("/article", name="article")
   */
  public function article(){
    $articles = ['Article 1','Article 2','Article 3','Article 4'];
    return $this->render('articles/index.html.twig', array
      ('articles' => $articles));
  }
}
  
