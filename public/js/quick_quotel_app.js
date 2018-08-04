
$(document).ready(function() {

    $('#myForm').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            business_name:{
                validators: {
                    notEmpty: {
                        message: 'Please supply your name of business'
                    }
                }  
            },
            address1:{
                validators: {
                    notEmpty: {
                        message: 'Please supply your address'
                    }
                }  
            },
            city:{
                validators: {
                    notEmpty: {
                        message: 'Please supply city'
                    }
                }  
            },
            state:{
                validators: {
                    notEmpty: {
                        message: 'Please supply your state'
                    }
                }  
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'Please supply your phone number'
                    },
                    phone: {
                        country: 'US',
                        message: 'Please supply a vaild phone number with area code'
                    }
                }
            }
          } // end fields
        })
        .on('error.field.bv', function(e, data) {
          console.log('Errors....................');                        
          console.log(data);          
        })
        .on('success.form.bv', function(e) {
            var $form = $(e.target),                        // The form instance
                bv    = $form.data('bootstrapValidator');   // BootstrapValidator instance
            // Prevent form submission
            e.preventDefault();
        })
        .on('error.form.bv', function(e) {
            console.log('Looks like it did not pass.......');
            return false;
        });    

});
