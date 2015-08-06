<?php
  if($subPage) {
    $subPageClass = 'container container--toggle';
  } else {
    $subPageClass = 'container';
  }
?>
<header class="container clearfix">
  <span class="shownavigation">
    <i class="fa fa-bars"></i>
  </span>
</header>
<header class="fixedheader">
  <div class="container">
    <div class="row">
      <div class="guaveblocks">
        <div class="guaveblocks__square">
          <a class="guaveblocks__link" href="forms.php">Forms</a>
        </div>
        <div class="guaveblocks__square">
          <a class="guaveblocks__link" href="textblocks.php">Textblocks</a>
        </div>
      </div>
    </div>
  </div>
  <span class="hidenavigation">
    <i class="fa fa-times"></i>
  </span>
</header>
