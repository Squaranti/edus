$(document).ready(function(event) {
    $('#tutor-search-form').submit(function(event) {
      event.preventDefault();
        $.get("php/db_interact.php",
        {
          cognome: $('#cognome').val(),
          nome: $('#nome').val(),
          classe: $('#classe').val(),
          dataType: 'json'
        }).done(function(data) {
                if (data.error !== undefined & data.error !== "") {
                    alert('Error '+data.error);
                } else {
                  // alert(data["processes"]);
                  processing_data(data);
                }
            })
            .fail(function() {
                alert(" is Failed");
            });
    });
});

function processing_data(data) {
    if ($('#table-container').length > 0) {
        $('#table-container').remove();
    }

    if (data.noresult !== undefined) {
        $('#content').append("<div class='row'>"+data.noresult+"</div>");
        return;
    }

    $('#content').append("<div class='users-table table-responsive' id='table-container'><table id='result-table' cellpadding='0' cellspacing='0' border='0' class='table table-striped table-bordered'><thead class='mdb-color blue'><tr class='text-white' role='row'><th class='header'>Cognome</th><th class='header'>Nome</th><th class='header'>Classe</th><th class='header'>Materia</th><th class='header'>Actions</th></tr></thead><tbody></table></div></div>");

    for (key in data["processes"]) {
      row = "<td class='center'>"+ data["processes"][key]["cognome"] +"</td><td class='center'>"+ data["processes"][key]["nome"] +"</td><td class='center'>"+ data["processes"][key]["classe"] +"</td><td class='center'>"+ data["processes"][key]["materia"] +"</td><td class='center'><a class='btn btn-mini btn-success' href='http://apps.marconivr.it/timap/user/" +data["processes"][key]["matricola"] + "'><i class='icon-zoom-in icon-white'></i>View</a></td>" ;
      $('#result-table').append("<tr class='odd'>"+row+"</tr>");
    }

    document.getElementById("cognome").value = null;
    document.getElementById("classe").value = null;
    document.getElementById("materia").value = null;
}
