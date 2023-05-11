<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bitBankController extends Controller
{
    public function index(){
            return view('index');
        }
    public function pricing(){
            return view('pricing');
        }
    public function faq(){
            return view('faq');
        }  
    public function contact(){
            return view('contact');
        }
    public function contactForm(Request $request){
            return view('contact',['data' => $request ]);
        }           
    public function login(){
            return view('login');
        }
    public function loginForm(Request $request){
            return view('login',['data' => $request ]);
        }            

                                        
   
}
