@extends('layouts.layout')

@section('title', 'Surat Jalan')
@section('table')
<ul class="nav nav-tabs">
    <li class="nav-item"><a class="nav-link active" href="#spkOpen" data-toggle="tab" role="tab" aria-controls="spkOpen" aria-selected="true">Belum selesai</a></li>
    <li class="nav-item"><a class="nav-link" href="#spkClose" data-toggle="tab" role="tab" aria-controls="spkClosed" aria-selected="false">Selesai</a></li>
</ul>

<div class="tab-content" id="myTabContent">
    <div id="spkOpen" class="tab-pane fade show active" role="tabpanel">
        <table class="table table-striped table-hover" border="1px solid #343e42">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Customer</th>
                    <th>No. SO</th>
                    <th>No. Surat Jalan</th>
                    <th>Tanggal Surat jalan</th>
                    <th>No. PO</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suratjalan as $c)
                    <tr>
                        <td>{{ $loop->iteration + $suratjalan->firstItem() - 1 }}</td>
                        <td>{{ $c->trpenawaran->customer->Nama }}</td>
                        <td>{{ $c->trpenawaran->NoSO }}</td>
                        <td>{{ $c->NoSuratJalan }}</td>
                        <td>{{ date_format(date_create($c->TglSuratJalan), 'd M Y') }}</td>
                        <td>{{ $c->NoPO }}</td>
                        <td class="text-center">
                            <button class="edit" type="button"><i class="fa fa-pencil" title="Edit"></i></button>
                            <a href="/suratJalan/print/{{$c->id}}">
                                <button class="print" type="button"><i class="fa fa-print" title="Print"></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        <div class="d-flex justify-content-center">
                {{ $suratjalan->links() }}
        </div>
    </div>
    <div id="spkClose" class="tab-pane fade" role="tabpanel">
        <table class="table table-striped table-hover" border="1px solid #343e42">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Customer</th>
                    <th>No. SO</th>
                    <th>No. Surat Jalan</th>
                    <th>Tanggal Faktur</th>
                    <th>Tanggal Surat jalan</th>
                    <th>No. PO</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($suratjalandone as $c)
                    <tr>
                        <td>{{ $loop->iteration}}</td>
                        <td>{{ $c->trpenawaran->customer->Nama }}</td>
                        <td>{{ $c->trpenawaran->NoSO }}</td>
                        <td>{{ $c->NoSuratJalan }}</td>
                        <td>{{ date_format(date_create($c->trpenawaran->fakturjual->TglFaktur), 'd M Y') }}</td>
                        <td>{{ date_format(date_create($c->TglSuratJalan), 'd M Y') }}</td>
                        <td>{{ $c->NoPO }}</td>
                        <td class="text-center">
                            <a href="/suratJalan/print/{{$c->id}}">
                                <button class="print" type="button"><i class="fa fa-print" title="Print"></i></button>
                            </a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

@endsection
@section('content')

    <div class="modal fade" id="myModalEdit" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
        <form method="POST"action="{{URL::to('/suratJalan/submit')}}" >
                @csrf
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Edit</h2>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    {{-- Field buat ngisi --}}
                    <div class="modal-body">
                        <input type="text" name="dataid" id="dataid" style="display: none">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nomor Faktur Jual</label>
                                    <input type="text" readonly class="form-control" placeholder="" id="nofakturJual"
                                        name="nofakturJual">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nomor Surat Jalan</label>
                                    <input type="text" readonly class="form-control" id="nosuratJalan" name="nosuratJalan">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="company">Tgl Surat Jalan</label>
                                    <input readonly class="form-control" type="date" placeholder=""  id="tglsuratJalan"
                                        name="tglsuratJalan">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="phone">No. PO</label>
                                    <input type="tel" class="form-control" placeholder="" id="noPO"
                                        name="noPO" onchange="cekpo()">
                                </div>
                            </div>
                        </div>
                        <label class="mr-4">Status</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="belumkirim" name="statuskirim" id="belumkirim" checked onchange="cekpo()">
                            <label class="form-check-label">Belum Dikirim</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" value="sudahkirim" name="statuskirim" id="sudahkirim" onchange="cekpo()">
                            <label class="form-check-label">Sudah Dikirim</label>
                        </div>

                        <div class="editbtnform">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('.edit').on('click', function() {
            $('#myModalEdit').modal('show');

            $tr = $(this).closest('tr');
            var data = $tr.children("td").map(function() {
                return $(this).text();
            }).get();
            var index = (data[0]-1)%10;
            var object = {!! json_encode($suratjalan->toArray())!!};
            var data = object['data']
            var updateId = data[index]
            console.log(updateId)
            console.log(index)

            $('#belumkirim').prop('checked', true);
            $('#nosuratJalan').val(updateId['NoSuratJalan']);
            var tempno = updateId['NoSuratJalan'];
            tempno = tempno.substring(3)
            $('#nofakturJual').val('FT/'+tempno);
            $('#tglsuratJalan').val(getFormat(updateId['TglSuratJalan']));
            $('#noPO').val(updateId['NoPO']);
            $('#Email').val(updateId['Email']);
            $('#dataid').val(updateId['id']);
        });
    });

    function getFormat(x){
            final = new Date(x);
            var dd = final.getDate();
            var mm = final.getMonth() + 1;
            var yyyy = final.getFullYear();

            if (dd < 10) dd = '0' + dd;
            if (mm < 10) mm = '0' + mm;
            return (yyyy + '-' + mm + '-' + dd);
        }

    function cekpo(){
        var poValue = $('#noPO').val();
        if(!poValue){
            alert('Nomor PO Wajib Diisi')
            $('#belumkirim').prop('checked', true);
        }

    }

</script>
@endsection
