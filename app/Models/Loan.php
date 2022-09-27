<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loan extends Model
{
    use HasFactory;
	
	protected $fillable = ['user_id', 'amount', 'duration', 'repayment_freq', 'interest_rate', 'arr_fee'];
	
    public function user(){
        return $this->belongsTo(User::class);
    }

    public function repayment(){
        return $this->hasMany(Repayment::class);
    } 

}
