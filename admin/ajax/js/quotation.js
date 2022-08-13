jQuery(document).ready(function () {
   //Create slider
   $("#edit-quotation").click(function (event) {
      event.preventDefault();

      if (!$("#cost").val() || $("#cost").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter cost",
            type: "error",
            timer: 2000,
            showConfirmButton: false,
         });
      } else if (!$("#visits").val() || $("#visits").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter visits",
            type: "error",
            timer: 2000,
            showConfirmButton: false,
         });
      } else if (!$("#advance").val() || $("#advance").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter advance",
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
            url: "ajax/php/quotation.php",
            type: "POST",
            data: $("form#form-quotation").serialize(),
            dataType: "json",
            success: function (result) {
               // add description to table

               if (result.status === "success") {
                  $.notify("Invoice updated successfully", "success");
                  $("#preview-quotation").html(result.quotation);
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
      if (!$("#days").val() || $("#days").val().length === 0) {
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
      } else if (!$("#price").val() || $("#price").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter amount",
            type: "error",
            timer: 2000,
            showConfirmButton: false,
         });
      } else if (!$("#description").val() || $("#description").val().length === 0) {
         swal({
            title: "Error!",
            text: "Please enter description",
            type: "error",
            timer: 2000,
            showConfirmButton: false,
         });
      } else {
         //start preloarder
         // $('.someBlock').preloader();

         $.ajax({
            url: "ajax/php/quotation.php",
            type: "POST",
            data: $("form#form-data").serialize(),
            dataType: "json",
            success: function (result) {
               // add description to table

               if (result.status === "success") {
                  $.notify("Quotation detail added successfully", "success");
                  $("#days").val("");
                  $("#rate").val("");
                  $("#description").val("");
                  $("#price").val("");
                  $("#preview-quotation").html(result.quotation);
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
