<x-bgauth>


    @if(session('message'))
        <div class="alert alert-danger" role="alert">{{ session('message') }}</div>
    @endif


        <div class="agileits-top">
            <h1 style="margin: 20px 2px ">Sign In Form</h1>
            <form action="{{route('auth.signin')}}" method="post">
                @csrf
                <input class="text" type="email" style="margin: 25px 0px;" name="email" placeholder="Email" required="">

                <input class="text" type="password" name="password" placeholder="Password" required="">
                <div class="wthree-text">

                    <div class="clear"> </div>
                </div>
                <input type="submit" value="SIGNIN">
            </form>
            <p>Don't have an Account? <a href="signup"> Sign up Now!</a></p>
            <br>
            <p>Sign in with email & password? <a href="signin-email">Click here</a></p>
        </div>


</x-bgauth>
