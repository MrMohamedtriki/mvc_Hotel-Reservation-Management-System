<?php
session_start();
ob_start();
include 'header_view.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Report Issue</title>
<link type="text/css" rel="stylesheet" href="style_report.css" />
</head>
<body>
    <main>
        <h1>Report Issue</h1>
        <form action="report_controller.php" method="POST">
            <label for="issue">Describe the issue:</label>
            <textarea id="issue" name="issue" placeholder="Enter your issue here..." required></textarea>
            <button type="submit">Submit Report</button>
        </form>
    </main>
</body>
</html>
