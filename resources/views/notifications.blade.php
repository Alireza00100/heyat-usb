@if($errors->any())
    <div class="alert alert-danger" style="font-family:'B Yekan'; font-size: 15px; color: black; background-color: #c7254e; border: #229954 3px; border-radius: 25px; padding: 25px; margin: 25px;">
        @foreach($errors->all() as $error)
            <p> O {{ $error }}</p>
        @endforeach
    </div>
@endif

@if(session('success'))
    <div style="font-family:'B Yekan'; font-size: 20px; color: black; background-color: #2ECC71; border: #229954 3px; border-radius: 25px;">
        <p style="padding: 20px;">{{ session('success') }}</p>
    </div>
@endif