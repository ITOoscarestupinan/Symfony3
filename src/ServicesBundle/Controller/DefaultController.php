<?php

namespace ServicesBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request as Request;
use ServicesBundle\Tools\ResponseBuilder;
use Nelmio\ApiDocBundle\Annotation\ApiDoc;
use FOS\RestBundle\Controller\Annotations\Get;

class DefaultController extends FOSRestController {

    /**
     * Lista de usuario
     *
     * @ApiDoc(
     *  section="Usuario",
     *  resource=true,
     *  description="Lista de usuarios",
     * )
     * @Get("/usuarios")
     */
    public function getAction(Request $request) {
        $em = $this->getDoctrine()->getManager();
        $dql = "SELECT u from ApplicationSonataUserBundle:User u";
        $usuarios = ResponseBuilder::getCollection($request, $em, $dql);
        if ($usuarios === null) {
            return new View("there are no users exist", Response::HTTP_NOT_FOUND);
        }
        return $usuarios;
    }

}
