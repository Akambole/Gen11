<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
class AccountsController extends Controller
{
   
    public function showAccounts(){
         $accounts = Account::all();
	      return view('accounts-show',compact('accounts'));
   }
    public function showAddAccountForm() {
            return view('addAccount-show');

   }
   public function addAccount(Request $request){
   	      $AccountName = $request->account_name;
   	      $AccountNumber = $request->account_number;
   	      $BankName = $request->bank_name;
   	      $BankBranch = $request->bank_branch;
   	      Account::create(
   	      	[
   	      		'account_name'=>$AccountName,
   	      		'account_number'=>$AccountNumber,
   	      		'bank_name'=>$BankName,
   	      		'bank_branch'=>$BankBranch
   	      	]);
   	      return redirect()->route('accounts.show');
   	      
   }
   public function destroy($id){
          Account::destroy($id);
          return redirect()->route('accounts.show');
   }
   public function showEditForm($id){
          $account = Account::find($id);
          return view('update-account',compact('id','account'));

   }
   public function updateAccount(Request $request,$id){
          $AccountName = $request->account_name;
          $AccountNumber = $request->account_number;
          $BankName = $request->bank_name;
          $BankBranch = $request->bank_branch;
          $account = Account::find($id);
          $account->update(
               [
                  'account_name'=>$AccountName,
                  'account_number'=>$AccountNumber,
                  'bank_name'=>$BankName,
                  'bank_branch'=>$BankBranch
               ]);
          return redirect()->route('accounts.show');

   }



}
