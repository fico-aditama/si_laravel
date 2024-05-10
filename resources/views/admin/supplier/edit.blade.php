@extends('layouts.admin')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit Supplier</div>

                    <div class="card-body">
                        <form method="POST" action="{{ route('supplier.update', $supplier->kd_supp) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="kd_supp">Kode Supplier</label>
                                <input type="text" name="kd_supp" id="kd_supp" class="form-control" value="{{ $supplier->kd_supp }}" readonly>
                            </div>

                            <div class="form-group">
                                <label for="nm_supp">Nama Supplier</label>
                                <input type="text" name="nm_supp" id="nm_supp" class="form-control" value="{{ $supplier->nm_supp }}">
                            </div>

                            <div class="form-group">
                                <label for="alamat">Alamat</label>
                                <input type="text" name="alamat" id="alamat" class="form-control" value="{{ $supplier->alamat }}">
                            </div>

                            <div class="form-group">
                                <label for="telepon">Telepon</label>
                                <input type="text" name="telepon" id="telepon" class="form-control" value="{{ $supplier->telepon }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
