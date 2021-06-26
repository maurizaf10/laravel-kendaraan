@extends('kendaraans.layout')


 
@section('content')

    



    <div class="row">
        <div class="col-lg-12 margin-tb ">
            <div class="pull-left">
                <h2>Data Kendaraan</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('kendaraans.create') }}"> Tambah Data</a>
                <a href="{{ route('logout') }}" class="btn btn-danger">Logout</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered table-hover ">
        <tr>
            <th>No</th>
            <th>Nomor Plat Kendaraan</th>
            <th>Merk Kendaraan</th>
            <th>Tipe Kendaraan</th>            
            <th>Foto Kendaraan</th>
            <th width="280px">Action</th>
        </tr>
        @foreach ($kendaraans as $kendaraan)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $kendaraan->plat }}</td>
            <td>{{ $kendaraan->merk }}</td>
            <td>{{ $kendaraan->tipe }}</td>            
            <td></td>
            <td>
                <form action="{{ route('kendaraans.destroy',$kendaraan->id) }}" method="POST">                       
                    <a class="btn btn-primary" href="{{ route('kendaraans.edit',$kendaraan->id) }}">Edit</a>
                    <a class="btn btn-primary" href="">Download</a>   
                    @csrf
                    @method('DELETE')      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $kendaraans->links() !!}
      
@endsection