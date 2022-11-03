@extends('template')

@section('title','Home')

@section('content')

<h3 class="text-center">List Mahasiswa</h3> 
<h6 class="text-center">Kelas E</h6>

<!-- <div >


</div> -->

<div class="row"  >
    @foreach($mahasiswa as $m)
  <div class="col-sm-3 md-3">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">{{ $m['nama']}}</h5>
        <p class="card-text">{{ $m['nim']}}</p>
        <p class="card-text">{{ $m['major']}}</p>
        <p class="card-text">{{ $m['gender']}}</p>
        @if($m['portofolio'])
        
        <a href="{{$m['portofolio']}}" class="btn btn-primary">View Portofolio</a>
        @else
        <p class="card-text">No Portofolio</p>
        @endif
      </div>   
    </div>
  </div>
  @endforeach
</div>

@endsection


