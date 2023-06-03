<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Field extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'type', 'atribut', 'required', 'form_id'];

    /*protected $fillable2 = ['name', 'atribut', 'required', 'form_id'];

    protected $fillable3 = ['atribut', 'required', 'form_id'];

    protected $fillable4 = ['name', 'required', 'form_id'];

    protected $fillable5 = ['name', 'type', 'required', 'form_id'];

    protected $fillable6 = ['type', 'atribut', 'required', 'form_id'];

    protected $fillable7 = ['type','required', 'form_id'];*/

    public function form()
    {
        return $this->belongsTo(Forms::class);
    }

    public function values()
    {
        return $this->hasMany(Value::class);
    }
}
