
$(function cityAutocomplete() {
    var allCities = [
        "Ashdod",
        "Ashkelon",
        "Be'er Sheva",
        "Eilat",
        "Even Yehuda",
        "Haifa",
        "Herztliya",
        "Hod Hasharon",
        "Holon",
        "Jerusalem",
        "Kfar Saba",
        "Modi'in",
        "Nahariya",
        "Netanya",
        "Tel Aviv"
   ];
    $( "#myCity" ).autocomplete({
      source: allCities
    });
  });