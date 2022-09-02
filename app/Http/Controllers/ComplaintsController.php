<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Complaint;
use App\DataTables\ComplaintDataTable;
use App\DataTables\CsrComplaintDataTable;
use Illuminate\Support\Facades\Auth;
use Yajra\DataTables\Facades\DataTables;

class ComplaintsController extends Controller
{
    /**
     * Show the admin complaints list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminComplaints(ComplaintDataTable $dataTable)
    {
        return $dataTable->render('admin.complaints');
    }
    /**
     * Show the csr complaints list.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function csrComplaints(CsrComplaintDataTable $dataTable)
    {
        return $dataTable->render('csr.complaints');
    }
}
