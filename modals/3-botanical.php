<?php require '../config.php'; ?>

<script data-main="../../js/resources/maze/maze" src="../../js/resources/maze/lib/require.js"></script>

<div id="popup" class="modal-content clearfix">
  <div id="instructions-1" class="red-bg">
    <h2>Get to the Library</h2>
    <p>If you want to get to the library to do some research, you have to get past the guards.  Use your keyboard arrow keys to navigate the maze.  If you get caught, you’ll have to start all over again.</p>
    <button type="button" id="ssBtn" class="btn">GO</button>
  </div>
</div>

<div id="restart" class="modal-content clearfix hide">
  <div id="instructions-1" class="red-bg">
    <h2>You’ve been caught!</h2>
    <p>You have another chance to avoid the guards and make it to the safety of the library.  Good luck.</p>
    <button type="button" id="rBtn" class="btn">GO</button>
  </div>
</div>

<div id="finished" class="modal-content clearfix hide">
  <div id="instructions-1" class="red-bg">
    <h2>Success!</h2>
    <p>You outsmarted the guards and have made it to the library.</p>
    <button type="button" id="fBtn" class="btn" class="btn">ENTER LIBRARY</button>
  </div>
</div>

<audio loop class="hide" id="mazeBg">
  <source src="<?php echo AUDIO_PATH; ?>maze-bg.mp3" type="audio/mpeg">
  <source src="<?php echo AUDIO_PATH; ?>maze-bg.wav" type="audio/wav">
  Your browser does not support the audio element.
</audio>

<audio class="hide" id="mazeCaught">
  <source src="<?php echo AUDIO_PATH; ?>caught.mp3" type="audio/mpeg">
  <source src="<?php echo AUDIO_PATH; ?>caught.wav" type="audio/wav">
  Your browser does not support the audio element.
</audio>

