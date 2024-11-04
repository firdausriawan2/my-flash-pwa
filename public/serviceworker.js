var staticCacheName = "pwa-v" + new Date().getTime();
var filesToCache = [
    '/offline',
    // '/css/app.css',
    // '/js/app.js',
    '/assets/css/style.css',
    '/assets/js/base.js',
    '/assets/img/icon/72x72.png',
    '/assets/img/icon/96x96.png',
    '/assets/img/icon/128x128.png',
    '/assets/img/icon/144x144.png',
    '/assets/img/icon/152x152.png',
    '/assets/img/icon/192x192.png',
    '/assets/img/icon/384x384.png',
    '/assets/img/icon/512x512.png',
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

// Serve from Cache with Network Fallback
self.addEventListener("fetch", event => {
    event.respondWith(
        caches.match(event.request)
            .then(response => {
                return response || fetch(event.request).then(fetchResponse => {
                    return caches.open(staticCacheName).then(cache => {
                        cache.put(event.request, fetchResponse.clone());
                        return fetchResponse;
                    });
                });
            })
            .catch(() => {
                return caches.match('/offline');
            })
    );
});

// Event listener untuk menangani push notifications
self.addEventListener('push', event => {
    let data = {};
    if (event.data) {
        data = event.data.json();
    }

    const options = {
        body: data.body || 'You have a new notification!',
        icon: '/assets/img/icon/192x192.png', // Path ke icon notifikasi
        badge: '/assets/img/icon/96x96.png', // Path ke badge notifikasi
        data: {
            url: data.url || '/'
        }
    };

    event.waitUntil(
        self.registration.showNotification(data.title || 'Notification', options)
    );
});

// Event listener untuk menangani klik pada notifikasi
self.addEventListener('notificationclick', event => {
    event.notification.close();
    event.waitUntil(
        clients.openWindow(event.notification.data.url)
    );
});
