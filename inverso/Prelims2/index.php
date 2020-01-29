<?php 
    require_once('../../config/connect.php');
    $pre = 12;
    $query = "SELECT live FROM `round` WHERE pre = '$pre'";
    $result = mysqli_query($connection,$query);
    $live = mysqli_fetch_array($result);
    if($live['live'] == -1)
        header("location: notlive/");
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
            </ul>
        </div>
    </nav>
    
    <div class="jumbotron">
        <div style=" width: 70%; display: block; margin:auto;">
        <h1 class="display-4">Sequence Generator</h1>
        <p class="lead">Input your values in the input boxes and the output is generated in the diabled output box.</p>
        <hr class="my-4">
        <div class="card" style="background-color: #fff; padding: 20px;">
	        <h3 class="display-4">Inverso Hash</h3>
	        <hr class="my-4">
	            <div>
	                <b>Input Format:</b>
	            <br>The input into the text field <b>"Input Line 1"</b> is a <b>String</b> consisting of capital alphabets only that is one of the test cases.
	            <br>ex: if the test case on hackerrank is as follows: 
	            <br><b>Input:</b>
	            <br><em>2</em>
	            <br><em>ABC</em>
	            <br><em>XYZ</em>
	            <br>the input to the <b>input line</b> here is either <em>ABC</em> or <em>XYZ</em>.
	            <br>The output to this particular <b>String</b> is obtained in the <b>output line</b>.
	            <br>
	            <br>
	            </div>
	                <div class="form-group">
	                    <label for="inp1">Input line 1</label>
	                    <input type="text" id="inp1" name="inp1" style="text-transform: uppercase;" class="form-control" onkeypress="return (event.charCode > 64 && event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" placeholder="Input Line" required>
	                </div>
	                <div class="form-group">
	                    <input type="submit" name="run" value="Run" class="btn btn-success" onclick="init()"  style="width: 20%;">
	                </div>
	            <div class="form-group">
	                <label for="oup1">Output line</label>
	                <input type="text" class="form-control" id="oup1" placeholder="output line" disabled>
	            </div>
	        </div>
        <hr class="my-4">
        <div class="card" style="background-color: #fff; padding: 20px;">
        <h3 class="display-4">Another Pattern</h3>
        <hr class="my-4">
        <div><b>Input Format:</b>
            <br>The input into the text field <b>"Input Line 1"</b> is a space separated array of integers that is one of the test cases.
            <br>ex: if the test case on hackerrank is as follows: 
            <br><b>Input:</b>
            <br><em>2</em>
            <br><em>5</em>
            <br><em>1 2 3 4 5</em>
            <br><em>2 5 2 0 1</em>
            <br>
            <br>the input to the <b>input line</b> here is either <em>1 2 3 4 5</em> or <em>2 5 2 0 1</em>.<br><b>Note that the integers are to is to be space separated.</b>
            <br><b>Please</b> make sure that your input integers are separated by <b>one</b> character <b>space only!!</b>.
            <br>The output to this particular sequence is obtained in the <b>output line</b>.
            <br>
            <br>
            </div>
            <div class="form-group">
                <label for="inp1">Input line 1</label>
                <textarea type="number" class="form-control" id="inp2" placeholder="input line 1" rows="3" onkeypress="return (event.charCode == 32 || event.charCode == 45) || (event.charCode > 47 && event.charCode < 58)" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="run" value="Run" class="btn btn-success" onclick="q=init2()" style="width: 20%;">
            </div>
            <div class="form-group">
                <label for="oup1">Output line</label>
                <input type="number" class="form-control" id="oup2" placeholder="output line" disabled>
            </div>
        </div>
        <hr class="my-4">
        </div>
    </div>
    <script>
        var _0x5777=['getElementById','inp1','toUpperCase','length','toString','floor','oup1','value'];(function(_0x5e7b9c,_0x54831e){var _0x4c19d4=function(_0x4b2e7a){while(--_0x4b2e7a){_0x5e7b9c['push'](_0x5e7b9c['shift']());}};_0x4c19d4(++_0x54831e);}(_0x5777,0x80));var _0x2dd2=function(_0x4dbdf6,_0x2439f2){_0x4dbdf6=_0x4dbdf6-0x0;var _0x555ca6=_0x5777[_0x4dbdf6];return _0x555ca6;};function init(){q1(document[_0x2dd2('0x0')](_0x2dd2('0x1'))['value'][_0x2dd2('0x2')]());}function q1(_0x49c8cf){if(_0x49c8cf[_0x2dd2('0x3')]>0x0){alps=[];nums=[];ans='';n=_0x49c8cf[_0x2dd2('0x3')];for(i=0x0;i<n+0x1;i++)nums['push'](0x0);curr=0x0;for(i=0x0;i<n;i++){n1=_0x49c8cf['charCodeAt'](i)-0x41;val=(n1+0x2)%0x1a;alps['push'](String['fromCharCode'](val+0x41));if(n1+0x1>0x9){k=n1+0x1;for(j=0x0;j<k['toString']()[_0x2dd2('0x3')];j++){nums[curr]+=parseInt(k[_0x2dd2('0x4')]()['charAt'](j)[_0x2dd2('0x4')]());curr+=0x1;}curr-=0x1;}else{curr+=0x1;nums[curr]+=n1+0x1;}}for(i=0x0;i<0x2*n+0x1;i++){if(i%0x2==0x0)ans+=nums[Math[_0x2dd2('0x5')](i/0x2)]+'';else ans+=alps[Math['floor']((i-0x1)/0x2)]+'';}document[_0x2dd2('0x0')](_0x2dd2('0x6'))[_0x2dd2('0x7')]=ans;}}
    </script>
    <script>
        var _0x1ab0=['value','split','getElementById','oup2','inp2'];(function(_0x49b6f2,_0x3d8551){var _0x6203e2=function(_0x48af18){while(--_0x48af18){_0x49b6f2['push'](_0x49b6f2['shift']());}};_0x6203e2(++_0x3d8551);}(_0x1ab0,0x13f));var _0x4737=function(_0x352538,_0x24caf4){_0x352538=_0x352538-0x0;var _0x3e97c8=_0x1ab0[_0x352538];return _0x3e97c8;};function init2(){var _0x10acfe=document['getElementById'](_0x4737('0x0'))[_0x4737('0x1')];var _0x3182d3=(''+_0x10acfe)[_0x4737('0x2')]('\x20');var _0x2e3098=0x0;var _0x5ed80b=0x0;for(i=0x0;i<_0x3182d3['length'];i++){if(_0x3182d3[i]>0x0)_0x2e3098+=0x1;else _0x2e3098=0x0;if(_0x2e3098>_0x5ed80b)_0x5ed80b=_0x2e3098;}document[_0x4737('0x3')](_0x4737('0x4'))[_0x4737('0x1')]=_0x5ed80b;}
    </script>
</body>
</html>