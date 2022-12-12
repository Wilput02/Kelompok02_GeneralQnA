function validate() {
 var context = $('#contextqina').val();
 var question = $('#questionqina').val();
 var form_data = new FormData();
 form_data.append('context', context);
 form_data.append('question', question);

 $.ajax({
   type: "POST",
   url: "/strdata",
   data: form_data,
   cache: false,
   contentType: false,
   processData: false,
   success: function (response) {
     window.location.href = "#answer-pt";
     $(".q-a-part1wireframe-container20").css("display", "flex");
     $('.q-a-part1wireframe-text22').html('' + response.question + ' ?');
     $('.q-a-part1wireframe-text24').html(response.context);
     /*isProcessing = true;
     let timerInterval
     Swal.fire({
       title: 'Information',
       text: 'Your Question Being Processed',
       icon: 'info',
       timer: 500,
       timerProgressBar: true,
       didOpen: () => {
         Swal.showLoading()
         const b = Swal.getHtmlContainer().querySelector('b')
         timerInterval = setInterval(() => {
           b.textContent = Swal.getTimerLeft()
         }, 10000)
       },
       willClose: () => {
         clearInterval(timerInterval)
       }
     })*/
   },
   error: function (response) {
     if (response.status == 422) {
       $.each(response.responseJSON.errors, function (key, value) {
         $('.input-' + key).addClass('invalid-input');
         $('.invalid-feedback.' + key).html(value[0]);

         if (response.responseJSON.errors.context == null) {
           $('.input-context').removeClass('invalid-input');
           $('.invalid-feedback.context').html('');
         }

         if (response.responseJSON.errors.question == null) {
           $('.input-question').removeClass('invalid-input');
           $('.invalid-feedback.question').html('');
         }
       })
     }
   }
 });
}