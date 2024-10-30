// validaciones.js
function isValidEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
}

function isValidPhone(phone) {
    const re = /^[0-9\-\+]{7,15}$/;
    return re.test(phone);
}

function isValidPrice(price) {
    return !isNaN(price) && price > 0;
}

function isValidQuantity(quantity) {
    return !isNaN(quantity) && quantity >= 0 && Number.isInteger(Number(quantity));
}

function showError(message) {
    alert(message);
}