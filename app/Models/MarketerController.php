<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class MarketerController extends Model
{
    public function index()
    {
        return view('marketer.index');
    }

    public function create()
    {
        return view('marketer.create');
    }
}
