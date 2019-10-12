<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{

    protected $fillable = [
        'user_id',
        'type_id',
        'category_id',
        'account_id',
        'value',
        'currency',
        'notes',
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
    public function type(){
        return $this->belongsTo(Type::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function account(){
        return $this->belongsTo(Account::class);
    }
}
