<?php
namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class ContactController extends Controller
{
    public function show(){
    	return view('frontend.contact.show');
    }
}