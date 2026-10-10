<!doctype html>
    <html lang="en">
    <head>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>KidsStory — Adventures Await!</title>
   
    </head>
    <body>
        <div id="app"></div>
    <script>
        const searchInput = document.getElementById('search');
        const cards = [...document.querySelectorAll('.story')];
        const noResults = document.getElementById('noResults');
        const toast = document.getElementById('toast');
        let toastTimer;
        function notify(message) { toast.textContent = message; toast.classList.add('show'); clearTimeout(toastTimer); toastTimer = setTimeout(() => toast.classList.remove('show'), 2400); }
        function filterStories(term = '') { const q = term.toLowerCase().trim(); let shown = 0; cards.forEach(card => { const match = (card.dataset.title + ' ' + card.dataset.category).toLowerCase().includes(q); card.hidden = !match; if (match) shown++; }); noResults.hidden = shown !== 0; }
        searchInput.addEventListener('input', e => filterStories(e.target.value));
        document.querySelectorAll('[data-category]').forEach(link => link.addEventListener('click', () => { searchInput.value = link.dataset.category; filterStories(link.dataset.category); }));
        document.querySelectorAll('[data-toast]').forEach(link => link.addEventListener('click', e => { e.preventDefault(); notify(link.dataset.toast.trim()); }));
        document.querySelectorAll('[data-search-focus]').forEach(link => link.addEventListener('click', e => { e.preventDefault(); searchInput.focus(); }));
        document.querySelectorAll('[data-story]').forEach(button => button.addEventListener('click', () => notify(button.textContent.includes('Save') ? `Saved “${button.dataset.story}” to your library!` : `Opening “${button.dataset.story}”…`)));
    </script>
    </body>
</html>