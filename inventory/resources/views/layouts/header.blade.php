
<div id="myNavbar" class="stick-nav">
    <div class="navbar">
        <div class="header-inner w-100">
            <div class="container-fluid">
                <div class="row" style="margin-bottom: -10px">
                    <div class="col-md-12 d-flex" style="padding: 0px">
                        <div>
                            <button type="button" id="sidebarCollapse" class="btn btn-outline-info btn-sm">
                                <i class="material-icons" style="padding-top: 3px">menu</i>
                            </button>
                        </div>
                        <div class="brand">
                            <div class="logo-cantainer">
                                <a href="{{ URL::to('/home') }}"><img class="logo" src="/img/Logo_Noah_Coloured.svg"
                                        alt="Logo"></a>
                            </div>
                        </div>
                                <span class="mt-2 font-weight-bold" style="font-family:roboto;font-size:19px">E-INVENTORY</span>
                        <nav id="nav-wrap" class="main-nav">
                            <ul class="sf-menu d-flex justify-content-end">
                                {{-- <li class="current">
                                    <a href="/pushWelcome">
                                        <button type="button" class="btn btn-danger" onclick="showquestion()">Push</button>
                                    </a>
                                </li> --}}
                                <li class="current"> <a href="{{ URL::to('/home') }}"><i class="fa fa-home fa-2x nav-icon"></i></a> </li>
                                @if(Auth::user()->role == 'owner')
                                <li style="margin-right: -23px" class="current"> <a href="{{ URL::to('/approval') }}"><i class="fa fa-inbox fa-2x nav-icon" ></i><span class="badge badge-pill badge-danger" id="badge-notif">0</span></a> </li>
                                @endif
                                <li class="current"> <a href="{{ URL::to('/home') }}"><i class="fa fa-question-circle-o fa-2x nav-icon"></i></a> </li>
                                <li class="dropdown">
                                    <a href="#" data-toggle="dropdown" class="nav-item nav-link" >
                                        <img class="avatar" alt="notfound" style="width: 40px" src="{{ Auth::user()->profile_photo_url }}">
                                    </a>
                                            {{-- Buat mentokin dropdown --}}
                                    <div class="dropdown-menu dropdown-menu-right p-0" style="margin-top: 0px">
                                        {{--  --}}
                                        <span class="dropdown-item-text dropdown-head" style="font-weight: bold;background-color: rgb(50, 7, 168);color:white;">{{ Auth::user()->name }}</span>
                                        <a href="/manageAccount" class="dropdown-item">Manage Accounts</a>
                                        <a href="" onclick="addToHomeScreen()" class="dropdown-item">Add to Home Screen <button class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button></a>
                                        <a href="/logout" class="dropdown-item">Logout</a>
                                    </div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


