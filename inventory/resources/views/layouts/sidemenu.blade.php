<nav id="sidebar" class="sidebar-body">
    <div class="pt-4">
    <ul class="list-unstyled components">
        <li class="d-flex justify-content-center mb-3" style="text-align: center">
            <img class="avatarsidemenu" src="{{ Auth::user()->profile_photo_url }}" alt="">
        </li>
        <li class="text-center" style="">Welcome, {{ Auth::user()->name }} <br><span class="text-center" style="font-weight:bold;text-transform: capitalize">{{ Auth::user()->role }}</span></li>
        <li class="active master">
            <a href="#homeSubmenu" data-toggle="collapse"  aria-expanded="false" class="master dropdown-toggle">Master Menu</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="/msCustomer">Master Customer</a>
                </li>
                @if(Auth::user()->role == 'admin' || Auth::user()->role == 'owner')
                <li>
                    <a href="/msUser">Master User</a>
                </li>
                <li>
                    <a href="/msSupplier">Master Supplier</a>
                </li>
                <li>
                    <a href="/msProduct">Master Product</a>
                </li>
                @endif
            </ul>
        </li>
        <li class="active transaksi">
            <a href="#homeSubMenuTransaksi" data-toggle="collapse" aria-expanded="false" class="transaksi dropdown-toggle">Transaksi</a>
            <ul class="collapse list-unstyled" id="homeSubMenuTransaksi">
                <li>
                    <a href="#subMenuSurat" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Surat</a>
                    <ul class="collapse list-unstyled" id="subMenuSurat">
                        <li>
                            <a href="/trPenawaran" style="background:#9b9fa1;border-bottom: 1px solid rgb(221, 228, 226)">Penawaran</a>
                        </li>
                        <li>
                            <a href="/spk" style="background:#9b9fa1;border-bottom: 1px solid rgb(221, 228, 226)">Perintah Kerja</a>
                        </li>
                        <li>
                            <a href="/suratJalan" style="background:#9b9fa1;border-bottom: 1px solid rgb(221, 228, 226)">Jalan</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#subMenuFaktur" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Faktur</a>
                    <ul class="collapse list-unstyled" id="subMenuFaktur">
                        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'owner')
                        <li>
                            <a href="/fakturPembelian" style="background:#9b9fa1;border-bottom: 1px solid rgb(221, 228, 226)">Pembelian</a>
                        </li>
                        @endif
                        <li>
                            <a href="/fakturPenjualan" style="background:#9b9fa1;border-bottom: 1px solid rgb(221, 228, 226)">Penjualan</a>
                        </li>
                    </ul>
                </li>
                @if(Auth::user()->role == 'admin' || Auth::user()->role == 'owner')
                <li>
                    <a href="#subMenuRetur" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Retur</a>
                    <ul class="collapse list-unstyled" id="subMenuRetur">
                        <li>
                            <a href="/returPenjualan" style="background:#9b9fa1;border-bottom: 1px solid rgb(221, 228, 226)">Penjualan</a>
                        </li>
                        <li>
                            <a href="/returPembelian" style="background:#9b9fa1;border-bottom: 1px solid rgb(221, 228, 226)">Pembelian</a>
                        </li>
                    </ul>
                </li>
                @endif
                <li>
                    <a href="/kuitansi">Kuitansi</a>
                </li>
            </ul>
        </li>
        @if(Auth::user()->role == 'admin' || Auth::user()->role == 'owner')
        <li class="active laporan">

            <a href="#subMenuLaporan" data-toggle="collapse" aria-expanded="false" class="laporan dropdown-toggle">Laporan</a>
            <ul class="collapse list-unstyled" id="subMenuLaporan">
                <li>
                    <a href="/laporanPenjualan">Penjualan</a>
                </li>
                <li>
                    <a href="/laporanPembelian">Pembelian</a>
                </li>
                <li>
                    <a href="/laporanStokBarang">Stok Barang</a>
                </li>
            </ul>

        </li>
        @endif
    </ul>
    </div>

</nav>
