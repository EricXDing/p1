<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">

<head>
<link rel="stylesheet" type="text/css" href="mystyle.css">
</head>


<body>
<h1>Eric Ding</h1>
<img src = "ericding.jpg" alt = "Eric Ding" width = 20%></br><hr>


I am a law school student at Northwestern Law School (scheduled to be barred next year), and I really enjoy the study of law. However, I always had a interest in coding. My closest friend since childhood is a comptuer programmer, and he had a profound influenced on my interest in technology. 

<br>As a matter of fact, I think certain aspects of law (especially corporate law) is very similar to computer programming. A legal contract is essentially a program. Different &#34;functions&#34; need to be defined first in the definition section, and then programmed to interact with each other to achieve the desired effect. 

<br>I have never studied computer science formally until this summer. While my coding experience is somewhat limited, I understand the importance of seeking outside references. I have programmed some elementary programs, built some static and dynamic websites by using Wordpress, wired and coded an amateur electronic device using Arduino. I did those by watching a lot of youtube videos and visiting forums. While I think I am currently raw with some of the prerequists, I think I can handle this, and I am prepared to put in much effort. 

<br>I really look forward to continue studying in the HES&#39;s software enginnering program. I want to challenge myself, and I look forward to this class!
<hr>
</body>
</html> 



<?php 
$quote1 = "Ask Not What Your Country Can Do For You. - John F. Kennedy";
$quote2 = "We the people tell the government what to do, it doesn&#39;t tell us. - Ronald Reagan";
$quote3 = "We must teach our children to resolve their conflicts with words, not weapons. - Bill Clinton";
$quote4 = "The advancement and diffusion of knowledge is the only guardian of true liberty. - James Madison";
$quote5 = "Economy is idealism in its most practical form. - Calvin Coolidge";
$quote6 = "Think about every problem, every challenge, we face. The solution to each starts with education. - George H.W. Bush";

echo 'Quote</br>';
$QuoteNum = rand(0,5);

if($QuoteNum < 1){
echo $quote1;
}

elseif($QuoteNum < 2){
echo $quote2;
}

elseif($QuoteNum < 3){
echo $quote3;
}


elseif($QuoteNum < 4){
echo $quote4;
}

elseif($QuoteNum < 5){
echo $quote5;
}

elseif($QuoteNum < 6){
echo $quote6;
}

?>


