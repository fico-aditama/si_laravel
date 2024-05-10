@extends('layouts.admin')

@section('content')

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">List Supplier</h1>
</div>

<hr>

<div class="card-header py-3" align="right">
    <button type="button" class="d-none d-sm-inline-block btn btn-sm btn￾primary shadow-sm" data-toggle="modal" data-target="#modal-add-supplier">
        <i class="fas fa-plus fa-sm text-white-50"></i> Tambah
    </button>
</div>

<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr align="center">
                        <th width="5%">Kode Supplier</th>
                        <th width="25%">Nama Supplier</th>
                        <th width="20%">Alamat</th>
                        <th width="15%">Telepon</th>
                        <th width="15%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    @foreach($suppliers as $supplier)
                    <tr>
                        <td>{{ $supplier->kd_supp }}</td>
                        <td>{{ $supplier->nm_supp }}</td>
                        <td>{{ $supplier->alamat }}</td>
                        <td>{{ $supplier->telepon }}</td>
                        <td align="center">
                            <a href="{{route('supplier.edit' ,[$supplier->kd_supp])}}" class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm">
                                <i class="fas fa-edit fa-sm text-white-50"></i>Edit Akses
                            </a>
                            <a href="/supplier/hapus/{{ $supplier->kd_supp }}" onclick="return confirm('Yakin Ingin menghapus data?')" class="d-none d-sm-inline-block btn btn-sm btn-danger shadow-sm">
                                <i class="fas fa-trash-alt fa-sm text-white-50"></i> Hapus
                            </a>
                        </td>
                    </tr>
                    <?php $no++; ?>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>


<div class="modal fade" id="modal-add-supplier" tabindex="-1" role="dialog" aria-labelledby="modal-add-supplierTitle" aria-hidden="true">

    <div class="modal-dialog modal-dialog-scrollable" role="document">

        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title" id="modal-add-supplierTitle">Tambah Data Barang</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>


            <form action="#" method="POST">
                @csrf

                <div class="modal-body">

                    <div class="form-group">
                        <label for="ControlFormInput">Kode Supplier</label>
                        <input type="text" name="addkdsupp" id="addkdsupp" class="form-control" maxlegth="5" id="ControlFormInput">
                    </div>

                    <div class="form-group">
                        <label for="ControlFormInput">Nama Supplier</label>
                        <input type="text" name="addnmsupp" id="addnmsupp" class="form-control" id="ControlFormInput">
                    </div>

                    <div class="form-group">
                        <label for="ControlFormInput">Alamat</label>
                        <input type="text" name="addaml" id="addaml" class="form-control" id="ControlFormInput">
                    </div>

                    <div class="form-group">
                        <label for="ControlFormInput">Telepon</label>
                        <input type="number" name="addtel" id="addtel" class="form-control" id="ControlFormInput">
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <input type="submit" class="btn btn-primary btn-send" value="Simpan">
                </div>


            </form>

        </div>
    </div>
</div>
@endsection