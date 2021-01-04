<!--<a href="{{ route('compare') }}" class="d-flex align-items-center text-reset">-->
<!--    <i class="la la-refresh la-2x  text_bold"></i>-->
<!--    <span class="flex-grow-1 ml-1">-->
<!--        @if(Session::has('compare'))-->
<!--            <span class="badge badge-primary badge-inline badge-pill">{{ count(Session::get('compare'))}}</span>-->
<!--        @else-->
<!--            <span class="badge badge-primary badge-inline badge-pill">0</span>-->
<!--        @endif-->
<!--        <span class="nav-box-text d-none d-xl-block opacity-70">{{translate('Compare')}}</span>-->
<!--    </span>-->
<!--</a>-->
@if(!Auth::check())
<a href="{{ route('user.login') }}" class="d-flex align-items-center text-reset">
    <i class="mdi mdi-account-outline la-2x text_bold"></i>
    <span class="flex-grow-1 ml-1">
        <span class="nav-box-text d-none d-xl-block" style="font-size: 16px;">{{translate('Login')}}</span>
    </span>
</a>
@else
<a href="#" class="d-flex align-items-center text-reset">
    <i class="mdi mdi-account-outline la-2x text_bold"></i>
    <span class="flex-grow-1 ml-1">
        <span class="nav-box-text d-none d-xl-block" style="font-size: 16px;">{{translate('My Account')}} <i class="mdi mdi-chevron-down"></i></span>
    </span>
</a>
@endif