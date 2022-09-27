<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Loan;
use App\Models\Repayment;

class RepaymentController extends Controller
{
	
	public function store(Request $request, $id)
    {
        $loan = auth()->user()->loans()->find($id);
		
		//print_R($loan);
		$amt = $loan->amount; 
		$duration = $loan->duration;
		$interest_rate = $loan->interest_rate;
		
		$repay_total = $loan->repayment()->sum('amount');
		$calcLoan = $this->calcLoan($amt,$duration, $interest_rate);
		$amountLeft = $this->amountLeft($calcLoan, $repay_total);
		//exit;
		$this->validate($request, [
           // 'loan_id' => 'required',
            'amount' => 'required'
        ]);
		$req_amt = 0; $excess = 0;
		if($amountLeft >= $request->amount){
           $req_amt = $request->amount;
		}else{
			$excess = 1;
		}
 
        $repayment = new Repayment();
        $repayment->loan_id = $loan->id;
		$repayment->amount = $req_amt;
 
        if ($req_amt != 0 && auth()->user()->repayment()->save($repayment)){
			
		    if ($repay_total >= $calcLoan) {
                $loan->status = 'Completed';
                $loan->save();
            }	
		
            return response()->json([
                'success' => true,
                'data' => $repayment->toArray()
            ]);
				
		}
        else{
			if($excess == 1){
			return response()->json([
                'success' => false,
                'message' => 'You only need to pay '.$amountLeft
            ], 500);
			}else{
            return response()->json([
                'success' => false,
                'message' => 'repayment not added'
            ], 500);
			}
		}
    }
	
	
	public function calcLoan($amt, $duration, $interest_rate){
        $debt = $amt + ($amt * ($duration * $interest_rate / 100));
        return $debt;
    }

    public function amountLeft($calcLoan, $repay_total){
        $debt = $calcLoan - $repay_total;
        return $debt;
    }
}
