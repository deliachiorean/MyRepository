
// SELECTING ALL TEXT ELEMENTS
var name = document.forms['vform']['name'];
var address = document.forms['vform']['address'];
var continent = document.forms['vform']['continent'];

// SELECTING ALL ERROR DISPLAY ELEMENTS
var name_error = document.getElementById('name_error');
var address_error = document.getElementById('address_error');
var continent_error = document.getElementById('continent_error');
// SETTING ALL EVENT LISTENERS
name.addEventListener('blur', nameVerify, true);
address.addEventListener('blur', addressVerify, true);
continent.addEventListener('blur', continentVerify, true);
// validation function
function Validate() {
    // validate name
    if (name.value == "") {
        name.style.border = "1px solid red";
        document.getElementById('name_div').style.color = "red";
        name_error.textContent = "name is required";
        name.focus();
        return false;
    }
    // validate name
    if (name.value.length < 3) {
        name.style.border = "1px solid red";
        document.getElementById('name_div').style.color = "red";
        name_error.textContent = "name must be at least 3 characters";
        name.focus();
        return false;
    }
    // validate address
    if (address.value == "") {
        address.style.border = "1px solid red";
        document.getElementById('address_div').style.color = "red";
        address_error.textContent = "Address is required";
        address.focus();
        return false;
    }
    // validate continent
    if (continent.value == "") {
        continent.style.border = "1px solid red";
        document.getElementById('continent_div').style.color = "red";
        continent_error.textContent = "Continent is required";
        continent.focus();
        return false;
    }
}
// event handler functions
    function nameVerify() {
        if (name.value != "") {
            name.style.border = "1px solid #5e6e66";
            document.getElementById('name_div').style.color = "#5e6e66";
            name_error.innerHTML = "";
            return true;
        }
    }

    function addressVerify() {
        if (address.value != "") {
            address.style.border = "1px solid #5e6e66";
            document.getElementById('address_div').style.color = "#5e6e66";
            address_error.innerHTML = "";
            return true;
        }
    }

    function continentVerify() {
        if (continent.value != "") {
            continent.style.border = "1px solid #5e6e66";

            document.getElementById('continent_div').style.color = "#5e6e66";
            continent_error.innerHTML = "";
            return true;
        }


    }