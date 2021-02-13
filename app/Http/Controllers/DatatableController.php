<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Yajra\Datatables\Datatables;

class DatatableController extends Controller
{
        public function __construct()
    {
        $this->middleware('auth');
    }

        public function getDatatable(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all();
            
            return DataTables::of($users)
                ->addColumn('action', function ($users) {
                           $btn = '<a id="btn-view" class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                           $btn = $btn.'<a href="#delete-'.$users->id.'" class="edit btn btn-danger btn-sm">Delete</a>';
         
                            return $btn;            
                        })
            ->editColumn('id', 'ID: {{$id}}')

            ->addColumn('delete', function ($users) {
                return '<a href="#delete-'.$users->id.'" <button class="btn btn-danger btn-sm"><i class="icofont icofont-check-circled"></i></button></a>';
            })
            ->rawColumns(['delete' => 'delete','action' => 'action'])

            ->make(true);
        }
            
        return view('dashboard');
    }

    public function getDtLikeExcel(Request $request)
    {
        if ($request->ajax()) {
            $users = User::all();
            
            return DataTables::of($users)
                ->addColumn('action', function ($users) {
                           $btn = '<a id="btn-view" class="edit btn btn-info btn-sm">View</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-primary btn-sm">Edit</a>';
                           $btn = $btn.'<a href="javascript:void(0)" class="edit btn btn-danger btn-sm">Delete</a>';
         
                            return $btn;            
                        })
            ->editColumn('id', 'ID: {{$id}}')

            ->addColumn('delete', function ($users) {
                return '<a href="#delete-'.$users->id.'" <button class="btn btn-danger btn-sm"><i class="icofont icofont-check-circled"></i></button></a>';
            })
            ->rawColumns(['delete' => 'delete','action' => 'action'])

            ->make(true);
        }
            
        return view('dashboard-example');
    }

}
