$(function () {
  $("form[name='registar']").validate({

    rules: {
      nome:"required",
      email: {
        required: true,
        email: true
      },
      password: {
        required: true,
        minlength: 5,
        maxlength: 10
      },
      confirmpassword:{
        required: true,
        equalTo: '[name="password"]'
      }
    },
    messages: {
      nome: "Por favor introduza o seu nome",
      password: {
        required: "Por favor introduza a Password",
        minlength: "A tua password tem que ter no minimo 5 caracteres",
        maxlength: "A tua password tem que ter no máximo 10 caracteres"
      },
      confirmpassword: {
        required: "Por favor introduza a Password",
        equalTo: "As passwords têm de coincidir"
      },
      email: "Por favor introduza um email válido"
      },
    submitHandler: function(form) {
      form.submit();
    }
  });
});
