<?php
// src/Blogger/BlogBundle/Controller/CommentController.php

namespace Blogger\BlogBundle\Controller;

use Blogger\BlogBundle\Entity\Blog;
use Hawk\ApiBundle\Event\GroupMessage;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Comment;
use Blogger\BlogBundle\Form\CommentType;
use Symfony\Component\HttpFoundation\Request;

/**
 * Comment controller.
 */
class CommentController extends Controller
{
    public function newAction($blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment = new Comment();
        $comment->setBlog($blog);
        $form   = $this->createForm(CommentType::class, $comment);

        return $this->render('BloggerBlogBundle:Comment:form.html.twig', array(
            'comment' => $comment,
            'form'   => $form->createView()
        ));
    }

    public function createAction(Request $request, $blog_id)
    {
        $blog = $this->getBlog($blog_id);

        $comment  = new Comment();
        $comment->setBlog($blog);
        $form    = $this->createForm(CommentType::class, $comment);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()
                ->getManager();
            $em->persist($comment);
            $em->flush();

            $this->sendNotification($comment, $blog);
            
            return $this->redirect($this->generateUrl('BloggerBlogBundle_blog_show', array(
                    'id'    => $comment->getBlog()->getId(),
                    'slug'  => $comment->getBlog()->getSlug())) .
                '#comment-' . $comment->getId()
            );
        }

        return $this->render('BloggerBlogBundle:Comment:create.html.twig', array(
            'comment' => $comment,
            'form'    => $form->createView()
        ));
    }

    /**
     * Отправка уведомления о новом комментарии
     * @param Comment $comment комментарий
     * @param Blog $blog блог
     */
    private function sendNotification(Comment $comment, Blog $blog)
    {
        //формируем тело комментария
        $comment_text = $this->renderView('BloggerBlogBundle:Comment:index.html.twig', [
            'comments'  => [$comment]
        ]);

        //формируем сообщение
        $gMessage = new GroupMessage();
        $gMessage
            ->setFrom('comment_demon')
            ->setGroups(['blog_' . $blog->getId()])
            ->setText(['comment' => $comment_text])
            ->setEvent('new_comment') //будет сгенерирован на клиенте
        ;

        //отсылаем
        $api = $this
            ->container
            ->get('event_dispatcher')
            ->dispatch(GroupMessage::NEW_MESSAGE, $gMessage)
            ->getResult() //HawkApi
        ;

        //если возникли ошибки пишем их в лог
        if($api->hasErrors()){
            $logger = $this->get('logger');
            $logger->error('Error sending message: ' . print_r($api->getErrors(), 1));
        }
    }

    protected function getBlog($blog_id)
    {
        $em = $this->getDoctrine()
            ->getManager();

        $blog = $em->getRepository('BloggerBlogBundle:Blog')->find($blog_id);

        if (!$blog) {
            throw $this->createNotFoundException('Unable to find Blog post.');
        }

        return $blog;
    }

}


