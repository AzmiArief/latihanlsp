@extends('dashboard')

@section('content')
<div class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1 class="m-0 text-dark">Data Tarif</h1>
      </div><!-- /.col -->
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item active">Tarif</li>
        </ol>
      </div><!-- /.col -->
    </div><!-- /.row -->
  </div><!-- /.container-fluid -->
</div>

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <a href="{{ route('addtarif') }}"><button class="btn btn-primary">Tambahkan Data Daya</button></a>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Daya</th>
                  <th>Tarif</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($data as $item => $items)
                  <tr>
                    <td>{{ $items->id }}</td>
                    <td>{{$items->daya}}</td>
                    <td>{{ $items->tarifperkwh}}</td>
                    <td>
                      <a href="{{ route('edittarif', $items->id) }}"><button class="btn btn-warning text-white">Update</button></a>
                      <a href="{{ route('deletetarif', $items->id) }}"><button class="btn btn-danger">Delete</button></a>
                    </td>
                  </tr>
                  @endforeach
            </table>
          </div>
          <!-- /.card-body -->
        </div>
      </div>
    </div>
  </div>
</section>
@endsection