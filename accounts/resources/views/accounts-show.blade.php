@extends('layouts.master')

@section('main')

            <!-- Main component for call to action -->
            <div class="container text-center">
                <!-- heading -->
                <h1 class="pull-xs-left">
                    Your Bank Accounts
                </h1>
                <div class="pull-xs-right">
                    <a class="btn btn-primary" href="{{route('addAccount.show')}}" role="button">
                        New Account +
                    </a>
                </div>

                <div class="clearfix">
                </div>
                <br>
                
                <!-- ================ Accounts==================== -->

                <table>
        
                    <tr>
                      <th>Account Name</th>
                      <th>Account number</th>
                      <th>Bank Name</th>
                      <th>Bank Branch</th>
                      <th>Update or Delete Account</th>
                    </tr>
                 @foreach($accounts as $account)
                 <tr>
                   <td>{{$account->account_name}}</td> 
                   <td>{{$account->account_number}}</td>
                   <td>{{$account->bank_name}}</td>
                   <td>{{$account->bank_branch}}</td>
                   <td>
                     <a class="card-link" href="{{route('accounts.edit',$account->id)}}">
                                Edit Account Details
                            </a>

                    <form action="{{route('accounts.delete',$account->id)}}" class="pull-xs-right5 card-link" method="POST" style="display:inline">
                                {{csrf_field()}}
                                {{method_field('DELETE')}}
                                <input class="btn btn-sm btn-danger" type="submit" value="Delete">
                                </input>
                            </form></td>
                 </tr>
                 @endforeach
                <table>












                
            </div>
            <!-- /container -->
@endsection           
