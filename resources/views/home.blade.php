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
                               <th>Created at</th>
                           </tr>
                       </thead>
                   @foreach ($surveys as $survey)
                       <tbody>

                           <tr><a href="{{$survey->id}}">
                               <td>{{$survey->id}}</td>
                               <td>{{$survey->point}}</td>
                               <td>{{$survey->status}}</td>
                               <td>
                                {{$survey->created_at->format('d/m/Y')}} </td>
                           </tr></a>
                       </tbody>
                     @endforeach

                   </table>
            </div>

            
        </div>
    </div>
</div>
@endsection
