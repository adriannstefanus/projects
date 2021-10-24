@extends('layouts.layout')
@section('content')
<div class="px-5">
    <form action="/trPenawaran/insertForm/submit" method="POST">
        @csrf
        <div class="row">
            <div class="form-group col">
                <label>Nomor SO</label>
                <input readonly type="text" class="form-control" id="fieldnoso" name="fieldnoso" value="{{$penawaran->NoSO}}" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Tanggal Order</label>
                <input readonly type="text" class="form-control" id="inserttglOrder" name="inserttglOrder" value="{{$penawaran->TglSO}}" onkeydown="return false">
            </div>
            <div class="form-group col">
                <label>Jatuh Tempo Order</label>
                <input readonly type="text" class="form-control" id="insertjatuhtempoSO" name="insertjatuhtempoSO" value="{{$penawaran->TglJatuhTempoSO}}" onkeydown="return false">
            </div>
        </div>
        <hr class="border border-info">
        <div class="row">
            <div class="form-group col input-group-sm">
                <label>Nama Pelanggan</label>
                <input readonly type="text" class="form-control" id="insertpelanggan" name="insertpelanggan" value="{{$penawaran->customer->Nama}}">
            </div>
            <div class="form-group col input-group-sm">
                <label>Alamat</label>
                <input readonly type="text" class="form-control" id="insertAlamat" name="insertAlamat" value="{{$penawaran->customer->Alamat}}" onkeydown="return false">
            </div>
            <div class="form-group col input-group-sm">
                <label>Nomor Telp.</label>
                <input readonly type="text" class="form-control" id="inserttelp" name="inserttelp" value="{{$penawaran->customer->Telp}}" onkeydown="return false">
            </div>
            <div class="form-group col input-group-sm">
                <label>Email</label>
                <input readonly type="text" class="form-control" id="insertemail" name="insertemail" value="{{$penawaran->customer->Email}}" onkeydown="return false">
            </div>
        </div>
        <hr class="border border-info">

            <table id="trans-table" class="table table-striped table-hover" border="1px solid #343e42">
                <thead>
                    <tr>
                        <th style="width: 20%">Item Barang</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Hanya Potong</th>
                        <th>Harga/pcs</th>
                        <th>Diskon</th>
                        <th>Jumlah</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($penawaran->barangs as $p)
                    <tr>
                        @if($p->bentuk == 'RoundPlate')
                            <td>{{ $p->producttype->tipe }}({{$p->diameter}}x{{$p->tebal}})</td>
                        @else
                            @if($p->bentuk == 'RoundBar')
                                <td>{{ $p->producttype->tipe }}({{$p->diameter}}x{{$p->panjang}})</td>
                            @else
                                <td>{{ $p->producttype->tipe }}({{$p->panjang}}x{{$p->lebar}}x{{$p->tebal}})</td>
                            @endif
                        @endif
                        <td>{{$p->berat}}</td>
                        <td>{{number_format($p->hargaKg,0,',','.')}}</td>
                        <td>{{$p->qty}}</td>
                        @if($p->hanyaPotong == 'Y')
                        <td>Yes</td>
                        @else
                        <td>No</td>
                        @endif
                        <td>{{number_format($p->hargaSatuan,0,',','.')}}</td>
                        <td>{{$p->diskon}}</td>
                        <td>{{number_format($p->totprice,0,',','.')}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="row pl-3">
                <div class="form-group form-inline">
                    <label>Before PPN</label>
                    <div class="input-group ml-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp. </span>
                        </div>
                            <input type="text" readonly class="form-control col-7" id="subTotal" name="subTotal">
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label>PPN</label>
                    <div class="input-group">
                        <input type="text" readonly class="form-control ml-3 col-3" id="ppn" name="ppn">
                        <div class="input-group-append">
                            <span class="input-group-text" id="basic-addon1">%</span>
                          </div>
                    </div>
                </div>
                <div class="form-group form-inline">
                    <label>Keterangan</label>
                    <div class="input-group ml-3">
                        <textarea readonly class="form-control" id="keterangan" name="keterangan">{{$penawaran->keterangan}}</textarea>
                    </div>
                </div>
            </div>
            <div class="row pl-3">
                <div class="form-group form-inline">
                    <label>Grand Total</label>
                    <div class="input-group ml-3">
                        <div class="input-group-prepend">
                          <span class="input-group-text" id="basic-addon1">Rp. </span>
                        </div>
                        <input type="text" readonly class="form-control col-7" id="total" name="total">
                    </div>
                </div>
                <div>
                    <button type="button" class="btn btn-danger btn-sm" id="actionButton">Action</button>
                </div>
            </div>
        </div>
    </form>

    <div class="modal fade" id="myModalDelete">
        <div class="modal-dialog modal-confirm">
            <div class="modal-content">
                <div class="modal-header flex-column">
                    <div class="icon-box">
                        <i class="fa fa-check"></i>
                    </div>
                    <h4 class="modal-title w-100">Document Approval</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
            <form method="POST" action="{{URL::TO('/approval/action')}}">
                @csrf
                <div class="modal-body">
                    <p>Document with S.O Number :</p>
                    <input readonly class="confirm-text" type="text" id="del-name" name="del-name">
                    <p>Approve This Transaction? This process cannot be undone</p>
                </div>
                <div class="modal-footer justify-content-center">
                    <button name="action" value="approve" type="submit" class="btn btn-success">Approve</button>
                    <button name="action" value="reject" type="submit" class="btn btn-danger">Reject</button>
                </div>
            </form>
            </div>
        </div>
    </div>
<script>
    $('#ppn').val(10);
    hitungTotal()
    function getFormat(x){
            final = new Date(x);
            var dd = final.getDate();
            var mm = final.getMonth() + 1;
            var yyyy = final.getFullYear();

            if (dd < 10) dd = '0' + dd;
            if (mm < 10) mm = '0' + mm;
            return (yyyy + '-' + mm + '-' + dd);
        }
    function hitungTotal(){
            var tab = document.getElementById('trans-table');
            if(tab.rows[1]){
                $subtotal = 0;
                for(var i = 1, row; row = tab.rows[i]; i++){
                    const temp = row.cells[7].innerHTML
                    $temp = temp.replaceAll('.', '')
                    $subtotal = +$subtotal + +$temp;
                }
                $subtotal = Math.round($subtotal)
                $ppn = $('#ppn').val();
                var tot = +$subtotal + +(($ppn/100)*$subtotal);
                $total = tot;
                $total = Math.round($total)
                $subtotal = Intl.NumberFormat(['ban', 'id']).format($subtotal)
                $('#subTotal').val($subtotal);
                $total = Intl.NumberFormat(['ban', 'id']).format($total)
                $('#total').val($total);
            }
    }
    $(document).ready(function() {
        $('#actionButton').click(function() {
            $('#myModalDelete').modal();
            $noso = $('#fieldnoso').val()
            $('#del-name').val($noso)
        });
    });
</script>

@endsection


