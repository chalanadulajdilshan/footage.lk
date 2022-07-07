jQuery(document).ready(function () {
   //Create slider
   $("#create").click(function (event) {
      event.preventDefault();

      if (!$("#description").val() || $("#description").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter description",
            type: "error",
            timer: 2000,
            showConfirmButton: false,
         });
      } else if (!$("#price").val() || $("#price").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter price",
            type: "error",
            timer: 2000,
            showConfirmButton: false,
         });
      } else {
         //start preloarder
         // $('.someBlock').preloader();

         $.ajax({
            url: "ajax/php/invoice.php",
            type: "POST",
            data: $("form#form-data").serialize(),
            dataType: "json",
            success: function (result) {
               // add description to table

               if (result.status === "success") {
                  $("#description").val('');
                  $("#price").val('');
                  $("#preview-invoice").html(result.invoice);
               } else {
                  swal({
                     title: "Error!",
                     text: "Something went wrong",
                     type: "error",
                     timer: 2000,
                     showConfirmButton: false,
                  });
               }
            },
         });
      }
      return false;
   });
});
