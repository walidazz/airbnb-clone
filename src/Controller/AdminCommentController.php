<?php

namespace App\Controller;

use App\Entity\Comment;
use App\Form\AdminCommentType;
use App\Repository\CommentRepository;
use App\Service\PaginationService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class AdminCommentController extends AbstractController
{
    /**
     * @Route("/admin/comments/{page<\d+>?1}", name="admin_comment_index")
     */
    public function index(CommentRepository $repo,$page, PaginationService $pagination)
    {
   $pagination->setEntityClass(Comment::class)
              ->setPage($page);
        return $this->render('admin/comment/index.html.twig', [
            'pagination' => $pagination,
        ]);
    }



    /**
     * @Route("/admin/comments/{id}/edit", name="admin_comment_edit")
     */
    public function edit(Comment $comment, Request $request, EntityManagerInterface $manager)
    {


        $form = $this->createForm(AdminCommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $comment->setAnnonce($comment->getAnnonce());
            $comment->setAuthor($comment->getAuthor());
            $comment->setRating($comment->getRating());

            $manager->persist($comment);
            $manager->flush();
            $this->addFlash('success', "commentaire modifié avec succes !");
            return $this->redirectToRoute('admin_comment_index');
        }
        return $this->render('admin/comment/edit.html.twig', [
            'form' => $form->createView(),
            'comment' => $comment
        ]);
    }

    /**
     * @Route("/admin/comments/{id}/delete", name="admin_comment_delete")
     */
    public function delete(Comment $comment, EntityManagerInterface $manager)
    {

        $manager->remove($comment);
        $manager->flush();
        $this->addFlash('success', "le commentaire a été supprimée ");


        return $this->redirectToRoute('admin_comment_index');
    }
}
