<?php

namespace App\Http\Controllers;

use App\Models\VilleFranceFree;
use Illuminate\Http\Request;

class VilleFranceFreeController extends Controller
{
    public function index()
    {
        return VilleFranceFree::all(); // renvoie toutes les villes
    }
}