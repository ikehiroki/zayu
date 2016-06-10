<?php

namespace App\Controller;

use App\Controller\AppController;

/**
 * Principles Controller
 *
 * @property \App\Model\Table\PrinciplesTable $Principles
 */
class PrinciplesController extends AppController {

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index() {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $principles = $this->paginate($this->Principles);

        $id = $this->Auth->user('id');
        $user = $this->Principles->Users->get($id, [
            'contain' => ['Principles']
        ]);

        $this->set(compact('principles', 'user'));
        $this->set('_serialize', ['principles']);
    }

}
