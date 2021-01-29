<!DOCTYPE html>
<html lang="en" dir="ltr">
<?php
//Starts the session that's being used
  session_start();
  if($_SESSION["loggedIn"] != "true"){
    header('Location: http://oai-content.co.uk');
  }
?>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript">
      $(window).on('load', function() {
          $('#myModal').modal('show');
      });
  </script>
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

  <!-- Ethics and stuff -->
</button>
<div class="modal show" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Before you start</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        Thank you for the participating in this Questionnaire. Before you can begin please read through the University of Dundee ethics policy and our privacy policy. When you click agree you accept both agreements. Clicking disagree will redirect you to the Home page and you will no longer able to participate in the questionnaire. If you have any questions, please speak to the research who oversees the questionnaire.
        <ul class="nav nav-tabs">
          <li class="active"><a data-toggle="tab" href="#Ethics">UOD Ethics</a></li>
          <li><a data-toggle="tab" href="#privacy">Privacy Policy</a></li>
        </ul>
        <div class ="tab-content">
          <div id="Ethics" class="tab-pane fade in active">
            <h3>Ethics</h3>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu consectetur augue. In id dui nibh. Sed non tincidunt tortor, rutrum placerat lacus. Mauris lacinia rhoncus sagittis. Cras varius aliquet elementum. Quisque neque lacus, venenatis a elit non, egestas malesuada arcu. Proin sodales urna et lorem viverra dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dapibus, tortor vitae luctus congue, justo lectus pellentesque est, eu egestas nisl magna quis purus. Sed sollicitudin quam eget feugiat scelerisque. Aliquam erat volutpat. Integer ac nunc in dui finibus malesuada. Integer eget augue efficitur nibh pharetra imperdiet.

Aliquam erat volutpat. Ut ut arcu arcu. Cras non velit eu augue tincidunt feugiat. Pellentesque faucibus libero nec urna laoreet dapibus varius sed elit. Etiam quis fermentum orci, nec tincidunt felis. Morbi lobortis pellentesque neque in rhoncus. Nullam porta eleifend rutrum.

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus et suscipit lacus. Praesent at lacus accumsan, condimentum turpis sed, auctor orci. Morbi nulla quam, venenatis sed libero sed, lacinia cursus lorem. Aliquam erat volutpat. Ut augue quam, tincidunt eget scelerisque ac, bibendum sed sapien. Maecenas a augue at metus hendrerit molestie. Fusce efficitur, nisi et placerat feugiat, est mi pharetra erat, id varius augue nulla id arcu. Donec vitae dui a libero accumsan gravida vel vel eros. Phasellus volutpat tellus sed augue varius condimentum. Sed porta aliquet tellus, a consequat neque rutrum at. In sit amet sapien eget purus aliquam pretium sed quis mi. Suspendisse consectetur imperdiet nunc ut lacinia. Praesent feugiat aliquet nisl et placerat. Nulla at purus nec enim euismod rhoncus sit amet non mauris. Nam sed viverra mi.

Vivamus lacinia vestibulum lectus id aliquam. In ligula sapien, convallis quis suscipit ut, interdum at tortor. Vestibulum elementum tellus at ligula luctus tincidunt. Etiam libero dui, consectetur sed ultrices at, varius at libero. Maecenas arcu nisl, rhoncus nec congue sed, tempor sed lacus. Nunc hendrerit lacus tellus, eu iaculis sem tincidunt sed. Sed gravida tristique arcu quis convallis. Vivamus facilisis nunc ac erat posuere, id cursus nunc tincidunt. Sed eu tempor nisl, vel porttitor enim. Mauris mauris dui, iaculis sed arcu ut, vulputate placerat ante. Aenean viverra ac ante in blandit. Nullam a leo metus. Mauris vehicula massa quis orci faucibus, ut vestibulum magna molestie. Aliquam varius sapien id est imperdiet, eu lacinia ex rutrum.

Proin ultrices dui quis faucibus euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tempor sem et condimentum mollis. Suspendisse vel libero non erat consectetur maximus at vel nunc. Fusce sagittis egestas lectus, non dignissim lectus ullamcorper et. Mauris molestie ultricies ipsum, nec volutpat libero lobortis nec. Sed fermentum dapibus maximus. Duis metus dolor, pulvinar mattis sollicitudin non, consectetur eget ipsum. Integer dictum interdum tempus. Nulla sagittis, libero a efficitur placerat, mauris nibh mattis purus, a fringilla dolor libero semper ipsum. Morbi quis pretium urna, vitae dapibus ligula.

