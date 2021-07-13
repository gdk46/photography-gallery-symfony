<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class UploadController extends AbstractController
{

    public function index(): Response
    {
        return $this->render('upload/index.html.twig');
    }

    public function store(Request $request): Response
    {
        dd($request->file);

        /* try {
		    $files = $request->files->get('file');

		    foreach ($files as $f) {
			    $newName = md5($f->getClientOriginalName()) . uniqid() . time() . '.' . $f->guessExtension();
			    $f->move($this->getParameter('upload_folder'), $newName);
		    }

		    $this->addFlash('success', 'Upload realizado com sucesso!');
		    return $this->redirectToRoute('/');
	    } catch (\Exception $e) {
		    $this->addFlash('error', 'Erro ao realizar upload: ' . $e->getMessage());
		    return $this->redirectToRoute('/');
	    }*/
    } 
}
