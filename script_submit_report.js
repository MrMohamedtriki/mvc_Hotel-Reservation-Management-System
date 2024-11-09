function submitReport() {
    var issue = document.getElementById('issue').value;

    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'report.php', true);
    xhr.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');

    xhr.onload = function () {
        if (xhr.status >= 200 && xhr.status < 300) {
            document.getElementById('successMessage').innerHTML = 'Report submitted successfully!';
            document.getElementById('successMessage').classList.add('show');
            setTimeout(function() {
                document.getElementById('successMessage').classList.remove('show');
            }, 3000); 
        } else {
            alert('Error: ' + xhr.statusText);
        }
    };

    xhr.send('issue=' + encodeURIComponent(issue));
}