<?php

namespace App\Models\Todos;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Todo extends Model
{
    use HasFactory;


    protected $with=['TodoType'];

    protected $fillable=['title','description','type_id'];
    protected $guarded = ['*'];


    public function TodoType(){

        return $this->hasOne(TodoType::class,'id','type_id');
    }
}
