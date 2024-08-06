<?php
namespace App\Controllers;

use App\Models\LeadModel;
use App\Models\CustomerModel;

class LeadController extends BaseController
{
    public function index()
    {
       $session = session();
        $role =  $session->get('user');
        /*print_r($session->get('user'));
        die;*/
        if (!isset($role)) { 
             return redirect()->to('/login');
        }
        $model = new LeadModel();
        $data['leads'] = $model->findAll();
        return view('leads/index', $data);
    }

    public function create()
    {
        $session = session();
        $role =  $session->get('user');
        /*print_r($session->get('user'));
        die;*/
        if (!isset($role)) { 
             return redirect()->to('/login');
        }
        $customerModel = new CustomerModel();
        $data['customers'] = $customerModel->findAll();
        return view('leads/create', $data);
    }

    public function store()
    {
        $model = new LeadModel();
        $data = $this->request->getPost();
        $model->save($data);
        return redirect()->to('/leads');
    }

    public function edit($id)
    {
        $model = new LeadModel();
        $data['lead'] = $model->find($id);
        $customerModel = new CustomerModel();
        $data['customers'] = $customerModel->findAll();
        //print_r($data['lead']);die;
        return view('leads/edit', $data);
    }

    public function update($id)
    {
        $model = new LeadModel();
        $data = $this->request->getPost();
        $model->update($id, $data);
        return redirect()->to('/leads');
    }

    public function delete($id)
    {
        $model = new LeadModel();
        $model->delete($id);
        return redirect()->to('/leads');
    }
    public function search()
    {
        $model = new LeadModel();
        $query = $this->request->getGet('query');
        $data['leads'] = $model->like('description', $query)
                               ->findAll();
        return view('leads/index', $data);
    }
    public function filter($status)
    {
        $model = new LeadModel();
        $data['leads'] = $model->where('status', $status)->findAll();
        return view('leads/index', $data);
    }
    /*public function store()
    {
        $model = new LeadModel();
        $data = $this->request->getPost();
        $model->save($data);

        // Get the user's email (this is a placeholder, adapt as needed)
        $userEmail = 'user-email@example.com';

        $email = \Config\Services::email();
        $email->setTo($userEmail);
        $email->setSubject('New Lead Assigned');
        $email->setMessage('A new lead has been assigned to you.');
        $email->send();

        return redirect()->to('/leads');
    }*/
}
