
<?php 

error_reporting(0);
?>
<!-- /.Navbar  Static Side -->

<style type="text/css">
    * {
  box-sizing: border-box;
}
body {
  font: 14px/1 Arial, sans-serif;
}
table {
  border-collapse: collapse;
  background: white;
  table-layout: fixed;
  width: 100%;
}
th, td {
  padding: 8px 16px;
  border: 1px solid #ddd;
  width: 160px;
  overflow: hidden;
  text-overflow: ellipsis;
  white-space: nowrap;
}

.pane {
  background: #eee;
}
.pane-hScroll {
  overflow: auto;
  width: 100%;
  /*background: green;*/
}
.pane-vScroll {
  overflow-y: auto;
  overflow-x: hidden;
  height: 500px;
  /*background: red;*/
}

/**/
/*.headcol {
  position: sticky;
  width: 5em;
  left: 0;
  top: auto;
  border-top-width: 1px;
 
  margin-top: -1px;
  background-color: pink;
  
}
.setfix {

 
}*/
</style>



<div class="control-sidebar-bg"></div>
<!-- Page Content -->
<div id="page-wrapper">
    <!-- main content -->
    <div class="content">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="header-icon">
                <i class="pe-7s-box1"></i>
            </div>
            <div class="header-title">
                <h1>View Product</h1>

                <ol class="breadcrumb">
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>
                    <li><a href="<?php echo base_url() ?>"><i class="pe-7s-home"></i> Home</a></li>

                    <li class="active">View Product</li>
                </ol>
            </div>
        </div>
        <!-- /. Content Header (Page header) -->

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <br>
                    <form method="post" action="">
                        <input type="hidden" name="distribution_sort" value="<?php echo $distribution['dsr_code']; ?>">
                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-md-3">Distribution Name</label>
                                <div class="col-md-9">
                                    <input type="text" name="" class="form-control" value="<?php echo $distribution['scm_name'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-3">Distribution Code</label>
                                <div class="col-md-9">
                                    <input type="text" name="" class="form-control" value="<?php echo $distribution['dsr_code'] ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6">
                                <label class="col-md-3">Station</label>
                                <div class="col-md-9">
                                    <input type="text" name="" class="form-control" value="<?php echo $distribution['station'] ?>" readonly>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="col-md-3">No of Installment</label>
                                <div class="col-md-9">
                                    <select class="form-control" name="column" value="<?php echo $column ?>">
                                        <option>Select</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                    <script type="text/javascript">
                                        $('[name="column"]').val(<?php echo $column ?>)
                                    </script>
                                </div>
                            </div>
                        </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label class="col-md-3"></label>
                                    <div class="col-md-9 pull-right">
                                        <button class="btn btn-info pull-right">Submit</button>
                                    </div>
                                </div>
                            </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="panel-title">
                            <h4>View Product</h4>

                            <?php if (isset($column)): ?>
                                
                                               <div class="col-md-2 pull-right">
                                                <fieldset>
                                                    
                                                    
                                                    <div class="checkbox checkbox-primary">
                                                        <input id="zero_qty" type="checkbox" >
                                                        <label for="zero_qty">Click to 0 Order</label>
                                                    </div>
                                                    
                                                </fieldset>
                                            </div>
                                            
                        
                            <?php endif ?>

                        </div>
                    </div>

                    <form action="<?php echo base_url(); ?>orders/submit_data_order" method="post">
                    <div class="panel-body">
                        <!-- <p>Both tables use 'table-layout: fixed' to address column sizes. Example 2 does not truncate text as desired.
                        <h3>Example 1: Two-Table Structure</h3> -->
                        <div class="pane pane--table1">
                          <div class="pane-hScroll">

                            <table>
                                <div class="row " style="background-color: #fff;">
                               
                                    <div class="col-sm-12">
                                        <div class="row pull-right">
                                            
                                            <div class="col-md-12">
                                            <input type="text" name="" class="form-control" id="search" placeholder="Search..." >
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                        </div>
                                    </div>
                            </div
                              <thead>
                                <th class="headcol" style="width: 261px !important;">Team</th>
                                <th class="headcol" style="width: 261px !important;">Category</th>
                                <th class="headcol" style="width: 261px !important;">Products</th>
                                <th class="long">IMS Pack Code</th>
                                <?php for ($i = 3; $i > 0; $i--){?>
                                <th class="long">
                                    <?php echo $a =  date('M', strtotime("-".$i." month", strtotime(date('Y-m-01'))));  ?>
                                </th>
                                <?php } ?>
                                <th class="long">Month Average Sale</th>
                                <th class="long">Intransit</th>
                                <th class="long">Closing</th>
                                <th class="long">Closing Stock</th>
                                <th class="long">Requirement</th>
                                <?php 
                                $num = 1;
                                    for ($i=0; $i < $num_order; $i++) { 
                                        echo '<th class="long">Order '.($i+1).'</th>';
                                        $num++;
                                    }
                                    if (isset($column)) {
                                        echo '<th class="long">Order '.$num.'</th>';
                                    }
                                ?>
                                <th class="long">Order Quantity</th>
                                <?php 
                                    if ($old_orders == 1) {
                                        echo '<th class="long">Remaning</th><th class="long">Current Sale</th><th class="long">Current Closing</th><th class="long">Current Intransit</th><th class="long">Pending</th>';
                                    }
                                ?>
                                <th class="long">Growth</th>
                                <th class="long">Packs Carton</th>
                                <th class="long">TP</th>
                                <th class="long">T.P Without Tax</th>
                                <th class="long">Discounted Price Without Tax</th>
                                <th class="long">Sale Tax</th>
                                <th class="long">DP</th>
                                <th class="long">Priority</th>
                              </thead>
                            </table>

                            <div class="pane-vScroll">
                              <table id="table" name="table">
                                <thead>
                                <?php 
                                            $con = 0;
                                            $tp = array();
                                            $dp = array();
                                            $first = array();
                                            $first_np = array();
                                            $secound = array();
                                            $secound_np = array();
                                            $third = array();
                                            $third_np = array();
                                            $avg_total = array();
                                            $avg_total_np = array();
                                            $intransit_total = array();
                                            $intransit_total_np = array();
                                            $closing_total = array();
                                            $closing_total_np = array();
                                            $closing_stock_total = array();
                                            $closing_stock_total_np = array();
                                            $requirement = array();
                                            $requirement_np = array();
                                            $order_total = array();
                                            $order_total_np = array();
                                            $remaning_total = array();
                                            $remaning_total_np = array();
                                            $pid_change=0;
                                            foreach($product_data_sort as $products_detail){
                                            $pid_change++; 
                                                $con++;
                                                $sale = explode(",",$products_detail['sale']);
                                                $month = explode(",",$products_detail['month']);
                                                $avg_sum = $products_detail['avg'];
                                                if (!empty($products_detail['closing_stock'])) {
                                                    $closing_stock = $products_detail['closing_stock'];
                                                }
                                                else{
                                                    $closing_stock = $products_detail['closing'] - $products_detail['Intransit'];
                                                }
                                                $res = ($avg_sum * 2.5) - $closing_stock; 
                                                if ($products_detail['pack_carton'] != 0) {
                                                    $carton = $res / $products_detail['pack_carton'];
                                                    $nres = round($carton) * $products_detail['pack_carton'];
                                                }
                                                else{
                                                    $nres = round($res);
                                                }
                                                if (isset($column)) {
                                                    $qty = $nres; 
                                                    if ($old_orders == 1) {
                                                        $orders = explode(',', $products_detail['orders']);
                                                        $qty = $qty - array_sum($orders);
                                                    }
                                                    $qty = round($qty / $column);
                                                    if ($qty < 1) {
                                                        $qty = 0;
                                                    }
                                                    if ($qty > 0 && $products_detail['pack_carton'] > 0) {
                                                        $qty_carton = $qty / $products_detail['pack_carton'];
                                                        $qty = round($qty_carton) * $products_detail['pack_carton'];
                                                    }
                                                    
                                                }
                                        ?>
                                  <tr>
                                      <td class="setfix" style="width: 261px !important;">
                                                <?php echo $products_detail['team']; ?>
                                            </td> 
                                            <td class="setfix" style="width: 261px !important;">
                                                <?php echo $products_detail['Category_Name']; ?>
                                            </td> 
                                            <td class="setfix" style="width: 261px !important;">
                                                <?php echo $products_detail['product_name']; ?>
                                            </td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name']; ?>"><?php echo $products_detail['product_code']; ?></span>
                                                
                                            </td>
                                            <input type="hidden" name="distribution_code_order[]" value="<?php echo $distribution['dsr_code']; ?>">
                                            <input type="hidden" name="scm_product_order[]" value="<?php echo $products_detail['product_code']; ?>">
                                            <?php
                                                //$avg_sum = 0;
                                                for ($i = -3; $i <= -1; $i++){
                                                    $month_key = date('m', strtotime("$i month", strtotime(date('Y-m-01'))));
                                                    $key = array_search($month_key, $month);
                                                    if ($key <= -1) {
                                                        $val = '0';

                                                    }
                                                    else{
                                                        if (array_key_exists($key,$month)) {
                                                            $val = $sale[$key];
                                                            //$avg_sum+= $val;
                                                        }
                                                        else{
                                                            $val = '0';
                                                        }
                                                    }
                                                    if ($i == -2) {
                                                        $one = $val;
                                                        $secound[] = $val * $products_detail['tp_product'];
                                                    }
                                                    if ($i == -1) {
                                                        $two = $val;
                                                        $third[] = $val * $products_detail['tp_product'];
                                                    }
                                                    if ($i == -3) {
                                                        $three = $val;
                                                        $first[] = $val * $products_detail['tp_product'];
                                                    }
                                                    echo '<td class="long"><span href="#" data-toggle="tooltip" title="'.$products_detail['product_name'].'">'.$val.'</span></td>';
                                                }
                                                $total = $one - $two * 100;
                                                if ($two != 0) {
                                                    $total = $total / $two;
                                                }
                                                $total = round($total);
                                            ?>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name']; ?>"><?php 
                                                    $avg_total[] = $avg_sum * $products_detail['tp_product'];
                                                    echo $avg_sum;
                                                ?></span>
                                                
                                            </td>
                                            <?php $orders = explode(',', $products_detail['orders']); ?>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name']; ?>"><?php $intransit_total[] = $products_detail['Intransit'] * $products_detail['tp_product']; echo $products_detail['Intransit']; ?></span>
                                                
                                            </td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name']; ?>"><?php $closing_total[] = $products_detail['closing'] * $products_detail['tp_product']; echo $products_detail['closing']; ?></span>
                                                
                                            </td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name']; ?>"><?php $closing_stock_total[] = $closing_stock * $products_detail['tp_product']; echo $closing_stock; ?></span>
                                                
                                            </td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name']; ?>"><?php
                                                 $requirement[] = $res * $products_detail['tp_product']; 
                                                    echo round($res);
                                                ?></span>
                                                
                                            </td>
                                            <?php 
                                                if ($num_order >= 1) {
                                                    for ($i=sizeof($orders) - 1; $i >= 0; $i--) { 
                                                        echo '<td class="long"><span href="#" data-toggle="tooltip" title="'.$products_detail['product_name'].'">'.$orders[$i].'</span></td>';
                                                    }
                                                    $re = $num_order - sizeof($orders);
                                                    for ($i=0; $i < $re; $i++) { 
                                                        echo '<td class="long"><span href="#" data-toggle="tooltip" title="'.$products_detail['product_name'].'"></span></td>';
                                                    }
                                                }
                                            ?>
                                            <?php 
if (isset($column)) {
    $tp_product_change=$products_detail['tp_product'];
    echo '<td class="long"><span href="#" data-toggle="tooltip" title="'.$products_detail['product_name'].'"><input type="number" name="order['.$products_detail['product_code'].'][]" value="'.$qty.'" class="qty_assign" onkeyup="change_qty('.$pid_change.','.$tp_product_change.')" id="qty_assign_'.$pid_change.'"></span></td>';
                                            ?>
             <input type="hidden" class="hidden_total" value="<?php echo $qty*$products_detail['tp_product'] ?>" id="hidden_total_<?php echo $pid_change ?>" />

                                            <?php
                                                }


                                            ?>

                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name'];?>">
                                            <?php 
                                                if($nres > 0){
                                                    $order_total[] = $nres * $products_detail['tp_product']; 
                                                    echo $nres;
                                                }
                                                else{
                                                    $order_total[] = 0; 
                                                    echo 0;
                                                }
                                                ?></span>
                                                
                                                <input type="hidden" name="qty[]" value="<?php if($nres > 0){echo round($nres);}else{echo 0;} ?>">
                                            </td>
                                            <?php 
                                                if ($old_orders == 1) {
                                                    $total_order = array_sum($orders);
                                                    $pending = $products_detail['pending'];
                                                    if (empty($pending)) {
                                                        $totals = $total_order - $products_detail['curent_intransit'];
                                                        $pending = $totals;
                                                    }
                                                    $intransit = $products_detail['curent_intransit'];
                                                    if (empty($intransit)) {
                                                        $intransit = 0;
                                                    }
                                                    $remaning = $nres - $total_order;
                                                    $remaning_total = $remaning * $products_detail['tp_product'];


                                                    if ($remaning < 1) {
                                                       $remaning = 0;
                                                    }
                                                    echo '<td class="long"><span href="#" data-toggle="tooltip" title="'.$products_detail['product_name'].'">'.$remaning.'</span></td><td class="long"><span href="#" data-toggle="tooltip" title="'.$products_detail['product_name'].'">'.$products_detail['current_sale'].'</span></td><td class="long"><span href="#" data-toggle="tooltip" title="'.$products_detail['product_name'].'">'.$products_detail['curent_closing'].'</span></td><td class="long"><span href="#" data-toggle="tooltip" title="'.$products_detail['product_name'].'">'.$intransit.'</span></td><td class="long"><span href="#" data-toggle="tooltip" title="'.$products_detail['product_name'].'">'.$pending.'</span></td>';
                                                }
                                            ?>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name'];?>"> <?php echo $total ?>%<input type="hidden" name="growth[]" value="<?php echo $total ?>"></span>
                                               </td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name'];?>"> <?php echo $products_detail['pack_carton']; ?></span>
                                               
                                            </td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name'];?>"><?php echo $products_detail['tp_product']; $tp[] = $products_detail['tp_product']; ?></span></td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name'];?>"><?php echo $products_detail['tp_product']; ?></span></td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name'];?>"><?php 
                                                    if ($distribution['price_type'] == 'D1')
                                                        echo $price = $products_detail['p1'];
                                                    elseif ($distribution['price_type'] == 'D2')
                                                        echo $price = $products_detail['p2'];
                                                    elseif ($distribution['price_type'] == 'D3')
                                                        echo $price = $products_detail['p3'];
                                                    if (!$price) {
                                                        $price = $products_detail['tp_product'];
                                                    }
                                                    $dp[] = $price;
                                                    $secound_np[] = $one * $price;
                                                    $third_np[] = $two * $price;
                                                    $first_np[] = $three * $price;
                                                    $avg_total_np[] = $avg_sum * $price;
                                                    $intransit_total_np[] = $products_detail['Intransit'] * $price;
                                                    $closing_total_np[] = $products_detail['closing'] * $price;
                                                    $closing_stock_total_np[] = $closing_stock * $price;
                                                    $requirement_np[] = $res * $price;
                                                    $order_total_np[] = $nres * $price;
                                                    if ($old_orders == 1) {
                                                        $remaning_total_np = $remaning * $price;
                                                    }
                                                ?></span>
                                                
                                            </td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name'];?>"><?php echo $tax = round($price * 17 / 100, 2) ?></span></td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name'];?>"><?php echo round($price + $tax, 2) ?></span></td>
                                            <td class="long"><span href="#" data-toggle="tooltip" title="<?php echo $products_detail['product_name'];?>"><?php 
                                            $avg_per = ($two / 30);
                                            if (!$avg_per)
                                                $ty = $closing_stock / 1;
                                            else
                                            $ty = $closing_stock / $avg_per;
                                                // if ($avg_sum > $closing_stock) {
                                                //     echo "HI";
                                                // }
                                                // else{
                                                //     echo 'Low';
                                                // }
                                        if ($ty>0) {
                                            if($ty<5){
                                                $final_priority="Super Urgent";
                                            }
                                            if($ty>=5 && $ty<10){
                                                $final_priority="Overnight Dispatch";
                                            }
                                            if($ty>=10 && $ty<20){
                                                $final_priority="Overland Dispatch";
                                            }
                                            if($ty>=20 && $ty<45){
                                                $final_priority="Normal Dispatch";
                                            }
                                            if($ty>=45 && $ty<999){
                                                $final_priority="High Inventory";
                                            }
                                        }
                                        echo $final_priority;
                                            ?></span>
                                            <input type="hidden" name="final_priority[]" value="<?php echo $final_priority; ?>">
                                            </td>
                                  </tr>
                                  <?php } ?>
                                  
                                </thead>
                              </table>
                            </div>
                            <table >
                              <thead>
                                <th class="headcol" style="width: 261px !important;"><span style="opacity: 0">zz</span> </th>
                                <th class="headcol" style="width: 261px !important;"><span style="opacity: 0">zz</span> </th>
                                <th class="headcol" style="width: 261px !important;"><span style="opacity: 0">zz</span> Value at TP</th>
                                            <th class="long"></th>
                                            <th class="long"><?php echo number_format(round(array_sum($first))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($secound))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($third))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($avg_total))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($intransit_total))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($closing_total))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($closing_stock_total))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($requirement))) ?>
                                                

                                            </th>
                                            <?php 
                                            $num = 1;
                                                for ($i=0; $i < $num_order; $i++) { 
                                                    echo '<th class="long"></th>';
                                                    $num++;
                                                }
                                                if (isset($column)) {
                                                    echo '<th class="long">
                                         <p id="final_total"></p>
                                                    </th>';
                                                }
                                            ?>
                                            <th class="long"><?php echo number_format(round(array_sum($order_total))) ?>
                                                

                                            </th>
                                            <?php 
                                                if ($old_orders == 1) {
                                                    echo '<th class="long">'.number_format(round(array_sum($remaning_total))).'</th><th class="long"></th><th class="long"></th><th class="long"></th><th class="long"></th>';
                                                }
                                            ?>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                              </thead>
                              <thead>
                                 <th class="headcol" style="width: 261px !important;"><span style="opacity: 0">zz</span>  <span style="opacity: 0">z</span></th>
                                  <th class="headcol" style="width: 261px !important;"><span style="opacity: 0">zz</span>  <span style="opacity: 0">z</span></th>
                                <th class="headcol" style="width: 261px !important;"><span style="opacity: 0">zz</span> Value at <span style="opacity: 0">z</span>NP</th>
                                            <th class="long"></th>
                                            <th class="long"><?php echo number_format(round(array_sum($first_np))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($secound_np))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($third_np))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($avg_total_np))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($intransit_total_np))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($closing_total_np))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($closing_stock_total_np))) ?></th>
                                            <th class="long"><?php echo number_format(round(array_sum($requirement_np))) ?></th>
                                            <?php 
                                            $num = 1;
                                                for ($i=0; $i < $num_order; $i++) { 
                                                    echo '<th class="long"></th>';
                                                    $num++;
                                                }
                                                if (isset($column)) {
                                                    echo '<th class="long"></th>';
                                                }
                                            ?>
                                            <th class="long"><?php echo number_format(round(array_sum($order_total_np))) ?></th>
                                            <?php 
                                                if ($old_orders == 1) {
                                                    echo '<th class="long">'.number_format(round(array_sum($remaning_total_np))).'</th><th class="long"></th><th class="long"></th><th class="long"></th><th class="long"></th>';
                                                }
                                            ?>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                                            <th class="long"></th>
                              </thead>
                            </table>
                          </div>
                        </div>


                    </div>
                    <div class="form-group row">
                        <div class="col-md-12">
                            <label class="col-md-3"></label>
                            <div class="col-md-9 pull-right">
                               
                                 <input type="submit" name="" class="btn btn-primary pull-right">
                            </div>
                        </div>
                    </div>
                </div>
                    <!-- <p>tp = <?php echo array_sum($tp) ?></p>
                    <p>dp = <?php echo array_sum($dp) ?></p> -->
                </form>
            </div>
        </div>
       
    </div>
    <!-- /.main content -->
