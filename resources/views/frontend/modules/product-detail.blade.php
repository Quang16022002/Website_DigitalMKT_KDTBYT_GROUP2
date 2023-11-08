@extends('frontend.layouts.master')
@section('Content')


<section class="main-container col1-layout">
    <div class="main container">
        <div class="col-main">
            <div class="row">
                <div class="product-view wow">
                    <div class="product-essential">
                        <form  action="#" method="post" id="product_addtocart_form">
                            <div class="product-img-box col-lg-6 col-sm-6 col-xs-12">
                                <ul  class="moreview" id="moreview">
                                    @foreach ($data_detail as $item)
                                    <li class="moreview_thumb"> 
                                        <img class="moreview_thumb_image" src="{{url('upload')}}/{{$item->img}}"> 
                                        <img class="moreview_source_image" src="{{url('upload')}}/{{$item->img}}" alt=""> 
                                        <img style="position: absolute;" class="zoomImg" src="{{url('upload')}}/{{$item->img}}">
                                    </li>
                                    @endforeach
                                </ul>
                                <div class="moreview-control"> <a style="right: 42px;" href="javascript:void(0)" class="moreview-prev"></a> <a style="right: 42px;" href="javascript:void(0)" class="moreview-next"></a> </div>
                            </div>
                            
                            <div class="product-shop col-lg-6 col-sm-6 col-xs-12">
                              
                                <div class="product-name">
                                    <h1>{{$data->name_product}}</h1>
                                </div>
                                <div class="ratings">
                                    <div class="rating-box">
                                        <div style="width:60%" class="rating"></div>
                                    </div>
                                    <p class="rating-links"> <a href="#">1 Đánh giá</a> <span class="separator">|</span> <a href="#">Thêm đánh giá</a> </p>
                                </div>
                                <p class="availability in-stock"><span>Còn hàng</span></p>
                                <div class="price-block">
                                    <div class="price-box">
                                        <p class="old-price"> <span class="price-label">Regular Price:</span> <span class="price">{{number_format($data->price)}} đ</span> </p>
                                        <p class="special-price"> <span class="price-label">Special Price</span> <span class="price">{{number_format($data->price_sale)}} đ</span> </p>
                                    </div>
                                </div>
                                <div class="short-description">
                                    <h2>Quick Overview</h2>
                                    <p>{!!$data->preview!!}</p>
                                </div>
                                <div class="add-to-box">
                                <div class="list">
                                    <div class="BH">
                                        <div class="BH-list"> <img src="https://sieuthiyte.com.vn/data/images/Icon/icon-hoan-tien-sithyte.png" alt=""><p style="color: rgb(10,88,163); font-size: 15px">Hoàn tiền 150% nếu phát hiện hàng giả</p></div>
                                        <div class="BH-list">
                                            <img src="https://sieuthiyte.com.vn/data/images/Icon/icon-bao-hanh-styt.png" alt="">
                                            <p style="color: rgb(139,184,91) ; font-size: 15px">Bảo hành nhanh chóng</p>
                                        </div>
                                        <div class="BH-list">
                                            <img src="https://sieuthiyte.com.vn/data/images/Icon/icon-chung-nhan.png" alt="">
                                            <p style="color: rgb(245,159,84); font-size: 15px">Cam kết hàng chính hãng 100%</p>
                                        </div>
                                        <div class="BH-list">
                                            <img src="https://sieuthiyte.com.vn/data/images/Icon/free-ship-si.png" alt="">
                                            <p style="color: rgb(203,114,249); font-size: 15px">Free ship đơn hàng trên 600K
                                        </div>

                                        </p>
                                    </div>
                                    <div class="countdown-container">
                                        <div class="countdown-header">
                                            <div class="iconQT"><img src="https://sieuthiyte.com.vn/data/images/Icon/icon-qua-tang.gif" alt="">
                                            <p>Quà Tặng</p></div>
                                            <p> Nhiệt Kế Berrcom JXB</p>
                                        </div>
                                      
                                        <div class="countdown-timer" id="countdown-timer">00:00:00</div>
                                    </div>
                            
                                    
                                </div>
                                    <div class="add-to-cart">
                                        <label for="qty">Số lượng:</label>
                                        <div class="pull-left">
                                            <div class="custom pull-left">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty ) &amp;&amp; qty &gt; 0 ) result.value--;return false;" class="reduced items-count" type="button"><&nbsp;</button>
                                                <input type="text" class="input-text qty" title="Qty" value="1" maxlength="12" id="qty" name="qty">
                                                <button onClick="var result = document.getElementById('qty'); var qty = result.value; if( !isNaN( qty )) result.value++;return false;" class="increase items-count" type="button">>&nbsp;</button>
                                            </div>
                                        </div>
                                        <button type="button" title="Thêm sản phẩm vào giỏ hàng" class="button btn-cart add_to_cart" data-url="{{Route('addToCart', $data->id)}}">
                                            <span>Thêm giỏ hàng</span>
                                        </button>
                                    </div>

                                    <div class="shop">
                                        
                                        <h1><img src="https://sieuthiyte.com.vn/themes/images/icon_location.png" alt="">HỆ THỐNG CỬA HÀNG</h1>
                                        <ul>
                                            <li><span>0999898765</span> - 124 Nguyễn Trãi, Q. Thanh Xuân, Hà Nôị</li>
                                            <li><span>0999898765</span> - 14 Nam Trung, Q. Nam Từ Liêm, Hà Nôị</li>
                                            <li><span>0999898765</span> - Ỷ La, Q. Hà ĐÔng, Hà Nôị</li>
                                            <li><span>0999898765</span> - 67 Thanh Liêm, Q. Thanh Xuân, Hà Nôị</li>
                                            <li><span>0999898765</span> - 34 Mộ Lao, Q. Bắc Từ Liêm, Hà Nôị</li>
                                            <li><span>0999898765</span> - 11 Tân Cương, Q. Ba Đình, Hà Nôị</li>
                                            <li><span>0999898765</span> - 12 Trần Đạo , Q. 5, Hồ Chí Minh</li>
                                            <li><span>0999898765</span> - 124 Khánh Hội, Phường 4, Quận 3</li>
                                            <li><span>0999898765</span> - 67 Thanh Liêm, Q. Thanh Xuân, Hà Nôị</li>
                                            <li><span>0999898765</span> - 34 Mộ Lao, Q. Bắc Từ Liêm, Hà Nôị</li>
                                            <li><span>0999898765</span> - 11 Tân Cương, Q. Ba Đình, Hà Nôị</li>
                                            <li><span>0999898765</span> - 12 Trần Đạo , Q. 5, Hồ Chí Minh</li>
                                            <li><span>0999898765</span> - 124 Khánh Hội, Phường 4, Quận 3</li>
                                        </ul> 
                                    </div>
                                    
                                </div>
                            </div>

                        </form>

                    </div>
                    {{-- Voucher --}}

                    <div class="voucher">
                        <div class="voucher-item">
                            <img src="https://sieuthiyte.com.vn/data/images/San-Pham/icon-hot.gif" alt="">
                            <p> Tặng ngay <span style="color: red; font-weight: 600;	font-size: 15px;">Voucher 200.000k</span> khi mua Sản phẩm Wellmed DO2-5A (Thời gian Chương trình đến hết 30/10/2023). </p>
                        </div>
                        <div class="voucher-item">
                            <img src="https://sieuthiyte.com.vn/data/images/tin-tuc/icon1_1.gif" alt="">
                            <p> Voucher được áp dụng cho <span style="color: rgb(22,21,253);font-weight: 500;"> Hóa đơn sau trên 500.000₫</span> (HSD: 30 ngày kể từ thời điểm xuất hóa đơn mua hàng).</p>
                        </div>
                        <div class="voucher-item">
                            <img src="https://sieuthiyte.com.vn/data/images/San-Pham/luu-y-png3.png" alt="">
                            <p><span style="font-weight: 600">Không áp dụng </span>cho các sản phẩm đã có Voucher giảm giá. </p>
                        </div>
                    </div>
                 


                    <div class="product-collateral">
                        <div class="col-sm-12 wow">
                            <ul id="product-detail-tab" class="nav nav-tabs product-tabs">
                                <li class="active"> <a href="#product_tabs_description" data-toggle="tab">Mô tả sản phẩm</a> </li>
                               
                                <li> <a href="#reviews_tabs" data-toggle="tab">Đánh giá</a> </li>
                            </ul>
                            <div id="productTabContent" class="tab-content">
                                <div class="tab-pane fade in active" id="product_tabs_description">
                                    <div class="std">
                                        <p>{!!$data->detail!!}</p>
                                    </div>
                                </div>
                               
                                <div class="tab-pane fade" id="reviews_tabs">
                                    <div class="box-collateral box-reviews" id="customer-reviews">
                                        <div class="box-reviews1">
                                            <div class="form-add">
                                                <form id="review-form" method="post" action="#">
                                                    <h3>Viết đánh giá của bạn</h3>
                                                    <fieldset>
                                                        <h4>Mức độ hài lòng của bạn về sản phẩm<em class="required">*</em></h4>
                                                        <span id="input-message-box"></span>
                                                        <table id="product-review-table" class="data-table">
                                                            <colgroup>
                                                                <col>
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                                <col width="1">
                                                            </colgroup>
                                                            <thead>
                                                                <tr class="first last">
                                                                    <th>&nbsp;</th>
                                                                    <th><span class="nobr">1 *</span></th>
                                                                    <th><span class="nobr">2 *</span></th>
                                                                    <th><span class="nobr">3 *</span></th>
                                                                    <th><span class="nobr">4 *</span></th>
                                                                    <th><span class="nobr">5 *</span></th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr class="first odd">
                                                                    <th>Giá</th>
                                                                    <td class="value"><input type="radio" class="radio" value="11" id="Price_1" name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="12" id="Price_2" name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="13" id="Price_3" name="ratings[3]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="14" id="Price_4" name="ratings[3]"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="15" id="Price_5" name="ratings[3]"></td>
                                                                </tr>
                                                                <tr class="even">
                                                                    <th>Giá trị</th>
                                                                    <td class="value"><input type="radio" class="radio" value="6" id="Value_1" name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="7" id="Value_2" name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="8" id="Value_3" name="ratings[2]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="9" id="Value_4" name="ratings[2]"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="10" id="Value_5" name="ratings[2]"></td>
                                                                </tr>
                                                                <tr class="last odd">
                                                                    <th>Chất lượng</th>
                                                                    <td class="value"><input type="radio" class="radio" value="1" id="Quality_1" name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="2" id="Quality_2" name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="3" id="Quality_3" name="ratings[1]"></td>
                                                                    <td class="value"><input type="radio" class="radio" value="4" id="Quality_4" name="ratings[1]"></td>
                                                                    <td class="value last"><input type="radio" class="radio" value="5" id="Quality_5" name="ratings[1]"></td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                        <input type="hidden" value="" class="validate-rating" name="validate_rating">
                                                        
                                                        <div class="review2">
                                                           
                                                            <div class="buttons-set">
                                                                <button class="button submit" title="Submit Review" type="submit"><span>Submit Review</span></button>
                                                            </div>
                                                        </div>
                                                    </fieldset>
                                                </form>
                                            </div>
                                        </div>
                                      
                                        <div class="clear"></div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="box-additional">
                                <div class="related-pro wow">
                                    <div class="slider-items-products">
                                        <div class="new_title center">
                                            <h2>Sản phẩm liên quan</h2>
                                        </div>
                                        <div id="related-products-slider" class="product-flexslider hidden-buttons">
                                            <div class="slider-items slider-width-col4">
                                                @foreach ($cat_parent as $item)
                                                <div class="item">
                                                    <div class="col-item">
                                                        <div class="sale-label sale-top-right">Sale</div>
                                                        <div class="images-container"> <a class="product-image" title="{{$item->name_product}}" href="{{Route('product_detail', $item->id)}}"> <img src="{{url('upload')}}/{{$item->image}}" class="img-responsive" alt="a" /> </a>
                                                            <div class="actions">
                                                                <div class="actions-inner">
                                                                    <button type="button" title="Thêm sản phẩm vào giỏ hàng" class="button btn-cart add_to_cart" data-url="{{Route('addToCart', $item->id)}}">
                                                                        <span>Thêm giỏ hàng</span>
                                                                    </button>
                                                                    <ul class="add-to-links">
                                                                        <li><a title="Thêm vào danh sách yêu thích" class="link-wishlist" href="wishlist.html"><span>Add to Wishlist</span></a></li>
                                                                        <li><a title="Thêm vào đánh giá" class="link-compare" href="compare.html"><span>Add to Compare</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                            <div class="qv-button-container"> <a class="qv-e-button btn-quickview-1" href="quick_view.html"><span><span>Quick View</span></span></a> </div>
                                                        </div>
                                                        <div class="info">
                                                            <div class="info-inner">
                                                                <div class="item-title"> <a href="#l" title=" Sample Product">{{$item->name_product}}</a> </div>
                                                                <div class="item-content">
                                                                    <div class="ratings">
                                                                        <div class="rating-box">
                                                                            <div style="width:60%" class="rating"></div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="price-box">
                                                                        <p class="special-price"> <span class="price"> {{number_format($item->price_sale)}} </span> </p>
                                                                        <p class="old-price"> <span class="price-sep">-</span> <span class="price">{{number_format($item->price)}}</span> </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="clearfix"> </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection