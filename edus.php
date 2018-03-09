<html>
<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, maximum-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>EDUS Sportelli tra pari</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">
    <!-- Your custom styles (optional) -->
    <link href="css/style.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="js/modify_table.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/purecss@1.0.0/build/pure-min.css" integrity="sha384-nn4HPE8lTHyVtfCBi5yW9d20FjT8BJwUXyWZT9InLYax14RDjBj46LmSztkmNP9w" crossorigin="anonymous">
</head>
<body leftmargin="0" topmargin="0"  marginleft="0" margintop="0">

<!-- navbar -->
  <div class="navbar navbar-dark blue">
    <div class="container d-flex justify-content-between">
      <p class="navbar-brand"><strong>EDUS</strong></p>
      <button type="button" class="btn btn-primary" data-toggle="modal" onclick="document.location.href='index.html';">Log Out</button>
    </div>
  </div>

<!-- Fine navbar -->

<!-- header -->
      <section class="jumbotron text-center">
        <div class="container">
          <br>
          <p><img src="img\Edus Logo.png"  class = "img-fluid"></p>
          <br>
          <div class="gradient1">
            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif;">Educazione Didattica Unitaria Scolastica</h2>
          </div>
      </section>
      <!-- Fine header -->
    </br></br>
        <h2 class="display-4"> Disponibilità dei Tutor</h2>
<br>
<form id="tutor-search-form" method="get">
            <div class="container">
                <div class="col-md-11 ">
                <div class="row">

                  <div class="col-md-3 ">
                      <div class="pure-form">
                        <input type="search" id="cognome" name="cognome " class="form-control"  placeholder="Cognome">
                      </div>
                  </div>

                  <div class="col-md-3 ">
                    <div class="pure-form">
                      <input type="search" id="classe" name="classe" class="form-control"  placeholder="Classe">
                      
                    </div>
                  </div>

                  <div class="col-md-3 ">
                    <div class="pure-form">
                      <input type="search" id="materia" name="materia" class="form-control"  placeholder="Materia">
                      
                    </div>
                  </div>

                  <div class="col-md-3 ">
                    <div class="span6 pull-right ">
                      <input id="cerca" value="SEARCH" name="search" type="submit" class="btn btn-success" style="width: 100%"/>
                    </div>
                  </div>


              </div>
            </div>
            </div>
</form>

<div id="content" class="container">
<div id="table-container" class="users-table table-responsive">
<br>
<table id="result-table" cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered">
<thead class="mdb-color blue">
<tr class="text-white" role="row">
    <th class="header">Cognome</th>
    <th class="header">Nome</th>
    <th class="header">Classe</th>
    <th class="header">Materie</th>
    <th class="header">Actions</th>
</tr>
</thead>
<tbody>

  <?php

      include('php/table.php');

  ?>

</div>
</div>
</div>

        <!--Footer-->
        <footer class="page-footer blue center-on-small-only">
            <!--Footer Links-->
            <div class="container-fluid">
                <div class="row">

                    <div class="col-md-4">
                      <strong>ITIS G. Marconi Verona</strong>
                      <hr>
                      <address>
                          P.le R. Guardini 1<br>
                          Verona, IT 37138<br>
                        <abbr title="Telefono">Tel:</abbr> +39 045 8101428<br>
                        <abbr title="Fax">Fax:</abbr> +39 045 573497<br>
                        <abbr title="E-mail">Mail:</abbr> <a href="/cdn-cgi/l/email-protection#6016121406505350505016201005034e09131412151a090f0e054e0914" target="blank"><span class="__cf_email__" data-cfemail="b3c5c1c7d58380838383c5f3c3d6d09ddac0c7c1c6c9dadcddd69ddac7">[email&#160;protected]</span></a><br>
                        <abbr title="Website">Site:</abbr> <a href="http://www.marconiverona.gov.it/" target="blank">marconiverona.gov.it</a>
                      </address>
                    </div>

                    <div class="col-md-4">
                      <strong>Altri progetti</strong>
                      <hr>
                      <address>
                        <strong>Campus</strong> <a href="http://campus.marconivr.it" target="blank">campus.marconivr.it</a><br>
                        <strong>Portale</strong> <a href="http://portal.marconivr.it/" target="blank">portal.marconivr.it</a><br>
                        <strong>OpenData</strong> <a href="http://opendata.marconivr.it/" target="blank">opendata.marconivr.it</a><br>
                        <strong>Poldo</strong> <a href="http://marconi.hofa.me" target="blank">marconi.hofa.me</a><br>
                        <strong>Biblioteca 2.0</strong> <a href="http://www.anobii.com/marconivr/books" target="blank">http://www.anobii.com/marconivr/books</a><br>
                      </address>
                    </div>

                    <div class="col-md-4">
                      <strong>Sportelli Tra Pari website</strong>
                      <hr>
                      <img src="img/logo_footer.png" class="img-fluid">
                    </div>
                </div>
            </div>
            <!--/.Footer Links-->
            <!--Copyright-->
            <div class="footer-copyright">
                <div class="container-fluid">
                    © 2018 Team Edus
                </div>
            </div>
            <!--/.Copyright-->
        </footer>
        <!--/.Footer-->

        <!-- JQuery -->
            <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
            <!-- Bootstrap tooltips -->
            <script type="text/javascript" src="js/popper.min.js"></script>
            <!-- Bootstrap core JavaScript -->
            <script type="text/javascript" src="js/bootstrap.min.js"></script>
            <!-- MDB core JavaScript -->
            <script type="text/javascript" src="js/mdb.min.js"></script>
</body>
</html>
