$(document).ready(function() {

     $('.aboutus').editable('http://localhost/ideareef/business/editAboutUs', { 
         type      : 'textarea',
         cancel    : 'Cancel',
         submit    : 'OK',
         indicator : '<img src="img/indicator.gif">',
         tooltip   : 'Click to edit...'
     });
 });