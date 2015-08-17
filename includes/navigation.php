<?php
  if( ! $subPage) {
    $subPageClass = '';
    $subPageClassHidden = ' hidden';
  } else {
    $subPageClass = 'fixedheader';
    $subPageClassHidden = '';
  }
?>
<header class="container clearfix<?php echo $subPageClassHidden;?>">
  <span class="shownavigation">
    <i class="fa fa-bars"></i>
  </span>
</header>
<header class="<?php echo $subPageClass;?>">
  <div class="container">
    <div class="row">
      <div class="guaveblocks">
        <div class="guaveblocks__square">
          <a class="guaveblocks__link" href="grid.php">Grid</a>
        </div>
        <div class="guaveblocks__square">
          <a class="guaveblocks__link" href="forms.php">Forms</a>
        </div>
        <div class="guaveblocks__square">
          <a class="guaveblocks__link" href="textblocks.php">Textblocks</a>
        </div>
      </div>
    </div>
  </div>
  <span class="hidenavigation<?php echo $subPageClassHidden;?>">
    <i class="fa fa-times"></i>
  </span>
</header>
