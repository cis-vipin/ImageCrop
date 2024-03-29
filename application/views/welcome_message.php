<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="A complete example of Cropper.">
    <meta name="keywords" content="HTML, CSS, JS, JavaScript, jQuery, PHP, image cropping, web development">
    <meta name="author" content="Fengyuan Chen">
    <title>Crop Avatar - Cropper</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="http://localhost/jcroper/css/cropper.min.css">
    <link rel="stylesheet" href="http://localhost/jcroper/css/crop-avatar.css">
</head>
<body>
    <div class="container" id="crop-avatar">

        <!-- Current avatar -->
        <div class="avatar-view" title="Change the avatar">
            <img src="img/picture.jpg" alt="Avatar">
        </div>

        <!-- Cropping modal -->
        <div class="modal fade" id="avatar-modal" tabindex="-1" role="dialog" aria-labelledby="avatar-modal-label" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <form class="avatar-form" method="post" action="crop-avatar.php" enctype="multipart/form-data">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <h4 class="modal-title" id="avatar-modal-label">Change Avatar</h4>
                        </div>
                        <div class="modal-body">
                            <div class="avatar-body">

                                <!-- Upload image and data -->
                                <!-- define your input tags here to send data via ajax not json -->
                                <div class="avatar-upload">
                                    <input class="avatar-src" name="avatar_src" type="hidden">
                                    <input class="avatar-data" name="avatar_data" type="hidden">
                                    <label for="avatarInput">Local upload</label>
                                    <input class="avatar-input" id="avatarInput" name="avatar_file" type="file">
                                    <input for="avatarRoate" class="avatar-rotate" id="avatar-rotate" name="avatar-rotate" type="hidden" value="0">
                                </div>

                                <!-- Crop and preview -->
                                <div class="row">
                                    <div class="col-md-9">
                                       <div id="theimage" class="avatar-wrapper"></div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="avatar-preview preview-lg"></div>
                                        <div class="avatar-preview preview-md"></div>
                                        <div class="avatar-preview preview-sm"></div>
                                    </div>
                                </div>
                                <!-- End of Crop preview -->
                            </div>
                        </div>
                        <!-- footer button -->
                        <div class="modal-footer">
                            <button class="btn btn-default" type="button" data-dismiss="modal">Close</button>
                            <button class="btn btn-primary avatar-save" type="submit">Save</button>
                            <button class="btn btn-default" id="rotate" type="button">Roate 45</button>
                        </div>
                      <!-- end of fotter -->  
                    </form>
                </div>
            </div>
        </div><!-- /.modal -->

        <!-- Loading state -->
        <div class="loading" tabindex="-1" role="img" aria-label="Loading"></div>
    </div>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script>window.jQuery || document.write('<script src="../assets/js/jquery-1.11.0.min.js"><\/script>')</script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
    <script src="http://localhost/jcroper/js/cropper.min.js"></script>
    <script src="http://localhost/jcroper/js/crop-avatar.js"></script>
    <script src="http://jqueryrotate.googlecode.com/svn/trunk/jQueryRotate.js"></script>
    <script type="text/javascript">
    $(document).ready(function() {
      // Handler for .ready() called.
      var vipin = 90;
      $("#rotate").click(function(){
            $("#theimage").rotate(vipin);
            vipin = vipin +90;
            $("#avatar-rotate").val(vipin);
        });
    });


    </script>
</body>
</html>

