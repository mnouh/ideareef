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
     $('.currentCity').editable('http://localhost/ideareef/user/editCurrentCity', { 
         type      : 'text',
         //cssclass  : 'txtArea',
         indicator : '<center><img src="../images/ajax-loader.gif"></center>',
         tooltip   : 'Add a city'
     });
     $('.currentState').editable('http://localhost/ideareef/user/editCurrentState', { 
         type      : 'text',
         //cssclass  : 'txtArea',
         indicator : '<center><img src="../images/ajax-loader.gif"></center>',
         tooltip   : 'Add a state'
     });
     
 });