document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById('contactoForm');
  form.addEventListener('submit', function(event) {
    event.preventDefault();

    const formData = new FormData(form);
    fetch('http://localhost:8080/frontend/save', {
      method: 'POST',
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      if(data.success){
        Swal.fire({
          title: 'test-entrevista',
          text: data.message,
          icon: 'success',
          confirmButtonText: 'Aceptar'
        });
      }
    });
  });
});