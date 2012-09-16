    <?php
    Yii::app()->getClientScript()->registerCoreScript('jquery');
    Yii::app()->getClientScript()->registerCoreScript('jquery.ui');
         $baseUrl = Yii::app()->baseUrl;
 $cs = Yii::app()->getClientScript();
 $cs->registerScriptFile($baseUrl.'/js/jquery.editinplace.js');
 $cs->registerScriptFile($baseUrl.'/js/demo.js');

 
 ?>
    <body>
        <div id="container">
            <h1>Another In-Place Editor, jQuery Plugin</h1>

            <p>
                For more info and downloads please see the <a href="http://code.google.com/p/jquery-in-place-editor/">google code project page.</a>.
            </p>

            <p>
                If you'd like to see the javascript behind this page, please see <a href="./js/demo.js">js/demo.js</a>.
            </p>

            <h2>Example 1 - Standard Text box</h2>

            <p id="editme1">
                This example is with no options except for a callback that will handle the value when the edit is complete.
            </p>

            <h2>Example 2 - Text area</h2>

            <p id="editme2">
                This example shows how to call the function and display a textarea instead of a regular text box. A few other options are set as well, including an image saving icon, rows and columns for the textarea, and a different rollover color.
            </p>

            <h2>Example 3 - Select Dropdown</h2>

            <p id="editme3">
                How about a select input field so we can limit our options? Yup, just click here.
            </p>
            
            <h2>Example 4 - Using a callback function to update 2 divs</h2>

            <p id="editme4">
                Edit me now!
            </p>

            <div id="updateDiv1">First div to be updated</div>
            <div id="updateDiv2">Second div to be updated</div>
            
            <h2>Example 5 - Using saving animations while updating</h2>
            
            <p id="editme5">Edit me now!</p>
        </div>
    </body>