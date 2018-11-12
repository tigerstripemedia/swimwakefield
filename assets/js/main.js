$(document).ready(function () {

  $('#selectGender, #selectCourse, #selectEvent').change(function() {
      var timescale = ($("#selectTimescale option:selected").val());

      var gender = ($("#selectGender option:selected").val());

      var course = ($("#selectCourse option:selected").val());

      var event = ($("#selectEvent option:selected").val());

      var link = "https://www.swimmingresults.org/" + timescale + "Pool=" + course + "&Stroke=" + event + "&Sex=" + gender + "&TargetYear=A&AgeGroup=OP&StartNumber=1&RecordsToView=50&TargetNationality=P&TargetRegion=P&TargetCounty=XXXX&Level=O&TargetClub=WAKEYRKE"

      $("#btnResults").attr('href', link);

    });

});

$(window).bind("pageshow", function() {
  document.getElementById("club-rankings-form").reset();
});