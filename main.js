document.getElementById('checkout-btn').addEventListener('click', function() {
    alert('Thank you for your purchase!');

    setTimeout(function() {
      successMessage.remove();
    }, 2000);
});