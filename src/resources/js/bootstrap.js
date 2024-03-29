window._ = require('lodash');

/**
 * We'll load the axios HTTP library which allows us to easily issue requests
 * to our Laravel back-end. This library automatically handles sending the
 * CSRF token as a header based on the value of the "XSRF" token cookie.
 */

window.axios = require('axios');
require('sponge-helpers');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';
window.Popper = require('popper.js').default;
window.bootstrap = require('bootstrap/dist/js/bootstrap');
window.lozad = require('lozad');