        <!--Shopping Cart Section-->

        <?php
          if($_SERVER['REQUEST_METHOD']=='POST'){
              if(isset($_POST['delete-cart-wishlist'])){
                  $deletedrecord=$Cart->deleteCart($_POST['item_id'],"wishlist");
              }
              if(isset($_POST['cart-submit'])){
                $Cart->saveForLater($_POST['item_id'], 'cart','wishlist');
            }
          }
        ?>
        <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 style="font-size: 20px;">Wishlist</h5>
                <!--Shopping cart items-->
                <div class="row">
                    <div class="col-sm-9">
                        <?php 
                        foreach($product->getData('wishlist')as $item):
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
                                   <form method="post">
                                   <input type="hidden" value="<?php echo $item['item_id']??0; ?>" name="item_id">
                                   <button type="submit" name="delete-cart-wishlist" class="btn text-danger pl-0 py-3 border-right">Delete</button> 
                                   </form>

                                   <form method="post">
                                   <input type="hidden" value="<?php echo $item['item_id']??0; ?>" name="item_id">
                                   <button type="submit" name="cart-submit" class="btn text-success">Add to Cart</button>  
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
                </div>
                <!--Shopping cart items-->
            </div>
        </section>
        <!--Shopping Cart Section-->