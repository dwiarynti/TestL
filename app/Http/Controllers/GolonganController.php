<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Golongan;
class GolonganController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function index()
     {
         $comments=Golongan::all();
         return Response::json($comments,200);
     }


}
