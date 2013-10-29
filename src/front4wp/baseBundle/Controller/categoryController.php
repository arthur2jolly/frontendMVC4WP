<?php

namespace front4wp\baseBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

use front4wp\baseBundle\Entity\PostsRepository;
use front4wp\baseBundle\Entity\PostmetaRepository;

class CategoryController extends Controller
{
    /**
     * @Route("/category/{alias}")
     * @Template()
     */
    public function indexAction($alias)
    {
    	$key_template = '_wp_page_template';

        $repository = $this->getDoctrine()->getRepository('front4wp\baseBundle\Entity\Posts');
        $base_post = $repository->findOneByPostName( $page );
        
        $repository_meta = $this->getDoctrine()->getRepository('front4wp\baseBundle\Entity\Postmeta');
        $metas = $repository_meta->findByPostId( $base_post->getId() );

        $extra_data = 'NOK';
        if(method_exists($this, $page.'ExtraData')){
        	$extra_data = 'OK';
        }
        
        $new_metas = array();
        foreach ($metas as $key => $value)
        	$new_metas[$value->getMetaKey()] = $value->getMetaValue();
        
        $template  = str_replace('.php', '', $new_metas[$key_template]);

        $post = $repository->getCurrentPage( $base_post->getId() );

        $post->setMetas($new_metas);

        return $this->render('front4wpbaseBundle:Default:'.$template.'.html.twig', array('name' => $post, 'template' => $template, 'extra_data' => $extra_data));
    
    }

    public function blogExtraData()
    {
    	
    }


}