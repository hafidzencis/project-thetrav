<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use App\Models\TransactionDetail;
use App\Models\TravelPackage;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index($id)
    {  
        

        $item = Transaction::with(['user','travel_packages','details'])->findOrFail($id);
        // $var = [];
        // foreach ($item->details as $det) {
        //     $var[] = $det;
        // }

        // dd($var);
        return view('pages.checkout',[
            'item' => $item

        ]);
    }


    public function process($id){
        $travel_packages = TravelPackage::findOrFail($id);
    
        $transaction = Transaction::create([
            'travel_package_id' => $id,
            'user_id' => Auth::user()->id,
            'additional_visa' => 0,
            'transaction_total' => $travel_packages->price,
            'transaction_status' => 'IN_CART',
            'updated_at' => now(),
            'created_at' => now()
        ]);

        TransactionDetail::create([
            'transaction_id' => $transaction->id,
            'username' => Auth::user()->username,
            'nationality' => 'ID',
            'is_visa' => false,
            'doe_passport' => Carbon::now()->addYears(),
            'updated_at' => now(),
            'created_at' => now()
        ]);

        return redirect()->route('checkout',$transaction->id);
    }


    public function create(Request $request,$id){
        $request->validate([
            'username' => 'required|string|exists:users,username',
            'is_visa' => 'required|boolean',
            'doe_passport' => 'required'
        ]);

        $data = $request->all();
        $data['transaction_id'] = $id;

        TransactionDetail::create($data);

        $transaction = Transaction::with(['travel_packages'])->findOrFail($id);


        if ($request->is_visa) {
            # code...

            $transaction->transaction_total += 1000000;
            $transaction->additional_visa += 1000000;
        }

        $transaction->transaction_total += $transaction->travel_packages->price;

        $transaction->save();

        return redirect()->route('checkout',$id);
    }

    public function remove(Request $request, $detail_id){

        $item = TransactionDetail::findOrFail($detail_id);

        $transaction = Transaction::with(['details','travel_packages'])
            ->findOrFail($item->transaction_id);

        if ($item->is_visa) {
            # code...

            // $transaction->transaction_total -= 1000000;
            $transaction->additional_visa -= 1000000;
        }

        $transaction->transaction_total -= $transaction->travel_packages->price;

        $transaction->save();
        $item->delete();

        return redirect()->route('checkout',$item->transaction_id);
    }



    public function success(Request $request, $id)
    {
        $transaction = Transaction::findOrFail($id);
        $transaction->transaction_status = 'PENDING';

        $transaction->save();

        return view('pages.success_checkout');
    }
}
