<nav class="navbar navbar-default">
  <!-- <div class="container-fluid"> -->
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <?php if($this->session->userdata('role') != '01' || !$this->session->userdata('username')){ ?>
      <?=anchor(base_url(), 'Majoo Teknologi Indonesia', ['class'=>'navbar-brand'])?>
      <?php }else{ ?>
      <?=anchor(base_url('portal'), 'Majoo Teknologi Indonesia', ['class'=>'navbar-brand'])?>
      <?php } ?>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            
      <ul class="nav navbar-nav navbar-right">
        <?php if($this->session->userdata('role') != '01' || !$this->session->userdata('username')){ ?>
        <li><?php echo anchor(base_url(), 'Home');?></li>
        <?php }else{ ?>
        <li><?php echo anchor(base_url('portal'), 'Home');?></li>
        <li><?php echo anchor(base_url('invoice'), 'Invoice');?></li>
        <?php } ?>
        <li>
            <?php
                $text_cart_url  = '<span class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span>';
                // $text_cart_url .= ' Shopping Cart: '. $this->cart->total_items() .' items';
            ?>
            <?=anchor('welcome/cart', $text_cart_url)?>
        </li>
        <?php if($this->session->userdata('username')) { ?>
            <li><div style="line-height:50px;">You Are : <?=$this->session->userdata('username')?></div></li>
            <li><?php echo anchor('logout', 'Logout');?></li>
        <?php } else { ?>
            <li><?php echo anchor('login', 'Login');?></li>
        <?php } ?>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>