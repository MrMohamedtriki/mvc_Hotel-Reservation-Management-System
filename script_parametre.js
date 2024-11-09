document.addEventListener('DOMContentLoaded', function () {
    const themeSelect = document.getElementById('theme');
    const body = document.getElementById('body');

    function setTheme(theme) {
        body.className = theme; 
        localStorage.setItem('theme', theme); 
    }

    const storedTheme = localStorage.getItem('theme');
    if (storedTheme) {
        setTheme(storedTheme); 
        themeSelect.value = storedTheme; 
    }

    themeSelect.addEventListener('change', function () {
        setTheme(this.value); 
    });
});