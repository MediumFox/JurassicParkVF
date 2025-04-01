// const nameCheck = /^[-_a-zA-Z0-9]{4,22}$/;
// const tokenCheck = /^[-_\/+a-zA-Z0-9]{24,}$/;

// document.addEventListener('submit', function (event) {
//     generateCsrfToken(event.target);
// }, true);


// document.addEventListener('turbo:submit-start', function (event) {
//     const h = generateCsrfHeaders(event.detail.formSubmission.formElement);
//     Object.keys(h).map(function (k) {
//         event.detail.formSubmission.fetchRequest.headers[k] = h[k];
//     });
// });

// document.addEventListener('turbo:submit-end', function (event) {
//     removeCsrfToken(event.detail.formSubmission.formElement);
// });

// export function generateCsrfToken (formElement) {
//     const csrfField = formElement.querySelector('input[data-controller="csrf-protection"], input[name="_csrf_token"]');

//     if (!csrfField) {
//         return;
//     }

//     let csrfCookie = csrfField.getAttribute('data-csrf-protection-cookie-value');
//     let csrfToken = csrfField.value;

//     if (!csrfCookie && nameCheck.test(csrfToken)) {
//         csrfField.setAttribute('data-csrf-protection-cookie-value', csrfCookie = csrfToken);
//         csrfField.defaultValue = csrfToken = btoa(String.fromCharCode.apply(null, (window.crypto || window.msCrypto).getRandomValues(new Uint8Array(18))));
//         csrfField.dispatchEvent(new Event('change', { bubbles: true }));
//     }

//     if (csrfCookie && tokenCheck.test(csrfToken)) {
//         const cookie = csrfCookie + '_' + csrfToken + '=' + csrfCookie + '; path=/; samesite=strict';
//         document.cookie = window.location.protocol === 'https:' ? '__Host-' + cookie + '; secure' : cookie;
//     }
// }

// export function generateCsrfHeaders (formElement) {
//     const headers = {};
//     const csrfField = formElement.querySelector('input[data-controller="csrf-protection"], input[name="_csrf_token"]');

//     if (!csrfField) {
//         return headers;
//     }

//     const csrfCookie = csrfField.getAttribute('data-csrf-protection-cookie-value');

//     if (tokenCheck.test(csrfField.value) && nameCheck.test(csrfCookie)) {
//         headers[csrfCookie] = csrfField.value;
//     }

//     return headers;
// }

// export function removeCsrfToken (formElement) {
//     const csrfField = formElement.querySelector('input[data-controller="csrf-protection"], input[name="_csrf_token"]');

//     if (!csrfField) {
//         return;
//     }

//     const csrfCookie = csrfField.getAttribute('data-csrf-protection-cookie-value');

//     if (tokenCheck.test(csrfField.value) && nameCheck.test(csrfCookie)) {
//         const cookie = csrfCookie + '_' + csrfField.value + '=0; path=/; samesite=strict; max-age=0';

//         document.cookie = window.location.protocol === 'https:' ? '__Host-' + cookie + '; secure' : cookie;
//     }
// }

// export default 'csrf-protection-controller';