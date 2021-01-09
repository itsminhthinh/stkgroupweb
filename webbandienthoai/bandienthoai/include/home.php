<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4" style="background-color:khaki; background-size:100%">
		<div class="container py-xl-4 py-lg-2"  style="background-color:white; background-size:100%">
			<!-- tittle heading -->
			
				<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3"style="background-image:url(./images/header.jpg);line-height:150px;font-size:50px;width:1100px;height:150px ;padding:0px;margin:0px;background-repeat:no-repeat;  background-position: center;
        background-size: cover;">Danh mục sản phẩm</h3>
			<!-- //tittle heading -->
			
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<?php
						$sql_cate_home = mysqli_query($con,"SELECT * FROM tbl_category ORDER BY category_id DESC");
						while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
							$id_category = $row_cate_home['category_id'];
						?>
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4"style="background:white">
							<h3 class="heading-tittle text-center "style="background:Orange;width:	1060px;"><?php echo $row_cate_home['category_name'] ?></h3>
							<div class="row"style="background:white">
								<?php
								$sql_product = mysqli_query($con,"SELECT * FROM tbl_sanpham ORDER BY sanpham_id DESC");
								while($row_sanpham = mysqli_fetch_array($sql_product)){ 
									if($row_sanpham['category_id']==$id_category){
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
							
											<img src="images/<?php echo $row_sanpham['sanpham_image'] ?>" width="75%" height="75%">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>" class="link-product-add-cart">Xem sản phẩm</a>
												</div>
											</div>
										
										</div>
										<div class="item-info-product text-center border-top mt-4">
										    <p>
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
											</h4>
											</p>
											<div class="info-product-price my-2">
											<p>
												<span class="item_price"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai']).'vnđ' ?></span>
												<p>
												<del><?php echo number_format($row_sanpham['sanpham_gia']).'vnđ' ?></del>
												</p>
												</p>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanly=giohang" method="post">
												<fieldset>
													<input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sanpham_name'] ?>" />
													<input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['sanpham_id'] ?>" />
													<input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sanpham_gia'] ?>" />
													<input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sanpham_image'] ?>" />
													<input type="hidden" name="soluong" value="1" />			
													<input type="submit" name="themgiohang" value="Thêm giỏ hàng" class="button" />
												</fieldset>
											</form>
											</div>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?>
							</div>
						</div>
						<!-- //first section -->
							<?php
							} 
							?>
						
					</div>
				</div>
				<!-- //product left -->

			
									
									
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			
		</div>
	</div>
	<!-- //top products -->
