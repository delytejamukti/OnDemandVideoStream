<!DOCTYPE html>

<?php
  $HOST = "192.168.100.53";
  $SRC = "http://".$HOST.":8181/player.js";
?>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Android Course - Stream, Convert, Save</title>

    <!-- Bootstrap core CSS -->
    <link href="assets/bootstrap/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="assets/css/portfolio-item.css" rel="stylesheet">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Final Project - Android Course</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>

    <div class="modal fade" id="modal_convert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="judul" id="judul_modal"></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form >
        <input type="hidden" name="id_vidio" id="id_vidio" value="">
          <div class="form-group">
            <label for="format">Output Format</label>
            <select id="format" name="format">
              <option value="">Please select output format...</option>
              <option value="mp4">MP4</option>
              <option value="mkv">MKV</option>
              <option value="avi">AVI</option>
            </select>
          </div>
          
          <div class="form-group">
          <label for="frame_size">Resolution</label>
          <select id="frame_size" name="frame_size" required>
            <option value="" >Please select frame size</option>
            <option value="426x240">426x240</option>
            <option value="480x360">480x360</option>
            <option value="680x480">680x480</option>
            <option value="1280x720">1280x720</option>
          </select>
          </div>
          
          <div class="form-group">
            <label for="framerate">Frame Rate</label>
            <select id="framerate" name="framerate">
              <option value="" selected="selected">Not Determined</option>
              <option value=" -r 24 ">24 fps</option>
              <option value=" -r 25 ">25 fps</option>
              <option value=" -r 30 ">30 fps</option>
              <option value=" -r 48 ">48 fps</option>
              <option value=" -r 50 ">50 fps</option>
              <option value=" -r 60 ">60 fps</option>
            </select>
          </div>
          
        </form>
      </div>
      <div class="modal-footer">
        <button  class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button  class="btn btn-primary" id="btn_convert" data-dismiss="modal">Download</button>
      </div>
    </div>
  </div>
