@extends('layouts.app')

@section('content')
<div class="container">

    <div class="row">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header text-white bg-danger">Personal Information</div>
              <div class="row">
                <div class="card-body">
                  <div class="col-md">

                     <b>Full Name</b>: {{$survey->fullname}}
                      
                      </div>
                      </div>
                  <div class="card-body">

                    <div class="col-md">
                      
                      <b>Phone</b>:{{$survey->phone}}
                     
                      </div>
                    </div>

                    <div class="card-body">

                    <div class="col-md">
                      
                     <b>Gender</b>: {{$survey->gender}}
                      </div>
                    </div>

                    <div class="card-body">

                    <div class="col-md">
                     
                      <b>Age</b>: {{$survey->age}}
                      </div>
                    </div>
                </div>

               
                
          </div>            
        </div>

        <div class="col-md-2">
            <div class="card">
                <div class="card-header text-white bg-danger">Kios</div>
              <div class="row">
                <div class="card-body">
                  <b>Point</b>: {{$survey->point}}

                </div>
              </div>
            </div>
          </div>

    </div>

    <div class="row mt-4">
      <div class="col-md-4">
            <div class="card">
                <div class="card-header text-white bg-primary">Infrastructure</div>
                  <div class="card-body">
                    <ol class="list-group list-group-flush">
                    <li class="list-group-item">Tap Leakege: 
                      <span class="badge badge-primary badge-pill">{{$survey->leak}}</span></li>
                    <li class="list-group-item">Handle Missing: 
                          <span class="badge badge-primary badge-pill">{{$survey->key}}</span></li>
                    <li class="list-group-item">Broken Tap: 
                          <span class="badge badge-primary badge-pill">{{$survey->tap}}</span></li>
                    <li class="list-group-item">Broken Fence: 
                          <span class="badge badge-primary badge-pill">{{$survey->fence}}</span></li>
                    <li class="list-group-item">Broken Gate:
                          <span class="badge badge-primary badge-pill">{{$survey->gate}}</span></li>
                  </ol>
                  </div>
                
            </div>
    </div>

    <div class="col-md-4">
            <div class="card">
                <div class="card-header">Finance</div>
                {{$survey->price}}
                {{$survey->bribe}}
                {{$survey->age}}
            </div>
    </div>


    <div class="col-md-4">
            <div class="card">
                <div class="card-header">Quality and Quantity</div>
                {{$survey->id}}
                {{$survey->gender}}
                {{$survey->age}}
            </div>
    </div>

    <div class="row mt-4">
      <div class="col-md-4">
            <div class="card">
                <div class="card-header">Violence</div>
                {{$survey->id}}
                {{$survey->gender}}
                {{$survey->age}}
            </div>
    </div>

    <div class="col-md-4">
            <div class="card">
                <div class="card-header">Access</div>
                {{$survey->id}}
                {{$survey->gender}}
                {{$survey->age}}
            </div>
    </div>


    <div class="col-md-4">
            <div class="card">
                <div class="card-header">Health</div>
                {{$survey->id}}
                {{$survey->gender}}
                {{$survey->age}}
            </div>
    </div>
</div>
@endsection
