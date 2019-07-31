/* user login */
function toggleResetPswd(e) {
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle() // display:block or none
    $('#logreg-forms .form-reset').toggle() // display:block or none
}

function toggleSignUp(e) {
    e.preventDefault();
    $('#logreg-forms .form-signin').toggle(); // display:block or none
    $('#logreg-forms .form-signup').toggle(); // display:block or none
}

$(() => {
    // Login Register Form
    $('#logreg-forms #forgot_pswd').click(toggleResetPswd);
    $('#logreg-forms #cancel_reset').click(toggleResetPswd);
    $('#logreg-forms #btn-signup').click(toggleSignUp);
    $('#logreg-forms #cancel_signup').click(toggleSignUp);
})

/* seraching Location */
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (var i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

/* date picker */

$(document).ready(function() {
    // create DatePicker from input HTML element
    $("#datepicker").kendoDatePicker();

    $("#monthpicker").kendoDatePicker({
        // defines the start view
        start: "year",

        // defines when the calendar should return date
        depth: "year",

        // display month and year in the input
        format: "MMMM yyyy",

        // specifies that DateInput is used for masking the input element
        dateInput: true
    });
});


/*time picker*/

$(document).ready(function() {
    var data = [
        "10:00",
        "10:15",
        "10:30",
        "10:45",
        "11:00",

    ];

    //create AutoComplete UI component
    $("#countries").kendoAutoComplete({
        dataSource: data,
        filter: "startswith",
        placeholder: "Select times...",
        separator: ", "
    });
});

/* filter list*/

$(document).ready(function() {
    var data = [
        "Primary care Doctor",
        "Dermatologist",
        "Dentist",
        "ear,nose",
        "eye doctor",
        "Hering Specialist",
        "Orthopedic Surgen"
    ];

    $("#search").kendoAutoComplete({
        dataSource: data,
        separator: ", "

    });


    var validator = $("#ticketsForm").kendoValidator().data("kendoValidator"),
        status = $(".status");


});

/* search city*/

$(document).ready(function() {
    var data = [
        "Pune",
        "Mumbai",
        "Nashik",
        "Aurangabad",
        "Nagpur",
        "Haidrabad",
        "Belgium",
        "Bosnia & Herzegovina",
        "Bulgaria",
        "Croatia",
        "Cyprus",

    ];

    //create AutoComplete UI component
    $("#countries").kendoAutoComplete({
        dataSource: data,
        filter: "startswith",
        placeholder: "Select city...",
        separator: ", "
    });
});