Aliquam volutpat in neque a suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus vulputate condimentum erat vel imperdiet. Integer sit amet placerat urna. Praesent consequat posuere ipsum a vestibulum. Suspendisse ultricies arcu quis libero iaculis, sed venenatis sapien tincidunt. Aliquam hendrerit nisi et semper convallis. Nullam gravida elementum porttitor. Nam tincidunt turpis vel diam accumsan consequat. Fusce sodales leo ante, id accumsan dolor bibendum at. Suspendisse eget suscipit justo. Nulla sit amet turpis ultricies mauris consectetur ullamcorper. Pellentesque in sapien orci. Aliquam tincidunt ipsum sem, et rhoncus urna venenatis ut.

Sed mattis libero eget consequat vulputate. Sed semper, sem nec consectetur mollis, nulla lectus viverra felis, non dictum nulla justo ac elit. Integer non ante vestibulum, sagittis lectus et, sollicitudin purus. Duis eu dolor tellus. Morbi ipsum lectus, efficitur non efficitur sed, lacinia vel enim. Fusce dignissim hendrerit felis, eget elementum sem luctus at. Sed condimentum semper ipsum in aliquet. Fusce sit amet aliquet libero. Donec cursus, turpis in vestibulum molestie, elit diam lobortis eros, ut laoreet felis ipsum sed sem. Nullam blandit diam sit amet consequat scelerisque. Quisque lacinia tincidunt finibus. Morbi eu suscipit arcu, in molestie ex. Aliquam erat volutpat. Vestibulum tincidunt ligula eu urna sollicitudin, at auctor risus sagittis.

Aliquam erat volutpat. Vestibulum mollis sagittis metus non tincidunt. Aliquam erat volutpat. Integer tristique ornare leo, id molestie sapien commodo in. Proin eleifend augue mi, eu euismod ex porttitor vel. Donec quis nibh elit. Curabitur varius pellentesque ornare. Etiam elementum magna in posuere dignissim. Maecenas pretium massa non justo mollis laoreet.

Cras in elit eros. Suspendisse semper vehicula odio ac hendrerit. Integer non malesuada risus. In cursus varius tellus, eget finibus sapien commodo sed. Vivamus iaculis purus id gravida ullamcorper. Etiam consectetur dolor non arcu consectetur, nec mollis metus finibus. Maecenas aliquam velit lacus, ut interdum leo feugiat vel. Aliquam suscipit ultrices lectus, at ornare lorem elementum ac.

Nullam sit amet malesuada turpis, ac elementum dolor. Aliquam placerat sit amet magna vel eleifend. Vestibulum aliquet malesuada sem ac convallis. In viverra dolor eu diam porta placerat. Morbi ipsum ante, imperdiet ut eros ac, bibendum dignissim est. Aliquam aliquam orci sit amet dolor efficitur, a euismod mi tristique. Etiam vitae tincidunt quam, quis interdum lacus. Duis ac orci dignissim dolor pellentesque gravida sed quis justo. Fusce volutpat neque velit, et convallis elit commodo ac. Nam non vehicula nisi. Cras sit amet risus tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec a ultricies ipsum. Vestibulum rhoncus dolor ut urna viverra, sit amet rutrum quam ultrices. Cras cursus, diam eu feugiat pretium, ligula purus commodo diam, id efficitur elit eros id lorem. Donec blandit imperdiet molestie.</h5>
          </div>
          <div id="privacy" class="tab-pane fade">
            <h3>Privacy Policy</h3>
            <h5>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eu consectetur augue. In id dui nibh. Sed non tincidunt tortor, rutrum placerat lacus. Mauris lacinia rhoncus sagittis. Cras varius aliquet elementum. Quisque neque lacus, venenatis a elit non, egestas malesuada arcu. Proin sodales urna et lorem viverra dapibus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam dapibus, tortor vitae luctus congue, justo lectus pellentesque est, eu egestas nisl magna quis purus. Sed sollicitudin quam eget feugiat scelerisque. Aliquam erat volutpat. Integer ac nunc in dui finibus malesuada. Integer eget augue efficitur nibh pharetra imperdiet.

