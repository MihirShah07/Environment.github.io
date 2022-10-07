
<?php
$servername='localhost';
$username='root';
$password='';
$dbname = 'books';
$conn=mysqli_connect($servername,$username,$password,$dbname);
  if(!$conn){
      die('Could not Connect MySql Server:' .mysql_error());
    }
if(isset($_POST['submit']))
{    
     $que = $_POST['questions'];
     
     
     
     $sql = "INSERT INTO myweb(ques) VALUES ('$que')";
     if (mysqli_query($conn, $sql)) {
      
        header('Location: Home.html');
     } else {
        echo "Error: ";
     }
     mysqli_close($conn);
}

?>