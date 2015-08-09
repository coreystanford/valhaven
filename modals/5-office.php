<?php require '../config.php'; ?>
	
<style>
#puzl_Container *{
	border: none;
	padding: 0;
	margin: 0;
}
/* img{
	width: 113px;
	height: auto;
	border: none;
} */
#helper{
	position: absolute;
	top: 10px;
	left: 10px;
	color: yellow;
}
#puzl_Container{
	/* width: 1020px;   ========================  1367px / 769px MOCKUP MEASUREMENTS  BG IMAGE IS 1280 X 720   ====*/
	width: 100%; height: 100%;	
	/* width: 1367px;
	height: 769px;*/
	margin: 0 auto;
	padding: 0;	
	position: relative;	
	background: #664D00;
}
#puzl_bg{
	position: absolute;
	top: 0;
	left:0;
	width: 100%;
	height: 100%;
}
#puzl_Area{
	margin: 0 auto;
	position: relative;
	padding: 189px 0;
	width: 701px;
	height: 393px;	
	/*  width: 51.28017556693489%; /* 701 / 1367 */
	  /*height: 51.10533159947984%;393 / 769 */	
	/*padding: 24.577373211963588%;  189 / 769 */	
}
.puzl_clear{clear: both;}
.puzl_dropbox{
	position: relative;
	height: 131px;
	width: 233px; 
	outline: 1px solid #000;
	background: rgba(55,55,55,0.4);
	float: left;
	/* width: 17.044623262618874%; 233 / 1367 */
	/*height: 17%;  131 / 769 */	
	/* height: 33%;
	width: 33%;*/
	/*	height: 180px; */	
	/* width: 113px;
	height: 167px; */
}
.puzl_Piece{
	position: absolute;
	cursor: move;
	width: 233px;
	height: 131px;	
	/* width: 33.12629%; */	
	  /* width: 17.044623262618874%;233 / 1367 */
	/*height: 17.035110533159947%;  131 / 769 */
	/* height: 33%;
	width: 33%;*/	 
}	

/*SET THE START POSITIONS FOR THE PUZZLE PIECES*/
#TL{top: 558px;	left: 690px;	transform: rotate(-7deg);}
#TM{top: 590px;	left: 220px;	transform: rotate(12deg);}
#TR{top: 50px;	left: 93px;	transform: rotate(-7deg);}
	
#ML{top: 200px;	left: 700px;	transform: rotate(10deg);}	
#MM{top: 538px;	left: -211px;	transform: rotate(-8deg);}
#MR{top: 353px;	left: -239px;	transform: rotate(-4deg);}

#BL{top: 51px;	left: 411px;	transform: rotate(12deg);}
#BM{top: 127px;	left: -213px;	transform: rotate(-17deg);}
#BR{top: 366px; left: 680px; transform: rotate(5deg);}

</style>
	<div id="puzl_Container">
		<img id="puzl_bg" src="<?php echo IMAGE_PATH . 'puzzle/puzzle_bg.jpg' ?>" width="1020" alt="Puzzle Table Top Image" />
		<div id="puzl_Area">				
			<!--Puzzle Squares-->
			<div id="b1" class="puzl_dropbox"></div>
			<div id="b2" class="puzl_dropbox"></div>
			<div id="b3" class="puzl_dropbox"></div>
			<div id="b4" class="puzl_dropbox"></div>
			<div id="b5" class="puzl_dropbox"></div>
			<div id="b6" class="puzl_dropbox"></div>
			<div id="b7" class="puzl_dropbox"></div>
			<div id="b8" class="puzl_dropbox"></div>
			<div id="b9" class="puzl_dropbox"></div>
			
			<!-- Puzzle Pieces start position-->
			<img id="TL" class="puzl_Piece" alt="TOP LEFT" width="200"   src="<?php echo IMAGE_PATH . 'puzzle/TL-1.jpg' ?>" />				
			<img id="TR" class="puzl_Piece" alt="TOP RIGHT" width="200" src="<?php echo IMAGE_PATH . 'puzzle/TR-1.jpg' ?>" />
			<img id="BL" class="puzl_Piece" alt="BOTTOM LEFT" width="200" src="<?php echo IMAGE_PATH . 'puzzle/BL-1.jpg' ?>" />
			<img id="BR" class="puzl_Piece" alt="BOTTOM RIGHT" width="200" src="<?php echo IMAGE_PATH . 'puzzle/BR-2.jpg' ?>" />
			<img id="ML" class="puzl_Piece" alt="MIDDLE LEFT" width="200" src="<?php echo IMAGE_PATH . 'puzzle/ML-2.jpg' ?>" />
			<img id="MR" class="puzl_Piece" alt="MIDDLE RIGHT" width="200" src="<?php echo IMAGE_PATH . 'puzzle/MR-1.jpg' ?>" />
			<img id="BM" class="puzl_Piece" alt="BOTTOM MIDDLE" width="200" src="<?php echo IMAGE_PATH . 'puzzle/BM-2.jpg' ?>" />
			<img id="TM" class="puzl_Piece" alt="TOP MIDDLE" width="200" src="<?php echo IMAGE_PATH . 'puzzle/TM-2.jpg' ?>" />
			<img id="MM" class="puzl_Piece" alt="MIDDLE MIDDLE" width="200" src="<?php echo IMAGE_PATH . 'puzzle/MM-1.jpg' ?>" />
			
			<br class="puzl_clear" />
		</div>
	</div>
<script>
(function puzzleScript(){
	$(initPuzzle);

	//"FLIP" THE PUZZLE IMAGE TO THE OPPOSITE SIDE
	function flipPiece(){		
		var getSrc = this.src;
		//GET THE FILENAME WITHOUT THE EXTENSION
		var srcString = getSrc.substring(getSrc.length -8, getSrc.length -4);
		
		//GET THE FILENAME WITHOUT THE DIFFERENTIATION NUMBER
		var srcSub = getSrc.substring(getSrc.length -8, getSrc.length -6);		
		console.log(this.src);
		//SET THE SOURCE TO THE OPPOSITE SIDE
		if(srcString.indexOf("2") !== -1){
			this.src = "../../images/puzzle/" + srcSub + "-1.jpg";			
		}else{
			this.src = "../../images/puzzle/" + srcSub + "-2.jpg";	
		}
	}
		
	function initPuzzle(){	
		//SET DBL CLICK EVENTS TO CHANGE PIECE SIDE	
		$('.puzl_Piece').dblclick(flipPiece);
			
		//MAKE PIECES DRAGABLE AND SNAP TO DESTINATION BOXES
		$(".puzl_Piece").draggable({
			"snap" : '.puzl_dropbox'
		});
		
		//STRAIGHTEN PIECE ONCE IT IS CLICKED ON
		$(".puzl_Piece").on("mousedown", function(){
			$(this).css("transform", "rotate(0deg)");
		});	
		
		//MAKE DESTINATION BOXES DROPPABLE
		$('.puzl_dropbox').droppable();
	}	
}());
</script>