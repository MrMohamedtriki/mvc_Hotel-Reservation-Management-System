<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="script_submit_report.js"></script>

</head>
<body>
<form id="reportForm">
    <label for="issue">Describe the issue:</label>
    <textarea id="issue" name="issue" placeholder="Enter your issue here..." required></textarea>
    <button type="button" onclick="submitReport()">Submit Report</button>
</form>
<div id="successMessage" class="success-message"></div>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "db.php"; 

    $issue = mysqli_real_escape_string($con, $_POST['issue']);

    $sql = "INSERT INTO Report (report_text) VALUES ('$issue')";

    if (mysqli_query($con, $sql)) {
        http_response_code(200);
        echo "Report submitted successfully!";
    } else {
        http_response_code(500);
        echo "Error: " . mysqli_error($con);
    }

    mysqli_close($con);
}
?>

    
</body>
</html>