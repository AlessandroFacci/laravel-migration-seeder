@extends('layouts.app')

@section('main-content')
<section class="container mt-5">
  @forelse ($trains as $train)

  {{dd($trains)}}
  
      <ul>
       <li>
         <strong>Azienda:</strong> {{$train->azienda}}
       </li>
      </ul>
  @empty
  <h3>Non ci sono risultati</h3>
      
  @endforelse
 </section>
@endsection

