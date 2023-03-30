<?php

namespace App\Http\Controllers;

use App\Models\Marks;
use GuzzleHttp\Psr7\Response;
use Illuminate\Http\Request;
use PhpParser\Builder\Function_;
use PhpParser\Node\Expr\FuncCall;

class MarksController extends Controller
{
    public function index()
    {
        $marks = Marks::get();
        return response()->json([
            'marks' => $marks
        ]);
    }

    public function add(Request $request){

        $marks = new Marks;
        $marks->subject = $request->subject;
        $marks->marks = $request->marks;
        $marks->student_id = $request->student_id;
        $marks->save();
        
        return response()->json([
            'message' => 'marks added successfully',
            'marks' => $marks,
        ]);         
    }

    
}
