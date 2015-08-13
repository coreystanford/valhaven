<?php require '../config.php'; ?>
	
<style>
#puzl_Container *{
	border: none;
	padding: 0;
	margin: 0;
}
#helper{
	position: absolute;
	top: 10px;
	left: 10px;
	color: yellow;
}
#puzl_Container{	
	width: 100%; height: 100%;		
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
}
 #puz1_full img{
	display: block;
} 
#puz1_full{
	z-index: 1000;
	position: absolute;
	top: 189px;
	left: 0;
	opacity: 0;
	-webkit-transition:opacity 3s ease;
	-moz-transition:opacity 3s ease;
	-o-transition:opacity 3s ease;
	-ms-transition:opacity 3s ease;
	transition:opacity 3s ease;
}
#btn_endPuzl{
	display: none;
 	position: fixed;
	bottom: 5%;
	right: 5%;
	z-index: 1000;
}
.puzl_clear{clear: both;}
.puzl_dropbox{
	position: relative;
	height: 131px;
	width: 233px; 
	outline: 1px solid #000;
	background: rgba(55,55,55,0.4);
	float: left;
}
.puzl_Piece{
	position: absolute;
	cursor: move;
	width: 233px;
	height: 131px;	
}	
/*SET THE START POSITIONS FOR THE PUZZLE PIECES*/
#TL{top: 558px;	left: 690px;	transform: rotate(-7deg);}
#TM{top: 590px;	left: 220px;	transform: rotate(12deg);}
#TR{top: 50px;	left: 93px;		transform: rotate(-7deg);}
	
#ML{top: 200px;	left: 700px;	transform: rotate(10deg);}	
#MM{top: 538px;	left: -211px;	transform: rotate(-8deg);}
#MR{top: 353px;	left: -239px;	transform: rotate(-4deg);}

#BL{top: 51px;	left: 411px;	transform: rotate(12deg);}
#BM{top: 127px;	left: -213px;	transform: rotate(-17deg);}
#BR{top: 366px; left: 680px; 	transform: rotate(5deg);}
</style>

	 <!-- -------  NEW CODE START -->

	<div id="popup" class="modal-content clearfix">
		<div id="instructions-1" class="red-bg">
			<h2>Assemble the Article</h2>
			<p>Someone doesn&rsquo;t want you to read this article. Click and drag the pieces to reassemble the puzzle. Double-click pieces to flip them over. Don&rsquo;t forget to read both sides!</p>
			<button type="button" id="next-btn" class="btn">OKAY</button>
		</div>
	</div>

	<!-- -------  NEW CODE END -->

	<div id="puzl_Container">
		<!--Background Image-->
		<img id="puzl_bg" src="<?php echo IMAGE_PATH . 'puzzle/puzzle_bg.jpg' ?>" width="1020" alt="Puzzle Table Top Image" />
					
		<!--Completed Image-->
		<div id="puz1_full">
			<img id="puzl_full_img" src="<?php echo IMAGE_PATH . 'puzzle/puzzleFull.jpg' ?>" alt="The completed puzzle" width="701px" />
		</div>
		
		<!--Puzzle Area and Pieces-->
		<div id="puzl_Area">			
			<!--Puzzle Squares-->
			<div id="b1" class="puzl_dropbox" data-holds="TL" data-holding="none"></div>
			<div id="b2" class="puzl_dropbox" data-holds="TM" data-holding="none"></div>
			<div id="b3" class="puzl_dropbox" data-holds="TR" data-holding="none"></div>
			<div id="b4" class="puzl_dropbox" data-holds="ML" data-holding="none"></div>
			<div id="b5" class="puzl_dropbox" data-holds="MM" data-holding="none"></div>
			<div id="b6" class="puzl_dropbox" data-holds="MR" data-holding="none"></div>
			<div id="b7" class="puzl_dropbox" data-holds="BL" data-holding="none"></div>
			<div id="b8" class="puzl_dropbox" data-holds="BM" data-holding="none"></div>
			<div id="b9" class="puzl_dropbox" data-holds="BR" data-holding="none"></div>
			
			<!-- Puzzle Pieces start position-->
			<img id="TL" class="puzl_Piece" alt="TOP LEFT" width="233"   src="<?php echo IMAGE_PATH . 'puzzle/TL-1.jpg' ?>" />				
			<img id="TR" class="puzl_Piece" alt="TOP RIGHT" width="233" src="<?php echo IMAGE_PATH . 'puzzle/TR-1.jpg' ?>" />
			<img id="BL" class="puzl_Piece" alt="BOTTOM LEFT" width="233" src="<?php echo IMAGE_PATH . 'puzzle/BL-1.jpg' ?>" />
			<img id="BR" class="puzl_Piece" alt="BOTTOM RIGHT" width="233" src="<?php echo IMAGE_PATH . 'puzzle/BR-2.jpg' ?>" />
			<img id="ML" class="puzl_Piece" alt="MIDDLE LEFT" width="233" src="<?php echo IMAGE_PATH . 'puzzle/ML-2.jpg' ?>" />
			<img id="MR" class="puzl_Piece" alt="MIDDLE RIGHT" width="233" src="<?php echo IMAGE_PATH . 'puzzle/MR-1.jpg' ?>" />
			<img id="BM" class="puzl_Piece" alt="BOTTOM MIDDLE" width="233" src="<?php echo IMAGE_PATH . 'puzzle/BM-2.jpg' ?>" />
			<img id="TM" class="puzl_Piece" alt="TOP MIDDLE" width="233" src="<?php echo IMAGE_PATH . 'puzzle/TM-2.jpg' ?>" />
			<img id="MM" class="puzl_Piece" alt="MIDDLE MIDDLE" width="233" src="<?php echo IMAGE_PATH . 'puzzle/MM-1.jpg' ?>" />
			
			<br class="puzl_clear" />
		</div>
		
		<!--Button to end chapter-->
		<button type="button" id="btn_endPuzl" class="btn">You have solved the puzzle!  Click to get out of here</button>
	</div>
