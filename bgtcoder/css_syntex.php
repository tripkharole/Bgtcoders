<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>css_sysntex</title>
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
      <a class="bgt-bar" href="htmlintroduction.php " title="HTML Tutorial">HTML</a>
      <a class="bgt-bar" href=" css_introduction.php" title="CSS Tutorial">CSS</a>
      <a class="bgt-bar" href="js_introduction.php " title="JavaScript Tutorial">JAVASCRIPT</a>
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
<h1>CSS SYNTEX</h1>
<h2>
	 what is CSS Syntax and introduction of CSS Syntax</h2> 
	<p>
HTML तथा अन्य कम्प्युटर भाषाओं की तरह ही CSS Rule को भी लिखने का Syntax है.जिसके माध्यम से HTML Document के लिए CSS Declarations लिखि जाती हैं.नीचे CSS Syntax को दिखाया गया है-</p>
<img src="syntex.png" img="center">
<p>CSS Syntax को Style Rule भी कहते है. Style Rule के मुख्य रूप से दो भाग होते है. आप इन्हे ऊपर Image में देख सकते है.</p>

<h2>1.Selector </h2> 
<p>एक Selector वह शब्द/शब्द समूह/अक्षर होता है जिसके लिए ‘Style Rule’ को लिखा जाता है. इसे ‘Curly Bracket’ के बाहर लिखा जाता है. यह आमतौर पर ‘HTML Tag’ ही होता है. लेकिन, इसे कोई भी नाम देकर लिखा जा सकता है.</p>
<h2>2.Declaration</h2>
<p> Declaration Style Rule का वह भाग होता हैं जिसमे किसी Selector के लिए Style की घोषणा की जाती हैं. इसके भी दो भाग होते हैं.</p>
	<h3>1.Property</h3> 
<p>Property Style Rule का वह भाग है जो Style हम किसी ‘Selector’ पर लागु करना चाहते है. यह Curly Bracket के भीतर लिखी होती है. इसे HTML Tag का Attribute मान सकते है.</p>
<h3>2.Value </h3>
<p> Style Rule का तीसरा भाग Value होता है. इसे भी Curly Bracket के भीतर लिखा जाता है. इसमे Property के लिए Value set की जाती है. Property Selector का “क्या” है वही Value को “कैसे” कहा जाता है.</p>
<h2>CSS Rule को उदाहरण से समझिए</h2>
<pre>
	p {
color: red;
font-size: 16px;
}
</pre>
<p>ऊपर के उदाहरण में हमने HTML Paragraph के लिए CSS Rule को Declare किया हैं. जिसमें p जो एक HTML Element होता हैं, यहाँ Selector है. इसके बाद Curley Bracket के भीतर Declaration लिखा गया हैं. Declaration में सबसे पहले Property color दी गई हैं. और इस Property की Value red लिखि गई हैं. Property की Value को Colon (:) द्वारा अलग किया जाता हैं.
<br><br>
इसके बाद एक और Declaration लिखि गई हैं. जिसे Semicolon (;) द्वारा अलग किया जाता हैं. इस Declaration को भी p Selector के लिए ही लिखा गया हैं. जिसमें Property font-size है, और इसकी Value 16px Set की गई हैं. अब आपके Document में जितने भी P Element होंगे उन सब पर ये CSS Rule Apply होगा.</p>
<big><b>Note:-</b> आप एक ही Style Rule में एक से ज्यादा Declarations लिख सकते हैं.</big>
</div>
</table>
</body>
</html>


