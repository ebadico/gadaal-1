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
                <div class="card-body">
                    <ol class="list-group list-group-flush">
                    <li class="list-group-item">Extra Cash: 
                      <span class="badge badge-primary badge-pill">{{$survey->extracash}}</span></li>
                    <li class="list-group-item">Bribe: 
                          <span class="badge badge-primary badge-pill">{{$survey->bribe}}</span></li>
                    <li class="list-group-item">A lot of Money: 
                          <span class="badge badge-primary badge-pill">{{$survey->alotofmoney}}</span></li>
                    <li class="list-group-item">keeps Money: 
                          <span class="badge badge-primary badge-pill">{{$survey->kept}}</span></li>
                    <li class="list-group-item">Income:
                          <span class="badge badge-primary badge-pill">{{$survey->income}}</span></li>
                    <li class="list-group-item">Invoice:
                          <span class="badge badge-primary badge-pill">{{$survey->invoice}}</span></li>
                    <li class="list-group-item">Water Cheating:
                          <span class="badge badge-primary badge-pill">{{$survey->cheating}}</span></li>
                  </ol>
                  </div>
            </div>
    </div>


    <div class="col-md-4">
            <div class="card">
                <div class="card-header">Quality and Quantity</div>
               <div class="card-body">
                    <ol class="list-group list-group-flush">
                    <li class="list-group-item">Water Test: 
                      <span class="badge badge-primary badge-pill">{{$survey->taste}}</span></li>
                    <li class="list-group-item">Water Dirty: 
                          <span class="badge badge-primary badge-pill">{{$survey->dirtywater}}</span></li>
                    <li class="list-group-item">Washing Clothes: 
                          <span class="badge badge-primary badge-pill">{{$survey->Hardwater}}</span></li>
                    <li class="list-group-item">Slow Water: 
                          <span class="badge badge-primary badge-pill">{{$survey->slowwater}}</span></li>
                    <li class="list-group-item">All Four Taps:
                          <span class="badge badge-primary badge-pill">{{$survey->fourtaps}}</span></li>
                  </ol>
                  </div>
            </div>
    </div>
  </div>

    <div class="row mt-4">
      <div class="col-md-4">
            <div class="card">
                <div class="card-header">Violence</div>
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
                <div class="card-header">Access</div>
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
                <div class="card-header">Health</div>
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
</div>
@endsection
