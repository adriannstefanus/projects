<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #006766">
        <a class="navbar-brand" href="/main"><img src="assets/Antrade Logo3.png" width="50px" alt=""></a>
        <a class="navbar-brand text-white" href="/main">Antrade</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <form class="form-inline">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-item nav-link active text-white" href="/main">Home <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link text-white" href="#">Support</a>
                <a class="nav-item nav-link text-white" href="/additem">Add Item</a>
                <a class="nav-item nav-link text-white" href="/myitem">My Item</a>
                <a class="nav-item nav-link text-white" href="{{url('/logout')}}">Log Out</a>
                <a class="nav-item nav-link btn btn-success" style="color: #ffffff" href="#">Get Started</a>
            </div>
        </div>
    </nav>
