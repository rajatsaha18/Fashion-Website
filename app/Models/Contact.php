<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    private static $user;
    private static $contact;

    public static function newContact($request){
        self::$user = new Contact();
        self::$user->name       = $request->name;
        self::$user->email      = $request->email;
        self::$user->mobile     = $request->mobile;
        self::$user->address    = $request->address;
        self::$user->message    = $request->message;
        self::$user->save();
    }

    public static function deleteContact($id){
        self::$contact = Contact::find($id);
        self::$contact->delete();
    }
}
