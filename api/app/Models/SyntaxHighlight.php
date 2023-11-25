<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SyntaxHighlight extends Model
{
    protected $fillable = ['label', 'value'];
    public $timestamps = false;
}
