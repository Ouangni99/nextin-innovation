<x-web.app-layout>

    <x-web.sub-header />

    <!-- start contact-pg-content -->
    <section class="contact-pg-content section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-md-8 col-md-offset-2">
                    <div class="section-title-s3">
                        <h2>Prenons contact avec nous</h2>
                        {{-- <p>Lorem ipsum dolor sit amet, consectetur adipisc ing elit, sed do eiusmod tempor incididun ut
                            labore et dolore. Perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium.</p> --}}
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col col-md-6">
                    <div class="contact-location-map" id="map"></div>
                </div>
                <div class="col col-md-6">
                    <div class="contact-form">
                        <form method="post" id="contact-form-s2" class="form row contact-validation-active">
                            <div class="col col-xs-12">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="Your Name">
                            </div>
                            <div class="col col-xs-12">
                                <input type="email" class="form-control" id="email" name="email"
                                    placeholder="Your email address">
                            </div>
                            <div class="col col-xs-12">
                                <input type="text" class="form-control" id="location" name="location"
                                    placeholder="Your location">
                            </div>
                            <div class="col col-xs-12">
                                <textarea class="form-control" name="message" placeholder="Write.."></textarea>
                            </div>
                            <div class="col col-xs-12 submit-btn">
                                <button type="submit">Submit</button>
                                <div id="loader">
                                    <i class="fa fa-refresh fa-spin fa-3x fa-fw"></i>
                                </div>
                            </div>
                            <div class="error-handling-messages">
                                <div id="success">Thank you</div>
                                <div id="error"> Error occurred while sending email. Please try again later. </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- end row -->
        </div> <!-- end container -->
    </section>
    <!-- end contact-pg-content -->

</x-web.app-layout>
