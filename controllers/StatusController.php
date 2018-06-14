<?php

class StatusController extends Controller
{
    public function indexAction()
    {
        $user=$this->session->get('user');
        $statuses=$this->db_manager->get('Status')
        ->fetchAllPersonalArchivesByUserId($user['id']);

        return $this->render(array(
            'statuses'=>$statuses,
            'body'=>'',
            '_token'=>$this->generateCsrfToken('status/post'),
        ));
    }


    public function postAction()
    {
        if(!$this->request->isPost()){
            $this->forward404();
        }

        $token=$this->request->getPost('token');
        if(!$this->checkCsrfToken('status/post',$token)){
            return $this->redirect('/');
        }

        $body=$this->request->getPost('body');


        








    }
























    
}

