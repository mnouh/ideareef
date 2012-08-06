<div id="main-content" class="clearfix">
    <div id="content-container">
        <h1> Pavilion </h1>
        <div>
            <?php
                echo $model -> name . '</br>';
                echo $model -> address . '</br>';
            ?>
        </div>

        <div class='row'>
            <h3> About Us </h3>
            <?php echo '</br>'; ?>
            <?php echo $model->aboutUs; ?>
        </div>

        <div class='row'>
            <h3> Competitions </h3>
            <?php echo '</br>'; ?>
            <?php 
                foreach ($model->competitions as $competition){
                    echo $competition -> name.'<br/>';
                    echo $competition -> description.'<br/>';
                    echo $competition -> startDate.'<br/>';
                    echo $competition -> endDate.'<br/>';
                } 
            ?>
        </div>

        <div class='row'>
            <h3> Events </h3>
            <?php echo '</br>'; ?>
        </div>

        <div class='row'>
            <h3> Job Positions </h3>
            <?php echo '</br>'; ?>
        </div>

        <div class='row'>
            <h3> Badges </h3>
            <?php echo '</br>'; ?>
        </div>

        <div class='row'>
            <h3> Statistics </h3>
            <?php echo '</br>'; ?>
        </div>
    </div>
</div>