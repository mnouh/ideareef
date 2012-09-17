<?php
    Yii::app()->getClientScript()->registerCoreScript('jquery');
         $baseUrl = Yii::app()->baseUrl;
 $cs = Yii::app()->getClientScript();
 $cs->registerScriptFile($baseUrl.'/js/jquery.autosize.js');
 
 ?>

<script type="text/javascript">
    
    
$(document).ready(function() {

     $('textArea').autosize();
     
      });
      
</script>
<textarea rows="5" cols="50">
Testing

</textarea>