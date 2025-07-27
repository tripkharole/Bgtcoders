<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Documents</title>
	<link rel="stylesheet" type="text/css" href="content.css">
	<link rel="stylesheet" href="home.css">
</head>
<body>
<nav>
        <div class="icon">BGT <B style="color: red;" >C</B>ODERS</div>
        <div class="search_box">
            <input type="search" placeholder="search here">
            <span class="fa fa-search">
                <img src="search icon.png" alt="" height=20px width=20px align="left">
            </span>
        </div>
        <ol>
            <li><a href="http://localhost/bgtcoder/signup.php" >SIGNUP</a></li>
            <li><a href="http://localhost/bgtcoder/login.php" id="loginuButton">LOGIN</a></li>


</ol>     
    </nav>
</nav>
    <div class="bgt-bar-left">
    <a class="bgt-bar" href="index.php " title="HTML Tutorial">HOME</a>
      <a class="bgt-bar" href="http://localhost/bgtcoder/htmlintroduction " title="HTML Tutorial">HTML</a>
      <a class="bgt-bar" href=" css.php" title="CSS Tutorial">CSS</a>
      <a class="bgt-bar" href="js.php " title="JavaScript Tutorial">JAVASCRIPT</a>
      <a class="bgt-bar" href=" python.php" title="Python Tutorial">PYTHON</a>
      <a class="bgt-bar" href=" java.php" title="Java Tutorial">JAVA</a>
      <a class="bgt-bar" href="ph.php " title="PHP Tutorial">PHP</a>
     
    </div>
	<div class="CSS_table">
        <table style="width:17%">
        <tr>
            <th style="color:#ffffff">
            <a href="css_introduction.php">
             CSS TUTORIALS</a></th>
        </tr>
       <tr>
            <td><a href="css_introduction.php"> CSS Introduction</a></td>
</tr>
            <tr>
            <td><a href="css_syntex.php">CSS Syntex</a> </td>
</tr>
                <tr>
            <td><a href="css_selectors.php"> CSS Selectors</a></td>
</tr>
<tr>
            <td>CSS Comments</td>
       </tr><tr>
            <td>CSS Color</td>
       </tr><tr>
            <td>CSS Color</td>
       </tr><tr>
            <td>CSS Backgrounds</td>
       </tr><tr>
            <td>CSS Borders</td>
       </tr><tr>
            <td>CSS Margins</td>
       </tr><tr>
            <td>CSS Padding</td>
       </tr><tr>
            <td>CSS Height/width</td>
       </tr><tr>
            <td>CSS Box Model</td>
       </tr><tr>
            <td>CSS Outline</td>
       </tr><tr>
            <td>CSS Text</td>
       </tr><tr>
            <td>CSS Fonts</td>
       </tr><tr>
            <td>CSS Icons</td>
       </tr><tr>
            <td>CSS Links</td>
       </tr><tr>
            <td>CSSLists </td>
       </tr><tr>
            <td>CSS Tables</td>
       </tr><tr>
            <td>CSS Display</td>
       </tr><tr>
            <td>CSS Max-Width</td>
       </tr><tr>
            <td>CSS Position</td>
       </tr><tr>
            <td>CSS Z-index</td>
       </tr><tr>
            <td>CSS Overflow</td>
       </tr><tr>
            <td>CSS Float</td>
       </tr><tr>
            <td>CSS Inline-block</td>
       </tr><tr>
            <td>CSS Align</td>
       </tr><tr>
            <td>CSS Combinators</td>
       </tr><tr>
            <td>CSS Pseudo-Class</td>
       </tr><tr>
            <td>CSS Pseudo-element</td>
       </tr><tr>
            <td>CSS Opacity</td>
       </tr><tr>
            <td>CSS Navigation Bar</td>
       </tr><tr>
            <td>CSS Dropdowns</td>
       </tr><tr>
            <td>CSS Image Gallery</td>
       </tr><tr>
            <td>CSS Image Sprites</td>
       </tr><tr>
            <td>CSS Attr Selectors</td>
       </tr><tr>
            <td>CSS Forms</td>
       </tr><tr>
            <td>CSS Counters</td>
       </tr><tr>
            <td>CSS Website Layout</td>
       </tr><tr>
            <td>CSS Units</td>
       </tr>
       <tr>
            <td>CSS Specificity</td>
       </tr><tr>
            <td>CSS !important</td>
       </tr><tr>
            <td>CSS Math Functions</td>
       </tr>