<script>
(function puzzleScript(){
	$(initPuzzle);

	var video = document.getElementById('ch_video');
	var modal = document.getElementById('modal');
	var office  = document.getElementById('office');
	var home = document.getElementById('home');
	
	// -------  NEW CODE START

	var popup = document.getElementById('popup');
	var close = document.getElementById('next-btn');

	close.addEventListener('click', function(){
		modal.removeChild(popup);
	});

	// -------  NEW CODE END

	modal.style.zIndex = "1500";

	Local.setInactive( [home] );

	video.addEventListener('ended', function(){

		// remove the events that control video and sliders
		Map.removeVideoEvents();

	});

	//======== PUZZLE CODE ========
		var thisPzlPc;	//ID OF CURRENT PUZZLE PIECE BEING DRAGGED	

	
/**
*WHEN PUZZLE IS SOLVED
*/
	function puzzleSolved(){	
		var puzlFnl = document.getElementById("puz1_full");
		var puzlFnlImg = document.getElementById("puzl_full_img");
		var btnClose = document.getElementById("btn_endPuzl");		
		puzlFnl.style.left = 0;
		puzlFnl.style.top = 0;
		puzlFnl.style.display = "block";
		puzlFnl.style.opacity = 1;
		puzlFnlImg.style.width = "100%";
		btnClose.style.display = "block";		
	}//END puzzleSolved
		
	
/**
*CHECK IF PUZZLE HAS BEEN SOLVED
*/	
	function checkForSolve(){
		//GET IMAGES AND DROP AREAS
		var rightSideUp = false;//FLAG FOR IMAGE SIDES: TRUE = ALL ARTICLE SIDE UP
		var upsidesCounter = 0;//# OF IMAGES THAT HAVE THE ARTICLE SIDE UP
		var correctCounter = 0;//COUNTER FOR CORRECT BOX/IMAGE MATCHES
		var dropboxes = document.getElementsByClassName("puzl_dropbox");//GET ALL DROPBOXES
		var allPzlPcs = document.getElementsByClassName("puzl_Piece");//GET ALL PUZZLE IMAGES
							
		//====CHECK IF ALL IMAGES ARE RIGHT SIDE UP====
		//LOOP THROUGH IMAGES AND CHECK FOR SOURCE
		for(var j = 0; j < allPzlPcs.length; j++){
		//CHECK IF END OF STRING = 1
			var thisImageString = allPzlPcs[j].src.substring(allPzlPcs[j].src.length -6);
			//console.log("thissrc " + allPzlPcs[j].src.substring(allPzlPcs[j].src.length -6));			
			if(thisImageString == "-1.jpg"){
				upsidesCounter++;
			}
		}
			
		//CHECK IF ALL IMAGES ARE CORRECT AND SET FLAG
		if(upsidesCounter == 9){
			rightSideUp = true;
		}else{
			rightSideUp = false;
		}
	
		//====CHECK IF IMAGES ARE IN CORRECT LOCATION====
		//CYCLE THROUGH ALL DROPBOXES
		for(var i = 0; i < dropboxes.length; i++){			
			var checkrrr = "getb" + (i+1);			
			//console.log(checkrrr + " holding:" + dropboxes[i].getAttribute("data-holding"));
						
			//CHECK ALL DROP AREAS FOR CORRECT IMAGE
			if((dropboxes[i].getAttribute("data-holds") == dropboxes[i].getAttribute("data-holding")) && (dropboxes[i].getAttribute("data-holds") == dropboxes[i].getAttribute("data-holding"))){
			correctCounter++;
			}			
		}		
		//console.log("counter: " + correctCounter);		
		//IF BOTH THINGS ARE TRUE, CALL VICTORY FUNCTION
		if(correctCounter == 1 && rightSideUp==true){			
			puzzleSolved();//VICTORY CONDITION MET
		}		
	}//END checkForSolve
	
	
/**
*"FLIP" THE PUZZLE IMAGE TO THE OPPOSITE SIDE
*/
	function flipPiece(){					
		var getSrc = this.src;			
		//GET THE FILENAME WITHOUT THE EXTENSION
		var srcString = getSrc.substring(getSrc.length -8, getSrc.length -4);
		//GET THE FILENAME WITHOUT THE DIFFERENTIATION NUMBER
		var srcSub = getSrc.substring(getSrc.length -8, getSrc.length -6);		
		
		//SET THE IMAGE SOURCE TO THE OPPOSITE SIDE
		if(srcString.indexOf("2") !== -1){
			this.src = "../../images/puzzle/" + srcSub + "-1.jpg";			
		}else{
			this.src = "../../images/puzzle/" + srcSub + "-2.jpg";			
		}	
					
		checkForSolve();//DID THIS SOLVE THE PUZZLE?						
	}//END flipPiece		

	
/**
*DRAG A PUZZLE PIECE
*/	
	function dragPzlPc(ev){		
		thisPzlPc = ev.target.id;		
	}	

	
/**
*BRING OUT MAP AND NOTEBOOK TO END CHAPTER
*/	
//function finished(){alert("map goes here");}
	function puzlEnd(){
		finished();
	}
	
	
/**
*MAIN INITIALIZING FUNCTION	
*/
	function initPuzzle(){	
		var puzlAr = document.getElementById("puzl_Area");
		var puzlFnlHid = document.getElementById("puz1_full");
		var btnCloseStart = document.getElementById("btn_endPuzl");
		puzlAreaX = puzlAr.offsetLeft + "px";		
		puzlFnlHid.style.left = puzlAreaX;
		btnCloseStart.onclick = puzlEnd;
		
		//SET DBL CLICK EVENTS TO CHANGE PIECE SIDE	
		$('.puzl_Piece').dblclick(flipPiece);
		
		//MAKE PIECES DRAGABLE AND SNAP TO DESTINATION BOXES
		$(".puzl_Piece").draggable({
			"snap" : '.puzl_dropbox'
		});
		
		//MAKE DESTINATION BOXES DROPPABLE
		$('.puzl_dropbox').droppable();
		
		//SET ONDRAGSTART/ONDROP LISTENERS
		$('.puzl_Piece').on("dragstart", dragPzlPc);		
		
		$('.puzl_dropbox').on("drop", function(event){
			event.preventDefault();	
			event.target.setAttribute("data-holding", thisPzlPc);						
			
			checkForSolve();//DID THIS SOLVE THE PUZZLE?
		});
		
		
		//STRAIGHTEN PIECE ONCE IT IS CLICKED ON
		$(".puzl_Piece").on("mousedown", function(){
			$(this).css("transform", "rotate(0deg)");
		});			
		
	}//END initPuzzle	
	
	function finished(){
		Sliders.showMap();
		modal.style["-webkit-transition-duration"] = "0.5s";
		modal.style["-moz-transition-duration"] = "0.5s";
		modal.style["-o-transition-duration"] = "0.5s";
		modal.style["transition-duration"] = "0.5s";
		modal.style.left = "30%";
		Sliders.hideNotebook();
		// add a note and play audio if the note is absent
		Local.addNoteIfAbsent("office", "Archive - Jones also worked at Botanical Research Facility. Poisoned his family, but with what??", true, office);
		// show office locaition on map and open route
		home.setAttribute('class', '');
		home.addEventListener('click', Map.route);
	}

}());
</script>