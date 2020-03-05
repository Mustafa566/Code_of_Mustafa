<?php
// Include the database configuration file
include 'connect.php';
$statusMsg = '';

// File upload path
$targetDir = "../uploads/";
$fileName = basename($_FILES["document"]["name"]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["document"]["name"])){
    // Allow certain file formats
    $allowTypes = array('csv','sql','png','rar','zip','pps','ppt','pptx','xlr','xls','xlsx','doc','docx','pdf','txt','mdb');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["document"]["tmp_name"], $targetFilePath)){
            // Insert document file name into database
            $insert = $conn->query("INSERT into documents (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                header("Location: ../smdesk/document.php");
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only csv, sql, png, rar, zip, pps, ppt, pptx, xlr, xls, xlsx, doc, docx, pdf, txt, mdb files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
?>