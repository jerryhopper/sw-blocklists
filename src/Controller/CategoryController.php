<?php


namespace App\Controller;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Entity\BlockLists;
use App\Entity\Domains;
use App\Entity\DomainCategories;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Cache;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;


class CategoryController extends AbstractController
{

    /**
     * @Route("/category/{categoryName}")
     * @Cache(expires="tomorrow")
     */
    public function getDomainsByCategoryName($categoryName)
    {
        $repository = $this->getDoctrine()->getRepository(DomainCategories::class);
        $category = $repository->findOneByName($categoryName);

        if(!$category){
            $textResponse = new Response(null, 404);
            //$textResponse->headers->set('Content-Type', 'text/plain');
            return $textResponse;
        }

        $repository = $this->getDoctrine()->getRepository(Domains::class);
        $domains = $repository->findByCategoryId( $category->getId() );
        $content = "";
        #$content = "####################\n";
        #$content .="# Category: ".$categoryName."\n";
        #$content .="####################\n";
        if($domains){
            foreach($domains as $d){
                $content .= $d->getName()."\n";
            }
        }


        //return $this->json($product);

        $textResponse = new Response($content, 200);
        $textResponse->headers->set('Content-Type', 'text/plain');
        return $textResponse;

    }

    /**
     * @Route("/categoryid/{categoryId}")
     * @Cache(expires="tomorrow")
     */
    public function getDomainsByCategoryId($categoryId)
    {
        $repository = $this->getDoctrine()->getRepository(Domains::class);

        $product = $repository->findByCategoryId((int)$categoryId);
        $content = "";
        foreach($product as $p){
            $content .= $p->getName()."\n";
        }

        //return $this->json($product);

        $textResponse = new Response($content, 200);
        $textResponse->headers->set('Content-Type', 'text/plain');

        return $textResponse;
    }


}
