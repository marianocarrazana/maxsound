var cacheName = 'v2';
var filesToCache = [
  'index.html',
  'css/app.f6509db0.css',
  'js/app.75cbc465.js','js/chunk-vendors.ca460431.js',
  'img/background.9473b0df.jpg'
];

/* Start the service worker and cache all of the app's content */
self.addEventListener('install', function(e) {
  e.waitUntil(
    caches.open(cacheName).then(function(cache) {
      return cache.addAll(filesToCache);
    })
  );
});

/* Serve cached content when offline */
self.addEventListener('fetch', function(e) {
  e.respondWith(
    caches.match(e.request).then(function(response) {
      return response || fetch(e.request);
    })
  );
});