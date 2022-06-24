<?PHP
$from="email";
$email=["stu.columbiacentral.edu"];
$name="name";
$apellido="apellido";
$subject=$_POST['subject'];
$message=$_POST['message'];
mail($email, $name, $apellido, $subject, $message, "from:".$from);
print("gracias por su mensaje")
?>