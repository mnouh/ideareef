<div id="main-content" class="clearfix">
    <div id="content-container">
        <h1> Homepage(Business) </h1>
        
         <div>
            <?php
                echo $model -> name . '</br>';
                echo $model -> address . '</br>';
                echo '</br>';
            ?>
        </div>
        
        <h3> Your Open Competitions </h3>
        
        <?php
            foreach ($model->competitions as $competition){
                echo $competition -> name.'<br/>';
                echo $competition -> description.'<br/>';
                echo $competition -> startDate.'<br/>';
                echo $competition -> endDate.'<br/>';
            }
        ?>
    </div>
</div>