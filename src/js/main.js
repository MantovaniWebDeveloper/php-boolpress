//richiamo jquery
var $ = require("jquery");

$(document).ready(function() {
  //alert("esisto");
  var url = "http://localhost/php/php-boolpress/data-comments.php"
  $.ajax({
    url: url,
    method: "GET",
    success: function(data) {
      


    },
    error: function(error) {
      alert("c'è un errore di comunicazione");
    }
  })
});
