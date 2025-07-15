@extends('SiteOne.master')
@section('content')
    <!-- Contact-->
        <section class="page-section" id="contact">
            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                    @if ($errors->any()) <!-- array of errors -->
                        <div class="alert alert-danger" role="alert">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li> {{ $error }} </li>
                                @endforeach
                            </ul>
                        </div>
                    @endif
                </div>
                <form enctype="multipart/form-data" id="contactForm" method="post" action="{{ route('site1.postcontact') }}">
                    <!--
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    -->
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <!-- Name input-->
                                <input name="name"
                                 class="form-control
                                 @error('name')
                                     is-invalid
                                 @enderror
                                 "
                                 id="name" type="text" placeholder="Your Name *" data-sb-validations="required"/>
                                <!-- First Simple Way To Show Error Message -->
                                {{-- 
                                    @error('name')
                                    <small class="text-danger">{{ $message }}</small>
                                    @enderror
                                --}}
                                <!-- -->
                                <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                            </div>
                            <div class="form-group">
                                <!-- Email address input-->
                                <input name="email" class="form-control @error('email')
                                    is-invalid
                                @enderror" id="email" type="email" placeholder="Your Email *" data-sb-validations="required,email" />
                                <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                                <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                            </div>
                            <div class="form-group mb-md-0">
                                <!-- Phone number input-->
                                <input name="phone" class="form-control @error('phone')
                                    is-invalid
                                @enderror" id="phone" type="tel" placeholder="Your Phone *" data-sb-validations="required" />
                                <!--
                                <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                                -->
                                @error('phone')
                                    <small class="invalid-feedback">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="form-group mb-md-0 mt-4">
                                <!-- Image input-->
                                <input name="image" class="form-control @error('image')
                                    is-invalid
                                @enderror" id="image" type="file" data-sb-validations="required" />
                                <div class="invalid-feedback" data-sb-feedback="image:required">Image is required.</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0 ">
                                <!-- Message input-->
                                <textarea name="msg" class="form-control @error('msg')
                                    is-invalid
                                @enderror" id="message" placeholder="Your Message *" data-sb-validations="required"></textarea>
                                <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                            </div>
                        </div>
                    </div>
                    <!-- Submit success message-->
                    <!---->
                    <!-- This is what your users will see when the form-->
                    <!-- has successfully submitted-->
                    <div class="d-none" id="submitSuccessMessage">
                        <div class="text-center text-white mb-3">
                            <div class="fw-bolder">Form submission successful!</div>
                            To activate this form, sign up at
                            <br />
                            <a href="https://startbootstrap.com/solution/contact-forms">https://startbootstrap.com/solution/contact-forms</a>
                        </div>
                    </div>
                    <!-- Submit error message-->
                    <!---->
                    <!-- This is what your users will see when there is-->
                    <!-- an error submitting the form-->
                    <div class="d-none" id="submitErrorMessage"><div class="text-center text-danger mb-3">Error sending message!</div></div>
                    <!-- Submit Button-->
                    <div class="text-center"><button class="btn btn-primary btn-xl text-uppercase" id="submitButton" type="submit">Send Message</button></div>
                </form>
            </div>
        </section>
@endsection