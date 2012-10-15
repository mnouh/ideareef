$(document).ready(function() {

     $('.aboutme').editable('http://www.ideareef.com/user/editAboutMe', { 
         type      : 'textarea',
         rows      : '10',
         cols      : '60',
         //cssclass  : 'txtArea',
         cancel    : 'Cancel',
         submit    : 'Update',
         indicator : '<center><img src="../images/ajax-loader.gif"></center>',
         tooltip   : 'Click to edit...'
     });
     $('.currentCity').editable('http://www.ideareef.com/user/editCurrentCity', { 
         type      : 'text',
         indicator : '<img src="../images/ajax-loader.gif">',
         tooltip   : 'Add a city',
         style  : "inherit",
         width : '50'
     });
     $('.currentState').editable('http://www.ideareef.com/user/editCurrentState', { 
         type      : 'text',
         indicator : '<img src="../images/ajax-loader.gif">',
         tooltip   : 'Add a state',
         style  : "inherit",
         width : '50'
     });
     
 });