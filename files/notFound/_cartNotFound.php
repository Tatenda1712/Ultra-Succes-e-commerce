        <!--Shopping Cart Section-->
        <section id="cart" class="py-3">
            <div class="container-fluid w-75">
                <h5 style="font-size: 20px;">Shopping Cart</h5>
                <!--Shopping cart items-->
                <div class="row">
                    <div class="col-sm-9">
                        <!--Empty Cart-->
                        <div class="row border-top py-3 mt-3">
                        <div class="col-sm-12 text-center py-2">
                        <img src="././images/cart.png" alt="Empty Cart" class="img-fluid" style="height:200px;">
                        <p class="text-black-50" style="text-size:16px;">Empty Cart</p>
                        </div>
                        </div>   
                        <!--Empty Cart-->   
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