@extends('master')

<!-- @section('title', $title) -->

@section('main')

<section class="section-contact">
        <div class="container contact-container">
            <div class="contact-header">
                <h1>Contact Us</h1>
            </div>
            <div class="row contact-row">
                <div class="col-md-12">
                    <div class="contact-map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3623.072881726727!2d90.40262341433854!3d24.758690155427878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x37564f58189de449%3A0x43d950607dec7ccf!2sMAXSOP!5e0!3m2!1sen!2sbd!4v1606370804047!5m2!1sen!2sbd"
                            width="100%" height="450px" frameborder="0" style="border:0;" allowfullscreen=""
                            aria-hidden="false" tabindex="0"></iframe>
                    </div>
                </div>
            </div>

            <div class="row contact-details-row">
                <div class="col-md-6 contact-details-col">
                    <div class="details-text">
                        <h3>Phone</h3>
                        <p>+1 650-333-0000</p>
                        <h3>Email</h3>
                        <p>photography@pozo.com</p>
                        <h3>Address</h3>
                        <p>340 North First Street, San Jose, CA 95112, US.</p>
                    </div>

                </div>
                <div class="col-md-6 contact-details-col">
                    <div class="detail-head">
                        <h2>Drop me a line!</h2>
                    </div>

                    <form class="row" method="post">
                        <div class="col-sm-6">
                            <div class="form-component">
                                <input type="text" placeholder="Full Name" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-component">
                                <input type="email" placeholder="Email/Phone" required>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-component">
                                <textarea name="message" id="message" cols="40" rows="4"
                                    placeholder="Message..."></textarea>
                            </div>
                        </div>

                        <div class="col-sm-12">

                            <button type="submit">Say Hello!</button>

                        </div>
                    </form>

                </div>
            </div>
        </div>

    </section>


@endsection