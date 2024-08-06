<?php
namespace App\Controllers;

use App\Models\CustomerModel;

class CustomerController extends BaseController
{
    public function index()
    {
        $model = new CustomerModel();
        $data['customers'] = $model->findAll();
        return view('customers/index', $data);
    }

    public function create()
    {
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