Aliquam erat volutpat. Ut ut arcu arcu. Cras non velit eu augue tincidunt feugiat. Pellentesque faucibus libero nec urna laoreet dapibus varius sed elit. Etiam quis fermentum orci, nec tincidunt felis. Morbi lobortis pellentesque neque in rhoncus. Nullam porta eleifend rutrum.

Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Phasellus et suscipit lacus. Praesent at lacus accumsan, condimentum turpis sed, auctor orci. Morbi nulla quam, venenatis sed libero sed, lacinia cursus lorem. Aliquam erat volutpat. Ut augue quam, tincidunt eget scelerisque ac, bibendum sed sapien. Maecenas a augue at metus hendrerit molestie. Fusce efficitur, nisi et placerat feugiat, est mi pharetra erat, id varius augue nulla id arcu. Donec vitae dui a libero accumsan gravida vel vel eros. Phasellus volutpat tellus sed augue varius condimentum. Sed porta aliquet tellus, a consequat neque rutrum at. In sit amet sapien eget purus aliquam pretium sed quis mi. Suspendisse consectetur imperdiet nunc ut lacinia. Praesent feugiat aliquet nisl et placerat. Nulla at purus nec enim euismod rhoncus sit amet non mauris. Nam sed viverra mi.

Vivamus lacinia vestibulum lectus id aliquam. In ligula sapien, convallis quis suscipit ut, interdum at tortor. Vestibulum elementum tellus at ligula luctus tincidunt. Etiam libero dui, consectetur sed ultrices at, varius at libero. Maecenas arcu nisl, rhoncus nec congue sed, tempor sed lacus. Nunc hendrerit lacus tellus, eu iaculis sem tincidunt sed. Sed gravida tristique arcu quis convallis. Vivamus facilisis nunc ac erat posuere, id cursus nunc tincidunt. Sed eu tempor nisl, vel porttitor enim. Mauris mauris dui, iaculis sed arcu ut, vulputate placerat ante. Aenean viverra ac ante in blandit. Nullam a leo metus. Mauris vehicula massa quis orci faucibus, ut vestibulum magna molestie. Aliquam varius sapien id est imperdiet, eu lacinia ex rutrum.

Proin ultrices dui quis faucibus euismod. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nunc tempor sem et condimentum mollis. Suspendisse vel libero non erat consectetur maximus at vel nunc. Fusce sagittis egestas lectus, non dignissim lectus ullamcorper et. Mauris molestie ultricies ipsum, nec volutpat libero lobortis nec. Sed fermentum dapibus maximus. Duis metus dolor, pulvinar mattis sollicitudin non, consectetur eget ipsum. Integer dictum interdum tempus. Nulla sagittis, libero a efficitur placerat, mauris nibh mattis purus, a fringilla dolor libero semper ipsum. Morbi quis pretium urna, vitae dapibus ligula.

Aliquam volutpat in neque a suscipit. Interdum et malesuada fames ac ante ipsum primis in faucibus. Vivamus vulputate condimentum erat vel imperdiet. Integer sit amet placerat urna. Praesent consequat posuere ipsum a vestibulum. Suspendisse ultricies arcu quis libero iaculis, sed venenatis sapien tincidunt. Aliquam hendrerit nisi et semper convallis. Nullam gravida elementum porttitor. Nam tincidunt turpis vel diam accumsan consequat. Fusce sodales leo ante, id accumsan dolor bibendum at. Suspendisse eget suscipit justo. Nulla sit amet turpis ultricies mauris consectetur ullamcorper. Pellentesque in sapien orci. Aliquam tincidunt ipsum sem, et rhoncus urna venenatis ut.

