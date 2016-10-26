<?php
//http://pwingard.com/dev/ajaxexamples/formajaxphpcall
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


set_include_path(get_include_path() . PATH_SEPARATOR . "/twc_includes");

//echo get_include_path();
//die();

//define("INCLUDE_PATH", "../../../twc_includes");

$page_title="Form Using Ajax to Call a PHP Script";
$page_info="This form uses Bootstrap for the CSS and Ajax to call a PHP script...";
$page_label="Input";

?>

<!DOCTYPE html>
<html>
    <head>
        <!--<link rel="shortcut icon" href="images/fave.ico" type="image/x-icon">-->
        <link rel="icon" type="image/png" href="../../images/fave.ico"/>
	<link rel="stylesheet" href="/twc_includes/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="/twc_includes/js/jquery-ui-1.11.2/jquery-ui.min.css"/>
	<script type='text/javascript' src='/twc_includes/js/jquery-1.11.1.min.js'></script>
	<script type='text/javascript' src='/twc_includes/js/bootstrap.min.js'></script>
	<script type='text/javascript' src='/twc_includes/js/jquery-ui-1.11.2/jquery-ui.min.js'></script>
        <script type='text/javascript' src='/twc_includes/js/jquery.tablesorter.min.js'></script>
        <script type='text/javascript' src='/twc_includes/js/typeahead.jquery.min.js'></script>
        <script type='text/javascript' src='js.js'></script>
        
        <style type="text/css">
            label{display: block;margin: 5px 0 10px 0;}
            .pane { width: 900px; margin-left: auto; margin-right: auto; }
            header { width: 100%; height: 60px; margin: 0; color: white; background: rgba(19, 61, 120, 0.992157); text-align: center; font-size: 30px;}
            .twitter-typeahead { width: 100%; }
            .tt-dropdown-menu { 
                width: 422px;
                margin-top: 12px;
                padding: 8px 0;
                background-color: #fff;
                border: 1px solid #ccc;
                -webkit-border-radius: 8px;
                -moz-border-radius: 8px;
                border-radius: 8px;
                -webkit-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                -moz-box-shadow: 0 5px 10px rgba(0,0,0,.2);
                box-shadow: 0 5px 10px rgba(0,0,0,.2); 
            }
            .tt-dataset-advertisers {
                padding-left: 8px;
            }
            #getDates Table{
                width: 100%;
                border-spacing: 20px;
                border-collapse: separate;
            }

        </style>
    </head>
<body>
<header>    
<div><?php echo $page_title;?></div>
</header>

<div id="addDiv" class="pane">
    <br /><br />
    <p class="form-group"> 
        <?php echo $page_info;?>
    </p>
    <form id="formwhatever" action="" method="post" name="form" enctype="multipart/form-data">
        <div class="form-group"> 
            <label><?php echo $page_label;?></label>
            <textarea rows="4" cols="50" class="form-control" id="form_input">Type in anything...yo</textarea>

        </div>            
        <input type="submit" class="btn btn-default" value="Submit" id="submit">
    </form>
    <script type='text/javascript'>
        $('#form_input').click(function() {
    $('#form_input').val('');
});
    </script>
    
    
    
    <p><a href="https://github.com/pwingard/formajaxphpcall">Git</a>&nbsp;&middot;&nbsp;
      <a href="https://www.linkedin.com/in/pwingard">LinkedIn</a>&nbsp;&middot;&nbsp;
        <a href="http://pwingard.com">Home</a></p>
</div>  
    
</body>
</html>

    
    
    
    



