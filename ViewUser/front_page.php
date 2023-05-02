<img src="https://img.cdn.vncdn.io/cdn-pos/518fda-134540/bn/20221026_zlRcbtLcsrJf4Yzx3onli4dQ.jpg" alt="">
<main>
    <?php
            include("../Model/dataprovider.php");
            //$id = $_GET['id'];
            $tmp =new dataprovider();
            $conn = $tmp->executeQuery('select * from sanpham limit 0,3');
            while ($row = mysqli_fetch_array($conn)) {
    ?>
            <section class="product">
                <img src="<?php echo $row["hinhanh"]; ?>" width="10%" alt="Product image">
                <h2><?php echo $row["tensanpham"]; ?> </h2>
                <p> Giá: <?php echo $row["gia"]; ?></p>
                <button>Thêm vào giỏ hàng</button>
            </section>
    <?php
            }      
    ?>
</main>