</div>

    <!-- Page Content -->
    <div class="container">

      <!-- Portfolio Item Heading -->
      <h1 class="my-4">Introduction
        <small>Android Course</small>
      </h1>

      <!-- Portfolio Item Row -->
      <div class="row">

        <div class="col-md-8">
          <video class="videoPlayer" controls autoplay width="500px" height="700px" src="uploaded/video1.mp4" type="video/mp4"> </video>
        </div>

        <div class="col-md-4">
          <h3 class="my-3">Video Description</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam viverra euismod odio, gravida pellentesque urna varius vitae. Sed dui lorem, adipiscing in adipiscing et, interdum nec metus. Mauris ultricies, justo eu convallis placerat, felis enim.</p>
          <h3 class="my-3">Video Details</h3>
          <ul>
            <li>Lorem Ipsum</li>
            <li>Dolor Sit Amet</li>
            <li>Consectetur</li>
            <li>Adipiscing Elit</li>
          </ul>
        </div>

      </div>
      <!-- /.row -->

      <!-- Related Projects Row -->
      <h3 class="my-4">Related Videos</h3>

      <div class="row">

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="mistvideo" id="video1">
              <noscript>
                <a href="http://<?php echo $HOST ?>:8181/video1.html" target="_blank">
                  Click here to play this video
                </a>
              </noscript>
              <script>
                var a = function(){
                  mistPlay("video1",{
                  target: document.getElementById("video1"),
                  autoplay: false,
                  width: 853,
                  height: 480
                  });
                };
                if (!window.mistplayers) {
                  var p = document.createElement("script");
                  p.src = "<?php echo $SRC ?>"
                  document.head.appendChild(p);
                  p.onload = a;
                }
                else { a(); }
              </script>
                </div>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="http://<?php echo $HOST ?>:8181/video1.html">Basic ListView Demo: Android Programming</a>
                </h4>
                <h5>00:00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary" onclick="Download('Video1.mkv')">Download</button>  
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="mistvideo" id="video2">
              <noscript>
                <a href="http://<?php echo $HOST ?>:8181/video1.html" target="_blank">
                  Click here to play this video
                </a>
              </noscript>
              <script>
                var a = function(){
                  mistPlay("video2",{
                  target: document.getElementById("video2"),
                  autoplay: false,
                  width: 853,
                  height: 480
                  });
                };
                if (!window.mistplayers) {
                  var p = document.createElement("script");
                  p.src = "<?php echo $SRC ?>"
                  document.head.appendChild(p);
                  p.onload = a;
                }
                else { a(); }
              </script>
                </div>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="http://<?php echo $HOST ?>:8181/video1.html">How to Make a Button Open a New Activity - Android Studio Tutorial</a>
                </h4>
                <h5>00:00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary" onclick="Download('Video2.mkv')">Download</button>  
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="mistvideo" id="video2">
              <noscript>
                <a href="http://<?php echo $HOST ?>:8181/video3.html" target="_blank">
                  Click here to play this video
                </a>
              </noscript>
              <script>
                var a = function(){
                  mistPlay("video2",{
                  target: document.getElementById("video3"),
                  autoplay: false,
                  width: 853,
                  height: 480
                  });
                };
                if (!window.mistplayers) {
                  var p = document.createElement("script");
                  p.src = "<?php echo $SRC ?>"
                  document.head.appendChild(p);
                  p.onload = a;
                }
                else { a(); }
              </script>
                </div>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="http://<?php echo $HOST ?>:8181/video3.html">How to Create Welcome Screen (Splash Screen) in Android Studio</a>
                </h4>
                <h5>00:00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary" onclick="Download('Video3.mkv')">Download</button>  
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="mistvideo" id="video4">
              <noscript>
                <a href="http://<?php echo $HOST ?>:8181/video4.html" target="_blank">
                  Click here to play this video
                </a>
              </noscript>
              <script>
                var a = function(){
                  mistPlay("video4",{
                  target: document.getElementById("video4"),
                  autoplay: false,
                  width: 853,
                  height: 480
                  });
                };
                if (!window.mistplayers) {
                  var p = document.createElement("script");
                  p.src = "<?php echo $SRC ?>"
                  document.head.appendChild(p);
                  p.onload = a;
                }
                else { a(); }
              </script>
                </div>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="http://<?php echo $HOST ?>:8181/video3.html">How To Learn Android App Development (2018)</a>
                </h4>
                <h5>00:00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary" onclick="Download('Video4.mkv')">Download</button>  
              </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card h-100">
            <div class="mistvideo" id="video5">
              <noscript>
                <a href="http://<?php echo $HOST ?>:8181/video4.html" target="_blank">
                  Click here to play this video
                </a>
              </noscript>
              <script>
                var a = function(){
                  mistPlay("video5",{
                  target: document.getElementById("video5"),
                  autoplay: false,
                  width: 853,
                  height: 480
                  });
                };
                if (!window.mistplayers) {
                  var p = document.createElement("script");
                  p.src = "<?php echo $SRC ?>"
                  document.head.appendChild(p);
                  p.onload = a;
                }
                else { a(); }
              </script>
                </div>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="http://<?php echo $HOST ?>:8181/video5.html">Introduction to Android development with NetBeans and Maven</a>
                </h4>
                <h5>00:00</h5>
                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
              </div>
              <div class="card-footer">
                <button class="btn btn-primary" onclick="Download('Video5.mkv')">Download</button>  
              </div>
          </div>
        </div>

      </div>
      <!-- /.row -->


    <div class="modal fade" id="modal_download" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Download Selesai</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <a href="http://dummylink" download><button class="green">Download</button></a>        
      </div>
    </div>
  </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-waitingfor/1.2.7/bootstrap-waitingfor.js"></script>
  <script>
      function Download(nama_vidio){
        $("#judul_modal").html("Download "+nama_vidio);
        $("#modal_convert").modal('show');
        $("#id_vidio").val(nama_vidio);
      }

      $(document).on('click','#btn_convert', function(){
        $("#modal_convert").modal('hide');
        var id = $("#id_vidio").val();
        var format = $("#format option:selected").val();
        var frame_size = $("#frame_size option:selected").val();
        var framerate = $("#framerate option:selected").val();
        
        console.log(framerate);
        setTimeout(function() {
        }, 300);
        waitingDialog.show('Converting',{
        headerText: '',
        headerSize: 3,
        headerClass: '',
        dialogSize: 'm',
        progressType: '',
        contentElement: 'p',
        contentClass: 'content'
        });

        $.ajax({ url: 'eksekusi.php',
         data: {
           id:id,
           format:format,
           frame_size:frame_size,
           framerate:framerate},
         type: 'post',
         success: function(data) {
              if(data.flag == "sukses"){
                waitingDialog.hide();
                $("a[href='http://dummylink']").attr('href', data.link );
                $("#modal_download").modal('show');

              }else{
                console.log("gagal convert");
              }
         }
        });
      });

  
  </script>
    <!-- /.container -->

    <!-- Footer -->
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Multimedia Network Group 2 2018</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.min.js"></script>
    <script src="assets/bootstrap/bootstrap.bundle.min.js"></script>

  </body>

</html>
