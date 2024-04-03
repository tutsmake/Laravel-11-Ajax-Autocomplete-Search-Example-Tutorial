<?php
  
namespace App\Http\Controllers;
  
use Illuminate\Http\Request;
use App\Models\Task;
  
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search-form');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function searchAutocomplete(Request $request)
    {
        $res = Task::select("name")
                ->where("name","LIKE","%{$request->term}%")
                ->get();
   
        return response()->json($res);
    }
}