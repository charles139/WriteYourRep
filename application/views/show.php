<?php
// echo $count;
// var_dump($json);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Write Your Rep ~ Front End</title>
        <link href="../assets/css/bootstrap.min.css" rel="stylesheet">
        <link href="../assets/css/wyc2.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-6 col-md-push-3">
                	<?php if($count > 0)
	                	{ ?>
	                	<section id='sec0' hidden>
	                        <h4>Your Congressional Representatives are below. Click the link to be redirected to their contact URL or paste the email address directly into your service provider.</h4>
	                        <a href="/">Back</a>
	                    </section>
                    <?php } ?>
                    <?php if($count == 0)
	                	{ ?>
	                	<section id='secError' hidden>
	                        <h4>Please enter a valid ZIP</h4>
	                        <a href="/">Back</a>
	                    </section>
                    <?php } ?>
                	<?php for($i=1; $i<=$count; $i++)
                	{ ?>
                		<?= "<section id='sec".$i."' hidden>" ?>
                		<?= "<img src='https://theunitedstates.io/images/congress/225x275/".$json['results'][$i-1]['bioguide_id'].".jpg'>" ?>
                		<?= "<div id='info'>" ?>
                		<?= "<p id='name'><a href='".$json['results'][$i-1]['contact_form']."'>".$json['results'][$i-1]['title']." ".$json['results'][$i-1]['first_name']." ".$json['results'][$i-1]['last_name']."</a></p>" ?>
	                		<?= "<p>email: ".$json['results'][$i-1]['oc_email']."</p>" ?>
	                		<?= "<p>phone: ".$json['results'][$i-1]['phone']."</p>" ?>
	                		<?= "<p>state: ".$json['results'][$i-1]['state_name']."</p>" ?>
	                		<?= "<p>twitter: @".$json['results'][$i-1]['twitter_id']."</p>" ?>
	                		<?php if(isset($json['results'][$i-1]['facebook_id'])) 
	                			{?>
	                				<?= "<p>facebook id: ".$json['results'][$i-1]['facebook_id']."</p>" ?>;
	                		<?php } ?>
                		<?= "</div>" ?>
                		<?= "</section>" ?>
                	<?php } ?>
                	<section id='footer' hidden>
                        <h4 id='footerH4'>Site developed by Charles Hollins...</h4>
                    </section>
                </div>
            </div>
        </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../assets/js/bootstrap.min.js"></script>
    <script src="../assets/js/wyc.js"></script>
    </body>
</html>