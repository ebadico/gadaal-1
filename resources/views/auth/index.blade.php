@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
               <div class="card-header bg-primary">Nav</div>
                   @include('layouts.nav')
              
            </div>

          </div>
        <div class="col-md-10">
                <div class="card-header">{{ __('Register') }} 

                	<a class="float-right" href="{{ route('register') }}">Create New User</a>
                </div>

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
                    <div class="col-md-12 ">
                      {{$users->links()}}
                   </div>
								</div>
			</div>
		</div>
	</div>
</div>








 @endsection