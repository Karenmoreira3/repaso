document.getElementById('ageForm').addEventListener('submit', function(event) {
  const ageInput = document.getElementById('age');
  const errorMessage = document.getElementById('errorMessage');
  const ageValue = ageInput.value.trim();

  // Validar que la entrada sea un número
  if (!/^\d+$/.test(ageValue)) {
      errorMessage.classList.remove('hidden');
      ageInput.classList.add('border-red-500');
      event.preventDefault(); // Evitar el envío del formulario
  } else {
      errorMessage.classList.add('hidden');
      ageInput.classList.remove('border-red-500');
  }
});
