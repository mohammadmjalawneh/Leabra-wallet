<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subcateTable;

class subcategorycotroller extends Controller
{
    function store(Request $request)
    {
        $request->validate([
            'catetype' => 'required',
            'catename' => 'required',
        ]);
        $sub = new subcateTable;
        $sub->cat_id = $request->catetype;
        $sub->user_id = session('user_id');
        $sub->sub_name = $request->catename;
        $sub->save();
        $request->session()->flash('complete', "The register for Subcategory complete");
        return redirect('users/AddSubcategory');
    }
}
