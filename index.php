<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Stream, Convert, Save</title>

  <!-- Load CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <!-- Load JS -->
  <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js'></script>
</head>

<body>
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

  <div class="jumbotron" style="background-color:transparent; !important">
    <p class="display-4 text-center text-secondary"><b class="text-primary">Final</b>Project</p>
    <ul class="nav nav-pills justify-content-center" style="margin-top: 30px">
    </ul>
  </div>
  <main>
    <div class="container" id="cont_1"> 
      <div class="card">
        <div class="card-body"> 
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h5 class="card-title">Judul</h10><p></p><hr>
                <div class="mistvideo" id="video1">
                  <noscript>
                    <!-- <a href="http://192.168.100.53:8181/video1.html" target="_blank"> -->
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
                      // p.src = "http://192.168.100.53:8181/player.js"
                      document.head.appendChild(p);
                      p.onload = a;
                    }
                    else { a(); }
                  </script>
                </div>
                <hr>
                <button class="btn btn-primary" onclick="Download('video1.mp4')">Convert & Download</button>
                
              </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="cont_2"> 
      <div class="card">
        <div class="card-body"> 
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h5 class="card-title">Judul</h10><p></p><hr>
                <div class="mistvideo" id="video2">
                  <noscript>
                    <!-- <a href="http://192.168.100.53:8181/video2.html" target="_blank"> -->
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
                      // p.src = "http://192.168.100.53:8181/player.js"
                      document.head.appendChild(p);
                      p.onload = a;
                    }
                    else { a(); }
                  </script>
                </div>
                <hr>
                <form action=".\dummy.php" method="get">
                  <input type="hidden" name="judul" value="Video1">
                  <input class="btn btn-primary" type="submit" value="Convert & Download">
                </form>
              </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="cont_3"> 
      <div class="card">
        <div class="card-body"> 
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h5 class="card-title">Judul</h10><p></p><hr>
                <div class="mistvideo" id="video3">
                  <noscript>
                    <!-- <a href="http://192.168.100.53:8181/video3.html" target="_blank"> -->
                      Click here to play this video
                    </a>
                  </noscript>
                  <script>
                    var a = function(){
                      mistPlay("video3",{
                        target: document.getElementById("video3"),
                        autoplay: false,
                        width: 853,
                        height: 480
                      });
                    };
                    if (!window.mistplayers) {
                      var p = document.createElement("script");
                      // p.src = "http://192.168.100.53:8181/player.js"
                      document.head.appendChild(p);
                      p.onload = a;
                    }
                    else { a(); }
                  </script>
                </div>
                <hr>
                <form action=".\dummy.php" method="get">
                  <input type="hidden" name="judul" value="Video1">
                  <input class="btn btn-primary" type="submit" value="Convert & Download">
                </form>
              </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="cont_4"> 
      <div class="card">
        <div class="card-body"> 
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h5 class="card-title">Judul</h10><p></p><hr>
                <div class="mistvideo" id="video4">
                  <noscript>
                    <!-- <a href="http://192.168.100.53:8181/video4.html" target="_blank"> -->
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
                      // p.src = "http://192.168.100.53:8181/player.js"
                      document.head.appendChild(p);
                      p.onload = a;
                    }
                    else { a(); }
                  </script>
                </div>
                <hr>
                <form action=".\dummy.php" method="get">
                  <input type="hidden" name="judul" value="Video1">
                  <input class="btn btn-primary" type="submit" value="Convert & Download">
                </form>
              </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container" id="cont_5"> 
      <div class="card">
        <div class="card-body"> 
            <div class="row">
              <div class="col-1"></div>
              <div class="col-10">
                <h5 class="card-title">Judul</h10><p></p><hr>
                <div class="mistvideo" id="video5">
                  <noscript>
                    <!-- <a href="http://192.168.100.53:8181/video5.html" target="_blank"> -->
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
                      // p.src = "http://192.168.100.53:8181/player.js"
                      document.head.appendChild(p);
                      p.onload = a;
                    }
                    else { a(); }
                  </script>
                </div>
                <hr>
                <form action=".\dummy.php" method="get">
                  <input type="hidden" name="judul" value="Video1">
                  <input class="btn btn-primary" type="submit" value="Convert & Download">
                </form>
              </div>
              <div class="col-1"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <footer class="footer text-center" style="margin: 50px 0 30px 0">
    <p class="text-secondary mb-1 small">Copyright &copy; 2018 - Multimedia Network</p>
  </footer>

  <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

// modal download 

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



// selesai








  <!-- Load Javascripts -->
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

</body>
</html>


