     <div class="container">
<div class="col-xs-15 col-xs-offset-1 main">
   <?php    
$servername = "localhost";
$username = "invisible-app";
$password = "invisible";
$dbname = "invisible-app";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
} 
    //membuat query membaca record dari tabel User      
    $query="SELECT * FROM pelanggan";      
      
    //menjalankan query      
    if (mysqli_query($conn,$query)) {      
    $result=mysqli_query($conn,$query);     
    } else die ("Error menjalankan query". mysqli_error());      
      
    //mengecek record kosong     
    if (mysqli_num_rows($result) > 0)     
    {     
      //menampilkan hasil query      
      while($row = mysqli_fetch_assoc($result)) {      
         echo "<br><td>Nama =".$row["nama_pelanggan"] . "</td><br>";      
         echo "<td>alamat = ".$row["alamat"] . "<td><br>";      
         echo "<td>no_telp = ".$row["no_telp"] . "</td><br>";      
      }      
    }     
    else echo "Tidak ada Record didalam tabel";     
      
    // menutup koneksi mysql    
    mysqli_close($conn);    
    ?>    
      
</div>
</div>