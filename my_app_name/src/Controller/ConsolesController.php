<?php

namespace App\Controller;

use App\Controller\AppController;



class ConsolesController extends AppController
{
    public function initialize(): void
    {
        parent::initialize();

        $this->loadComponent('Paginator');
        $this->loadComponent('Flash'); // Include the FlashComponent
    }

    public function index()
    {
        $this->loadComponent('Paginator');
        $consoles = $this->Paginator->paginate($this->Consoles->find());
        $this->set(compact('consoles'));
    }

    public function view($slug = null)
{
    $consoles = $this->Consoles->findBySlug($slug)->firstOrFail();
    $this->set(compact('consoles'));
}

public function add()
    {
        $consoles = $this->Consoles->newEmptyEntity();
        if ($this->request->is('post')) {
            $consoles = $this->Consoles->patchEntity($consoles, $this->request->getData());

            // Hardcoding the user_id is temporary, and will be removed later
            // when we build authentication out.
            $consoles->user_id = 1;

            if ($this->Consoles->save($consoles)) {
                $this->Flash->success(__('Your consoles has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add your consoles.'));
        }
        // Get a list of tags.
        $tags = $this->Consoles->Tags->find('list')->all();

        // Set tags to the view context
        $this->set('tags', $tags);

        $this->set('consoles', $consoles);
    }

    public function edit($slug)
    {
        $consoles = $this->Consoles
            ->findBySlug($slug)
            ->contain('Tags') // load associated Tags
            ->firstOrFail();
        if ($this->request->is(['post', 'put'])) {
            $this->Consoles->patchEntity($consoles, $this->request->getData());
            if ($this->Consoles->save($consoles)) {
                $this->Flash->success(__('Your consoles has been updated.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to update your consoles.'));
        }
    
        // Get a list of tags.
        $tags = $this->Consoles->Tags->find('list')->all();
    
        // Set tags to the view context
        $this->set('tags', $tags);
    
        $this->set('consoles', $consoles);
    }

public function delete($slug)
{
    $this->request->allowMethod(['post', 'delete']);

    $consoles = $this->Consoles->findBySlug($slug)->firstOrFail();
    if ($this->Consoles->delete($consoles)) {
        $this->Flash->success(__('The {0} consoles has been deleted.', $consoles->title));
        return $this->redirect(['action' => 'index']);
    }
}

public function tags()
{
    // The 'pass' key is provided by CakePHP and contains all
    // the passed URL path segments in the request.
    $tags = $this->request->getParam('pass');

    // Use the ConsolesTable to find tagged Consoles.
    $consoles = $this->Consoles->find('tagged', [
            'tags' => $tags
        ])
        ->all();

    // Pass variables into the view template context.
    $this->set([
        'Consoles' => $consoles,
        'tags' => $tags
    ]);
}

}