@extends('layouts.app')

@section('main-content')
<section class="container mt-5">
  <div class="row g-3">
    @forelse ($trains as $train)
    <div class="col-4">
      <div class="card">
        <div class="card-header">
          <strong>{{$train->azienda}}</strong> 
        </div>
        <div class="card-body">
          <ul>
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
             <strong>In orario:</strong> {{$train->in_orario ? 'Sì' : 'No'}}
            </li>
            <li>
             <strong>Cancellato:</strong> {{$train->cancellato ? 'Sì' : 'No'}}
            </li>
           </ul>
        </div>
      </div>
    </div>
    @empty
    <h3>Non ci sono risultati</h3>
     @endforelse
  </div>
 
  
      
  
 </section>
@endsection

