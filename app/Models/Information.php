<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    use HasFactory;

    protected $table = 'information'; // Set the table name if it differs from the model name
    protected $fillable = ['name', 'email', 'subject', 'message']; // Specify which columns can be mass-assigned

    // You can add additional custom functionality or relationships here as needed
}
