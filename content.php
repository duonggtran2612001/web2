<div class="right" id="content">
    <?php
        if (isset($_GET['act'])) {
        
            switch($_GET['act']) {
                case "Login":
                    include('login.php');
                    break;
                case "LH":
                    include('contact.php');
                    break;
                case "TT": 
                    include('news.php');
                    break;
            }
        } else include('front_page.php')
    ?>
</div>
