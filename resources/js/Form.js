import Axios from 'axios';
import Swal from 'sweetalert2'

Axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

export default class Form {

    static Get(url) {
        return Axios.get(url).catch(function (thrown) {
            return Form._handleError(thrown);
        });
    }

    static Post(url, data) {
        return Axios.post(url, data).then((result) => {
            return Form._handleSuccess(result);
        }).catch(function (thrown) {
            return Form._handleError(thrown);
        });
    }

    static Delete(url) {
        Swal.fire({
            title: 'Are you sure?',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                return Axios.delete(url)
                    .then((result) => {
                        return Form._handleSuccess(result);
                    })
                    .catch((thrown) => {
                        return Form._handleError(thrown);
                    });
            }
        })
    }

    static SubmitForm(form) {
        let data = new FormData(form);
        let url = form.getAttribute('action');

        return Axios.post(url, data);
    }

    static _handleSuccess(result) {
        let message = result.statusText;
        if (result.data.message) {
            message = result.data.message;
        }
        Swal.fire({
            icon: 'success',
            text: message
        })
    }

    static _handleError(error) {
        let message = 'Error';
        if (error.response.data) {
            message = 'Error ' + error.response.status;
            if (error.response.data.message) {
                message = 'Error ' + error.response.status + ': ' + error.response.data.message;
            }
        }

        Swal.fire({
            icon: 'error',
            text: message
        })
    }
}
