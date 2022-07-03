jQuery(document).ready(function() {

    //Create slider
    $("#create").click(function(event) {
        event.preventDefault();

        if (!$('#customer_name').val() || $('#customer_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter customer name",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#company_name').val() || $('#company_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter company name",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter address",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#contact_person').val() || $('#contact_person').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter contact person",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter address",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#contact_person').val() || $('#contact_person').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Conntact Person",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#phone_number').val() || $('#phone_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Phone Number",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter email",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else {
            //start preloarder
            // $('.someBlock').preloader();

            //grab all form data  
            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "ajax/php/customer.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: 'json',
                success: function(result) {

                    //remove preloarder
                    // $('.someBlock').preloader('remove');

                    if (result.status === 'success') {
                        swal({
                            title: "success!",
                            text: "Your data saved successfully !",
                            type: 'success',
                            timer: 2000,
                            showConfirmButton: false
                        });
                        window.setTimeout(function() {
                            window.location.reload();
                        }, 2000);
                    } else if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });
        }
        return false;
    });


    //Update slider
    $("#update").click(function(event) {
        event.preventDefault();
        if (!$('#customer_name').val() || $('#customer_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter customer name",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#company_name').val() || $('#company_name').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter company name",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter address",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#contact_person').val() || $('#contact_person').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter contact person",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#address').val() || $('#address').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter address",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });

        } else if (!$('#contact_person').val() || $('#contact_person').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Conntact Person",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#phone_number').val() || $('#phone_number').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter Phone Number",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else if (!$('#email').val() || $('#email').val().length === 0) {
            swal({
                title: "Error!",
                text: "Please enter email",
                type: 'error',
                timer: 2000,
                showConfirmButton: false
            });
        } else {

            //start preloarder
            //$('.someBlock').preloader();
            //grab all form data  
            var formData = new FormData($("form#form-data")[0]);

            $.ajax({
                url: "ajax/php/customer.php",
                type: 'POST',
                data: formData,
                async: false,
                cache: false,
                contentType: false,
                processData: false,
                dataType: "JSON",
                success: function(result) {

                    //remove preloarder
                    // $('.someBlock').preloader('remove');

                    if (result.status == 'success') {
                        swal({
                            title: "success!",
                            text: "Your data updated successfully !",
                            type: 'success',
                            timer: 2500,
                            showConfirmButton: false
                        });
                        window.setTimeout(function() {
                            window.location = 'manage-customers.php';
                        }, 2000);

                    } else if (result.status === 'error') {
                        swal({
                            title: "Error!",
                            text: "Something went wrong",
                            type: 'error',
                            timer: 2000,
                            showConfirmButton: false
                        });
                    }
                }
            });

        }
        return false;
    });
});