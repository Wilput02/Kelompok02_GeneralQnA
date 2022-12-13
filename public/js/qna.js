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
      $(".q-a-part1wireframe-container20").css("display", "flex");
      isProcessing = true;
      let timerInterval
      Swal.fire({
        title: 'Information',
        text: 'Your Question Being Processed',
        icon: 'info',
        timer: 20000,
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
          async function query(form_data) {
            const response = await fetch(
              "https://api-inference.huggingface.co/models/BagusDP/distilbert-base-uncased-finetuned-squad",
              {
                headers: { Authorization: "Bearer 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" },
                method: "POST",
                body: JSON.stringify(form_data),
              }
            );
            const result = await response.json();
            return result;
          }

          query({
            "inputs": {
              "question": question,
              "context": context
            }
          }).then((response) => {
            console.log(JSON.stringify(response));
            $('.q-a-part1wireframe-text24').html(response.answer);
          });
          $('.q-a-part1wireframe-text22').html('' + response.question + ' ?');
          window.location.href = "#answer-pt";
        }
      })
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

$(document).ready(function () {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });

  $(".form-qna").submit(function (e) {
    e.preventDefault();
    validate();
  });
})