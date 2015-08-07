<?php require '../config.php'; ?>
	
<style>
#puzl_Container *{
	border: none;
	padding: 0;
	margin: 0;
}

#puzl_Container{
	width: 1020px;
	margin: 0 auto;
	position: relative;	
	background: #664D00;
	padding: 30px 50px;
	z-index: 10000;
}
#puzl_Area{	
	width: 95%;	
	margin: 0 auto;
	position: relative;
}

.puzl_dropbox{
	width: 33.12629%;
}

.puzl_clear{
	clear: both;
	}
.puzl_Piece{
	position: absolute;
	width: 33.12629%;
	cursor: move;
}	

#TL{top: 20px;	left: -18%;	transform: rotate(17deg);}
#TM{top: 220px;	left: -15%;	transform: rotate(-12deg);}
#TR{top: -4px;	left: 78%;	transform: rotate(17deg);}
	
#ML{top: 80px;	left: 89%;	transform: rotate(10deg);}	
#MM{top: 300px;	left: 78%;	transform: rotate(-22deg);}
#MR{top: 294px;	left: -3%;	transform: rotate(-15deg);}

#BL{top: 30%;	left: 80%;	transform: rotate(-17deg);}
#BM{top: 2%;	left: -20%;	transform: rotate(-37deg);}
#BR{top: 10%; left: 85%; transform: rotate(25deg);}

</style>
	<div id="puzl_Container">
		
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
	var flipPiece = function flipPiece(){		
			var getSrc = this.src;
			
			//GET THE FILENAME WITHOUT THE EXTENSION
			var srcString = getSrc.substring(getSrc.length -8, getSrc.length -4);
			
			//GET THE FILENAME WITHOUT THE DIFFERENTIATION NUMBER
			var srcSub = getSrc.substring(getSrc.length -8, getSrc.length -6);		
			
			//SET THE SOURCE TO THE OPPOSITE SIDE
			if(srcString.indexOf("2") !== -1){
				this.src = "puzzleImages/" + srcSub + "-1.jpg";			
			}else{
				this.src = "puzzleImages/" + srcSub + "-2.jpg";			
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