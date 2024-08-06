<?php
namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerController extends BaseController
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
        $model = new CustomerModel();

        $search = $this->request->getGet('search');        
        if ($search) {
            $model->like('name', $search)
                          ->orLike('email', $search)
                          ->orLike('phone', $search)
                          ->orLike('address', $search);
        }

        $data['customers'] = $model->findAll();  
        $data['search'] = $search;      
        return view('customers/index', $data);
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
        return view('customers/create');
    }

    public function store()
    {
        $model = new CustomerModel();
        $data = $this->request->getPost();
        $model->save($data);
        return redirect()->to('/customers');
    }

    public function edit($id)
    {
        $session = session();
        $role =  $session->get('user');
        /*print_r($session->get('user'));
        die;*/
        if (!isset($role)) { 
             return redirect()->to('/login');
        }
        $model = new CustomerModel();
        $data['customer'] = $model->find($id);
        return view('customers/edit', $data);
    }

    public function update($id)
    {
        $model = new CustomerModel();
        $data = $this->request->getPost();
        $model->update($id, $data);
        return redirect()->to('/customers');
    }

    public function delete($id)
    {
        $model = new CustomerModel();
        $model->delete($id);
        return redirect()->to('/customers');
    }
    public function search()
    {
        $model = new CustomerModel();
        $query = $this->request->getGet('query');
        $data['customers'] = $model->like('name', $query)
                                    ->orLike('email', $query)
                                    ->findAll();
        return view('customers/index', $data);
    }
}
