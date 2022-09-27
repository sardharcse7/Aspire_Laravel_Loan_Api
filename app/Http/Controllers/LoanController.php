<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Loan;

class LoanController extends Controller
{
   
	public function index(Request $request)
    {
        $loans = auth()->user()->loans;
        return response()->json([
            'success' => true,
            'data' => $loans
        ]);
    }
	
	
	public function show(Request $request, $id)
    {       
		$loan = auth()->user()->loans()->find($request->user()->id);
		if ($request->user()->id !== $loan->user_id){
            return response()->json(['message' => 'You can only see your own loans.'], 403);
        }
		return response()->json([
            'success' => true,
            'data' => $loan->toArray()
        ], 400);
    }
		
	public function store(Request $request)
    {
        $this->validate($request, [
            'amount' => 'required',
			'duration' => 'required',
			'repayment_freq' => 'required',
			'interest_rate' => 'required',
			'arr_fee' => 'required'
        ]);
 
        $loan = new Loan();
        $loan->amount = $request->amount;
		$loan->duration = $request->duration;
        $loan->repayment_freq = $request->repayment_freq;
		$loan->interest_rate = $request->interest_rate;
        $loan->arr_fee = $request->arr_fee;
 
        if (auth()->user()->loans()->save($loan))
            return response()->json([
                'success' => true,
                'data' => $loan->toArray()
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'loan not added'
            ], 500);
    }
	
    public function update(Request $request, $id)
    {
        $loan = auth()->user()->loans()->find($id);
 
        if (!$loan) {
            return response()->json([
                'success' => false,
                'message' => 'loan not found'
            ], 400);
        }
		
		if ($loan->status == 'Pending'){
            if (isset($request->amount)){
                $loan->amount = $request->amount;
            }
            if (isset($request->duration)){
                $loan->duration = $request->duration;
            }
            if (isset($request->arr_fee)){
                $loan->arr_fee = $request->arr_fee;
            }
            if (isset($request->repayment_freq)){
                $loan->repayment_freq = $request->repayment_freq;
            }
            if (isset($request->interest_rate)){
                $loan->interest_rate = $request->interest_rate;
            }
        }
        else {
            return response()->json(['message' => 'Your loan status is not editable.', 'status' => $loan->status], 403);
        }
        
        $updated = $loan->fill($request->all())->save();
 
        if ($updated)
            return response()->json([
                'success' => true,
				'message' => 'Loan updated successfully'
            ]);
        else
            return response()->json([
                'success' => false,
                'message' => 'Loan can not be updated'
            ], 500);
    }
 
    public function destroy($id)
    {
        $loan = auth()->user()->loans()->find($id);
 
        if (!$loan) {
            return response()->json([
                'success' => false,
                'message' => 'loan not found'
            ], 400);
        }
 
        if ($loan->delete()) {
            return response()->json([
                'success' => true
            ]);
        } else {
            return response()->json([
                'success' => false,
                'message' => 'loan can not be deleted'
            ], 500);
        }
    }
	
	public function __construct(){
        $this->middleware('auth:api');
    }
}
