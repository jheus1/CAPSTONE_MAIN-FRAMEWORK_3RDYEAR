function toggleDetails(button) {
    // Traverse up the DOM to find the parent card element within the same tab panel
    var card = button.closest('.card');
    
    // Find the card details section within the card
    var cardDetails = card.querySelector('.card-details');
    
    // Toggle the visibility of the card details section
    if (cardDetails) {
        if (cardDetails.style.display === 'none') {
            cardDetails.style.display = 'block';
        } else {
            cardDetails.style.display = 'none';
        }
    }
}

function removeCard(button) {
    // Traverse up the DOM to find the parent card element within the same tab panel
    var card = button.closest('.card');
    
    // Remove the card element
    if (card) {
        card.remove();
    }
}