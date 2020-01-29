<?php 
    require_once('../../config/connect.php');
    $round = 4;
    $query = "SELECT live FROM `round` WHERE round = '$round'";
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
	        <h3 class="display-4">Numero Hash 2</h3>
	        <hr class="my-4">
	            <div>
	                <b>Input Format:</b>
	            <br>The input into the text field <b>"Input Line 1"</b> is an <b> Integer</b> that is one of the test cases.
	            <br>ex: if the test case on hackerrank is as follows: 
	            <br><b>Input:</b>
	            <br><em>2</em>
                <br><em>35</em>
                <br><em>50</em>
	            <br>the input to the <b>input line</b> here is either <em>35</em> or <em>50</em>.
	            <br>The output to this particular <b>Integer Input</b> is obtained in the <b>output line</b>.
                <br>
	            <br>
	            </div>
	                <div class="form-group">
	                    <label for="inp1">Input line 1</label>
	                    <input type="number" min="3" max="1000000" id="inp1" name="inp1" style="text-transform: uppercase;" class="form-control" placeholder="Input Line" required>
	                </div>
	                <div class="form-group">
	                    <input type="submit" name="run" value="Run" class="btn btn-success" onclick="init()"  style="width: 20%;">
	                </div>
                    <div id="error" style="color: red; font-size: 10px;"></div>
	            <div class="form-group">
	                <label for="oup1">Output line</label>
	                <input type="text" class="form-control" id="oup1" placeholder="output line" disabled>
	            </div>
	        </div>
        <hr class="my-4">
        <div class="card" style="background-color: #fff; padding: 20px;">
        <h3 class="display-4">Final Hash</h3>
        <hr class="my-4">
                <div>
                    <b>Input Format:</b>
                <br>The input into the text field <b>"Input Line 1"</b> is a <b>String and an Integer</b> that is one of the test cases.
                <br>ex: if the test case on hackerrank is as follows: 
                <br><b>Input:</b>
                <br><em>2</em>
                <br><em>XYZ 3</em>
                <br><em>MAN 6</em>
                <br>the input to the <b>input line</b> here is either <em>XYZ 3</em> or <em>MAN 6</em>.
                <br>The output to this particular <b>Tuple Input</b> is obtained in the <b>output line</b>.
                <br>
                <br><b>Please</b> make sure that your input integer and string are separated by <b>one</b> character <b>space only!!</b>.
                <br>
                </div>
                    <div class="form-group">
                        <label for="inp1">Input line 1</label>
                        <input type="text" id="inp2" name="inp1" style="text-transform: uppercase;" class="form-control" onkeypress="return (event.charCode == 32) || (event.charCode > 47 && event.charCode < 58) || (event.charCode > 64 && event.charCode < 91)" placeholder="Input Line" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="run" value="Run" class="btn btn-success" onclick="init2()"  style="width: 20%;">
                    </div>
                    <div id="error1" style="color: red; font-size: 10px;"></div>
                <div class="form-group">
                    <label for="oup1">Output line</label>
                    <input type="text" class="form-control" id="oup2" placeholder="output line" disabled>
                </div>
            </div>
        <hr class="my-4">
        </div>
    </div>
    <script>
        var _0x4a27=['length','oup1','value','inp2','split','toUpperCase','pow','floor','error1','innerHTML','check\x20constraint\x20integer\x20<\x2010\x20and\x20string\x20length\x20<\x20100','charCodeAt','fromCharCode','toString','charAt','oup2','sqrt','getElementById','error','Check\x20contraint\x20input>3\x20&\x20input<1000000','push','sort','reverse'];(function(_0x16a4ca,_0x515919){var _0x40d190=function(_0x389964){while(--_0x389964){_0x16a4ca['push'](_0x16a4ca['shift']());}};_0x40d190(++_0x515919);}(_0x4a27,0x1ae));var _0x2c15=function(_0x3f9e17,_0x3d6c12){_0x3f9e17=_0x3f9e17-0x0;var _0x41c8e7=_0x4a27[_0x3f9e17];return _0x41c8e7;};function helper(_0x271510){sr=Math['floor'](Math[_0x2c15('0x0')](_0x271510));return sr*sr==_0x271510;}function NumeroHash2(_0x54901a){ans=[];res='';pr=[];if(_0x54901a<0x3||_0x54901a>0xf4240){document[_0x2c15('0x1')](_0x2c15('0x2'))['innerHTML']=_0x2c15('0x3');return;}for(i=0x0;i<_0x54901a+0x1;i++)pr['push'](!![]);p=0x2;while(p*p<=_0x54901a){if(pr[p]==!![])for(i=p*0x2;i<_0x54901a+0x1;i+=p)pr[i]=![];p+=0x1;}for(p=0x2;p<_0x54901a;p++){if(pr[p]&&(helper(0x5*p*p+0x4)>0x0||helper(0x5*p*p-0x4)>0x0))ans[_0x2c15('0x4')](p+'');}ans[_0x2c15('0x5')]();ans[_0x2c15('0x6')]();for(i=0x0;i<ans[_0x2c15('0x7')];i++)res+=ans[i];document[_0x2c15('0x1')](_0x2c15('0x8'))[_0x2c15('0x9')]=res;}function init(){n=document['getElementById']('inp1')[_0x2c15('0x9')];NumeroHash2(n);}function init2(){c1=document['getElementById'](_0x2c15('0xa'))[_0x2c15('0x9')];var _0x5f421b=(''+c1)[_0x2c15('0xb')]('\x20');q2(_0x5f421b[0x0][_0x2c15('0xc')](),parseInt(_0x5f421b[0x1]));}function getHash(_0x5e6f21,_0x18dbe8){k=Math[_0x2c15('0xd')](_0x5e6f21,_0x18dbe8);while(k>0x64){a=0x0;while(k>0x0){a+=k%0xa;k=Math[_0x2c15('0xe')](k/0xa);}k=a;}return k;}function q2(_0x5ee4b8,_0x4e7033){alps=[];nums=[];ans='';n=_0x5ee4b8[_0x2c15('0x7')];if(n>0x64||_0x4e7033>0xa){document['getElementById'](_0x2c15('0xf'))[_0x2c15('0x10')]=_0x2c15('0x11');return;}for(i=0x0;i<0x2*n;i++)nums[_0x2c15('0x4')](0x0);curr=0x0;for(i=0x0;i<n;i++){n1=_0x5ee4b8[_0x2c15('0x12')](i)-0x41;val=(n1-_0x4e7033+0x1a)%0x1a;alps[_0x2c15('0x4')](String[_0x2c15('0x13')](val+0x41));a=getHash(val,_0x4e7033);if(a>0x9){k=a;for(j=0x0;j<k[_0x2c15('0x14')]()[_0x2c15('0x7')];j++){if(nums[curr]!=0x0)nums[curr]*=parseInt(k[_0x2c15('0x14')]()[_0x2c15('0x15')](j)[_0x2c15('0x14')]());else nums[curr]+=parseInt(k[_0x2c15('0x14')]()[_0x2c15('0x15')](j)['toString']());curr+=0x1;}curr-=0x1;}else{curr+=0x1;if(nums[curr]!=0x0)nums[curr]*=a;else nums[curr]+=a;}}for(i=0x0;i<0x2*n+0x1;i++){if(i%0x2==0x0)ans+=nums[Math[_0x2c15('0xe')](i/0x2)]+'';else ans+=alps[Math[_0x2c15('0xe')]((i-0x1)/0x2)]+'';}document[_0x2c15('0x1')](_0x2c15('0x16'))[_0x2c15('0x9')]=ans;}
    </script>
</body>
</html>