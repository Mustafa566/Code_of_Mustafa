<!DOCTYPE html>
<html>
    <head>
        <title>My smdesk | Report</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
<body>
<div class="num1">
    <div class="num2">
        <a href="dashboard.html"><img src="../images/dashboard.png" title="Dashboard" class="img-left"></a>
        <a href="report.php"><img src="../images/report.png" title="Report" class="img-left"></a>
        <a href="document.php"><img src="../images/doc.png" title="Upload documents" class="img-left"></a>
        <a href="../php/logout.php"><img src="../images/logout.png" title="Logout" class="img-left"></a>
    </div>
    <div class="num3">
        <h1 class="report-text">Report</h1>
        <div class="report-form">
            <form method="post" action="../php/insert_form.php">
                <label class="form-label">Subject</label><br>
                <textarea type="text" id="subject" name="subject" maxlength="255" cols="70" required></textarea>
            <br><br>
                <label class="form-label">Level</label><br>
                <input type="radio" id="level" name="level" value="easy" checked> Easy<br>
                <input type="radio" id="level" name="level" value="normal"> Normal<br>
                <input type="radio" id="level" name="level" value="difficult"> Difficult
            <br><br>
                <label class="form-label">Note</label><br>
                <textarea name="issue" id="issue" rows="10" cols="70"></textarea>
            <br><br>
                <label class="form-label">The solution</label><br>
                <textarea name="solution" id="solution" rows="10" cols="70"></textarea>
            <br><br>
                <label class="form-label">Picture</label><br>
                <input type="file" id="picture" name="picture" accept="image/*">   
                <input type="submit" name="submit" value="submit" class="">
            </form>
        </div>
    </div>
    <div class="doc-list">
        <h1 class="report-text">Reports</h1><br>
        <?php include '../php/getreport.php';?>
    </div>
</div>
</body>
</html>
