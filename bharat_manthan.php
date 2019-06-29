<?php
    define("TITLE", "भारत मंथन");
    include('includes/header.php');
    
    
?>
<!--header php -->
	<img src="images/demoposter.jpg">
	<div class="container">
		<div id="aboutNN">
			<span class="headingAbout">
				भारत मंथन क्या है ? 
			</span>
			<span class="descriptionAbout">
				भारत मंथन एक प्रश्नोत्तरी (क्विज़) प्रतियोगिता है। इसका मुख्य उद्देश्य भारत के गौरवशाली इतिहास और सामयिक विषयों से आज की पीढ़ी को अवगत करना एवं उनके सामान्य ज्ञान में वृद्धि करना है।
			</span>
		</div>

		<div class="cards-list">

  			<div class="card card1">
  				<div class="card_image"> 
  					
  				</div>
 				<div class="card_title title-white">
 					<span class="span1">
 						
   						अधिक जानकारी
   					</span>
   					<span class="span2">
   						दिनांक - 14/09/19<br>
   						समय - 10:00 am<br>
   						स्थान - NTB<br>
   					</span>
 				</div>
			</div>

  			<div class="card 2">
  				<div class="card_image">
    				
    			</div>
 				<div class="card_title title-white">
   				 	<span class="span1">
   						समन्वयक
   					</span>
   					<span class="span2">
   						ऋषिता जैन<a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
   						शिवांश पांडेय <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br> 
   						यश परमार <a href="#"><i class="fa fa-facebook icon"></i></a> <a href="#"><i class="fa fa-instagram"></i></a><br>
   					</span>
  				</div>
			</div>

			<div class="card 3">
 				<div class="card_image">
   					
  				</div>
  				<div class="card_title">
    				<span class="span1">
    					
   						पुरस्कार
   					</span>
   					<span class="span2">
   						प्रथम पुरस्कार - 2500<br>
						द्वितीय पुरस्कार - 1500<br>
						तृतीया पुरस्कार - 800
   					</span>
 				</div>
			</div>

		</div>

		<div class="vivran">
		<ul class="nav nav-tabs menu">
			<li class="active"><a data-toggle="tab" href="#topics">प्रथम चरण</a></li>
    		<li><a data-toggle="tab" href="#menu1">द्वितीय चरण</a></li>
                <li><a data-toggle="tab" href="#menu2">तृतीय चरण</a></li>
     	</ul>

    	<div class="tab-content">
    		<div id="topics" class="tab-pane fade in active contentOfVivran">
    			<br>
				1. सभी प्रतिभागियों को दो-दो के दलों में वसतिनिष्ठ प्रश्नों की लिखित परीक्षा देनी होगी।<br>
2. द्वितीय चरण हेतु अंकों के आधार पर 8 समूह चयनित किये जायेंगे।<br>
3. यह चरण ऑनलाइन होगा।   <br>
			</div>
    		<div id="menu1" class="tab-pane fade contentOfVivran">
    			<br>
    			
1. यह बाजार आधारित चरण होगा।<br>
2. अंकों के आधार पर ५ समूह अगले चरण के लिए चयनित किये जायेंगे।<br>
3. इस चरण में काम से काम २० प्रश्न पूछे जायेंगे।<br>
4. जो टीम पहले बाजार दबाएगी उसको उत्तर देने का अवसर पहले मिलेगा और उस टीम के द्वारा प्रश्न का सही उत्तर देने पर उस टीम को १० अंक दिए जायेंगे और गलत उत्तर देने पर ५ अंक काटे जायेंगे।
    
			</div>
      <div id="menu2" class="tab-pane fade contentOfVivran">
          <br>
          1. यह चरण प्रतियोगिता का सबसे अहम चरण होगा, जिससे ५ समूह प्रतिभाग करेंगे।  इस चरण में दृश्य -श्रव्य प्रश्नों, १ मिनट तक निरंतर प्रश्नों की बौछार से लेकर सभी तरह के प्रश्न होंगे। <br>
2. स्मरण क्षमता परखने के लिए पटल स्क्रीन पर १० सेकंड में १० चित्र दिखाए जायेंगे, फिर दलों को ३० सेकंड के समय में अधिकतम चित्रों के नाम लिखने होंगे। यही चरण विजेताओं की घोषणा करने में मददगार होगा।    
      </div>
  		</div>
  		</div>
	</div>
<br><br><br>
<?php
    include('includes/footer.php');
?>
<!-- footer -->



<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/resize.js"></script>

<script type="text/javascript">
    function addCss(fileName) {

        var head = document.head;
        var link = document.createElement("link");

        link.type = "text/css";
        link.rel = "stylesheet";
        link.href = fileName;

        head.appendChild(link);
    }

    addCss('css/NNstyle.css');

</script>



</body>


</html>