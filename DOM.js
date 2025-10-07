var q = 'work';
        fetch(q +'.html')
            .then(response => response.text())
            .then(html => document.getElementById(q).innerHTML = html);