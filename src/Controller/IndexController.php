<?php


namespace App\Controller;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\BlockLists;
use App\Entity\Domains;
use App\Entity\DomainCategories;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class IndexController extends AbstractController
{
    /**
     *
     * @Route("/",defaults={"user": "00000000-0000-0000-0000-000000000000" })
     * @Cache(expires="+1 days")
     */
    public function index()
    {
        $categoryRepository = $this->getDoctrine()->getRepository(DomainCategories::class);
        $categories = $categoryRepository->findAll();

        $cat = [];

        foreach( $categories as $c){
            $cat[] = $c->getName();
        }


        return $this->render('index.html.twig', [
            'categories' => $cat,
        ]);
    }

    /**
     *
     * @Route("/x",defaults={"user": "00000000-0000-0000-0000-000000000000" })
     * @Cache(expires="+1 days")
     */
    public function home(Request $request,$user)
    {
        $request->query->get('user');
        if( $request->query->has('user') ){
            $user = $request->query->get('user');
        }
        //return $this->json();

        $blocklistRepository = $this->getDoctrine()->getRepository(BlockLists::class);
        $blocklists = $blocklistRepository->findListByUser($user);

        if(!$blocklists){
            return new Response("not found", 404);
        }

        $domainlistRepository = $this->getDoctrine()->getRepository(Domains::class);

        $content="";
        $blocklistsdomains=array();
        foreach($blocklists as $i){
            $r = $domainlistRepository->findByCategoryId($i->getId());
            foreach($r as $dom){
                $blocklistsdomains[] = $dom->getName() ;
                $content .= $dom->getName()."\n";
            }
        }

        $textResponse = new Response($content, 200);
        $textResponse->headers->set('Content-Type', 'text/plain');
        return $textResponse;


        return $this->json($blocklistsdomains);
/*
        // get an ExpressionBuilder instance, so that you
        $expr = $this->_em->getExpressionBuilder();

        // create a subquery in order to take all address records for a specified user id
        $sub = $this->_em->createQueryBuilder()
            ->select('category_id')
            ->from('block_lists', 'a')
            ->where('user_id = :userid')
            ->setParameter('userid','00000000-0000-0000-0000-000000000000')
        ;


        $qb = $this->_em->createQueryBuilder()
            ->select('domains.name')
            ->from('domains', 'name')
            ->where($expr->not($expr->exists($sub->getDQL())));

        return $qb->getQuery()->getResult();


        return $this->createQueryBuilder('b')
            ->andWhere('b.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('b.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
            ;
*/
        $content = "xx\n".$id ;

        $textResponse = new Response($content, 200);
        $textResponse->headers->set('Content-Type', 'text/plain');
        return $textResponse;
        /*

        $number = 1;
        $response->setContent('Hello World');
        return $this->render('base.html.twig', [
            'number' => $number,
        ]);
        */
    }






}
