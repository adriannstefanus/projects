<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#34bde9"/>
    <meta name="description" content="Warehouse Application">
    <link href="/css/main.css" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="apple-touch-icon" href="/src/image/inven-logo.png">
    <link rel="icon" href="/src/image/inven-logo.png" type="image/png"/>

    <link rel="manifest" href="/manifest.json" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"></script>
</head>

<body>
    <div>
        @include('layouts.header')
        <div class="bodymaster">
            @include('layouts.sidemenu')
            <div class="tablemaster">
                <div class="title">
                    <h2 id="pageTitle">@yield('title')</h2>
                </div>
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
                @endif
                @if(session()->has('success_message'))
                    <div class="alert alert-primary">
                        {{ session()->get('success_message') }}
                    </div>
                @endif
                @if(session()->has('delete_message'))
                    <div class="alert alert-danger">
                        {{ session()->get('delete_message') }}
                    </div>
                @endif
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6"></div>
                        @yield('header')
                    </div>
                </div>
                @yield('table')
                @yield('content')
            </div>
        </div>
        <div id="noprint" class="btn-group-fab" role="group" aria-label="FAB Menu">
            <div>
                <button type="button" class="btn btn-main btn-primary has-tooltip" data-placement="left" title="Menu">
                    <i class="fa fa-plus"></i>
                </button>
                <button type="button" onclick="showquestion()" class="btn btn-sub btn-info has-tooltip" data-placement="left" title="Subscribe">
                    <i class="fa fa-bell"></i>
                </button>
            </div>
        </div>
        @include('layouts.footer')
    </div>
</body>

<script>
    //variable
    var deferredPrompt;
    $('#sidebar').addClass('active');
    getNotif()
    //Function

    $(function() {
        $('.btn-group-fab').on('click', '.btn', function() {
            $('.btn-group-fab').toggleClass('active');
        });
        $('has-tooltip').tooltip();
    });
    // getNotif();
    $(document).ready(function() {
        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });
    });
    window.onscroll = function() {
        myFunction()
    };
    var navbar = document.getElementById("myNavbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
        if (window.pageYOffset >= sticky) {
            navbar.classList.add("sticky")
        } else {
            navbar.classList.remove("sticky");
        }
    }

    function getNotif() {
        $.ajax({
            method: 'GET',
            url: '/getNotif',
            success: function(data) {
                var span = document.getElementById('badge-notif');
                if (span) {
                    span.textContent = data;
                }
            },
        })
    }
    $(document).ready(function() {
        $('.filter').click(function() {
            var cell = $(this).closest('th')
            var div = cell[0].children[0]
            var column = div.id
            var page = $('#pageTitle')[0].textContent
            page = page.toLowerCase()
            page = page.replace(/ +/g, "")
            page = '/' + page + '/search'

            $('.table_name').val(page)
            $('.column_name').val(column)
            $('.searchForm').attr("action", page)
        });
    });

    //hash
    const urlB64ToUint8Array = base64String => {
        const padding = '='.repeat((4 - (base64String.length % 4)) % 4)
        const base64 = (base64String + padding).replace(/\-/g, '+').replace(/_/g, '/')
        const rawData = window.atob(base64)
        const outputArray = new Uint8Array(rawData.length)
        for (let i = 0; i < rawData.length; ++i) {
            outputArray[i] = rawData.charCodeAt(i)
        }
        return outputArray
    }

    //Check if PWA is Supported then Register
    if ('serviceWorker' in navigator) {
        window.addEventListener('load', function() {
            navigator.serviceWorker.register('/service-worker.js').then(function(registration) {
                //Registration Successfull
                console.log('SW Regis Success');
            }, function(err) {
                //Registration Failed
                console.log('SW Regis Failed: ', err);
            }).catch(function(err) {
                console.log(err);
            });
        });
    } else {
        //PWA Not Supported by Browser
        console.log('SW Not Supported probably by the Browser')
    }

    //intercept install prompt
    window.addEventListener('beforeinstallprompt', function(event) {
        event.preventDefault();
        deferredPrompt = event;
        return false;
    });

    //install to home screen
    function addToHomeScreen() {
        console.log('GOT IN')
        if (deferredPrompt) {
            deferredPrompt.prompt();
            console.log('GOT IN 2')
            deferredPrompt.userChoice.then(function(choiceResult) {
                console.log(choiceResult.outcome);
                if (choiceResult.outcome === 'dismissed') {
                    console.log('User cancelled installation');
                } else {
                    console.log('User added to home screen');
                }
            });
            deferredPrompt = null;
        }
    }
    //ask to subsribe user
    function showquestion() {
        askPermission()
        return navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
            console.log('Service Worker is Ready')
            const applicationServerKey = urlB64ToUint8Array(
                'BEsJbwqiqvY41N9Mja3Xv9uR7DAvz2rkie8fL0GHhGqbvsGBgyCCTeM4o4jUHRRhQMN57NheqkDSNMKgiThRZn8'
            )
            var options = {
                userVisibleOnly: true,
                applicationServerKey
            };
            if (!serviceWorkerRegistration.pushManager) {
                alert('No push notifications support.');
                console.log('push notif tak tersedia')
                return false;
            } else {
                console.log('Trying to Subscribe...')
                return serviceWorkerRegistration.pushManager.subscribe(options).then(function(
                        subscription) {
                        console.log('Berhasil Subscribed : ', JSON.stringify(subscription));
                        console.log('Trying to send data to server...')
                        var check = sendSubscriptionToBackEnd(subscription)
                    })
                    .catch(function(error) {
                        console.log('Subscription error: ', error);
                    });
            }
        })

    }
    function askPermission() {
        if (!navigator.serviceWorker.ready) {
            return;
        }
        new Promise(function(resolve, reject) {
                console.log('Ask for Permission if not already granted')
                const permissionResult = Notification.requestPermission(function(result) {
                    resolve(result);
                });
                if (permissionResult) {
                    permissionResult.then(resolve, reject);
                }
            })
            .then((permissionResult) => {
                if (permissionResult !== 'granted') {
                    checkSub()
                    console.log('Not Granted Permission !!')
                }
            });
    }
    checkSub()
    function checkSub() {
        navigator.serviceWorker.ready.then(function(serviceWorkerRegistration) {
            serviceWorkerRegistration.pushManager.getSubscription()
                .then(function(subscription) {
                    console.log('Checking Subscription...')
                    isSubscribed = !(subscription === null);
                    if (isSubscribed) {
                        console.log('User IS subscribed.');
                        $('.btn-group-fab').remove()
                    } else {
                        console.log('User is NOT subscribed.');
                    }
                });
        });
    }

    function sendSubscriptionToBackEnd(subscription) {
        const token = document.querySelector("meta[name=csrf-token]").getAttribute("content");
        console.log(JSON.stringify(subscription))
        console.log('start Fetching JSON')
        //return fetch('/api/save-subscription/{{ Auth::user()->id }}', {
        return fetch('push', {
                method: 'POST',
                body: JSON.stringify(subscription),
                headers: {
                    'Accept': 'application/json',
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': token
                }
            })
            .then((res) => {
                checkSub()
                return res.json();
            })
            .then((res) => {
                console.log(res)
                console.log('Success input data to Server')
            })
            .catch((err) => {
                console.log(err)
                console.log('Failed to store data to server')
            });
    }

</script>

</html>
