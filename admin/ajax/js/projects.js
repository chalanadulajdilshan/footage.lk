jQuery(document).ready(function () {
   //Create slider
   $("#edit-invoice").click(function (event) {
      event.preventDefault();

      if (!$("#note").val() || $("#note").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter note",
            type: "error",
            timer: 2000,
            showConfirmButton: false,
         });
      } else if (!$("#date").val() || $("#date").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter date",
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
            data: $("form#form-invoice").serialize(),
            dataType: "json",
            success: function (result) {
               // add description to table

               if (result.status === "success") {
                  $.notify("Invoice updated successfully", "success");
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
      } else if (!$("#days").val() || $("#days").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter days",
            type: "error",
            timer: 2000,
            showConfirmButton: false,
         });
      } else if (!$("#rate").val() || $("#rate").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter rate price",
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
                  $.notify("Invoice detail added successfully", "success");
                  $("#description").val("");
                  $("#days").val("");
                  $("#rate").val("");
                  $("#price").val("");
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
