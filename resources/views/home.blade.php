@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2">
            <div class="card">
               <div class="card-header">Nav</div>
               <ul class="list-group">
                  <a href="{{ route('home') }}">
                 <li class="list-group-item">Home
                 </li></a>
                   <a href="{{ route('home') }}">
                 <li class="list-group-item">Users
                 </li></a>
               </ul>
            </div>

        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                
                   <table class="table table-bordered">
                       <thead class="thead-dark">
                           <tr> 
                               <th>ID</th>
                               <th>Water kiosk</th>
                                <th>Status</th>
                                <th>Gender</th>
                                <th>age</th>
                               <th>Created at</th>
                                <th>Action</th>

                           </tr>
                       </thead>
                   @foreach ($surveys as $survey)
                       <tbody>

                           <tr>
                               <td><a href=""> {{$survey->id}}</a>
                               </td>
                               <td>{{$survey->point}}</td>
                               <td>{{$survey->gender}}</td>
                               <td>{{$survey->age}}</td>
                               <td>{{$survey->status}}</td>
                               <td>
                                {{$survey->created_at->format('d/m/Y')}} </td>
                              <td>
                                <a href="{{ route('home.show',$survey->id) }}">more info</a>
                              </td>
                           </tr>
                       </tbody>
                     @endforeach

                   </table>
            </div>

            
        </div>
    </div>
</div>
@endsection
