<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['fname', 'lname', 'phone', 'email', 'state', 'country','company', 'msg_type', 'message'];
}
