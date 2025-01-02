function fetchAndUpdateContent(url) {
    // Show a loading indicator
    document.getElementById('content').innerHTML = 'Loading...';

    return fetch(url, {
        method: 'GET',
        headers: {
            'X-Requested-With': 'XMLHttpRequest' // Add custom header
        }
    })
        .then(response => response.text())
        .then(html => {
            // Replace content with fetched HTML
            document.getElementById('content').innerHTML = html;

            // Push the new URL to the history
            history.pushState({ page: url }, '', url);
        })
        .catch(error => {
            console.error('Error loading page:', error);
            document.getElementById('content').innerHTML = 'Failed to load content. Please try again.';
        });
}

// Main SPA link handler
document.querySelectorAll('a[data-spa]').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();

        if (document.startViewTransition) {
            // Use View Transitions API for smooth animations
            document.startViewTransition(() => fetchAndUpdateContent(this.href));
        } else {
            // Fallback if View Transitions API is unavailable
            fetchAndUpdateContent(this.href);
        }
    });
});

// Handle back/forward navigation
window.addEventListener('popstate', () => {
    if (document.startViewTransition) {
        document.startViewTransition(() => {
            fetchAndUpdateContent(location.href);
        });
    } else {
        fetchAndUpdateContent(location.href);
    }
});
