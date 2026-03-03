let username = document.getElementById('username');
//username.addEventListener('click',name_validation);

let btn1 = document.getElementById('btn1');
btn1.addEventListener('click', name_validation);

function name_validation() {

    if (username.value === "") {
        alert("Can not be empty");
    }
    else if (username.value.length < 2) {
        alert("Contains at least two word");
    }
    else if (!/^[a-zA-Z][a-zA-Z.\-\s]*$/.test(username)) {
        alert("Start with letter and can contain letter dot and dash");
    }
    else {
        alert("success")
    }
}
console.log("successfully connected....");