// Start Condition E-mail Address To Validate
var mailformat = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
// End Condition E-mail Address To Validate

// Start Condition First-middle-last Name To Validate
var regex = /^[a-zA-Z]+$/;
// End Condition First-middle-last Name To Validate


// Start password validation including minimum 8 characters 1 upper case 1 lower case 1 special character
// var x = /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"/;
// End password validation including minimum 8 characters 1 upper case 1 lower case 1 special character

// Start show and hide password for login page
function showpass(){
    "use strict"

    if(document.getElementById('eye').classList.contains('fa-eye')){
        document.getElementById('eye').classList.replace('fa-eye','fa-eye-slash');
        document.getElementById('formGroupExampleInput2').setAttribute('type','text');
    }else{
        document.getElementById('eye').classList.replace('fa-eye-slash','fa-eye');
        document.getElementById('formGroupExampleInput2').setAttribute('type','password');
    }

}
// End show and hide password for login page

// Start show and hide password for create New account For Amanah page
function showpass1(){
    "use strict"

    if(document.getElementById('eye1').classList.contains('fa-eye')){
        document.getElementById('eye1').classList.replace('fa-eye','fa-eye-slash');
        document.getElementById('pass').setAttribute('type','text');
    }else{
        document.getElementById('eye1').classList.replace('fa-eye-slash','fa-eye');
        document.getElementById('pass').setAttribute('type','password');
    }

}
function showpass2(){
    "use strict"

    if(document.getElementById('eye2').classList.contains('fa-eye')){
        document.getElementById('eye2').classList.replace('fa-eye','fa-eye-slash');
        document.getElementById('conpass').setAttribute('type','text');
    }else{
        document.getElementById('eye2').classList.replace('fa-eye-slash','fa-eye');
        document.getElementById('conpass').setAttribute('type','password');
    }
}
// End show and hide password for create New account For Amanah page

// Start Validate Register New Account For Sila Page
// function silaValReg(){
//     "use strict"
//
//     if(document.getElementById('validationCustom01').value == ""){
//         document.getElementById('sFirstName').innerHTML = "first name is empty";
//     }
//     else if(!document.getElementById('validationCustom01').value.match(regex)){
//         document.getElementById('sFirstName').innerHTML = "first name is no correct";
//     }
//     else{
//         document.getElementById('sFirstName').innerHTML = "";
//     }
//     if(document.getElementById('validationCustom09').value == ""){
//         document.getElementById('sLastName').innerHTML = "Last Name is empty";
//     }
//     else if(!document.getElementById('validationCustom09').value.match(regex)){
//         document.getElementById('sLastName').innerHTML = "Last Name is no correct";
//     }
//     else{
//         document.getElementById('sLastName').innerHTML = "";
//     }
//     if(document.getElementById('validationCustom07').value == ""){
//         document.getElementById('sStreetAddress').innerHTML = "enter your street address";
//     }
//     else{
//         document.getElementById('sStreetAddress').innerHTML = "";
//     }
//     if(document.getElementById('validationCustom05').value == ""){
//         document.getElementById('sCity').innerHTML = "enter your city";
//     }
//     else{
//         document.getElementById('sCity').innerHTML = "";
//     }
//     if(document.getElementById('validationCustom06').value == ""){
//         document.getElementById('sState').innerHTML = "enter your state";
//     }
//     else{
//         document.getElementById('sState').innerHTML = "";
//     }
//     if(document.getElementById('validationCustom08').value == ""){
//         document.getElementById('sZip').innerHTML = "enter your ZIP code";
//     }
//     else{
//         document.getElementById('sZip').innerHTML = "";
//     }
//     if(document.getElementById('validationCustom03').value == ""){
//         document.getElementById('sSSN').innerHTML = "ssn is empty";
//     }
//     else{
//         document.getElementById('sSSN').innerHTML = "";
//     }
//     if(document.getElementById('validationCustom04').value == ""){
//         document.getElementById('sBirthDate').innerHTML = "birth date is empty";
//     }
//     else{
//         document.getElementById('sBirthDate').innerHTML = "";
//     }
//     if(document.getElementById('siEmail').value == ""){
//         document.getElementById('sEmail').innerHTML = "Enter Email";
//     }
//     else if(!document.getElementById('siEmail').value.match(mailformat)){
//         document.getElementById('sEmail').innerHTML = "Email you entered is incorrect";
//     }
//     else{
//         document.getElementById('sEmail').innerHTML = "";
//     }
//     if(document.getElementById('formGroupExampleInput2').value == ""){
//         document.getElementById('sPhone').innerHTML = "Enter phone number";
//     }
//     else{
//         document.getElementById('sPhone').innerHTML = "";
//     }
// }
// End Validate Register New Account For Sila Page

