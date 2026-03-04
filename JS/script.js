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
let email = document.getElementById('usermail');
//email.addEventListener('click',email_validation);

let btnmail = document.getElementById('btnemail');
btnmail.addEventListener('click', email_validation);

function email_validation() {

    if (email.value === "") {
        alert("Email should be entered");
    }
    else if (!/^[a-zA-z0-9.-_]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/.test(email.value)) {
        alert('Input Valid Email');
    }
}
let btngender = document.getElementById('btngen');
btngender.addEventListener('click', gender_validation);

const genders = document.getElementsByName('Gender');
function gender_validation() {
    const genderselected = document.querySelector('input[name="Gender"]:checked');
    if (!genderselected) {
        alert('Please select your gender');
    }
}

let txtBox_date = document.getElementById('dd');
let txtBox_month = document.getElementById('mm');
let txtBox_year = document.getElementById('yyyy');
let btndate = document.getElementById('datesubmit');
btndate.addEventListener('click', date_validation);

function date_validation() {
    if (txtBox_date.value === "" || txtBox_month.value === "" || txtBox_month.value === "") {
        alert('Please fill up all fields (Date, Month, Year)');
    }
    else if (txtBox_date.value < 1 || txtBox_date.value > 31) {
        alert('Invalid Date (Must be 1-31)');
    }
    else if (txtBox_month.value < 1 || txtBox_month.value > 12) {
        alert('Invalid Month (Must be 1-12)');
    }
    else if (txtBox_year.value > 1900 || txtBox_year.value > currentYear) {
        alert('Invalid Year (Enter a realistic year)');
    }
}

console.log("successfully connected....");