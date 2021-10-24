console.log('Ini File Service Worker')

//General SW Function

self.addEventListener('install', function(){
    console.log('Install !');
});

self.addEventListener('activate', event => {
    console.log('Activate !');
});

self.addEventListener('fetch', function(event){
    // console.log('Fetch !', event.request);
});

//listener to push
self.addEventListener('push', function(e) {
    console.log('Trying to send Push Notification')
    if(e.data){
      var data = e.data.json();
      console.log(data)
      var options = {
          body: data.body,
          icon: data.icon,
          vibrate: [100, 50, 100],
          actions: data.actions
        };
        e.waitUntil(
          self.registration.showNotification(data.title, options)
        );
        console.log(data)
    }else{
      console.log('Push Notif dont have any data')
    }
});

self.addEventListener('notificationclick', function(event){
    const clickedNotification = event.notification;
    clickedNotification.close();

    //do something
    switch (event.action){
        case 'close_action' :
            console.log('Closing the Notification');
            break;
        case 'example_action' :
            console.log('Opening Youtube.com');
            clients.openWindow('https://youtube.com')
            break;
        case 'view_action' :
            console.log('Go To App')
            clients.openWindow('https://skripsi.e-inventory.site');
            break;
        default:
            console.log('Unknown action clicked')
            break;
    }
})


