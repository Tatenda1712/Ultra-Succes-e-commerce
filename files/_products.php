    <!--product section-->
    <?php
    $item_id=$_GET['item_id']??1;
    foreach($product->getData() as $item):
        if($item['item_id']==$item_id):
            //request method post
if($_SERVER['REQUEST_METHOD']=="POST"){
    //call method addToCart
    if(isset($_POST['product_submit'])){
        $Cart->addToCart($_POST['user_id'],$_POST['item_id'] );
        }
}
    ?>
    <section id="product" class="py-3">
          <div class="container">
              <div class="row">
                  <div class="col-sm-6">
                      <img src="<?php echo $item['item_image']??"images/musodza tatenda.png"; ?>" alt="product" class="img-fluid">
                      <div class="form-row pt-4 d-flex justify-content-between mx-2"style="font-size: 16px;">
                        <div class="col">
                             <button type="submit" class="btn btn-danger form-control" >Proceed To Buy</button>
                        </div>
                        <div class="col">
                        <form method="POST">
                                   <input type="hidden" name="item_id" value="<?php echo $item['item_id']??'1'; ?>">
                                   <input type="hidden" name="user_id" value="<?php echo 1; ?>">
                                   <?php   
                                   if(in_array($item['item_id'],$Cart->getCartId($product->getData('cart'))??[])){
                                    echo '<button type="submit" disabled name="top_sale_submit" class="btn btn-success form-control " style="font-size: 12;">Add to Cart</button>';
                                   }
                                   else{
                                       echo ' <button type="submit" name="product_submit" class="btn btn-warning form-control " style="font-size: 12;">Add to Cart</button>';
                                   }
                                   ?>
                               </form>
                        </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                      <h5 style="font-size: 20px;"><?php echo $item['item_name']??"Unkown";  ?></h5>
                      <small>By <?php echo $item['item_brand']??"Brand";  ?></small>
                      <div class="d-flex">
                        <div class="rating text-warning" style="font-size: 12;">
                            <!--Stars-->
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="fas fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>       
                        </div>
                        <a href="#" class="px-2 nav-link"style="font-size: 14px;">20.250 ratings|1000+answered questions</a>     
                    </div>
                    <hr class="m-0">
                    <!--product price-->
                    <table class="my-3">
                        <tr style="font-size: 14px;">
                            <td>M.R.P:</td>
                            <td><strike>$162.00 </strike></td>
                        </tr>
                        <tr style="font-size: 14px;">
                            <td>Deal Price:</td>
                            <td style="font-size: 20px;" class="text-danger">$<span><?php echo $item['item_price']??0;  ?></span><small class="text-dark" style="font-size:12px;">&nbsp;&nbsp;inclusive of all taxes</small></td>
                        </tr>
                        <tr style="font-size: 14px;">
                            <td>You Save:</td>
                            <td>$<span class="text-danger" style="font-size: 16px;">10.00</span></td>
                        </tr>
                    </table>
                    <!--product price-->

                    <!--Policy-->
                        <div id="policy">
                            <div class="d-flex">
                                <div class="return text-center mr-5">
                                    <div class="my-2 text-primary" style="font-size: 20px;">
                                        <span class="fas fa-retweet border p-3 rounded-pill"></span>

                                    </div>
                                    <a href="#" style="font-size: 12px;"> 10 Days <br>Replacement</a>

                                </div>
                                <div class="return text-center mr-5">
                                    <div class="my-2 text-primary" style="font-size: 20px;">
                                        <span class="fas fa-truck border p-3 rounded-pill"></span>

                                    </div>
                                    <a href="#" style="font-size: 12px;"> Ultra Success <br>Delivery</a>

                                </div>
                                <div class="return text-center mr-5">
                                    <div class="my-2 text-primary" style="font-size: 20px;">
                                        <span class="fas fa-check-double border p-3 rounded-pill"></span>

                                    </div>
                                    <a href="#" style="font-size: 12px;"> 1 Year <br>Warranty</a>

                                </div>
                            </div>
                        </div>
                    <!--Policy-->
                    <hr>
                    <!--Order Details-->
                    <div id="order-details" class="d-flex flex-column text-dark">
                        <small>Delivery By Dec 17-Dec 31</small>
                        <small>Sold by <a href="#">Ultra Success</a> (4.5 out of 5 | 98.145 ratings)</small>
                        <small><i class="fas fa-map-marker-alt text-primary"></i>&nbsp;&nbsp;Deliver to Customer-424201</small>

                    </div>
                    <!--Order Details-->
                    <div class="row">
                        <div class="col-6">
                            <!--color-->
                            <div class="color my-3">
                                <div class="d-flex justify-content-between">
                                    <h6>color:</h6>
                                    <div class="py-2 bg-warning rounded-circle"><button class="btn" style="font-size: 14px;"></button></div>
                                    <div class="py-2 bg-primary rounded-circle"><button class="btn" style="font-size: 14px;"></button></div>
                                    <div class="py-2 bg-secondary rounded-circle"><button class="btn" style="font-size: 14px;"></button></div>
                                </div>
                            </div>
                            <!--color-->
                        </div>
                        <div class="col-6">
                            <!--Quantity Section-->
                            <div class="qty d-flex">
                                <h6>Qty</h6>
                                <div class="py-4 d-flex">
                                        <button data-id="pro1" class="qty-up border bg-light"><i class="fas fa-angle-up"></i></button>  
                                    <input type="text" data-id="pro1" class="qty_input border px-2 w-50 bg-light" disabled value="1" placeholder="1">       
                                        <button data-id="pro1"class="qty-down border bg-light"><i class="fas fa-angle-down"></i></button>   
                                </div>
                            </div>
                            <!--Quantity Section-->
                        </div>
                    </div>
                    <!--size-->
                    <div class="size my-3">
                        <h6>Size :</h6>
                        <div class="d-flex justify-content-between w-75">
                            <div class="border p-2">
                                <button class="btn p-0" style="font-size: 14px;">4GB RAM</button>
                            </div>
                            <div class="border p-2">
                                <button class="btn p-0" style="font-size: 14px;">6GB RAM</button>
                            </div>
                            <div class="border p-2">
                                <button class="btn p-0" style="font-size: 14px;">8GB RAM</button>
                            </div>
                        </div>
                    </div>
                    <!--size-->
                  </div>
                  <div class="col-12">
                      <h6>Product Description</h6>
                      <hr>
                      <p style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur, quibusdam vel asperiores ullam impedit cumque, aut ut corporis nobis quae assumenda veniam obcaecati nemo neque sint. Necessitatibus, beatae saepe?</p>
                      <p style="font-size: 14px;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit pariatur, quibusdam vel asperiores ullam impedit cumque, aut ut corporis nobis quae assumenda veniam obcaecati nemo neque sint. Necessitatibus, beatae saepe?</p>
                  </div>
              </div>
          </div>
      </section>
    <!--product section-->
    <?php
    endif;
    endforeach;
    ?>