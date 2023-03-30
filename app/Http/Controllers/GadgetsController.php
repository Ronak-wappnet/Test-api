<?php

namespace App\Http\Controllers;

use App\Models\Gadget;
use Illuminate\Http\Request;

class GadgetsController extends Controller
{
    public function index()
    {
        $gadget = Gadget::all();
        return response()->json([
            'gadgets' => $gadget
        ]);
    }
    
    public function create(Request $request)
    {
        $gadget = new Gadget;
        $gadget->gadgets_name = $request->gadgets_name;
        $gadget->emp_id = $request->emp_id;
        $gadget-> save();

        return response()->json([
            'message' => 'Gadget added successfully',
            'gadget' => $gadget,
        ]);
    }


    public function update(request $request,$id)
    {
        $gadget = Gadget::find($id);
        $gadget->gadgets_name = $request->gadgets_name;
        $gadget->update();
        return response()->json([
            'gadgets' => $gadget,
        ]);
    }

    public function delete($id)
    {
        $gadget = Gadget::find($id);
        $gadget->delete();
        return response()->json([
            'message' => 'gadget deleted successfully',
        ]);
    }
}
