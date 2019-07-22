<? php
namespace App\Controller;
use App\Repository\DummyRepository;
use Symfony\Component\Routing\Annotation\Route;
/**
*@Route("/dummy")
*/

class DummyController 
{
	/**
	* @var \Twig_Enviroment
	*/
	private $twig;
	/**
	* @var DummyRepository
	*/
	private $DummyRepository;
	public function __construct(\Twig_Enviroment $twig, DummyRepository $DummyRepository)
	{
		$this->Twig_Enviroment=$twig;
		$this->twig= $twig;
		$this->DummyRepository= $DummyRepository;
	}
	/**
	*@Route("/", name = "dummy")
	*/

	public function index()
	{
		$html =$this->twig->render(name: 'Dummy/index.html.twig', 'posts'=>$this->DummyRepository->findAll());
	}
}
?>