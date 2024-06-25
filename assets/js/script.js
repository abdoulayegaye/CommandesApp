$(document).ready(function() {
    $('#output').text('')
    $('#qteCommandee').on('keyup', function(){
        var qteCommandeeValue = $('#qteCommandee').val();
        var selectedOption = $('#mySelect option:selected');
        var qteStockValue = selectedOption.attr('qteStock');
        if (qteCommandeeValue > qteStockValue) {
            $('#output').text(qteCommandeeValue + ' > ' + qteStockValue).css('color', 'red');
        }
    });
    
});

function showMessage() {
    const messageElement = document.getElementById('message');
    messageElement.style.display = 'block'; // Afficher le message

    // Masquer le message après 3 secondes (3000 millisecondes)
    setTimeout(() => {
        messageElement.style.display = 'none'; // Masquer le message
    }, 3000);
}

showMessage();


function confirmation(){
    return confirm('Voulez-vous supprimer ce produit ?');
}