// Start Validate Register New Account For Amanah Page
// function amanahValReg(){
//     "use strict"
//
//     if(document.getElementById('validationCustom01A').value == ""){
//         document.getElementById('fName').innerHTML = "Enter First Name";
//     }
//     else if(!document.getElementById('validationCustom01A').value.match(regex)){
//         document.getElementById('fName').innerHTML = "First Name Is No Correct";
//     }
//     else{
//         document.getElementById('fName').innerHTML = "";
//     }
//     if(document.getElementById('validationCustom02A').value == ""){
//         document.getElementById('mName').innerHTML = "Enter Middle Name";
//     }
//     else if(!document.getElementById('validationCustom02A').value.match(regex)){
//         document.getElementById('mName').innerHTML = "Middle Name Is No Correct";
//     }
//     else{
//         document.getElementById('mName').innerHTML = "";
//     }
//     if(document.getElementById('validationCustom09A').value == ""){
//         document.getElementById('lName').innerHTML = "Enter Last Name";
//     }
//     else if(!document.getElementById('validationCustom09A').value.match(regex)){
//         document.getElementById('lName').innerHTML = "Last Name Is No Correct";
//     }
//     else{
//         document.getElementById('lName').innerHTML = "";
//     }
//     if(document.getElementById('formGroupExampleInput1A').value == ""){
//         document.getElementById('eMail').innerHTML = "Enter Email Address";
//     }
//     else if(!document.getElementById('formGroupExampleInput1A').value.match(mailformat)){
//         document.getElementById('eMail').innerHTML = "Email Is No Correct";
//     }
//     else{
//         document.getElementById('eMail').innerHTML = "";
//     }
//     if(document.getElementById('formGroupExampleInput2A').value == ""){
//         document.getElementById('pNumber').innerHTML = "Enter Phone Number";
//     }
//     else{
//         document.getElementById('pNumber').innerHTML = "";
//     }
//     if(document.getElementById('pass').value == ""){
//         document.getElementById('passs').innerHTML = "Enter Password Please";
//     }
//     else if(document.getElementById('pass').value.length<8){
//         document.getElementById('passs').innerHTML = "Password at least 8 characters";
//     }
//     else if(document.getElementById('pass').value.search(/[0-9]/) == -1){
//         document.getElementById('passs').innerHTML = "Password at least 1 numeric";
//     }
//     else if(document.getElementById('pass').value.search(/[a-z]/) == -1){
//         document.getElementById('passs').innerHTML = "Password at least 1 lower case character";
//     }
//     else if(document.getElementById('pass').value.search(/[A-Z]/) == -1){
//         document.getElementById('passs').innerHTML = "Password at least 1 upper case character";
//     }
//     else if(document.getElementById('pass').value.search(/[!\@\#\$\%\^\&\*\(\)\-\_\=\+\<\,\>\?\/]/) == -1){
//         document.getElementById('passs').innerHTML = "Password at least 1 special symbol";
//     }
//     else{
//         document.getElementById('passs').innerHTML = "";
//     }
//     if(document.getElementById('conpass').value == ""){
//         document.getElementById('conpasss').innerHTML = "Enter Confirm Password";
//     }
//     else if(document.getElementById('pass').value != document.getElementById('conpass').value){
//         document.getElementById('conpasss').innerHTML = "Password Not Matches";
//     }
//     else if(document.getElementById('pass').value == document.getElementById('conpass').value){
//         document.getElementById('conpasss').innerHTML = "";
//     }
//     else{
//         document.getElementById('conpasss').innerHTML = "";
//     }
// }
// End Validate Register New Account For Amanah Page



