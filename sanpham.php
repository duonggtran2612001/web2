
<?php
        $id = $_GET['id'];
        if (isset($_GET['trang'])) {
            $vitribatdau = ($_GET['trang'] - 1)*1;
            $conn = dataprovider::executeQuery('select * from sanpham where idtheloai='.$id.' limit '.$vitribatdau.',1');
        } else $conn = dataprovider::executeQuery('select * from sanpham where idtheloai='.$id.' limit 0,1');
        while ($row = mysqli_fetch_array($conn)) {
?>
        <div class="product-item">
        <form method="post" action="index.php">
        <div class="product-image"><img src="<?php echo $row["hinhanh"]; ?>" width="10%"></div>
        <div class="product-tile-footer">
        <div class="product-title"><?php echo $row["tensanpham"]; ?></div>
        <div class="product-price"><?php echo $row["gia"]; ?></div>
        </div>
        <div class="product-num-pages">
            <?php
                $bien="sanpham";
                $temp="idtheloai";
                include("phantrang.php");
                for ($i =1; $i <= $sotrang;$i++) {
            ?>
                <input type="submit" formaction="index.php?act=TL&id=<?php echo $id; ?>&trang=<?php echo $i; ?>" value="<?php echo $i; ?>">
            <?php
                } 
            ?>
        </div>
        </form>
        </div>
<?php
        }      
?>