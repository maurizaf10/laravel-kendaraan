@extends('kendaraans.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Data Kendaraan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('kendaraans.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('kendaraans.update',$kendaraan->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Nomor Plat Kendaraan :</strong>
                    <input type="text" name="plat" value="{{ $kendaraan->plat }}" class="form-control" placeholder="Plat">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Merk Kendaraan :</strong>
                    <input type="text" name="merk" value="{{ $kendaraan->merk }}" class="form-control" placeholder="Merk">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Tipe Kendaraan :</strong>
                    <input type="text" name="tipe" value="{{ $kendaraan->tipe }}" class="form-control" placeholder="Tipe">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">                  
                    <input type="file" name="path" class="form-control" value="{{$kendaraan->path}}"  placeholder="">
                </div>
            </div>
            
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection