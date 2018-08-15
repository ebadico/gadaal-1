<ul class="list-group">
  <a href="{{ route('home') }}">
   <li class="list-group-item">Home</li></a>
   <a href="{{ route('surveys') }}">
   <li class="list-group-item">Surveys</li>
  </a>
  @role('Admin')
  <a href="{{ route('towns') }}">
   <li class="list-group-item">Towns</li>
  </a>
  <a href="{{ route('authindex') }}">
   <li class="list-group-item">Users </li></a>
  <a href="{{ route('activity') }}">
   <li class="list-group-item">activity </li></a>
  @endrole

 </ul>