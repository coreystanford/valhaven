<?php require '../config.php'; ?>

<script data-main="../../js/resources/maze/maze" src="../../js/resources/maze/lib/require.js"></script>

<div id="popup" class="modal-content clearfix">
  <div id="instructions-1" class="red-bg">
    <h2>Get to the Library</h2>
    <p>Quickly, evade the guards and reach the library!</p>
    <button type="button" id="ssBtn" class="btn">GO!</button>
  </div>
</div>

<div id="restart" class="modal-content clearfix hide">
  <div id="instructions-1" class="red-bg">
    <h2>Restart</h2>
    <p>When you're ready, restart the game!</p>
    <button type="button" id="rBtn" class="btn">GO!</button>
  </div>
</div>

<div id="finished" class="modal-content clearfix hide">
  <div id="instructions-1" class="red-bg">
    <h2>Finished</h2>
    <p>When you're ready, restart the game!</p>
    <button type="button" id="fBtn" class="btn" class="btn">GO!</button>
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

