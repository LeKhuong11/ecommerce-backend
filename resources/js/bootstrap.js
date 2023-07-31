
try {
    window.$ = window.jQuery = require('jquery');
    require('bootstrap');
    require('jquery-ui');
    require('select2/dist/js/select2.js');
    require('@fortawesome/fontawesome-free/js/all');
} catch (e) {}

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
