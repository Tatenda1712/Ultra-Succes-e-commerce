        <!--Shopping Cart Section-->

        <?php
          if($_SERVER['REQUEST_METHOD']=='POST'){
              if(isset($_POST['delete-cart-submit'])){
                  $deletedrecord=$Cart->deleteCart($_POST['item_id']);
              }
              //save for later
              if(isset($_POST['wishlist-submit'])){
                $Cart->saveForLater($_POST['item_id']);
            }
          }
        ?>
        <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 style="font-size: 20px;">Shopping Cart</h5>
                <!--Shopping cart items-->
                <div class="row">
                    <div class="col-sm-9">
                        <?php 
                        foreach($product->getData('cart')as $item):
                            $cart=$product->getProduct($item['item_id']);
                            $result=$product->getProduct($item['item_id']);
                            $subTotal[]=array_map(function($item){
                            
                         ?>
                        <!--Cart item-->
                        <div class="row border-top py-3 mb-5">
                            <div class="col-sm-2">
                                <img src="<?php echo $item['item_image']??"images/tatenda musodza.png";   ?>" alt="tatenda" class="img-fluid" style="height: 120px;">
                            </div>
                            <div class="col-sm-8">
                                <h5 style="font-size: 20px;"><?php echo $item['item_name']??"Unknown";  ?></h5>
                                <small>By <?php echo $item['item_brand']??"Brand";  ?></small>
                                <!--rating-->
                                <div class="d-flex">
                                    <div class="rating text-warning" style="font-size: 12;">
                                        <!--Stars-->
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="fas fa-star"></i></span>
                                        <span><i class="far fa-star"></i></span>       
                                    </div>
                                    <a href="#" class="px-2" style="font-size: 14px;">58.995 ratings</a>
                                </div>
                                <!--rating-->
                                <!--product Qty-->
                                <div class="qty d-flex pt-2">
                                    <div class="d-flex w-25">
                                        <button class="qty-up border bg-light"data-id="<?php echo $item['item_id']??'0';  ?>"><i class="fas fa-angle-up"></i></button>  
                                        <input type="text" data-id="<?php echo $item['item_id']??'0';  ?>" class="qty_input border px-2 w-100 bg-light"  disabled value="1" placeholder="1">       
                                        <button data-id="<?php echo $item['item_id']??'0';  ?>" class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button> 
                                    </div>
                                   <form method="post">
                                   <input type="hidden" value="<?php echo $item['item_id']??0; ?>" name="item_id">
                                   <button type="submit" name="delete-cart-submit" class="btn text-danger bg-warning px-3 border-right">Delete</button> 
                                   </form>

                                   <form method="post">
                                   <input type="hidden" value="<?php echo $item['item_id']??0; ?>" name="item_id">
                                   <button type="submit" name="wishlist-submit" class="btn text-success">Save for Later</button> 
                                   </form>
                                
                                </div>
                                <!--product Qty-->

                            </div>
                            <div class="col-sm-2 text-right">
                                <div class="text-danger" style="font-size: 20px;">
                                    $<span class="product_price" data-id="<?php echo $item['item_id']??'0';  ?>"><?php echo $item['item_price']??0;  ?></span>
                                </div>
                            </div>
                        </div>
                        <!--Cart item-->
                        <?php 
                    return $item['item_price'];    
                    },$cart); //closing array map function
                         endforeach; 
                         ?>
                    </div>
                    <!--Sub total section-->
                    <div class="col-sm-3">
                       <div class="sub-total border text-center mt-2">
                           <h6 style="font-size: 12px;" class="text-success py-3"><i class="fas fa-check"></i>Your Order Is Eligible fo Free Delivery</h6>
                         <div class="border-top py-4">
                             <h5 style="font-size: 14px;">Subtotal(<?php echo isset($subTotal)? count($subTotal): 0; ?> item):&nbsp;&nbsp;<span class="text-danger">$<span class="text-danger" id="deal-price"><?php echo isset($subTotal)? $Cart->getSum($subTotal):0; ?></span></span></h5>
                              <button type="submit" class="btn btn-warning mt-3">Proceed to Buy</button>
                            </div>
                        </div>
                    </div>
                    <!--subtotal section-->
                </div>
                <!--Shopping cart items-->
            </div>
        </section>
        <!--Shopping Cart Section-->