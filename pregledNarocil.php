<?php
require('header.php');

if($_SESSION['uid'] != 'admin'){
    echo "<h1>Napaka!</h1>";
}
else{
?>

<Script>
    $(document).ready( function () {
        $('#table_id').DataTable({
            "bPaginate": false, 
            "columnDefs": [
                // damo Dodaj v kosarico na sredino
                {"className": "dt-center", targets: [ 1,2,3 ]},
                // damo na sredino table headers
                {"className": "dt-head-center", targets: [ 0,1,2 ] }    
            ]
        });
    } );    
</Script>

<?php
$sql = "SELECT * FROM narocilo";
$result = mysqli_query($conn, $sql);
?>

<h1>Naročila</h1>


<?php
if(isset($_GET["order"])){
    if($_GET["order"] == "deleted"){
        echo "<div>";
        echo '<p class = "signuperror"><b>Zbrisano</b></p>';
        echo "</div>";
    }
}
?>

<table id="table_id" class="display" width="70%">
    <thead>
        <tr>
            <th>Ime</th>
            <th>Cena</th>
            <th>Naročnik</th>
            <th></th>
        </tr>
    </thead>
    <tbody>
        <?php 
            while($row = mysqli_fetch_assoc($result)){
                echo "<tr>";   
                echo "<td>".$row['imeIzdelka']."</td>
                      <td>".$row['cenaIzdelka']."€</td>";
                echo "<td>".$row['imeNarocnika']."</td>"; 
                echo "<form action='includes\zavrni.inc.php' method='get'>
                        <input type='hidden' name='id' value=".$row['idNarocilo'].">
                        <td>
                           <input class='btn btn-primary' type='submit' value='Zavrni'>
                        </td>
                    </form>"; 
                }
                echo "</tr>";  
        ?>
    </tbody>
</table>
            <?php } ?>