</div>
<!-- /#page-wrapper -->
</div>
<!-- /#wrapper -->
<!-- START CORE PLUGINS -->
<style type="text/css">
    .navbar {
        position: relative;
    }
</style>

<script>

    $('#zero_qty').click(function(){
        $('.qty_assign').each(function(){
               $(this).val(0);
        });
    $('.hidden_total').each(function(){
               $(this).val(0);
        });

    
        final_total();
    });

    $('.csvbtn').attr('disabled', true);
    $('#csv_check').change(function() {
        if ($(this).val()) {

            $('.csvbtn').attr('disabled', false);
        }
    });
    $('#order_table').DataTable( {
    fixedHeader: true
} );
    
</script>
<style type="text/css">
    div#page-wrapper {
        width: 100%;
        margin: 0;
    }

    .sidebar {
        display: none;
    }
    .header-fixed {
    width: 100% 
}

.header-fixed > thead,
.header-fixed > tbody,
.header-fixed > thead > tr,
.header-fixed > tbody > tr,
.header-fixed > thead > tr > th,
.header-fixed > tbody > tr > td {
    display: block;
}

.header-fixed > tbody > tr:after,
.header-fixed > thead > tr:after {
    content: ' ';
    display: block;
    visibility: hidden;
    clear: both;
}

