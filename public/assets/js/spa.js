document.querySelectorAll('a[data-spa]').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();

        // Show a loading indicator
        document.getElementById('content').innerHTML = 'Loading...';

        fetch(this.href, {
            method: 'GET', // or 'POST' depending on your needs
            headers: {
                'X_REQUESTED_WITH': 'XMLHttpRequest'  // Add custom header
            }
        })
            .then(response => response.text())
            .then(html => {
                // Replace content with fetched HTML
                document.getElementById('content').innerHTML = html;

                // Push the new URL to the history
                history.pushState({ page: this.href }, '', this.href);
            })
            .catch(error => {
                console.error('Error loading page:', error);
                document.getElementById('content').innerHTML = 'Failed to load content. Please try again.';
            });
    });
});

// Handle back/forward navigation
window.addEventListener('popstate', () => {
    fetch(location.href, {
        headers: {
            'X-Requested-With': 'XMLHttpRequest'  // Add custom header
        }
    })
        .then(response => response.text())
        .then(html => {
            document.getElementById('content').innerHTML = html;
        })
        .catch(error => console.error('Error loading page:', error));
});
