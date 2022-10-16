<section id="contact">
    <h2 class="text-center text-light"><strong>Contact us</strong></h2>
        <p class="text-center w-responsive mx-auto mb-5 text-light">Do you have any questions? Please do not hesitate to contact us directly. Our team will come back to you within
        a matter of hours to help you.</p>
    <div class="card shadow p-3 mb-5 bg-body rounded m-5">
        @if(Session::has("message_sent"))
        <div class="alert alert-success" role="alert">
            {{Session::get("message_sent")}} 
        </div>
        @endif
        <div class="container mt-3 mb-3 p-4">
            <div class="row">
                <div class="col-md-6">
                        <form id="contact-form" name="contact-form" enctype="multipart/form-data" action="{{route('sendEmail')}}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-2">
                                        <input type="text" id="name" name="name" class="form-control" required>
                                        <label for="name" class="">Your name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-2">
                                        <input type="text" id="email" name="email" class="form-control" required>
                                        <label for="email" class="">Your email</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="md-form mb-2">
                                        <input type="tel" id="phone" name="phone" class="form-control" required>
                                        <label for="phone" class="">Your Phone</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="md-form mb-2">
                                        <select id="subject" name="subject" class="form-select" aria-label="Default select example" required>
                                            <option  selected value="ID Elite "> ID Elite  </option>
                                            <option value="Airbone"> Airbone </option>
                                            <option value="Add-ON"> Add-ON</option>
                                            <option value="IP VPN"> IP VPN </option>
                                            <option value="SDWAN"> SDWAN </option>
                                            <option value="Neutral Host Infrastructure"> Neutral Host Infrastructure </option>
                                          

                                        </select>
                                        <label for="subject" class=""> Services Solutions</label>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="md-form">
                                        <textarea type="text" id="message" name="message" rows="2" class="form-control md-textarea"></textarea>
                                        <label for="message">Your message</label>
                                    </div>

                                </div>
                            </div>
                            <div class="row mt-2">
                                <button type="submit" class="btn-send text-center">Send</button>
                            </div>
                        </form>
                        <div class="status"></div>
                </div>

            <div class="col-md-6">
                <div class="card">
                    <div class="card-body" id="gcanvas">
                        <div class="mapouter embed-responsive embed-responsive-16by9">
                            <div class="gmap_canvas text-center">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1983.1998441795943!2d106.81677536347657!3d-6.210899299999982!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5aeb34c6375%3A0xddbd285cf2ff8f8d!2sSahid%20Sudirman%20Center!5e0!3m2!1sen!2sid!4v1663858669584!5m2!1sen!2sid" 
                           style="border:0;" allowfullscreen id="gmap_canvas"
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>