<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DataTables\ComplaintDataTable;

class HomeController extends Controller
{

    /**
     * Show the admin dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function adminDashboard(ComplaintDataTable $dataTable)
    {
        return $dataTable->render('admin.index');

    }

    /**
     * Show the csr dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function csrDashboard(ComplaintDataTable $dataTable)
    {
        return $dataTable->render('csr.index');

    }

    /**
     * Logout the user.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function logout(Request $request)
    {
        request()->session()->regenerate(true);
        request()->session()->flush();
        return redirect('/');
    }
}
