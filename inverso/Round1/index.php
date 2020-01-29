
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
            <h3 class="display-4">Numero Hash</h3>
            <hr class="my-4">
                <div>
                    <b>Input Format:</b>
                <br>The input into the text field <b>"Input Line 1"</b> is a <b>Array of Integers</b> that is one of the test cases.
                <br>ex: if the test case on hackerrank is as follows: 
                <br><b>Input:</b>
                <br><em>2</em>
                <br><em>3</em>
                <br><em>13 11 14</em>
                <br><em>2</em>
                <br><em>17 19</em>
                <br>the input to the <b>input line</b> here is either <em>13 11 14</em> or <em>17 19</em>.
                <br>The output to this particular <b>Array Input</b> is obtained in the <b>output line</b>.
                <br>
                <br><b>Please</b> make sure that your input integers are separated by <b>one</b> character <b>space only!!</b>.
                <br>
                </div>
                    <div class="form-group">
                        <label for="inp1">Input line 1</label>
                        <input type="text" id="inp1" name="inp1" style="text-transform: uppercase;" class="form-control" onkeypress="return (event.charCode == 32) || (event.charCode > 47 && event.charCode < 58)" placeholder="Input Line" required>
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
        <h3 class="display-4">Another Inverso</h3>
        <hr class="my-4">
                <div>
                    <b>Input Format:</b>
                <br>The input into the text field <b>"Input Line 1"</b> is a <b>Array of Integers</b> that is one of the test cases.
                <br>ex: if the test case on hackerrank is as follows: 
                <br><b>Input:</b>
                <br><em>2</em>
                <br><em>3</em>
                <br><em>13 11 14</em>
                <br><em>2</em>
                <br><em>17 19</em>
                <br>the input to the <b>input line</b> here is either <em>13 11 14</em> or <em>17 19</em>.
                <br>The output to this particular <b>Array Input</b> is obtained in the <b>output line</b>.
                <br>
                <br><b>Please</b> make sure that your input integers are separated by <b>one</b> character <b>space only!!</b>.
                <br>
                </div>
                    <div class="form-group">
                        <label for="inp1">Input line 1</label>
                        <input type="text" id="inp2" name="inp1" style="text-transform: uppercase;" class="form-control" onkeypress="return (event.charCode == 32) || (event.charCode > 47 && event.charCode < 58)" placeholder="Input Line" required>
                    </div>
                    <div class="form-group">
                        <input type="submit" name="run" value="Run" class="btn btn-success" onclick="init2()"  style="width: 20%;">
                    </div>
                    <div id="error1" style="color: red; font-size: 10px;"></div>
                <div class="form-group">
                    <label for="oup2">Output line</label>
                    <input type="text" class="form-control" id="oup2" placeholder="output line" disabled>
                </div>
            </div>
        <hr class="my-4">
        </div>
    </div>
    <script>
       var _0x3492=['getElementById','inp1','value','split','error','innerHTML','check\x20Constraint\x20number\x20of\x20inputs\x20<9','push','length','oup1','inp2','oup2','error1','check\x20Constraint\x20each\x20value\x20>\x200','floor','abs','sort','replace'];(function(_0x2dc79d,_0x4db9b1){var _0x171705=function(_0x5685f7){while(--_0x5685f7){_0x2dc79d['push'](_0x2dc79d['shift']());}};_0x171705(++_0x4db9b1);}(_0x3492,0x1af));var _0x1334=function(_0x160aea,_0x573464){_0x160aea=_0x160aea-0x0;var _0x3c1e2a=_0x3492[_0x160aea];return _0x3c1e2a;};function strip(_0x5bed39){return _0x5bed39[_0x1334('0x0')](/^\s+|\s+$/g,'');}function init(){c1=strip(document[_0x1334('0x1')](_0x1334('0x2'))[_0x1334('0x3')]);var _0x936e4f=(''+c1)[_0x1334('0x4')]('\x20');NumHash(_0x936e4f);}function NumHash(_0x277b72){var _0x334c54='';var _0x3aec4d=[];l=[[0x9,0x1],[0x8,0x4,0x2,0x6],[0x7,0x9,0x3,0x1],[0x6],[0x5],[0x4,0x6],[0x3,0x9,0x7,0x1],[0x2,0x4,0x8,0x6],[0x1]];k=[0x2,0x4,0x4,0x1,0x1,0x2,0x4,0x4,0x1];n=_0x277b72['length'];if(n>0x9){document[_0x1334('0x1')](_0x1334('0x5'))[_0x1334('0x6')]=_0x1334('0x7');return;}for(p=0x0;p<n;p++){if(parseInt(_0x277b72[p])<=0x0){document[_0x1334('0x1')](_0x1334('0x5'))[_0x1334('0x6')]='check\x20Constraint\x20each\x20value\x20>\x200';return;}else{document[_0x1334('0x1')](_0x1334('0x5'))[_0x1334('0x6')]='';}}for(p=0x0;p<n;p++)_0x3aec4d[_0x1334('0x8')](parseInt(_0x277b72[p])%parseInt(k[p]));for(p=0x0;p<n;p++)_0x3aec4d[p]=_0x3aec4d[p]-0x1;for(p=0x0;p<n;p++){if(_0x3aec4d[p]>=0x0)_0x334c54+=''+l[p][_0x3aec4d[p]];else _0x334c54+=''+l[p][l[p][_0x1334('0x9')]+_0x3aec4d[p]];}document[_0x1334('0x1')](_0x1334('0xa'))['value']=_0x334c54;}function init2(){c1=strip(document[_0x1334('0x1')](_0x1334('0xb'))['value']);var _0x520c7e=(''+c1)['split']('\x20');NumHash2(_0x520c7e);}function sortNumber(_0x1141cb,_0x556394){return _0x1141cb-_0x556394;}function NumHash2(_0x2117a9){var _0x3e07c4=[];var _0x4535d3='';document[_0x1334('0x1')](_0x1334('0xc'))[_0x1334('0x3')]='';for(p=0x0;p<_0x2117a9['length'];p++){if(parseInt(_0x2117a9[p])<0xb||parseInt(_0x2117a9[p])>0x63){document[_0x1334('0x1')](_0x1334('0xd'))[_0x1334('0x6')]=_0x1334('0xe');return;}else{document[_0x1334('0x1')](_0x1334('0xd'))[_0x1334('0x6')]='';}}for(c=0x0;c<_0x2117a9[_0x1334('0x9')];c++){d=parseInt(_0x2117a9[c])%0xa;e=Math[_0x1334('0xf')](parseInt(_0x2117a9[c])/0xa);j=d+e;if(j>0x9)j=Math[_0x1334('0xf')](j/0xa)+j%0xa;j=Math[_0x1334('0x10')](d-e)*0xa+j;_0x3e07c4[_0x1334('0x8')](parseInt(j));}_0x3e07c4[_0x1334('0x11')](sortNumber);for(i=_0x3e07c4[_0x1334('0x9')]-0x1;i>=0x0;i--)_0x4535d3+=''+_0x3e07c4[i];document[_0x1334('0x1')](_0x1334('0xc'))[_0x1334('0x3')]=_0x4535d3;_0x4535d3='';}
    </script>
</body>
</html>