// Start Validate Create Password For Amanah Page
document.getElementById('pass').addEventListener("keyup",function (){
    "use strict"

    // Start Password id for input to valid of condition password
    let pass = document.getElementById('pass').value;
    // End Password id for input to valid of condition password

    if(/[A-Z]/.test(pass)){
        document.getElementById('passUpperCase').classList.add('text-success');
        document.getElementById('ipassUpperCase').classList.add('fa-check-circle');
    }
    else{
        document.getElementById('passUpperCase').classList.remove('text-success');
        document.getElementById('ipassUpperCase').classList.remove('fa-check-circle');
    }
    if(/[a-z]/.test(pass)){
        document.getElementById('passLowerCase').classList.add('text-success');
        document.getElementById('ipassLowerCase').classList.add('fa-check-circle');
    }
    else{
        document.getElementById('passLowerCase').classList.remove('text-success');
        document.getElementById('ipassLowerCase').classList.remove('fa-check-circle');
    }
    if(/[0-9]/.test(pass)){
        document.getElementById('passNumeric').classList.add('text-success');
        document.getElementById('ipassNumeric').classList.add('fa-check-circle');
    }
    else{
        document.getElementById('passNumeric').classList.remove('text-success');
        document.getElementById('ipassNumeric').classList.remove('fa-check-circle');
    }
    if(/[^A-Za-z0-9]/.test(pass)){
        document.getElementById('passSpecialSymbol').classList.add('text-success');
        document.getElementById('ipassSpecialSymbol').classList.add('fa-check-circle');
    }
    else{
        document.getElementById('passSpecialSymbol').classList.remove('text-success');
        document.getElementById('ipassSpecialSymbol').classList.remove('fa-check-circle');
    }
    if(pass.length > 7){
        document.getElementById('passCharacters').classList.add('text-success');
        document.getElementById('ipassCharacters').classList.add('fa-check-circle');
    }
    else{
        document.getElementById('passCharacters').classList.remove('text-success');
        document.getElementById('ipassCharacters').classList.remove('fa-check-circle');
    }
});
// End Validate Create Password For Amanah Page

////////////////////////////////////////////////////////////////////////////////////

// Start JavaScript for disabling form submissions if there are invalid fields
// function getStart(){
//     "use strict"
//
//     if(document.getElementById('first-name').value == ""){
//         alert('Enter your first name');
//     }
//     else if(!document.getElementById('first-name').value.match(regex)){
//         alert('First name is no correct');
//     }
//     else if(document.getElementById('last-name').value == ""){
//         alert('Enter your last name');
//     }
//     else if(!document.getElementById('last-name').value.match(regex)){
//         alert('Last name is no correct');
//     }
//     else if(document.getElementById('address').value == ""){
//         alert('Enter your street address');
//     }
//     else if(document.getElementById('city').value == ""){
//         alert('Enter your city');
//     }
//     else if(document.getElementById('state').value == ""){
//         alert('Enter your state');
//     }
//     else if(document.getElementById('zip').value == ""){
//         alert('Enter zip code');
//     }
//     else if(document.getElementById('ssn').value == ""){
//         alert('Enter your ssn');
//     }
//     else if(document.getElementById('birth-date').value == ""){
//         alert('Enter your birth date');
//     }
//     else if(document.getElementById('email').value == ""){
//         alert('Enter your email');
//     }
//     else if(!document.getElementById('email').value.match(mailformat)){
//         alert('Email is no correct');
//     }
//     else if(document.getElementById('phone').value == ""){
//         alert('Enter your phone');
//     }
//     else{
//         alert('your data is success');
//     }
//
// }
// End JavaScript for disabling form submissions if there are invalid fields

// Start Upload File For Document Request Page
    $("#file-1").fileinput({
    theme: 'fa',
    uploadUrl: '#',
    allowedFileExtensions: ['pdf'],
    overwriteInitial: false,
    maxFileSize:2000,
    maxFilesNum: 1,
    slugCallback: function (filename) {
    return filename.replace('(', '_').replace(']', '_');
}
});
// End Upload File For Document Request Page
