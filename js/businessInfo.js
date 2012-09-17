$(document).ready(function() {

     $('.aboutus').editable('http://localhost/~mnouh/ideareef/business/editAboutUs', { 
         type      : 'textarea',
         rows      : '10',
         cols      : '60',
         //cssclass  : 'txtArea',
         cancel    : 'Cancel',
         submit    : 'Update',
         indicator : '<img src="img/indicator.gif">',
         tooltip   : 'Click to edit...'
     });
     
     
 });