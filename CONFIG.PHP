<?PHP



$host="localhost";
$username="root";
$password='';
$database='DHSGU';

$conn=new PDO("mysql:host=$host;dbname=$database",$username,$password);

$CHECK=$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
IF(!$CHECK){
    ECHO "CONNECTION UNSUCCESSFUL!";
    ECHO "</BR>";
}
?>
