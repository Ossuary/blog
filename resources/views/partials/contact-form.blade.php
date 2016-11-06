<section class="contact-form-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">

                <h1 class="h1 header-title">Contact me</h1>
                <p class="header-divider"></p>
                <h4 class="h4 header-sub-title">Get in touch, let's build something together!</h4>

                <form class="contact-form" action="{{ url('contacts') }}" method="POST">
                    {{ csrf_field() }}
                    @include('partials.messages')
                    <div class="form-group">
                        <label for="name" name="name"></label>
                        <input id="name" name="name" class="form-control input-lg" placeholder="{{ trans('language.name') }}">
                    </div>

                    <div class="form-group">
                        <label for="email" name="email"></label>
                        <input id="email" name="email" class="form-control input-lg" placeholder="{{ trans('language.email') }}">
                    </div>

                    <div class="form-group">
                        <label for="message" name="message"></label>
                        <textarea id="message" name="message" class="form-control input-lg" placeholder="Type your message here." rows="5"></textarea>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="Send" class="btn btn-lg btn-1">
                    </div>

                </form>

            </div>
        </div>
    </div>
</section>