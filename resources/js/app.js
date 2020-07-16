// window.$ = window.jQuery = require('jquery/dist/jquery.slim');
import {Popover, Tooltip} from '@coreui/coreui';
import Form from "./Form";

document.querySelectorAll('[data-toggle="tooltip"]').forEach(function (element) {
    new Tooltip(element);
});

document.querySelectorAll('[data-toggle="popover"]').forEach(function (element) {
    new Popover(element);
});

document.querySelectorAll('[data-action]').forEach(function (element) {
    let url = element.getAttribute('data-url')
    let action = element.getAttribute('data-action')
    let data = element.getAttribute('data-data')
    let title = element.getAttribute('data-title')

    element.addEventListener('click', function (el) {
        if (action === 'get') {
            return new Form.Get(url);
        }
        if (action === 'post') {
            return new Form.Post(url, data);
        }
        if (action === 'delete') {
            return new Form.Delete(url, title);
        }
    });
});

let form = document.getElementById("form_shorten_url");
if (form) {
    form.addEventListener("submit", function (event) {
        event.preventDefault();

        // Recaptcha
        if (typeof RECAPTCHA_SITE_KEY !== 'undefined') {
            if (document.getElementById('g-recaptcha-response')) {
                (document.getElementById('g-recaptcha-response')).remove();
            }

            let recaptcha = document.createElement('input');
            recaptcha.setAttribute('type', 'hidden');
            recaptcha.setAttribute('name', 'g-recaptcha-response');
            recaptcha.setAttribute('id', 'g-recaptcha-response');

            grecaptcha.ready(function () {
                grecaptcha.execute(RECAPTCHA_SITE_KEY).then(function (token) {
                    recaptcha.setAttribute('value', token);
                    form.appendChild(recaptcha);
                });
            });
        }

        let button = document.getElementById("btn_shorten");
        let output = document.getElementById("short_url_output");
        let spinner = document.createElement('i');
        spinner.classList.add('fa', 'fa-spinner', 'fa-spin', 'ml-2')

        output.classList.add('d-none');
        button.setAttribute('disabled', 'disabled')
        button.appendChild(spinner);

        Form.SubmitForm(form).then((result) => {
            output.classList.remove('d-none');
            output.querySelectorAll('#short_url')[0].setAttribute('value', result.data.url);
        }).catch(function (thrown) {
            if (thrown.response.data.errors) {
                thrown.response.data.message = Object.values(thrown.response.data.errors)[0];
            }
            return Form._handleError(thrown);
        }).finally((response) => {
            button.removeAttribute('disabled')
            button.removeChild(spinner);
        });
    });
}
