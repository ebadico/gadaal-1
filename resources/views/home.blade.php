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
          
            
                    
            <div class="card">

                <div class="card-header">Dashboard</div>
                <div class="card-body">
                  <div class="row text-center">
              
              <div class="col-md">
                <button type="button" class="btn btn-primary">
                Infrastructure:  <span class="badge badge-light">{{count($infrastructure)}}</span>
                </button>
              </div>
              <div class="col-md">
                <button type="button" class="btn btn-primary">
                Quantity:  <span class="badge badge-light">{{count($quantity)}}</span>
                </button>
              </div>
              <div class="col-md">
                <button type="button" class="btn btn-primary">
                Finance:  <span class="badge badge-light">{{count($finance)}}</span>
                </button>
              </div>
              <div class="col-md">
                <button type="button" class="btn btn-primary">
                Health:  <span class="badge badge-light">{{count($health)}}</span>
                </button>
              </div>
              <div class="col-md">
                <button type="button" class="btn btn-primary">
                Violence:  <span class="badge badge-light">{{count($violence)}}</span>
                </button>
              </div>
              <div class="col-md">
                <button type="button" class="btn btn-primary">
                Access:  <span class="badge badge-light">{{count($access)}}</span>
                </button>
              </div>

            </div>
                  <div class="row" style="margin-top: 10px">
                    
                 @foreach ($counttwons as $count)
                <div class="col-md-3 text-center d-none d-md-block d-lg-block">     
                <img class="rounded-circle" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Generic placeholder" width="140" height="140">  
                <h4>
                  <a href="">{{$count['month'].' '.$count['year']}}</a><br>
                      <span class="badge">({{$count['total']}})</span>
                </h4>  
                </div>
                @endforeach 
               </div>
                </div>
                
            </div>                  

            <table class="table table-bordered table-striped">
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
                               <td>{{$survey->town->name}}</td>
                               <td>{{$survey->status}}</td>
                               <td>{{$survey->gender}}</td>
                               <td>{{$survey->age}}</td>
                               <td>
                                {{$survey->created_at->format('d/m/Y')}} </td>
                              <td>
                                <a href="{{ route('home.show',$survey->id) }}">more info</a>
                              </td>
                           </tr>
                       </tbody>
                     @endforeach

                   </table>
                   <div class="col-md-12 ">
                      {{$surveys->links()}}
                   </div>
                </div>


                  
        </div>
</div>
@endsection
