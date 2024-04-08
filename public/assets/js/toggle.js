
    // JavaScript to toggle between Tagalog and English content
    document.addEventListener("DOMContentLoaded", function() {
        var switchInput = document.getElementById('languageSwitch');
        var englishContent = document.getElementById('englishContent');
        var tagalogContent = document.getElementById('tagalogContent');

        switchInput.addEventListener('change', function() {
            if (this.checked) {
                // Switch is ON, display Tagalog content
                englishContent.style.display = 'none';
                tagalogContent.style.display = 'block';
            } else {
                // Switch is OFF, display English content
                englishContent.style.display = 'block';
                tagalogContent.style.display = 'none';
            }
        });
    });
