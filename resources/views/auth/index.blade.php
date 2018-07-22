@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                                <div class="card-body">
                                	<table class="table table-bordered">
                       <thead class="thead-dark">
                           <tr> 
                               <th>ID</th>
                               <th>Full Name</th>
                                <th>Email</th>
                                <th>Created At</th>

                              

                           </tr>
                       </thead>
                   @foreach ($users as $user)
                       <tbody>

                           <tr>
                               <td>{{$user->id}}
                               </td>
                               <td>{{$user->name}}</td>
                               <td>{{$user->email}}</td>
                               <td>{{$user->created_at}}</td>

                               <!-- <td>
                                <a href="{{ route('authshow',$user->id) }}">more info</a>
                              </td> -->
                               
                           </tr>
                       </tbody>
                     @endforeach

                   </table>
								</div>
			</div>
		</div>
	</div>
</div>








 @endsection