.header-fixed > tbody {
    overflow-y: auto;
    height: 150px;
}

.header-fixed > tbody > tr > td,
.header-fixed > thead > tr > th {
    width: 20%;
    float: left;
}
</style>
<script type="text/javascript">
    // Example 1
$('.pane-hScroll').scroll(function() {
  $('.pane-vScroll').width($('.pane-hScroll').width() + $('.pane-hScroll').scrollLeft());
});

// Example 2
$('.pane--table2').scroll(function() {
  $('.pane--table2 table').width($('.pane--table2').width() + $('.pane--table2').scrollLeft());
});
</script>
<script>
$(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();   
});

function addCommas(nStr){
 nStr += '';
 var x = nStr.split('.');
 var x1 = x[0];
 var x2 = x.length > 1 ? '.' + x[1] : '';
 var rgx = /(\d+)(\d{3})/;
 while (rgx.test(x1)) {
  x1 = x1.replace(rgx, '$1' + ',' + '$2');
 }
 return x1 + x2;
}


// function change_final_total() {
//  var hidden_total=0;

// $('.hidden_total').each(function(){
// hidden_total=parseDouble(hidden_total)+parseDouble($(this).val());
// });
// $('#final_total').html(addCommas(hidden_total));

//  }

final_total();

function final_total(){
var hidden_total=0;

$('.hidden_total').each(function(){
hidden_total=parseInt(hidden_total)+parseInt($(this).val());
});
$('#final_total').html(addCommas(hidden_total));
s
}

$('.qty_assign').each(function(){
    
});



function change_qty(product_code,tp) {
    var final=parseInt($('#qty_assign_'+product_code).val())*parseInt(tp);
    $('#hidden_total_'+product_code).val(final);
   
    final_total();

}
</script>
<script>
var $rows = $('#table tr');
$('#search').keyup(function() {
    var val = $.trim($(this).val()).replace(/ +/g, ' ').toLowerCase();
    
    $rows.show().filter(function() {
        var text = $(this).text().replace(/\s+/g, ' ').toLowerCase();
        return !~text.indexOf(val);
    }).hide();
});
</script>