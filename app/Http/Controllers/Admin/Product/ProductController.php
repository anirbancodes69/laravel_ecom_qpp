<?php

namespace App\Http\Controllers\Admin\Product;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Yajra\DataTables\DataTables;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request){
        if ($request->ajax()) {
            $data = Product::all();

            return Datatables::of($data)
                ->addColumn('action', function ($row) {
                    $btn = '<button class="btn btn-sm btn-primary" onclick="edit(' . $row->id . ')">Edit</button>&nbsp;';
                    $btn .= '<button class="btn btn-sm btn-danger" onclick="delete(' . $row->id . ')">Delete</button>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('admin.content.product.products.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}