importScripts(
	'https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js'
);

workbox.precaching.precacheAndRoute([{"revision":"b1659a10c862ad0d7942a1a4c73bf645","url":"css/main.css"},{"revision":"710194290bf763e4ab3cbcd6ed4c9e18","url":"img/Logo_Noah_Coloured_Circled.png"},{"revision":"575b529476bfc0fcccd33da93cecc05e","url":"img/Logo_Noah_Coloured_Text_Right.png"},{"revision":"568042f7a6ba6d1b00c0e0760afb0c79","url":"img/Logo_Noah_Coloured_Text_Right.svg"},{"revision":"a3ddc9b9342f1115536de14aae60f27d","url":"img/Logo_Noah_Coloured_WithText.svg"},{"revision":"b8bd394234bc3c0028016e4c3469fe8e","url":"img/Logo_Noah_Coloured.png"},{"revision":"9cb2765a6f5c850f9d9719bceec24320","url":"img/Logo_Noah_Coloured.svg"},{"revision":"1d75bee914d801ee6dda27fe2c7de8aa","url":"img/vector.jpg"},{"revision":"131e5f32178a922878761098ca5b981e","url":"js/app.js"},{"revision":"710194290bf763e4ab3cbcd6ed4c9e18","url":"src/image/inven-logo.png"},{"revision":"926a3de5cd1f7fa479c6aa4a5d985593","url":"src/image/inven-logo2.png"},{"revision":"af6b8021414bf1c7b0a53b8620427018","url":"sw-logic.js"},{"revision":"736d8472627118b71375a7cd9e72d3e7","url":"offline.html"}]);

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

// Cache page navigations (html) with a Network First strategy
workbox.routing.registerRoute(
    // Check to see if the request is a navigation to a new page
    ({ request }) => request.mode === 'navigate',
    // Use a Network First caching strategy
    new workbox.strategies.NetworkFirst({
      // Put all cached files in a cache named 'pages'
      cacheName: 'pages',
      plugins: [
        // Ensure that only requests that result in a 200 status are cached
        new workbox.cacheableResponse.Plugin({
          statuses: [200],
        }),
      ],
    }),
  );

  // Cache CSS, JS, and Web Worker requests with a Stale While Revalidate strategy
  workbox.routing.registerRoute(
    // Check to see if the request's destination is style for stylesheets, script for JavaScript, or worker for web worker
    ({ request }) =>
      request.destination === 'style' ||
      request.destination === 'script' ||
      request.destination === 'worker',
    // Use a Stale While Revalidate caching strategy
    new workbox.strategies.NetworkFirst({
      // Put all cached files in a cache named 'assets'
      cacheName: 'assets',
      plugins: [
        // Ensure that only requests that result in a 200 status are cached
        new workbox.cacheableResponse.Plugin({
          statuses: [200],
        }),
      ],
    }),
  );

  // Cache images with a Cache First strategy
  workbox.routing.registerRoute(
    // Check to see if the request's destination is style for an image
    ({ request }) => request.destination === 'image',
    // Use a Cache First caching strategy
    new workbox.strategies.CacheFirst({
      // Put all cached files in a cache named 'images'
      cacheName: 'images',
      plugins: [
        // Ensure that only requests that result in a 200 status are cached
        new workbox.cacheableResponse.Plugin({
          statuses: [200],
        }),
        // Don't cache more than 50 items, and expire them after 30 days
        new workbox.expiration.Plugin({
          maxEntries: 50,
          maxAgeSeconds: 60 * 60 * 24 * 30, // 30 Days
        }),
      ],
    }),
  );

 // Catch routing errors, like if the user is offline
 workbox.routing.setCatchHandler(async ({ event }) => {
    // Return the precached offline page if a document is being requested
    if (event.request.destination === 'document') {
      return workbox.precaching.matchPrecache('/offline.html');
    }

    return Response.error();
  });

