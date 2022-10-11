/**
   * Function EmailJS
   */
 const btn = document.getElementById('button');
 document.getElementById('form')
 .addEventListener('submit', function(event) {
   event.preventDefault();     
   btn.value = 'Enviando...';

   const serviceID = 'default_service';
   const templateID = 'template_y7bm3nk';
 
   emailjs.sendForm(serviceID, templateID, this)
    .then(() => {
      btn.value = 'Enviar Mensaje';
      alert('Mensaje Enviado Correctamente');
    }, (err) => {
      btn.value = 'Enviar Mensaje';
      alert(JSON.stringify(err));
    });
    document.querySelector("form").reset();  
});