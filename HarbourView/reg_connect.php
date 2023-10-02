<?php
if (isset($_POST['submit'])) {
include( connect-php');
Sdbcon = OpenCon();
if(Sdbcon === false){
die("ERROR: Could not connect. " . mysqli_connect_error());
Sname = mysqli_real_escape_string(Sdbcon, trim($_POST[*name"]));
Spass = mysqli_real_escape_string(Sdbcon, trim($_POST['password']));
Sadd = mysqli_real_escape_string(Sdbcon, trim($_POST['phone']));
Semail = mysqli_real_escape_string($dbcon, trim($_POST['email ']));
Spass = mysqli_real_escape_string(Sdbcon, trim($_POST[*password*1));
Ssqlinsert = "INSERT INTO "customer" ( customer_id',
"customer_address',
password,
"email_id', customer_bill', "customer_name") VALUES (NULL, 'Sadd',
'Spass', 'Semail', ", 'Sfname');";
if(mysqli_query (Sdbcon, $sqlinsert)){
echo "Records inserted successfully.";
} else{
echo "ERROR: Could not able to execute $sqlinsert. " . mysqli_error ($d
bcon);
CloseCon (Sdbcon);
} / end of the main if statement