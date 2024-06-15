//--------------------------------------------------------------------------
// You can find dozens of practical, detailed, and working examples of
// service worker usage on https://github.com/mozilla/serviceworker-cookbook
//--------------------------------------------------------------------------

var staticCacheName = "pwa-v" + new Date().getTime();
// Files
var filesToCache = [
    '/offline',
    'assets/img/icon/72x72.png',
    'assets/img/icon/96x96.png',
    'assets/img/icon/128x128.png',
    'assets/img/icon/144x144.png',
    'assets/img/icon/152x152.png',
    'assets/img/icon/192x192.png',
];

// Cache on install
self.addEventListener("install", event => {
    this.skipWaiting();
    event.waitUntil(
        caches.open(staticCacheName)
            .then(cache => {
                return cache.addAll(filesToCache);
            })
    )
});

// Clear cache on activate
self.addEventListener('activate', event => {
    event.waitUntil(
        caches.keys().then(cacheNames => {
            return Promise.all(
                cacheNames
                    .filter(cacheName => (cacheName.startsWith("pwa-")))
                    .filter(cacheName => (cacheName !== staticCacheName))
                    .map(cacheName => caches.delete(cacheName))
            );
        })
    );
});

// Serve from Cache
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request);
            })
            .catch(() => {
                return caches.match('offline');
            })
    )
});
