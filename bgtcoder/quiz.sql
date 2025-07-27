-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2023 at 07:21 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bgtcoders`
--

-- --------------------------------------------------------

--
-- Table structure for table `quiz`
--

CREATE TABLE `quiz` (
  `question_id` int(11) NOT NULL,
  `questions` varchar(255) NOT NULL,
  `option1` varchar(255) NOT NULL,
  `option2` varchar(255) NOT NULL,
  `option3` varchar(255) NOT NULL,
  `option4` varchar(255) NOT NULL,
  `correct_ans_id` tinyint(1) NOT NULL,
  `languages` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `quiz`
--

INSERT INTO `quiz` (`question_id`, `questions`, `option1`, `option2`, `option3`, `option4`, `correct_ans_id`, `languages`) VALUES
(1, 'What does HTML stand for?', 'Hyper Text Markup Language', 'Home Tool Markup Language', 'Hyperlinks and Text Markup Language', 'Home Text Markup Language', 1, 'HTML'),
(2, 'What is the latest version of HTML?', 'HTML4', 'HTML5', 'HTML6', 'HTML7', 2, 'HTML'),
(3, 'What  is the  correct syntax for an HTML comment?', '/* comment */', '//comment', '&lt!--comment--&gt', '#comment', 3, 'HTML'),
(4, 'Which tag is used to define a hyperlink in HTML?', '&lt a &gt', '&lt h &gt', '&lt p &gt', '&lt img &gt', 1, 'HTML'),
(5, 'Which tag is used to define a list in HTML?', '&lt  li &gt', '&lt ul &gt', '&lt ol &gt', '&lt dl &gt', 2, 'HTML'),
(6, 'Which tag is used to define a table in HTML?', '&lt table &gt', '&lt tr &gt', '&lt td &gt', '&lt th &gt', 1, 'HTML'),
(7, 'Which attribute is used to specify the URL of an image in HTML?', 'imgsrc', 'img-url', 'src', 'url', 3, 'HTML'),
(8, 'Which tag is used to define a paragraph in HTML?', '&lt h &gt', '&lt p &gt', '&lt b &gt', '&lt i &gt', 2, 'HTML'),
(9, 'Which tag is used to define a heading in HTML?', '&lt b &gt', '&lt i &gt', '&lt h &gt', '&lt p &gt', 3, 'HTML'),
(10, 'Which tag is used to define a line break in HTML?', '&lt br &gt', '&lt hr &gt', '&lt lb &gt', '&lt ln &gt', 1, 'HTML'),
(11, 'Which tag is used to define a bold text in HTML?', '&lt strong &gt', '&lt em &gt', '&lt i &gt', '&lt b &gt', 4, 'HTML'),
(12, 'Which tag is used to define an italicized text in HTML?', '&lt i &gt', '&lt em &gt', '&lt b &gt', '&lt strong &gt', 1, 'HTML'),
(13, 'Which tag is used to define an unordered list in HTML?', '&lt ol &gt', '&lt ul &gt', '&lt li &gt', '&lt dl &gt', 2, 'HTML'),
(14, 'Which tag is used to define an ordered list in HTML?', '&lt ul &gt', '&lt li &gt', '&lt ol &gt', '&lt dl &gt', 3, 'HTML'),
(15, 'Which tag is used to define a definition  list in HTML?', '&lt ul &gt', '&lt ol &gt', '&lt li &gt', '&lt dl &gt', 4, 'HTML'),
(16, 'Which tag is used to define a form in HTML?', '&lt form &gt', '&lt input &gt', '&lt select &gt', '&lt label &gt', 1, 'HTML'),
(17, 'What is the difference between the \"id\" and \"class\" attributes in HTML?', '\"id\" can be used to uniquely identify an element, while \"class\" is used to group similar elements.', '\"class\" can be used to uniquely identify an element, while \"id\" is used to group similar elements.', 'Both \"id\" and \"class\" can be used to uniquely identify an element.', 'Both \"id\" and \"class\" are used to group similar elements.', 1, 'HTML'),
(18, 'Which attribute is used to specify the character encoding for an HTML5 document?', 'charset', 'encoding', 'content', 'type', 1, 'HTML'),
(19, 'What is the correct way to define a custom attribute in HTML5?', '&lt custom attr=\"value\"  &gt', '&lt div data-custom=\"value\" &gt', '&lt div custom=\"value\" &gt', '&lt id=\"custom\" value=\"value\" &gt', 2, 'HTML'),
(20, 'Which of the following is a semantic tag in HTML5?', '&lt div &gt', '&lt span &gt', '&lt section &gt', '&lt p &gt', 3, 'HTML'),
(21, 'Which property is used to set the background color of an element in CSS?', 'color', 'background-color', 'text-color', 'background', 2, 'CSS'),
(22, 'Which of the following is a valid value for the display property in CSS?', 'inline-block', ' inline-table', ' inline-row', 'inline-column', 1, 'CSS'),
(23, 'Which property is used to set the font size of an element in CSS?', 'font-family', 'font-style', 'font-size', ' font-color', 3, 'CSS'),
(24, 'Which of the following selectors selects all elements of a specific type?', '.class', '#id', ' element', ' *', 3, 'CSS'),
(25, 'Which of the following is the correct way to declare a variable in JavaScript?', 'var x;', 'int x;', 'let x;', 'const x;', 1, 'Javascript'),
(26, 'Which of the following is a valid value for the position property in CSS?', 'relative', 'static', ' absolute', 'all of the above', 4, 'CSS'),
(27, 'Which property is used to set the width of an element in CSS?', 'width', 'size', 'length', 'height', 1, 'CSS'),
(28, 'Which of the following selectors selects an element based on its ID?', ' .class', '#id', 'element', '*', 2, 'CSS'),
(29, 'Which property is used to make text bold in CSS?', 'font-weight', 'font-style', ' font-size', 'font-color', 1, 'CSS'),
(30, 'Which of the following is a valid value for the float property in CSS?', ' left', ' right', 'both', 'none', 4, 'CSS'),
(31, 'Which property is used to align text within an element in CSS?', 'align-text', 'text-align', ' justify-text', 'vertical-align', 2, 'CSS'),
(32, 'Which of the following selectors selects all elements with a specific class?', '.class', '#id', ' element', '*', 1, 'CSS'),
(33, 'Which property is used to set the height of an element in CSS?', 'height', 'size', ' length', 'width', 1, 'CSS'),
(34, 'Which of the following is a valid value for the overflow property in CSS?', 'visible', 'hidden', 'scroll', ' all of the above', 4, 'CSS'),
(35, 'Which property is used to add a border to an element in CSS?', 'border', 'border-style', ' border-width', 'all of the above', 1, 'CSS'),
(36, 'Which of the following selectors selects all elements that are descendants of a specific element?', '.class', '#id', ' element', 'element element', 4, 'CSS'),
(37, 'Which property is used to add a shadow effect to an element in CSS?', 'shadow', 'box-shadow', ' text-shadow', ' all of the above', 2, 'CSS'),
(38, 'Which of the following is a valid value for the text-decoration property in CSS?', 'underline', 'overline', 'line-through', ' all of the above', 4, 'CSS'),
(39, 'Which of the following CSS properties sets the top position of an element?', 'z-index', ' position', ' top', 'left', 3, 'CSS'),
(40, 'Which of the following CSS properties sets the opacity of an element?', 'opacity', ' visibility', 'display', 'background-color', 1, 'CSS'),
(41, 'Which of the following CSS properties sets the spacing between lines of text in an element?', 'line-height', ' font-size', ' letter-spacing', ' word-spacing', 1, 'CSS'),
(42, 'what is the full form of PHP?', 'Personal Home Page', 'Pre-Hypertext Processor', 'PHP:Hypertext Preprocessor', 'Private Hyperlink Programming', 3, 'PHP'),
(43, 'Which of the following is a valid PHP variable name?', '$my var', '$my-var', '$my_var', '$my.var', 3, 'PHP'),
(44, 'Which PHP function is used to read a file?', 'readfile()', 'file_get_contents()', 'fopen()', 'read()', 2, 'PHP'),
(45, 'Which PHP function is used to return the length of a string?', 'strlen()', 'lenght()', 'strlength()', 'size()', 1, 'PHP'),
(46, 'What is difference between == and ===in PHP?', 'They are the same thing.', '==compares value and type ,while===only compares value.', '===compares value and type ,while == only compares value', '== and === both only compare value', 2, 'PHP'),
(47, 'Which of the following is not a valid way to start a PHP code block?', '&lt?php', '&lt%', '&lt?', '&lt?=', 2, 'PHP'),
(48, 'Which of the following is used to concatenate strings in PHP?', '+', '.', '&', ',', 2, 'PHP'),
(49, 'Which PHP function is used to connect to a MYSQL database?', 'connect()', 'mysqli_connect()', 'mysql_connect()', 'db_connect()', 2, 'PHP'),
(50, 'Which of the following is used to declare a constant in PHP?', 'define()', 'const()', 'constant()', 'var()', 1, 'PHP'),
(51, 'Which PHP function is used to redirect the user to another page?', 'header()', 'redirect()', 'location()', 'navigate()', 1, 'PHP'),
(52, 'Which of the following is used to create an array in PHP?', 'array()', '[]', 'both a  and b', 'None of the above', 3, 'PHP'),
(53, 'What does the PHP function var_dump() do?', 'It prints out the value of a variable', 'It prints out information about a variable,including  its type and value.', 'It returns the length of a string.', 'It converts a string to a number.', 2, 'PHP'),
(54, 'What is the correct syntax for a for loop in PHP?', 'for(i=0;i<10;i++)', 'for(i<10;i++)', 'for(i=0;i<10)', 'None of these', 1, 'PHP'),
(55, 'Which PHP function is used to get the current timestamp?', 'time()', 'current_time()', 'timestamp()', 'now()', 1, 'PHP'),
(56, 'Which of the following is used to increment a variable in PHP?', '+=', '++', '=', ':', 2, 'PHP'),
(57, 'Which of the following is used to loop through the elements of an array in PHP?', 'for loop', 'while loop', 'foreach loop', 'do-while loop', 3, 'PHP'),
(58, 'Which PHP function is used to remove whitespace from the beginning and end of a string?', 'rtrim()', 'Itrim()', 'trim()', 'strip()', 3, 'PHP'),
(59, 'Which PHP function is used to get information about the browser being used to view the current page?', 'get_browser()', 'browser_info()', 'client_info()', 'get_client()', 1, 'PHP'),
(60, 'Which of the following is used to set a cookie in PHP?', 'set_cookie()', 'cookie_set()', 'setcookie()', 'cookie_setter()', 3, 'PHP'),
(61, 'Which PHP function is used to encode a string to be used in a URL?', 'urlencode()', 'urldecode()', 'encode_url()', 'decode_url()', 1, 'PHP'),
(62, 'Which of the following is primitive data type in JavaScript?', 'Object', 'Number', 'Function', 'Array', 2, 'Javascript'),
(63, 'Which of the following is the correct syntax for creating a function in JavaScript?', 'function myFunction()', 'myFunction()', 'create function myFunction()', 'fuction() myFunction()', 1, 'Javascript'),
(64, 'What is the result of the following code :console.log(2+\"2\");', '4', '\"22\"', '22', 'NaN', 2, 'Javascript'),
(65, 'Which of the following statement is true about JavaScript?', 'It is a compiled language', 'It is a dynamically typed language', 'It is a strongly typed language', 'It can only be used in web browsers', 2, 'Javascript'),
(66, 'Which of the following is not a data type in JavaScript?', 'Number', 'Boolean', 'String', 'Class', 4, 'Javascript'),
(67, 'Which keyword is used to declare a variable in JavaScript?', ' var', 'let', 'const', ' all of the above', 4, 'Javascript'),
(68, 'Which of the following is not a JavaScript loop?', ' for', 'while', 'do-while', ' switch', 4, 'Javascript'),
(69, 'Which function is used to display a message in a pop-up box in JavaScript?', 'prompt()', 'alert()', ' confirm()', ' message()', 2, 'Javascript'),
(70, 'Which of the following is used to access the first element of an array in JavaScript?', ' array[0]', ' array[1]', 'array[-1]', 'array[first]', 1, 'Javascript'),
(71, 'Which of the following is used to access the first element of an array in JavaScript?', ' array[0]', ' array[1]', 'array[-1]', 'array[first]', 1, 'Javascript'),
(72, 'Which operator is used to concatenate strings in JavaScript?', ' +', '-', ' *', ' /', 1, 'Javascript'),
(73, 'Which of the following is a valid way to define a function in JavaScript?', ' function myFunction() {}', 'var myFunction = function() {};', ' both of the above', 'none of the above', 3, 'Javascript'),
(74, 'Which keyword is used to break out of a loop in JavaScript?', ' stop', 'exit', 'break', ' end', 3, 'Javascript'),
(75, 'What is the output of the following code: console.log(typeof null);', ' null', 'undefined', ' object', 'boolean', 3, 'Javascript'),
(76, 'Which of the following is not a comparison operator in JavaScript?', ' ==', ' ===', '!=', '&lt &gt', 4, 'Javascript'),
(77, 'Which function is used to generate a random number in JavaScript?', 'Math.random()', 'Math.randomNumber()', 'random()', ' randomNumber()', 1, 'Javascript'),
(78, 'Which keyword is used to define a class in JavaScript?', ' class', 'struct', 'object', 'None of the above', 1, 'Javascript'),
(79, 'What is the output of the following code: console.log(1 == \"1\");', 'true', 'false', ' undefined', 'null', 1, 'Javascript'),
(80, 'Which of the following is used to add a new element to the end of an array in JavaScript?', ' push()', 'unshift()', 'splice()', ' slice()', 1, 'Javascript'),
(81, 'Which of the following is NOT a built-in data type in Python?', ' List', 'Tuple', 'Dictionary', 'Stack', 4, 'Python'),
(82, 'What is the output of the following code?x = 5print(x * 2)', ' 10', '5*2', '25', ' None of the above', 1, 'Python'),
(83, 'Which of the following is NOT a valid variable name in Python?', 'my_var', 'my-var', 'myVar', '_my_var', 2, 'Python'),
(84, 'What does the \"range()\" function in Python return?', 'A list of numbers starting from 0', 'A list of numbers starting from 1', 'A range object containing a sequence of numbers', 'None of the above', 3, 'Python'),
(85, 'Which of the following is NOT a comparison operator in Python?', '==', '!=', '&lt=', '&gt &lt', 4, 'Python'),
(86, 'Which of the following statements is used to exit a loop in Python?', 'break ', 'exit()', 'continue', 'end()', 1, 'Python'),
(87, 'Which of the following is a method used to remove an item from a list in Python?', 'remove()', 'pop()', 'clear()', 'All of the above', 4, 'Python'),
(88, 'Which of the following is NOT a logical operator in Python?', 'and', 'or ', 'not', 'xor', 4, 'Python'),
(89, 'Which of the following is a built-in function in Python used to sort a list?', 'sort()', 'sorted()', 'reverse()', 'All of the above', 2, 'Python'),
(90, 'Which of the following is a built-in function in Python used to check if a string starts with a specified substring?', 'startswith()', 'endswith()', 'find()', 'All of the above', 1, 'Python'),
(91, 'Which of the following is a built-in function in Python used to convert a string to a list?', 'str()', 'list()', 'tuple()', 'int()', 2, 'Python'),
(92, 'Which of the following is a built-in function in Python used to find the length of a list?', 'len()', 'size()', 'count()', 'All of the above', 1, 'Python'),
(93, 'Which of the following is a built-in function in Python used to reverse the order of items in a list?', 'reverse()', 'sort()', 'sorted()', 'All of the above', 1, 'Python'),
(94, 'Which of the following is a built-in function in Python used to convert a string to all lowercase characters?', 'lower()', 'upper()', 'swapcase()', 'All of the above', 1, 'Python'),
(95, 'Which of the following is a Python keyword?', 'while', 'loop', 'for', 'All of the above', 1, 'Python'),
(96, 'Which of the following is the correct syntax for a for loop in Python?', 'for i in range(10)', 'for i  in range(10);', 'for i range(10)', 'for i in (10)', 2, 'Python'),
(97, 'Which of the following is not a Python data type?', 'float ', 'int', 'char', 'str', 3, 'Python'),
(98, 'Which of the following is the correct way to open a file in Python?', 'file=open(\"example.txt\")', 'file=open(\"example.txt\",\"w\")', 'file=open(\"example.txt\",\"r\")', 'all of the above', 4, 'Python'),
(99, 'Which is the following is a correct way to define a function in Python?', 'function my_function():', 'def my_function():', 'define my_function():', 'func my_function():', 2, 'Python'),
(100, 'Which of the following is a Python module for working with regular expression?', 're', 'regex', 'regexp', 'None of the above', 1, 'Python'),
(101, 'Which of the following is not a primitive data type in Java?', 'boolean', 'int', 'float', 'string', 4, 'Java'),
(102, ' What is java?', 'A database management system', 'An operating system', 'A programming language', 'An application server', 3, 'Java'),
(103, 'What is the difference between an object and a class in java?', 'An object is a data type, while a class is a programming structure ', 'An object is a variable,while a class is a function', 'An object is an instance of a class ,while a class is a blueprint for objects', 'An object is a method ,while a class is a variable', 3, 'Java'),
(104, 'What is the keyword used to declare a class in Java?', 'class', ' public', ' static', ' void', 1, 'Java'),
(105, 'What is the output of the following code:\r\nint a = 5;\r\nint b = 3;\r\nSystem.out.println(a % b);', ' 1', '2', '3', '4', 1, 'Java'),
(106, 'What is the default value of an integer variable in Java?', '0', ' 1', ' -1', 'None of the above', 1, 'Java'),
(107, 'What is the output of the following code:\r\nint x = 10;\r\nif(x > 5 && x < 20) {\r\nSystem.out.println(\"x is greater than 5 and less than 20\");\r\n}', 'x is greater than 5 and less than 20', 'x is greater than 5', ' x is less than 20', ' None of the above', 1, 'Java'),
(108, 'Which of the following is not a valid Java identifier?', 'myVariable', 'my_variable', 'myVariable123', '123myVariable', 4, 'Java'),
(109, 'What is the output of the following code:\r\nfor(int i = 0; i < 5; i++) {\r\nSystem.out.println(i);\r\n}', '0 1 2 3 4', '1 2 3 4 5', ' 0 1 2 3 4 5', 'None of the above', 1, 'Java'),
(110, 'Which of the following statements is true about Java constructors?', 'They can have a return type.', ' They are used to create objects.', ' They can be inherited by the child class.', 'They can be static.', 2, 'Java'),
(111, 'What is the output of the following code:\r\nString str = \"Hello World\";\r\nSystem.out.println(str.length());', '5', '10', '11', '12', 3, 'Java'),
(112, 'Which of the following is not a valid access modifier in Java?', ' public', 'private', 'protected', 'final', 4, 'Java'),
(113, 'Which of the following is a valid declaration of a two-dimensional array in Java?', ' int[][] arr = new int[3,2];', 'int[][] arr = new int[3][2];', ' int[3][2] arr = new int[];', ' None of the above', 2, 'Java'),
(114, 'What is the output of the following code:\r\nString s1 = \"hello\";\r\nString s2 = \"hello\";\r\nSystem.out.println(s1 == s2);', 'true', ' false', ' Compilation error', 'None of the above', 1, 'Java'),
(115, 'Which of the following statements is true about static methods in Java?', 'They can access instance variables directly.', ' They can only access static variables directly.', 'They cannot be overridden.', 'They can only be called on an instance of the class.', 2, 'Java'),
(116, 'Which of the following is not a valid method signature in Java?', 'public void myMethod(int a,String b)', 'public int myMethod(int a,int b)', 'private static void myMethod(int a)', 'public void myMethod()', 3, 'Java'),
(117, 'Which of the following statement is true about Java interface?', 'They can have implementation code.', 'They can have constructors.', 'They can be instantiated.', 'They can extend multiple interfaces.', 4, 'Java'),
(118, 'Which of the following is not a valid Java control statement?', 'if-else', 'for', 'do-while', 'switch-case-default', 4, 'Java'),
(119, 'Which operator is used to perform logical AND operation in Java?', '&', '|', '!', '^', 1, 'Java'),
(120, 'What is the purpose of the \"final\" keyword in Java?', 'To prevent a variable from being modified', 'To indicate the end of a loop', 'To mark a method as private', 'To declare a class as abstract', 1, 'Java');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `quiz`
--
ALTER TABLE `quiz`
  ADD PRIMARY KEY (`question_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `quiz`
--
ALTER TABLE `quiz`
  MODIFY `question_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=121;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
