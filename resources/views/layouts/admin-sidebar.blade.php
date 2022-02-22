<div class="admin-sidebar">
    <div class="side-head">
        <div class="brand-name">
            Paragon-Dev
        </div>
        <div class="brand-img">
            <img src="/images/Photo_1643740838737.png">
        </div>
    </div>
    <div class="side-body">
        <div class="user-status">
            <div class="user-img">
                <a href=#><img src="/images/{{auth()->user()->avatar;}}" id="avatar"></a>
            </div>
            <div class="userhimself">
                <h6>خوش آمدید</h6>
                <h6>{{auth()->user()->name;}}</h6>
                <div class="user-state"><small>وضعیت :</small><img src="/images/led-green-tiny-th.png"><small id="online">آنلاین</small></div>
            </div>
            <div class="browse">
                <small>منو ها </small>
                <img src="/images/white-circle.svg">
            </div>
        </div>
        <div class="side-menu">
            @can('isAdmin')
                <div class="menu-items" >
                    <small id="showdown"><</small><span>مقالات</span>
                </div>
                <div class="side-drop-show">
                    <ul>
                    <a href="{{route('artadd')}}"><li>اضافه کردن مقاله جدید</li></a>
                    <a href="{{route('articles-list')}}"><li>لیست مقالات</li></a>
                    <a href="{{route('comments')}}"><li>کامنت ها</li></a>
                    </ul>
                </div>
                <div class="menu-items" >
                    <small id="showdown"><</small><span>دسته بندی ها</span>
                </div>
                <div class="side-drop-show">
                    <ul>
                    <a href="{{route('categories-add')}}"><li>اضافه کردن دسته بندی جدید</li></a>
                    <a href="{{route('catList')}}"><li>لیست دسته بندی ها</li></a>
                    </ul>
                </div>               
                <div class="menu-items">
                    <small id="showdown"><</small><span>اعضای سایت</span>
                </div>
                <div class="side-drop-show">
                    <ul>
                        <li onclick="newMember()">اضافه کردن عضو جدید</li>
                        <li onclick="memberList()">لیست اعضا</li>
                    </ul>
                </div>
                <div class="menu-items-single">
                    <a href=#>تم ها</a>
                </div>
                <div class="menu-items">
                    <small id="showdown"><</small><span>انبار محصولات*</span>
                </div>
                <div class="side-drop-show">
                    <ul>
                        <a href="#"><li>تست</li></a>
                        <a href="#"><li>تست</li></a>
                    </ul>
                </div>
                <div class="menu-items-single">
                    <a href="#">تنظیمات حساب کاربری</a>
                </div>
                @else
                <div class="menu-items-single">
                    <span>حساب کاربری</span>
                </div>
                <div class="menu-items" >
                    <small id="showdown"><</small><span>سفارشات</span>
                </div>
                <div class="side-drop-show">
                    <ul>
                    <a href=#><li>سفارش جدید</li></a>
                    <a href=#><li>لیست سفارشات</li></a>
                    <a href=#><li> پیگیری سفارش</li></a>
                    </ul>
                </div>               
                <div class="menu-items-single">
                    <a href=#>تم ها</a>
                </div>
                <div class="menu-items-single">
                    <a href=#>تست منو 1</a>
                </div>
                <div class="menu-items-single">
                    <a href=#>تست منو 2</a>
                </div>
                <div class="menu-items">
                    <small id="showdown"><</small><span>* لیست محصولات</span>
                </div>
                <div class="side-drop-show">
                    <ul>
                        <a href="#"><li>تست</li></a>
                        <a href="#"><li>تست</li></a>
                    </ul>
                </div>
                @endcan
            <form id="logout" action={{route('logout')}} method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">خروج</button>
            </form>                
        </div>
    </div>
</div>