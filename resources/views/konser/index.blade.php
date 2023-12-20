@extends('konser.template')
@section('content')
    <div class="container">
        <div class="row mt-5">
 
            <div class="col-md">
                <div class="card">
                    <div class="card-header text-center">
                        <h2> DATA REGISTRASI KONSER IQBAAL </h2>
                    </div>
                    <div class="card-body">
                        <a href="{{ url('/konser/create') }}" class="btn btn-success btn-sm" title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama</th>
                                        <th>Email</th>
                                        <th>Nomor WhatsApp</th>
                                        <th>Pilihan Tempat Duduk</th>
                                        <th>Jumlah Tiket</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($konser as $c)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $c->nama }}</td>
                                        <td>{{ $c->email }}</td>
                                        <td>{{ $c->nomorwhatsapp }}</td>
                                        <td>{{ $c->pilihantempatduduk }}</td>
                                        <td>{{ $c->jumlahtiket }}</td>
 
                                        <td>
                                            <a href="{{ url('/konser/' . $c->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/konser/' . $c->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
 
                                            <form method="POST" action="{{ url('/konser' . '/' . $c->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm('apakah ingin di hapus?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
 
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
