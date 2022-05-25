<?php 
include __DIR__. '/database.php'

?>



<?php include __DIR__. '/partials/header.php' ?>
    <main>
        <div class="container myContainer">
            <div class="row">
                <?php foreach($dischi as $disco){ ?>
                <div class="col g-3 gx-4">
                    <div class="myCard p-3">
                        <img src="<?php echo $disco['poster']?>" alt="">
                        <h4><?php echo $disco['title']?></h4>
                        <span><?php echo $disco['author']?></span>
                        <span><?php echo $disco['year']?></span>
                    </div>
                </div>
                <?php }?>
            </div>
        </div>
    </main>
</body>
</html>