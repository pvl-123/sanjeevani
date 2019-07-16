function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
/* location*/
$(document).ready(function() {
    var data = [
  "Mumbai,india",
  "Delhi,india",
  "Bengluru,india",
  "Kolkata,india",
  "Hydrabad,india",
  "Singapore,Singapore",
  "Ahemdabad,india"
    ];

    $("#search").kendoAutoComplete({
        dataSource: data,
        separator: ", "
    });


    var validator = $("#ticketsForm").kendoValidator().data("kendoValidator"),
    status = $(".status");

    $("form").submit(function(event) {
        event.preventDefault();
        if (validator.validate()) {
            status.text("Hooray! Your tickets has been booked!")
                .removeClass("invalid")
                .addClass("valid");
        } else {
            status.text("Oops! There is invalid data in the form.")
                .removeClass("valid")
                .addClass("invalid");
        }
    });
});