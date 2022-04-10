@extends('front.layout.main')

@push('title')
    <title>Contact Us</title>
@endpush

@section('main-section')

<!-- Breadcrumb Area Start -->
    <div class="section breadcrumb-area bg-bright">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="breadcrumb-wrapper">
                        <h2 class="breadcrumb-title">Contact Us</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li>Contact Us</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Area End -->

    <!-- Contact Us Section Start -->
    <div class="section section-margin">
        <div class="container">

            <div class="row mb-n10">
                <div class="col-12 col-lg-6 mb-10 order-2 order-lg-1" data-aos="fade-up" data-aos-duration="1000">

                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">Get in Touch</h2>
                    </div>
                    <!-- Section Title End -->

                    <!-- Contact Form Wrapper Start -->
                    <div class="contact-form-wrapper contact-form">
                        <!-- <form action="https://whizthemes.com/mail-php/reza/amber.php" id="contact-form" method="post"> -->
                            {!! Form::open([
                                'url'=>url('save-contact'),
                                'method'=>'post',
                                'id'=>'contact-form1',
                                'enctype'=>'multipart/form-data',
                                'files'=>true,
                                'role'=>'form'
                                ]) !!}
                            <div class="row">
                                <div class="col-12">
                                    <div class="row">

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <!-- <input class="input-item" type="text" placeholder="Your Name *" name="name"> -->
                                                {!! Form::text('name', '', ['class'=>"input-item", 'placeholder'=>"Your Name *"]) !!}
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="input-area mb-4">
                                                <!-- <input class="input-item" type="email" placeholder="Email *" name="email"> -->
                                                {!! Form::email('email', '', ['class'=>"input-item", 'placeholder'=>"Your Email *"]) !!}
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-4">
                                                <!-- <input class="input-item" type="text" placeholder="Subject *" name="subject"> -->
                                                {!! Form::text('subject', '', ['class'=>"input-item", 'placeholder'=>"Subject *"]) !!}
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="input-area mb-4">
                                                {!! Form::file('profile', ['class'=>"input-item"]) !!}
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <div class="input-area mb-8">
                                                <!-- <textarea cols="30" rows="5" class="textarea-item" name="message" placeholder="Message"></textarea> -->
                                                {!! Form::textarea('message', '', ['class'=>"textarea-item", 'placeholder'=>"Your Message *"]) !!}
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <!-- <button type="submit" id="submit" name="submit" class="btn btn-primary btn-hover-dark">Send Message</button> -->
                                            {!! Form::submit('Send Message',  ['id'=>"submit", 'class'=>"btn btn-primary btn-hover-dark"]) !!}
                                        </div>
                                        <p class="col-8 form-message mb-0"></p>

                                    </div>
                                </div>
                            </div>
                            {!! Form::close() !!}
                        <!-- </form> -->
                        <p class="form-messege"></p>
                    </div>
                    <!-- Contact Form Wrapper End -->

                </div>
                <div class="col-12 col-lg-6 mb-10 order-1 order-lg-2" data-aos="fade-up" data-aos-duration="1500">
                    <!-- Section Title Start -->
                    <div class="contact-title pb-3">
                        <h2 class="title">Contact Us</h2>
                    </div>
                    <!-- Section Title End -->
                    <div class="contact-content">
                        <p>Claritas est etiam processus dynamicus, qui sequitur mutationem consuetudium lectorum. Mirum est notare quam littera gothica, quam nunc putamus parum claram anteposuerit litterarum formas human.</p>
                        <address class="contact-block">
                            <ul>
                                <li><i class="fa fa-fax"></i> Your address goes here</li>
                                <li><i class="fa fa-phone"></i> <a href="tel:123-123-456-789">123 123 456 789</a></li>
                                <li><i class="fa fa-envelope-o"></i> <a href="mailto:demo@example.com">demo@example.com </a></li>
                            </ul>
                        </address>

                        <div class="working-time">
                            <h6 class="title">Working Hours</h6>
                            <p>Monday – Saturday:08AM – 22PM</p>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </div>
    <!-- Contact us Section End -->

@endsection
@section('script')

<script type="text/javascript">
    console.log("Contact Us Page");
</script>

@endsection