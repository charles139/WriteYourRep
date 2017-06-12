<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Write Your Rep ~ Front End</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/wyc.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-3"></div>
                <div class="col-xs-6">
                   <p hidden>WriteYouRep.com is a tool that generates contact info of your Congressional Representatives.<br><button type="button" class="btn btn-primary">Continue</button></p>
                   <form hidden action='/home/find' method='post'>
                        <h6>Please enter your zip</h6>
                        <input id='zip' type='text' name='zip_code' placeholder='zip'>
                        <input id="goButt" type='submit' value='Go!'>
                   </form>
                </div>
                <div class="col-xs-3"></div>
            </div>
            <div class="row">
                <div class="col-xs-12">
                </div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function()
        {
            $('p').fadeIn(1000 , function(){
                $('p').animate({top: '220px'}, function(){
                    $('button').click(function(){
                        $('p').animate({right: '1000px'}, function(){
                            $('p').fadeOut(100, function(){
                                $('form').fadeIn(800, function(){
                                    $('form').animate({top: '230px'}, function(){
                                        $('#goButt').click(function(){
                                            $('form').animate({top: '740px'}, function(){
                                                $('form').fadeOut(300);
                                            });
                                        });
                                    });
                                });
                            });
                        });
                    });
                });
            });
        });
    </script>
    </body>
</html>