const sizeButtons = document.querySelectorAll('.size-buttons button');
const selectedSizeInput = document.getElementById('selectedSize');

sizeButtons.forEach(button => {
  button.addEventListener('click', () => {
    sizeButtons.forEach(b => b.classList.remove('active'));
    button.classList.add('active');

    // Option 2: Update hidden field with selected size (if applicable)
    if (selectedSizeInput) {
      selectedSizeInput.value = button.value;
    }
  });
});
