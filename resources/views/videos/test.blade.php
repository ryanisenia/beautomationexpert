<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Example of Autoplaying YouTube Video inside Bootstrap Modal</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<style type="text/css">
    .bs-example{
    	margin: 20px;
    }
    .modal-content iframe{
        margin: 0 auto;
        display: block;
    }
</style>
<script type="text/javascript">
$(document).ready(function(){
    /* Get iframe src attribute value i.e. YouTube video url
    and store it in a variable */
    var url = $("#cartoonVideo").attr('src');
    
    /* Remove iframe src attribute on page load to
    prevent autoplay in background */
    $("#cartoonVideo").attr('src', '');
	
	/* Assign the initially stored url back to the iframe src
    attribute when modal is displayed */
    $("#myModal").on('shown.bs.modal', function(){
        $("#cartoonVideo").attr('src', url);
    });
    
    /* Assign empty url value to the iframe src attribute when
    modal hide, which stop the video playing */
    $("#myModal").on('hide.bs.modal', function(){
        $("#cartoonVideo").attr('src', '');
    });
});
</script>
</head>
<body>
<div class="bs-example">


    

     <br>

    <!-- Button HTML (to Trigger Modal) -->
    <a href="#myModal" class="btn btn-lg btn-primary" data-toggle="modal">Launch Demo Modal</a>
    
    <!-- Modal HTML -->
    <div id="myModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title">YouTube Video</h4>
                </div>
                <div class="modal-body">
                    <iframe id="cartoonVideo" width="560" height="315" src="https://player.vimeo.com/video/209912485?autoplay=1" frameborder="0" allowfullscreen></iframe>

                    <!-- <iframe src="https://player.vimeo.com/video/71876963"></iframe> -->
                </div>
            </div>
        </div>
    </div>
</div>     
</body>
</html>     