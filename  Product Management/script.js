const initialPrice = 1000;
const inputQuan = document.getElementById('quantity');
const totalPrice = document.getElementById('totalPrice');

let alertCoupon = false;

inputQuan.addEventListener('input', inputValidation);

function inputValidation() {
    let quantity = parseInt(inputQuan.value);

    if (quantity < 0 || isNaN(quantity)) {
        inputQuan.value = 0;
        quantity = 0;
        alert('Quantity Must Be a positive Int');
    } 
    else {
        const total = initialPrice * quantity;
        totalPrice.value = total;

        if (total > 1000 && !alertCoupon) {
            alert('Congratulations! You are now eligible for a gift coupon.');
            alertCoupon = true;
        } else if (total <= 1000) {
            alertCoupon = false;
        }
    }
}
//alert('Test');