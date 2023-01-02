<div id="mySidebar">
    <!--Sidebar-->
    <div class="user_dashboard_sidebar_title text-center">
        <img src="{{ (!empty(Auth::user()->photo)) ? url('upload/Profile/user/'.Auth::user()->photo):url('upload/no_image.jpg') }}" alt="{{Auth::user()->name}}" class="rounded-pill bg-primary" style="width: 170px; height:160px; padding: 2px">
        <h2 class="mt-2">{{Auth::user()->name}}<span onclick="userDashboardSidebarClicked()" class="d-flex justify-content-end mt-0">
            <i class="fa-solid fa-chevron-left fa-sm" style="margin-top: -20px;color: #707063;cursor: pointer;">
            </i>
        </span>
        </h2>
        <p style="font-size:14px">Welcome back {{Auth::user()->email}}</p>
        <a href="{{route('client.logout')}}" class="common_button_logout mb-2">Logout - not you?</a>
        <hr><br>
    </div>
    <div class="user_dashboard_sidebar_nav">
        <a href="#">My Company</a>
        <a href="{{route('client.dashboard')}}">Dashboard</a>
        <p class="accordion-heading">Tools<span class="plusminus float-right mr-4">+</span></p>
        <div class="accordion-body" style="display: none;">
            <a href="{{route('user.order.page')}}">Saved Carts / Order Templates</a>
        </div>
        <p class="accordion-heading">Personalization<span class="plusminus float-right mr-4">+</span></p>
        <div class="accordion-body" style="display: none;">
            <a href="#">Personal Product List</a>
            <a href="#">User Subsciptions</a>
            <a href="{{route('client.profile')}}">User Profile</a>
            <a href="{{route('client.profile_update')}}">Profile Update</a>
        </div>
    </div>
</div>


<script>
    //---------Sidebar list Show Hide----------
    $(document).ready(function() {
        $(".accordion-heading").click(function() {
            if ($(".accordion-body").is(':visible')) {
                $(".accordion-body").slideUp(3600);
                $(".plusminus").text('+')
            } else {
                $(this).next(".accordion-body").slideDown(3600);
                $(this).children(".plusminus").text('-');
            }
        });
    });
</script>
