 <?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;

class ArticleController extends Controller {
  /**
   * @Route("/article", name="article")
   */
  public function article(){
    $articles = ['Article 1','Article 2','Article 3','Article 4'];
    return $this->render('articles/index.html.twig', array
      ('articles' => $articles));
  }
}
  }
}