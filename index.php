<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>YTB Download</title>
        
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>
        <div class="content">
            <div class="col-xs-10 col-xs-offset-1 col-md-6 col-md-offset-3">

                <h1>YTB Download</h1>
                <form role="form" class="main-form" id="downloadVideo">
                    <div class="form-group">
                        <label for="address">Url do vídeo</label>
                        <input type="text" class="form-control" id="address" name="address" placeholder="https://www.youtube.com/watch?v=zo0OccO5_qU" >
                    </div>
                    <button type="submit" class="btn btn-default" data-loading-text="Convertendo..." id="btn-submit-form"><i class="glyphicon glyphicon-download-alt"></i> Baixar</button>
                </form>            
                <footer>
                    <hr>
                    <p>
                        Copyright &copy; <?php echo date('Y') ?> by Ícaro Heimig.<br>
                        All Rights Reserved.<br>
                        Powered by 
                        <a href="http://getbootstrap.com" target="_blank">Twitter Bootstrap</a>,
                        <a href="https://github.com/icaromh2/ytb-download" target="_blank">GitHub</a>
                    </p>  
                </footer>
            </div>

        </div>

        <!-- Scripts  -->
        <script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
        <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="assets/js/main.js"></script>
    </body>
</html>