<?php

namespace App\Http\Controllers\Front;

use Potassium\App\Traits\FileManipulation;
use Potassium\App\Http\Controllers\Controller;

class FrontController extends Controller
{
	use FileManipulation;

	public function index()
	{
        $data = [];

		return view('front.pages.home', compact('data'));
	}
}
