
try {
    
    require('bootstrap');
    require('@fortawesome/fontawesome-free/js/all');
} catch (e) {}

import axios from 'axios';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