Sed mattis libero eget consequat vulputate. Sed semper, sem nec consectetur mollis, nulla lectus viverra felis, non dictum nulla justo ac elit. Integer non ante vestibulum, sagittis lectus et, sollicitudin purus. Duis eu dolor tellus. Morbi ipsum lectus, efficitur non efficitur sed, lacinia vel enim. Fusce dignissim hendrerit felis, eget elementum sem luctus at. Sed condimentum semper ipsum in aliquet. Fusce sit amet aliquet libero. Donec cursus, turpis in vestibulum molestie, elit diam lobortis eros, ut laoreet felis ipsum sed sem. Nullam blandit diam sit amet consequat scelerisque. Quisque lacinia tincidunt finibus. Morbi eu suscipit arcu, in molestie ex. Aliquam erat volutpat. Vestibulum tincidunt ligula eu urna sollicitudin, at auctor risus sagittis.

Aliquam erat volutpat. Vestibulum mollis sagittis metus non tincidunt. Aliquam erat volutpat. Integer tristique ornare leo, id molestie sapien commodo in. Proin eleifend augue mi, eu euismod ex porttitor vel. Donec quis nibh elit. Curabitur varius pellentesque ornare. Etiam elementum magna in posuere dignissim. Maecenas pretium massa non justo mollis laoreet.

Cras in elit eros. Suspendisse semper vehicula odio ac hendrerit. Integer non malesuada risus. In cursus varius tellus, eget finibus sapien commodo sed. Vivamus iaculis purus id gravida ullamcorper. Etiam consectetur dolor non arcu consectetur, nec mollis metus finibus. Maecenas aliquam velit lacus, ut interdum leo feugiat vel. Aliquam suscipit ultrices lectus, at ornare lorem elementum ac.

Nullam sit amet malesuada turpis, ac elementum dolor. Aliquam placerat sit amet magna vel eleifend. Vestibulum aliquet malesuada sem ac convallis. In viverra dolor eu diam porta placerat. Morbi ipsum ante, imperdiet ut eros ac, bibendum dignissim est. Aliquam aliquam orci sit amet dolor efficitur, a euismod mi tristique. Etiam vitae tincidunt quam, quis interdum lacus. Duis ac orci dignissim dolor pellentesque gravida sed quis justo. Fusce volutpat neque velit, et convallis elit commodo ac. Nam non vehicula nisi. Cras sit amet risus tellus. Interdum et malesuada fames ac ante ipsum primis in faucibus. Donec a ultricies ipsum. Vestibulum rhoncus dolor ut urna viverra, sit amet rutrum quam ultrices. Cras cursus, diam eu feugiat pretium, ligula purus commodo diam, id efficitur elit eros id lorem. Donec blandit imperdiet molestie.</h5>
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" input type ="button" id="agree" class="btn btn-primary" data-dismiss="modal">Agree</button>
        <a href="http://oai-content.co.uk/"<button type="button" class="btn btn-secondary" role="button">Disagree</a>
      </div>
    </div>
    </div>
    </div>
  </div>
  </div>
</div>
  <div class="questionArea">
    <div class="container">
      <form method="post">
      <h1>Questionaire</h1>
      <div class="row">
        <div id="app" class="col-md-4">
          <!-- <h3>Question</h3> -->
          <div class="form-group">
            <!-- <h5>Insert Description of question here</h5>
            <label for="comment">Answer below</label>
            <textarea class="form-control" rows="3" id="comment"></textarea>
            <input type="text" name="london"><br> -->

          </div>


        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3>Question</h3>
          <h5>Insert Description of question here</h5>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optradio"> Option 1
            </label>
          </div>
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optradio"> Option 2
            </label>
          </div>
          <div class="form-check disabled">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="optradio"> Option 3
            </label>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3>Question</h3>
          <h5>Insert Description of question here</h5>
          <div class="form-group">
            <label for="form">Answer:</label>
            <input type="form" class="form=control" placeholder="Enter anwswer here" id="form"></div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <h3>Question</h3>
          <h5>Insert Description of question here</h5>
          <div class="dropdown">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
              Dropdown button
            </button>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col text-center">
          <input type="submit" name="submit">
          </form>
        </div>
      </div>
    </div>
  </div>
  <script type="text/javascript" src="QuestionTest.js"></script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>

<?php
$username = $_SESSION["loggedIn"];
$t = (date("Y.m.d"));
@$fp=fopen("exportquestions/data_$username$t.txt",'w');
$data = array("agree","textdata","optradio","form");

    file_put_contents("exportquestions/data_$username$t.txt",serialize($data));

    $datas = unserialize(file_get_contents("data_$username$t.txt"));

?>
