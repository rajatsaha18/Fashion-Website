<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class AdminContactController extends Controller
{
    private $contactInfo;
    public function index(){
        $this->contactInfo = Contact::orderBy('id', 'desc')->get();
        return view('admin.contact.manage',[
            'contactInfo' => $this->contactInfo,
        ]);
    }
}
