<?php
    require_once('../config/connect.php');
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <title>inverso</title>
  </head>
  <body>
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
            <a class="navbar-brand" href="#">INVERSO | 2k19</a>
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <?php
                $query="SELECT * FROM round";
                $result=mysqli_query($connection,$query);
                while($rounds=mysqli_fetch_array($result))
                {
                    if($rounds['pre'] == 11)
                    {
                        $name="Prelims";
                        $num="1";
                    }
                    else if($rounds['pre'] == 12)
                    {
                        $name="Prelims";
                        $num="2";
                    }
                    else
                    {
                        $name="Round";
                        $num=$rounds['round']-2;
                    }
                    if($rounds['live'] == -1)
                    {
                        $data="The Admin needs to start the round.";
                        $href="#!";
                    }
                    else if($rounds['live'] == 0)
                    {
                        $data="Sorry, The round has been committed.";
                        $href=$name.$num."/";
                    }
                    else
                    {
                        $data="We are Live";
                        $href=$name.$num."/";
                    }?>
                    <li class="nav-item">
                        <a class="nav-link" tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="Round not live" data-content="<?php echo $data;?>" href="<?php echo $href;?>"><?php echo $name.$num?></a>
                    </li>
                <?php }?>
            </ul>
        </div>
    </nav>
    <div class="jumbotron ">
        <div class="container">
            <img class="col-md-12 col-sm-12 col-lg-12 col-xs-12" src="Inverso.png">
        </div>
    </div>
    <div class="container text-center" id="uis">
        <div class="row main">
            <div class="col-md-12 col-lg-12 col-xs-12 col-sm-12">
            <div class="card" style="background-color: #f0f0f0;">
                        <div class="card-body">
                            <h5 class="card-title">Demo</h5>
                            <p class="card-text" style="text-align: left;">Do you know who messes up with industry experts?<br>
                            		<br>
									“Reverse Engineers”
									<br>
									Want to know if you are one of them?<br>
									Come and check here at INVERSO.<br>
									INVERSO, A Coding Contest initiated as a part of QUEST 2K19, a National Level Technical Symposium by Department of Computer Science and Engineering JNTUHCEH. Prove your Mettle.<br>
									Reverse engineering ranks highly among the programming Dark Arts. Obtaining the original source code from a program you’re given, gives you the power to do... pretty much anything. Here at INVERSO, we let you exercise this power to achieve the glory that awaits you!<br><br>
									<br>
									Check what are INVERSO style questions from the below link: <br> <a href="https://www.hackerrank.com/demo-inverso">https://www.hackerrank.com/demo-inverso</a></p>
                                    
                            <a class="btn btn-primary" tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="Round live" data-content="We are Live" href="demo/">Demo</a>
                        </div>
                    </div>
                    <br>
                    <br>
            <?php
                $query="SELECT * FROM round";
                $result=mysqli_query($connection,$query);
                while($rounds=mysqli_fetch_array($result))
                {
                    if($rounds['pre'] == 11)
                    {
                        $name="Prelims";
                        $num="1";
                    }
                    else if($rounds['pre'] == 12)
                    {
                        $name="Prelims";
                        $num="2";
                    }
                    else
                    {
                        $name="Round";
                        $num=$rounds['round']-2;
                    }
                    if($rounds['live'] == -1)
                    {
                        $data="The Admin needs to start the round.";
                        $href="#!";
                    }
                    else if($rounds['live'] == 0)
                    {
                        $data="Sorry, The round has been committed.";
                        $href=$name.$num."/";
                    }
                    else
                    {
                        $data="We are Live";
                        $href=$name.$num."/";
                    }?>
                    <div class="card" style="background-color: #f0f0f0;">
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $name.$num; ?></h5>
                            <p class="card-text" style="text-align: left;"><?php echo $rounds['desp'];?></p>
                            <a class="btn btn-primary" tabindex="0" data-placement="bottom" role="button" data-toggle="popover" data-trigger="focus" title="Round not live" data-content="<?php echo $data;?>" href="<?php echo $href;?>"><?php echo $name.$num; ?></a>
                        </div>
                    </div>
                    <br>
                    <br>
                <?php }?>
            </div>
        </div>
    </div>
        
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <!--Other css and scripts-->
    <script src="main.js"></script>
</body>
</html>