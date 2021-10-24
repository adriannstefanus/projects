@extends('layouts.layout')
@section('content')
    <div class="px-5">
        <form action="/returPembelian/form/submit" onsubmit="cekBeforeRetur(event)" method="POST">
            @csrf
            <div class="row">
                <div class="form-group col input-group-sm">
                    <label>Nama Supplier</label>
                    <input readonly type="text" class="form-control" id="supplier" name="supplier"
                        value="{{ $faktur->supplier->nama}}">
                </div>
                <div class="form-group col input-group-sm">
                    <label>No Faktur</label>
                    <input readonly type="text" class="form-control" id="noFaktur" name="noFaktur"
                        value="{{ $faktur->NoFaktur}}">
                </div>
                <div class="form-group col input-group-sm">
                    <label>Tgl Faktur</label>
                    <input readonly type="date" class="form-control" id="tglFaktur" name="tglFaktur"
                        value="{{ substr($faktur->TglFaktur, 0, 10)}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col input-group-sm">
                    <label>No PO</label>
                    <input readonly type="text" class="form-control" id="noPO" name="noPO"
                        value="{{ $faktur->NoPO}}">
                </div>
                <div class="form-group col input-group-sm">
                    <label>Tgl PO</label>
                    <input readonly type="date" class="form-control" id="tglPO" name="tglPO"
                        value="{{ substr($faktur->TglPO,0,10)}}">
                </div>
                <div class="form-group col input-group-sm">
                    <label>Tgl Jatuh Tempo PO</label>
                    <input readonly type="date" class="form-control" id="tglJatuhTempoPO" name="tglJatuhTempoPO"
                        value="{{ substr($faktur->TglJatuhTempoPO, 0, 10)}}">
                </div>
            </div>

            <div class="row">
                <div class="form-group col input-group-sm">
                    <label>Tanggal Retur</label>
                    <input required type="date" class="form-control" id="tglRetur" name="tglRetur">
                </div>
                <div class="form-group col input-group-sm"></div>
                <div class="form-group col input-group-sm"></div>
            </div>



            <table id="trans-table" class="table table-striped table-hover" border="1px solid #343e42">
                <thead>
                    <tr>
                        <th style="width: 12%">Item Barang</th>
                        <th>Berat</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Harga/pcs</th>
                        <th>Diskon</th>
                        <th>Jumlah</th>
                        <th style="width: 13%">
                            Retur Qty
                        </th>
                        <th>Jumlah Retur</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($faktur->barangbelis as $x)
                        <tr>
                            <td>{{$x->producttype->tipe}}</td>
                            <td>{{$x->berat}}</td>
                            <td>{{number_format($x->hargaKg,0,',','.')}}</td>
                            <td>{{$x->qty}}</td>
                            <td>{{number_format($x->hargaSatuan,0,',','.')}}</td>
                            <td>{{$x->diskon}}</td>
                            <td>{{number_format($x->totprice,0,',','.')}}</td>
                            <td style="text-align: center">
                                <select class="custom-select" id="qtyRetur" name="qtyRetur[]" onchange="setTotAfter(this)">
                                    {{-- <option value=0>0</option> --}}
                                    <option selected value=0>0</option>
                                    @for($i = 1; $i <= $x->qty; $i++)
                                        <option value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </td>
                            <td class="totAfter">0</td>
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
                <div class="form-group">
                    <a><button type="submit" class="btn btn-primary">Submit Retur</button></a>
                </div>
            </div>
        </form>
    </div>


    <script>
        $('#ppn').val(10);
        hitungTotal();
        function cekBeforeRetur(e){
            var tab = document.getElementById('trans-table');
            var totalBarang = 0;

            for(var i = 1, row; row = tab.rows[i]; i++){
                totalBarang = +totalBarang + +row.cells[7].children[0].value
            }
            if(totalBarang == 0){
                e.preventDefault()
                alert('Input barang yang mau di retur')
                return false
            }
        }
        function setTotAfter(e){
            var qty = e.value
            const hargapcsTemp = $(e).closest('td').prev().prev().prev().html()
            var hargapcs = hargapcsTemp.replaceAll('.', '')
            const diskonTemp = $(e).closest('td').prev().prev().html()
            var diskon = diskonTemp.replaceAll('.', '')
            var totalRetur = (qty*hargapcs) - ((diskon/100)*(qty*hargapcs))
            totalRetur = Math.round(totalRetur)
            totalRetur = Intl.NumberFormat(['ban', 'id']).format(totalRetur)
            $(e).closest('td').next().html(totalRetur)
            hitungTotal()
        }
        function hitungTotal(){
            var tab = document.getElementById('trans-table');
            if(tab.rows[1]){
                $subtotal = 0;
                for(var i = 1, row; row = tab.rows[i]; i++){
                    const temp = row.cells[8].innerHTML
                    $temp = temp.replace('.', '')
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
    </script>

@endsection
