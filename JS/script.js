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
        alert("Email Must be entered");
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

let degree = document.getElementsByName('degree');
let btndegree = document.getElementById('btndeg');
btndegree.addEventListener('click', btndeg_validation);
function btndeg_validation() {
    let is_chacked = false;
    for (let i = 0; i < degree.length; i++) {
        if (degree[i].checked) {
            is_chacked = true;
            break;
        }
    }
    if (!is_chacked) {
        alert('Select Minumum degree');
    }
    else {
        alert('Degree Validation Successfull');
    }
}

let bldgrop = document.getElementsByTagName('select')[0];

let btnbldgrp = document.getElementById('btnbldgrp');
btnbldgrp.addEventListener('click', bldgrp_validation);

function bldgrp_validation() {
    if (bldgrop.value === "") {
        alert('Your blood group is not select yet');
        bldgrop.style.border = "2px solid red";
    }
    else {
        alert('Scuucssfully Intered');
        bldgrop.style.borderBottom = "2px solid blue";
        bldgrop.style.borderEndStartRadius = "5px";
    }
}

let userid = document.getElementById('userid');
let id_pic = document.getElementById('picture');
let button7 = document.getElementById('btn7');
button7.addEventListener('click', valid_id_pic);

function valid_id_pic() {
    if (userid.value === "" && id_pic.files.length === 0) {
        alert('Both user Id & picture Is empty');
        return;
    }
    else if (Number(userid.value) < 0 || userid.value === "") {
        alert('Please inter a positive number');
        userid.value="";
        return;
    }
    else if (id_pic.files.length === 0) {
        alert('Upload a picture');
        return;
    }
    else {
        alert('Successfully Submited');
    }
}


console.log("successfully connected....");