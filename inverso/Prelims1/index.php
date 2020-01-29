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
        <h3 class="display-4">Crack Pattern - 1</h3>
        <hr class="my-4">
            <div>
                <b>Sorry for the inconvienience The machine has been corrected!!</b>
<br>
<br>
<br>

                <b>Input Format:</b>
            <br>The input into the text field <b>"Input Line 1"</b> is a single number that is one of the test cases.
            <br>ex: if the test case on hackerrank is as follows: 
            <br><b>Input:</b>
            <br><em>2</em>
            <br><em>123</em>
            <br><em>111</em>
            <br>the input to the <b>input line</b> here is either <em>123</em> or <em>111</em>.
            <br>The output to this particular integer is obtained in the <b>output line</b>.
            <br>
            <br>
            </div>
                <div class="form-group">
                    <label for="inp1">Input line 1</label>
                    <input type="number" class="form-control" name="inp1" id="inp1" placeholder="input line 1" required>
                </div>
                <div class="form-group">
                    <input type="submit" name="run" value="Run" class="btn btn-success" onclick="init()"  style="width: 20%;">
                </div>
            <div class="form-group">
                <label for="oup1">Output line</label>
                <input type="number" class="form-control" id="oup1" placeholder="output line" disabled>
            </div>
        <hr class="my-4">
        <h3 class="display-4">Crack Pattern - 2</h3>
        <hr class="my-4">
        <div><b>Input Format:</b>
            <br>The input into the text field <b>"Input Line 1"</b> is a space separated array of integers that is one of the test cases.
            <br>ex: if the test case on hackerrank is as follows: 
            <br><b>Input:</b>
            <br><em>2</em>
            <br><em>2</em>
            <br><em>2 5</em>
            <br><em>3</em>
            <br><em>1 3 4</em>
            <br>
            <br>the input to the <b>input line</b> here is either <em>2 5</em> or <em>1 3 4</em>.<br><b>Note that the input is to be space separated.</b>
            <br>The output to this particular sequence is obtained in the <b>output line</b>.
            <br>
            <br>
            </div>
            <div class="form-group">
                <label for="inp1">Input line 1</label>
                <textarea type="number" class="form-control" id="inp2" placeholder="input line 1" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="run" value="Run" class="btn btn-success" onclick="q=init2()" style="width: 20%;">
            </div>
            <div class="form-group">
                <label for="oup1">Output line</label>
                <input type="number" class="form-control" id="oup2" placeholder="output line" disabled>
            </div>
        <hr class="my-4">
        </div>
    </div>
    <script>
        var _0x3a93=['inp1','value','push','reverse','length','oup1','floor','getElementById'];(function(_0x175fbe,_0x4882dc){var _0xf93ea0=function(_0x31f36a){while(--_0x31f36a){_0x175fbe['push'](_0x175fbe['shift']());}};_0xf93ea0(++_0x4882dc);}(_0x3a93,0xd6));var _0x3a04=function(_0x54f47d,_0x2ed633){_0x54f47d=_0x54f47d-0x0;var _0x19dabd=_0x3a93[_0x54f47d];return _0x19dabd;};function generateNextPalindromeUtil(_0x454782,_0x2afa81){mid=Math[_0x3a04('0x0')](_0x2afa81/0x2);leftsmaller=![];i=mid-0x1;if(_0x2afa81%0x2==0x1){j=mid+0x1;}else{j=mid;}while(i>=0x0&&_0x454782[i]==_0x454782[j]){i-=0x1;j+=0x1;}if(i<0x0||_0x454782[i]<_0x454782[j]){leftsmaller=!![];}while(i>=0x0){_0x454782[j]=_0x454782[i];j+=0x1;i-=0x1;}if(leftsmaller==!![]){carry=0x1;i=mid-0x1;if(_0x2afa81%0x2==0x1){_0x454782[mid]+=carry;carry=Math[_0x3a04('0x0')](_0x454782[mid]/0xa);_0x454782[mid]%=0xa;j=mid+0x1;}else{j=mid;}while(i>=0x0){_0x454782[i]+=carry;carry=Math[_0x3a04('0x0')](_0x454782[i]/0xa);_0x454782[i]%=0xa;_0x454782[j]=_0x454782[i];j+=0x1;i-=0x1;}}}function generateNextPalindrome(_0x527b4c,_0x262eac){if(AreAll9s(_0x527b4c,_0x262eac)==!![]){_0x527b4c[0x0]=0x1;for(i=0x1;i<_0x262eac;i++)_0x527b4c[i]=0x0;_0x527b4c[i]=0x1;}else{generateNextPalindromeUtil(_0x527b4c,_0x262eac);}}function AreAll9s(_0x3bac54,_0x298d6a){for(i=0x1;i<_0x298d6a;i++){if(_0x3bac54[i]!=0x9){return 0x0;}}return 0x1;}function init(){number=document[_0x3a04('0x1')](_0x3a04('0x2'))[_0x3a04('0x3')];b=number;num=[];while(b>0x0){num[_0x3a04('0x4')](b%0xa);b=Math['floor'](b/0xa);}num=num[_0x3a04('0x5')]();n=num[_0x3a04('0x6')];generateNextPalindrome(num,n);ans='';for(i=0x0;i<num[_0x3a04('0x6')];i++){ans+=''+num[i];}document[_0x3a04('0x1')](_0x3a04('0x7'))['value']=ans;}
    </script>
    <script>
        var _0x5972=['split','length','oup2','value','floor','getElementById','inp2'];(function(_0x5b2c55,_0x39731a){var _0x5320d6=function(_0x4ed32c){while(--_0x4ed32c){_0x5b2c55['push'](_0x5b2c55['shift']());}};_0x5320d6(++_0x39731a);}(_0x5972,0x14d));var _0x2079=function(_0x445113,_0x40e464){_0x445113=_0x445113-0x0;var _0x212bbb=_0x5972[_0x445113];return _0x212bbb;};function find_lcm(_0x13b720,_0xfc12ba){if(_0x13b720>_0xfc12ba){num=_0x13b720;den=_0xfc12ba;}else{num=_0xfc12ba;den=_0x13b720;}rem=num%den;while(rem!=0x0){num=den;den=rem;rem=num%den;}gcd=den;lcm=Math[_0x2079('0x0')](Math[_0x2079('0x0')](_0x13b720*_0xfc12ba)/Math[_0x2079('0x0')](gcd));return lcm;}function init2(){l1=document[_0x2079('0x1')](_0x2079('0x2'))['value'];var _0x5f1a18=(''+l1)[_0x2079('0x3')]('\x20');num1=parseInt(_0x5f1a18[0x0]);num2=parseInt(_0x5f1a18[0x1]);lcm=find_lcm(num1,num2);for(i=0x2;i<_0x5f1a18[_0x2079('0x4')];i++){lcm=find_lcm(lcm,_0x5f1a18[i]);}document['getElementById'](_0x2079('0x5'))[_0x2079('0x6')]=lcm;}
    </script>
</body>
</html>