<li><a href="{{route('inizio')}}">Home</a></li>
<li><a href="{{route('about')}}">Chi Siamo</a>
    {{--<ul>
        <li><a href="about.html">Chi Siamo</a></li>
        <li><a href="{{route('calendario')}}">Programma</a></li>
        <li><a href="commingsoon.html">In Arrivo</a></li>
    </ul>--}}
</li>
{{--<li class="dropdown"><a href="#">Personal Trainers</a>
    <ul>
        @foreach($trainers as $trainer)
            <li><a href="trainer.html">{{$trainer->nome}} {{$trainer->cognome}}</a></li>
        @endforeach
    </ul>
</li>--}}
<li><a href="{{route('calendario')}}">Calendario</a>
    {{--<ul>
        <li><a href="shop-left.html">Shop Left Sidebar</a></li>
        <li><a href="shop-right.html">Shop Right Sidebar</a></li>
        <li><a href="shop-single.html">Product Single</a></li>
        <li><a href="shopping-cart.html">Shopping Cart</a></li>
        <li><a href="checkout.html">Checkout</a></li>
    </ul>--}}
</li>
<li><a href="{{route('notizie')}}">Notizie</a>
    {{--<ul>
        <li><a href="blog.html">Our Blog</a></li>
        <li><a href="blog-classic.html">Blog Classic</a></li>
        <li><a href="blog-detail.html">Blog Detail One</a></li>
        <li><a href="blog-detail-two.html">Blog Detail Two</a></li>
        <li><a href="not-found.html">Not Found</a></li>
    </ul>--}}
</li>
<li><a href="#infondo">Contattaci</a></li>
@guest
    <li><a href="{{ route('login') }}">Login</a></li>
@else
    <li class="dropdown"><a href="#">{{ Auth::user()->name }}</a>
        <ul>
            <li><a target="_blank" href="{{ route('admin.index') }}">Dashbord</a></li>
            <li><a href="#">
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </a></li>
        </ul>
    </li>

@endguest
