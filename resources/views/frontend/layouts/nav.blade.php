<nav>
    <div class="container">
        <div class="nav-inner">
            @php
            use App\Models\CategoryModel;
            $cat_parent = CategoryModel::where('id_parent', 0)->get();
            @endphp
            <div class="hidden-desktop" id="mobile-menu">
                <ul class="navmenu">
                    <li>
                        <div class="menutop">
                            <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                            <h2>Menu</h2>
                        </div>
                        <ul style="display:none;" class="submenu">
                            <li>
                                <ul class="topnav">
                                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="#"> <span>Trang chủ</span> </a> </li>
                                    <li class="level0 nav-6 level-top"> <a class="level-top" href="{{Route('product')}}"> <span>Sản phẩm</span> </a> </li>
                                    <li class="level0 parent drop-menu"><a href="#"><span>Bài viết</span> </a> </li>
                                    <li class="level0 nav-9 level-top last parent "> <a class="level-top" href="#"> <span>Liên hệ</span> </a> </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
            <a class="logo-small" title="Magento Commerce" href="#"><img alt="Magento Commerce" src="{{asset('frontend/images/logo2.png')}}" width="100px"></a>
            <ul id="nav" class="hidden-xs">
                <li class="level0 parent drop-menu"><a href="{{Route('index')}}" class="{{url()->current() == route('index')  ? 'active' : '' }}"><span>Trang chủ</span> </a> </li>
                <li class="level0 parent drop-menu"><a href="{{Route('product')}} " class="{{url()->current() == route('product')  ? 'active' : '' }}"><span>Sản phẩm</span> </a> </a>
                    <ul class="level1">
                        @foreach ($cat_parent as $item)
                        <li class="level1 first parent"><a class="active" href="{{Route('product')}}?cat_id={{$item->id}}">{{$item->name}}</a>
                            <ul class="level2" >
                                @php
                                $cat_children = CategoryModel::where('id_parent',$item->id )->get();
                                @endphp
                                @foreach ($cat_children as $item)
                                <li class="level2 nav-2-1-1 first"> <a href="{{Route('product')}}?cat_id={{$item->id}}"> {{$item->name}} </a> <span></span></li>
                                @endforeach
                            </ul>
                        </li>
                        @endforeach
                    </ul>
                </li>
                <li class="level0 parent drop-menu"><a href="{{Route('order')}} " class="{{url()->current() == route('order')  ? 'active' : '' }}"><span>Đơn hàng</span> </a></li>
                <li class="level0 nav-5 level-top parent"><a href="{{Route('blog')}}" class="{{url()->current() == route('blog') ? 'active' : '' }}"><span>Bài viết</span> </a> </li>
                <li class="level0 parent drop-menu"><a href="{{Route('contact')}}" class="{{url()->current() == route('contact')  ? 'active' : '' }}"><span>Liên hệ</span> </a></li>
                <li class="level0 parent drop-menu"><a href="{{Route('about')}}" class="{{url()->current() == route('about')  ? 'active' : '' }}"><span>Giới thiệu</span> </a></li>
            </ul>
        </div>
    </div>
</nav>
