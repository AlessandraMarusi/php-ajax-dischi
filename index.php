<?php 
include __DIR__. '/database.php'

?>



<?php include __DIR__. '/partials/header.php' ?>
    <main>
        <div class="row">
            <?php foreach($dischi as $disco){ ?>
            <div class="col">
                <span><?php echo $disco['title'] ?></span>
            </div>
            <?php }?>
        </div>
    </main>
</body>
</html>