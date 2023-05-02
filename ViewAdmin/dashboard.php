<main>
    <?php
            session_start();
            include("../Model/dataprovider.php");
            $tmp =new dataprovider();
            if(isset($_SESSION['matk'])){
                $matk = $_SESSION['matk'];
            }
            $sql = 'select tenchucnang from chucnang,taikhoan,ctq_cn 
            where taikhoan.matk='.$matk.' and taikhoan.manhomquyen=ctq_cn.manhomquyen 
            and ctq_cn.tinhtrang=1 and ctq_cn.machucnang=chucnang.machucnang;';
            $conn = $tmp->executeQuery($sql);
            while ($row = mysqli_fetch_array($conn)) {
                echo $row['tenchucnang'].'<br>';
            }
?>
</main>