<?php
  function SUS($question, $numQuestion) {
?>
    <div class="row">
      <div class="col-sm-6">
        <p><?php echo $question ?></p>
      </div>
      <div class="col-sm-6">
        <label class="radio-inline"><input type="radio" name="<?php echo $numQuestion ?>" value="1">1</label>
        <label class="radio-inline"><input type="radio" name="<?php echo $numQuestion ?>" value="2">2</label>
        <label class="radio-inline"><input type="radio" name="<?php echo $numQuestion ?>" value="3">3</label>
        <label class="radio-inline"><input type="radio" name="<?php echo $numQuestion ?>" value="4">4</label>
        <label class="radio-inline"><input type="radio" name="<?php echo $numQuestion ?>" value="5">5</label>
      </div>
    </div>
<?php
  }
?>
