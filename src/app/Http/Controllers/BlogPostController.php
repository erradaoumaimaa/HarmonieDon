<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogPostController extends Controller
{
        public function create() {
            return view('association.create');
        }

        public function store(Request $request) {

        }


}
