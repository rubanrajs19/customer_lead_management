<?php
namespace App\Controllers;

use App\Models\LeadModel;
use CodeIgniter\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        $leadModel = new LeadModel();
        $data = [
            'leads_per_status' => $leadModel->select('status, COUNT(*) as count')->groupBy('status')->findAll(),
            // Add other statistics as needed
        ];
        return view('dashboard', $data);
    }
}
