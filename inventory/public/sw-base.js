importScripts(
	'https://storage.googleapis.com/workbox-cdn/releases/4.3.1/workbox-sw.js'
);

workbox.precaching.precacheAndRoute(self.__WB_MANIFEST);

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

