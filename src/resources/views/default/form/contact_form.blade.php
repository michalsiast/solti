

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
    <script>
        var messageDelay = 2000;  // How long to display status messages (in milliseconds)

        // Init the form once the document is ready
        $( init );


        // Initialize the form

        function init() {
            $('#contactForm').show().submit( submitForm ).addClass( 'positioned' );

            $('a[href="#contactForm"]').click( function() {
                $('#contactForm').fadeTo( 'slow', .2 );
                $('#contactForm').fadeIn( 'slow', function() {
                    $('#senderName').focus();
                } )

                return false;
            } );
        }

        function submitForm() {
            var contactForm = $(this);

            // Sprawdzenie, czy wszystkie pola są wypełnione
            if (!$('#name').val() || !$('#email').val() || !$('#message').val()) {
                // Jeśli nie, wyświetl komunikat o błędzie w divie #alert
                $('#alert').addClass('alert-failure').text('Proszę wypełnić wszystkie wymagane pola.').show().delay(messageDelay).fadeOut();
            } else {
                // Jeśli tak, wyślij formularz za pomocą Ajax
                $.ajax({
                    url: contactForm.attr('action') + "?ajax=true",
                    type: contactForm.attr('method'),
                    data: contactForm.serialize(),
                    success: submitFinished
                });
            }
            return false;
        }

        function submitFinished(response) {
            response = $.trim(response);
            if (response == "success") {
                // W przypadku sukcesu, wyświetl komunikat sukcesu
                $('#alert').removeClass('alert-failure').addClass('alert-success').text('Wiadomość została wysłana pomyślnie.').show().delay(messageDelay).fadeOut();
                // Opcjonalnie, wyczyść pola formularza
                $('#name').val("");
                $('#email').val("");
                $('#message').val("");
                $('#rule').prop('checked', false);
            } else {
                // W przypadku niepowodzenia, wyświetl komunikat o błędzie
                $('#alert').removeClass('alert-success').addClass('alert-failure').text('Nie udało się wysłać wiadomości. Proszę spróbować ponownie.').show().delay(messageDelay).fadeOut();
            }
        }
    </script>
@endpush