</div>      
<div class="content">
<h1>CSS SELECTORS</h1>
<h2>Introduction of Css Selector
</h2>
<p>CSS Selectors syntax का एक भाग है। यह basically HTML attributes, HTML Elements होते है। CSS Selectors के द्वारा उन content को select किया जाता है जिस पर हम CSS Rule apply करना चाहते है।</p>
<h2>Types Of Css Selectors</h2>
<pre>CSS Selectors के विभिन्न प्रकार नीचे दिये गए है।

1.Tag selector / Type selector
2.Universal selector
3.Class Selector
4.ID Selector
5.Attributes Selector
6.Descendant Selector
7.Adjacent sibling Selector
8.Child Selector
</pre>
<h2>1.Tag selector / Type selector:</h2>
<p>Tag selector को Type selector भी कहा जाता है। इससे हम किसी भी HTML tag को select करके उसमे CSS Style apply कर सकते है। यहा हम selector की जगह उस Tag का name लिख देते है जिसकी हमे Style change करनी है।
</p>
<h2>EXAMPLE</h2>
<pre></pre>
<h2>2. Universal Selector: </h2>
<p>जब हमें page के सारे elements में एक जैसा rule apply करना होता है तब हम इस selector का use करते हैं, इससे HTML page के सारे tags एक साथ select हो जाते हैं। इसके लिये हम * symbol का उपयोग करते हैं। </p>
<h2>EXAMPLE</h2>
<pre></pre>
<h2>3.Class Selector:</h2>
<p>यह सबसे ज्यादा use होने वाला selector है, मान के चलिये हमें कोई collection of properties बार-बार उपयोग करने की जरूरत पडती है तो हम एक class बना कर उन सारे rules को उसके अंदर define कर देते हैं, फ़िर जिस tag में हमें ये rules apply करने होते हैं हम उस tag में इस class को call कर लेते हैं।
इसे define करने के लिये .(dot) symbol use करते हैं। एक class को हम जितने tags में चाहें call कर सकते हैं।</p>
<h2>अभी भी confused हैं?</h2>
<p>तो चलिये इसे एक उदाहरण के साथ समझते हैं:</p>
<p>मान के चलिये हमारे पास एक पेज में 3 paragraphs हैं यानि की तीन paragraphs tags हैं, हम चाहते हैं कि इन तीनो paragraphs की color अलग-अलग हों पहले की red, दूसरे की blue, और तीसरे की green<p>

<p>तो इस स्थिति में हम तीन अलग-अलग class बनायेंगे जिसको हम नाम देंगे red_para, blue_para, और green_para</p>

<p>इन तीनो class में color वाली property define कर देते हैं, अब तीनो paragraph tags में एक-एक class को call कर लेते हैं।</p>
<img src="selector.png">
<h2>EXAMPLE</h2>
<pre></pre>
<h2>4. ID Selector: </h2>
<p>यह class की तरह ही होता है इसमे बस इतना अंतर होता है कि हम इसे define करते समय . (dot) की जगह  # (hash) character का use करते हैं, call करते समय tag में id attribute use करते हैं।
एक ID selector को हम सिर्फ़ एक element के लिये ही use कर सकते हैं। सारे ID unique tag पर ही apply होते हैं। इसका उपयोग ज्यादतर layout बनाते समय किया जाता है।</p>
<h2>EXAMPLE</h2>
<pre></pre>
<h2>5.Attributes Selector:</h2>
<p>Style Apply करने के लिए ID , class के अलावा आप attribute के name से भी select कर सकते हैं , उसके लिए आपको उस element के साथ attribute का name (element[attribute]) define करना पड़ता है। HTML elements में ID , class ये attributes ही होते हैं|</p>
<h2>EXAMPLE</h2>
<pre></pre>
<h2>6.Descendant Selector: </h2>
<p>इसका उपयोग हम तब करते हैं जब ऐसे element में style apply करना होता है जो किसी दूसरे element के अंदर हो। </p>
<h2>EXAMPLE</h2>
<pre></pre>
<h2>7. Adjacent sibling selector: </h2>
<p>जब किसी एक specific element के just बाद आने वाले दूसरे element में CSS rule डालना हो तो Adjacent sibling selector की आवश्यकता पडती है।
।</p>
<h2>EXAMPLE</h2>
<pre></pre>
<h2>8.Child Selector </h2>
<p>यह Descendant Selector की तरह ही है लेकिन यह किसी element के child को ही target करता है। इसमें हम greater than symbol (>) का उपयोग करते हैं, </p>
<h2>EXAMPLE</h2>
<pre></pre>
</div>
</table>
</body>
</html>