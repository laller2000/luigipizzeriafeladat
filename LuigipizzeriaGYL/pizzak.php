<?php
require './Connectluigi.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    </head>
    <body>
        <div class="container">
            <?php
            $sql="SELECT `ID`,`nev`,`ar`,`sajt`,`szosz` FROM `pizza`";
            $result=$conn->query($sql);
            if($result->num_rows>0)
            {
                
                ?>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Név</th>
                        <th>Ár</th>
                        <th>Sajt</th>
                        <th>Szósz</th>
                    </tr>
                </thead>
            <?php
                while($row=$result->fetch_assoc())
                {
                    echo '<tr><td>'.$row["ID"].'</td>';
                    echo '<td>'.$row["nev"].'</td>';
                    echo '<td>'.$row["ar"].'</td>';
                    echo '<td>'.$row["sajt"].'</td>';
                    echo '<td>'.$row["szosz"].'</td>';
                    echo '</tr>';
                    
                }
                echo '</table>';
            }else{
                echo '0 results';
            }
            ?>
                <div class="card" style="width:400px">
                    <img src="0.jpg" class="card-img-top" alt="hagymás"/>
                    <div class="card-body">
                        <p class="card-text">Hagymás</p>
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <img src="1.jpg" class="card-img-top" alt="Szalámis"/>
                    <div class="card-body">
                        <p class="card-text">Szalámis</p>
                    </div>
                </div> 
                <div class="card" style="width:400px">
                    <img src="2.jpg" class="card-img-top" alt="zöldséges"/>
                    <div class="card-body">
                        <p class="card-text">Zöldséges</p>
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <img src="3.jpg" class="card-img-top" alt="sajtos"/>
                    <div class="card-body">
                        <p class="card-text">sajtos</p>
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <img src="4.jpg" class="card-img-top" alt="kolbászos"/>
                    <div class="card-body">
                        <p class="card-text">kolbászos</p>
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <img src="5.jpg" class="card-img-top" alt="kukoricás"/>
                    <div class="card-body">
                        <p class="card-text">kukoricás</p>
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <img src="6.jpg" class="card-img-top" alt="baconos"/>
                    <div class="card-body">
                        <p class="card-text">baconos</p>
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <img src="7.jpg" class="card-img-top" alt="paradicsomos"/>
                    <div class="card-body">
                        <p class="card-text">pardicsomos</p>
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <img src="8.jpg" class="card-img-top" alt="magyaros"/>
                    <div class="card-body">
                        <p class="card-text">magyaros</p>
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <img src="9.jpg" class="card-img-top" alt="gombás"/>
                    <div class="card-body">
                        <p class="card-text">gombás</p>
                    </div>
                </div>
                <div class="card" style="width:400px">
                    <img src="10.jpg" class="card-img-top" alt="Cola"/>
                    <div class="card-body">
                        <p class="card-text">Coca Cola</p>
                    </div>
                </div> 
                <div class="card" style="width:400px">
                    <img src="11.jpg" class="card-img-top" alt="sör"/>
                    <div class="card-body">
                        <p class="card-text">Dreker sör</p>
                    </div>
                </div>
        </div>  
    </body>
</html>

