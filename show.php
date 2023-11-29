<div class="container">
    <div class="row">
        <div class="col-md-12">
                <?php
                echo '<font color="red">';   
                echo 'คำค้น = ';
                echo $_GET['Search'];
                echo '</font>';
                echo '<br/>';
                $sql = "SELECT * FROM tbl_search
                    WHERE title LIKE '%$Search%' OR detail LIKE '%$Search%'
                 ORDER BY id DESC";
                $result = mysqli_query($conn, $sql);
                while($row = mysqli_fetch_array($result)) {
                                   
                    
                        echo "<div class='col-md-4'>";
                        echo "<div class='service-item'>";
                        echo "<img src='img/" . $row["pic"] ." ' width='800'>";
                        echo "<div class='down-content'>";
                        echo "<h4>" . $row["name"] . "</h4>";
                        echo "<div style='margin-bottom:10px;'>";
                        echo "<span> <sup>฿</sup>" .number_format($row["price"],2). "</span>";
                        echo "</div>";
                        echo "<p>" . $row["detail"] . "</p>";
                        echo "<a href='package-details1.1.php?id=$row[id]' class='filled-button'>ดูรายละเอียดเพิ่มเติม</a>";
                        echo "</div>";
                        echo "</div>";
                        echo "<br>";
                        echo "</div>";
                    
                      
                ?>
               
            <?php } ?>
                    
        <?php mysqli_close($conn);?>
    </div>
</div>
</div>