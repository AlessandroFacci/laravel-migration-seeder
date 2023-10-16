@extends('layouts.app')

@section('main-content')
<section class="container mt-5">
  @forelse ($trains as $train)
  
      <ul>
       <li>
         <strong>Azienda:</strong> {{$train->azienda}}
       </li>
       <li>
        <strong>Stazione di partenza:</strong> {{$train->stazione_di_partenza}}
       </li>
       <li>
        <strong>Stazione di arrivo:</strong> {{$train->stazione_di_arrivo}}
       </li>
       <li>
        <strong>Orario di partenza:</strong> {{$train->orario_di_partenza}}
       </li>
       <li>
        <strong>Orario di arrivo:</strong> {{$train->orario_di_arrivo}}
       </li>
       <li>
        <strong>Codice treno:</strong> {{$train->codice_treno}}
       </li>
       <li>
        <strong>Numero carrozze:</strong> {{$train->numero_carrozze}}
       </li>
       <li>
        <strong>In orario:</strong> {{$train->in_orario}}
       </li>
       <li>
        <strong>Cancellato:</strong> {{$train->cancellato}}
       </li>
      </ul>
  @empty
  <h3>Non ci sono risultati</h3>
      
  @endforelse
 </section>
@endsection

