<!DOCTYPE html>
<html>
    <head>
        <title>My smdesk | Upload document</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="../style.css">
    </head>
<body>
<script>
    function fileuploaded() {
        alert("File uploaded!");
        }
</script>
<div class="num1">
    <div class="num2">
        <a href="dashboard.html"><img src="../images/dashboard.png" title="Dashboard" class="img-left"></a>
        <a href="report.php"><img src="../images/report.png" title="Report" class="img-left"></a>
        <a href="document.php"><img src="../images/doc.png" title="Upload documents" class="img-left"></a>
        <a href="../php/logout.php"><img src="../images/logout.png" title="Logout" class="img-left"></a>
    </div>
    <div class="num3">
        <h1 class="report-text">Upload document</h1>
        <div class="report-form">
            <form action="../php/upload.php" method="post" enctype="multipart/form-data">
                <h2 class="li-text">Only this document types can be uploaded:</h2>
                <strong>
                    <li class="li-text">.csv</li>
                    <li class="li-text">.sql</li>
                    <li class="li-text">.png</li>
                    <li class="li-text">.rar</li>
                    <li class="li-text">.zip</li>
                    <li class="li-text">.pps</li>
                    <li class="li-text">.ppt</li>
                    <li class="li-text">.pptx</li>
                    <li class="li-text">.xlr</li>
                    <li class="li-text">.xls</li>
                    <li class="li-text">.xlsx</li>
                    <li class="li-text">.doc</li>
                    <li class="li-text">.docx</li>
                    <li class="li-text">.pdf</li>
                    <li class="li-text">.txt</li>
                    <li class="li-text">.mdb</li>
                </strong>
            <br><br>
                <input type="file" name="document" id="document" value="document">
                <input type="submit" name="submit" id="submit" value="Upload" onclick="fileuploaded()">
            </form>
        </div>
        <img class="down-arrow" src="../images/down-arrow.png">
    </div>
    <div class="doc-list">
        <h1 class="report-text">Documents</h1><br>
        <?php include '../php/getdocument.php';?>
    </div>
</div>
</body>
</html>
