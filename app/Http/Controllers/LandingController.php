<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Facades\App\Helpers\YGH;

class LandingController extends Controller
{
    public function __invoke() {
        $allCards = YGH::getAllCards();
        return view('pages.index', ['allCards' => $allCards,]);
    }
}
