<x-bgauth>


    @if(session('message'))
        <div class="alert alert-danger" role="alert">{{ session('message') }}</div>
    @endif

    @if($errors->any())
        <ul class="alert alert-danger" role="alert">
            @foreach ($errors->all() as $error)

                <li>{{ $error }}</li>

            @endforeach
        </ul>
    @endif


<div class="agileits-top">

    <h1 style="margin: 20px 2px ">Sign Up Form</h1>

    <form action="{{ route('auth.signup') }}" method="post">
        @csrf
        <input class="text" type="text" name="name" placeholder="name" required="">
        <input class="text email" type="email" name="email" placeholder="Email" required="">
        <input class="text" type="password" name="password" placeholder="Password" required="">
        <input class="text w3lpass" type="password" name="password_confirmation" placeholder="Confirm Password" required="">
        <div class="wthree-text">
            <label class="anim">
                <input type="checkbox" class="checkbox" required="">
                <span>I Agree To The Terms & Conditions</span>
            </label>
            <div class="clear"> </div>
        </div>
        <input type="submit" value="SIGNUP">
    </form>
    <p>Do you have an Account? <a href="signin"> Signin Now!</a></p>
</div>


</x-bgauth>
