@extends('layouts.layout')

@section('title', 'Add Retur Pembelian')
@section('header')
    <div class="search col-sm-6">
        <form method="GET" action="{{ URL::TO('/msCustomer/search') }}" class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search for name" aria-label="Search">
            <button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>
          </form>
        <button type="button" class="btn btn-success" id="btnInsert">
        <i class="material-icons">&#xE147;</i><span>Insert</span>
        </button>
    </div>
@endsection
@section('content')
    <form action="" class="border">
            <input type="text" name="dataid" id="dataid" style="display: none">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="first">Kepada Yth</label>
                        <input type="text" readonly class="form-control-plaintext" placeholder="" id="supplier"
                            name="supplier">
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label for="last">No. Faktur</label>
                        <input type="text" readonly class="form-control-plaintext" id="noFaktur" name="noFaktur">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="company">Tgl Faktur</label>
                        <input type="text" readonly class="form-control-plaintext" placeholder=""  id="tglFaktur"
                            name="tglFaktur">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">No PO</label>
                        <input type="tel" readonly class="form-control-plaintext" placeholder="" id="noPO"
                            name="noPO">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Tgl PO</label>
                        <input type="email" class="form-control" placeholder="" id="tglPO"
                            name="tglPO">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Jatuh Tempo</label>
                        <input type="email" class="form-control" placeholder="" id="jatuhTempo"
                            name="jatuhTempo">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="email">Tgl Retur</label>
                        <input type="email" class="form-control" placeholder="" id="tglRetur"
                            name="tglRetur">
                    </div>
                </div>
            </div>
             

    
    
    <table class="table table-striped table-hover" border="1px solid #343e42">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Barang</th>
                <th>Berat</th>
                <th>Harga</th>
                <th>Qty</th>
                <th>Harga</th>
                <th>Sub Total</th>
                {{-- <th>Action</th> --}} 
            </tr>
        </thead>
        <tbody>
           
        </tbody>
        
    </table>
    <div class="d-flex justify-content-center">
            {{-- {{ $fakturbeli->links() }} --}}
    </div>
    <div class="row"><div class="col-md-3"><div class="form-group">
        <label for="company">Sub Total</label>
        <input type="text" readonly class="form-control-plaintext" placeholder=""  id="subTotal"
            name="subTotal">
    </div></div></div>

    <div class="row"><div class="col-md-3"><div class="form-group">
        <label for="company">PPN</label>
        <input type="text" class="form-control" placeholder=""  id="ppn"
            name="diskon">
    </div></div></div>

    <div class="row"><div class="col-md-3"><div class="form-group">
        <label for="company">Total</label>
        <input type="text" readonly class="form-control-plaintext" placeholder=""  id="total"
            name="total">
    </div></div></div>
    
    <div class="editbtnform">
        <button type="submit" class="btn btn-primary">Save Retur Penjualan</button>
    </div>
    

    </form>
@endsection