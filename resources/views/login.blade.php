@extends('user.layout.master')
@section('title')
login 
@endsection
@section('content')
 <div id="contact" class="form-1 bg-gray">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>login
            
                    </h2>
                    <p class="p-heading">For any type of online project please don't hesitate to get in touch with me. The fastest way is to send me your message using the following email <a class="blue no-line" href="#your-link">contact@domain.com</a></p>
                </div> <!-- end of col -->
            </div> <!-- end of row -->
            <div class="row">
                <div class="col-lg-12">
                       @if ($errors->any())
        <div class="alert alert-danger" style="background-color:black; color:white; font-size:34px;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
                    <!-- Contact Form -->
                    <form   method="post" action="{{route('login.store')}}" >
                        @csrf
                    
                       
                        <div class="form-group">
                            <input type="email" class="form-control-input"  name="email" id="email" required>
                            <label class="label-control"  for="cemail">Email</label>
                        </div>
                        <div class="form-group">
                             <input type="text" class="form-control-input"  name="password" id="password" required>
                            <label class="label-control" for="password">password</label>
                        </div>
                         
                        <div class="form-group">
                            <button type="submit" class="form-control-submit-button">Submit</button>
                        </div>
                    </form>
                    <!-- end of contact form -->
</div>
</div>
</div>
</div>
@endsection