$(document).ready(function() {

     $('.aboutme').editable('http://localhost/ideareef/user/editAboutMe', { 
         type      : 'textarea',
         rows      : '10',
         cols      : '60',
         //cssclass  : 'txtArea',
         cancel    : 'Cancel',
         submit    : 'Update',
         indicator : '<center><img src="../images/ajax-loader.gif"></center>',
         tooltip   : 'Click to edit...'
     });
     
     
 });