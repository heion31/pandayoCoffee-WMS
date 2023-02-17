
<style>
  #system-cover{
    background:brown;
    width:100%;
    height:45em;
    object-fit:cover;
    object-position:center center;
  }
</style>

<h1 class="">Welcome, <?php echo $_settings->userdata('firstname')." ".$_settings->userdata('lastname') ?>!</h1>

<hr>

<div class="row">
  <!-- TOTAL USERS -->
  <div class="col-12 col-sm-4 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-light elevation-1"><i class="fas fa-user-alt" style="font-size:60px"></i></span>
        <div class="info-box-content">
          <a href="<?php echo base_url ?>admin/?page=user/list" style="color:black"> 
            <span class="info-box-text">Users</span>
            <span class="info-box-number text-right h5">
              <?php 
                  $user = $conn->query("SELECT * FROM users_list")->num_rows;
                  echo format_num($user);
              ?>
              </span>
          </a>
        </div>
    </div>
  </div>
 
  <!-- TOTAL CATEGORIES -->
  <div class="col-12 col-sm-4 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-gradient-light elevation-1"><i class="fas fa-th-list" style="font-size:60px; weigth:60px;"></i></span>
        <div class="info-box-content">
          <a href="<?php echo base_url ?>admin/?page=categories/index" style="color:black" > 
            <span class="info-box-text">Categories</span>
            <span class="info-box-number text-right h5">
              <?php 
                $category = $conn->query("SELECT * FROM category_list where delete_flag = 0 and `status` = 1")->num_rows;
                echo format_num($category);
              ?>
            </span>
          </a> 
        </div>
    </div>
  </div>
 
  <!-- TOTAL ITEMS -->
  <div class="col-12 col-sm-4 col-md-3">
    <div class="info-box">
      <span class="info-box-icon bg-white elevation-1"><i class="fas fa-cubes" style="font-size:60px"></i></span>
        <div class="info-box-content">
          <a href="<?php echo base_url ?>admin/?page=items/index" style="color:black"> 
            <span class="info-box-text">Items</b></span>
            <span class="info-box-number text-right  h5">
              <?php 
                $items = $conn->query("SELECT id FROM item_list where delete_flag = 0 and `status` = 1")->num_rows;
                echo format_num($items);
              ?>
            </span>
          </a>
        </div>
    </div>
  </div>

</div>

<!-- IMAGE -->
<div class="container-fluid text-center">
  <img src="<?= validate_image($_settings->info('cover')) ?>" alt="system-cover" id="system-cover" class="img-fluid">
</div>
