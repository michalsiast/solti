

<form id="contactForm" method="POST" class="contact__form">
    <div class="row gutter-20">
        <div class="col-md-6">
            <div class="form-grp">
                <label for="name">Imię *</label>
                <input id="name" type="text" name="name" placeholder="Twoje imię*" class="form-control" required="">
                <div class="invalid-feedback"></div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="form-grp">
                <label for="email">Email *</label>
                <input id="email" type="email" name="email" placeholder="Twój adres email *" class="form-control" required="">
                <div class="invalid-feedback"></div>
            </div>
        </div>
    </div>
    <div class="form-grp">
        <label for="message">Wiadomość *</label>
        <textarea id="message" name="message" rows="5" placeholder="Twoja wiadomość *" class="form-control" required=""></textarea>
        <div class="invalid-feedback"></div>
    </div>

    <div class="form-group">
        <div class="form-check">
            <input id="rule" type="checkbox" name="rule" placeholder="Rule" class="form-check-input">
            <label for="rule" class="form-check-label">{!! getConstField('contact_form_rule') !!}</label>
            <div class="invalid-feedback"></div>
        </div>
    </div>

    <div class="form-group">
        <div class="g-recaptcha" data-sitekey="{{$siteKey}}"></div>
        <div class="invalid-feedback"></div>
    </div>

    <input type="submit" value="Wyślij wiadomość" class="btn btn-two">

    <div id="alert" class="alert"></div>
</form>



@push('scripts.body.bottom')
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        document.getElementById('contactForm').addEventListener('submit', e => {
            e.preventDefault();
            submitForm(e.target);
        })
    </script>
@endpush
