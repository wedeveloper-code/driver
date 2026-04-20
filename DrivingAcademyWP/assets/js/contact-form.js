(function () {
  'use strict';

  var form = document.getElementById('daw-contact-form');
  if (!form) return;

  var captchaQuestion = document.getElementById('captcha-question');
  var captchaInput = document.getElementById('cf-captcha');
  var captchaToken = document.getElementById('cf-captcha-token');
  var messageBox = document.getElementById('form-status');
  var submitBtn = form.querySelector('button[type="submit"]');
  var isSubmitting = false;

  if (!captchaQuestion || !captchaInput || !captchaToken || !messageBox || !submitBtn) return;

  function loadCaptcha() {
    if (typeof dawAjax === 'undefined') return;
    var xhr = new XMLHttpRequest();
    xhr.open('POST', dawAjax.url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      if (xhr.status === 200) {
        try {
          var data = JSON.parse(xhr.responseText);
          if (data.success && data.data) {
            captchaQuestion.textContent = data.data.question;
            captchaToken.value = data.data.token;
          }
        } catch (e) {
          captchaQuestion.textContent = 'Captcha unavailable. Please refresh.';
        }
      }
    };
    xhr.onerror = function () {
      captchaQuestion.textContent = 'Captcha unavailable. Please refresh.';
    };
    xhr.send('action=daw_captcha_generate');
  }

  loadCaptcha();

  function showMessage(text, type) {
    messageBox.textContent = text;
    messageBox.className = 'form-status ' + type;
  }

  function hideMessage() {
    messageBox.textContent = '';
    messageBox.className = 'form-status';
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    if (isSubmitting) return;
    hideMessage();

    var name = (form.querySelector('[name="name"]') || {}).value || '';
    var email = (form.querySelector('[name="email"]') || {}).value || '';
    var phone = (form.querySelector('[name="phone"]') || {}).value || '';
    var subject = (form.querySelector('[name="subject"]') || {}).value || '';
    var message = (form.querySelector('[name="message"]') || {}).value || '';
    var captcha = captchaInput.value.trim();

    name = name.trim();
    email = email.trim();
    message = message.trim();

    if (!name || !email || !message) {
      showMessage('Please fill in all required fields.', 'error');
      return;
    }

    if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email)) {
      showMessage('Please enter a valid email address.', 'error');
      return;
    }

    if (!captcha) {
      showMessage('Please answer the CAPTCHA question.', 'error');
      return;
    }

    isSubmitting = true;
    submitBtn.disabled = true;
    var originalHTML = submitBtn.innerHTML;
    submitBtn.textContent = 'Sending...';

    var params = 'action=daw_contact'
      + '&nonce=' + encodeURIComponent(dawAjax.nonce)
      + '&name=' + encodeURIComponent(name)
      + '&email=' + encodeURIComponent(email)
      + '&phone=' + encodeURIComponent(phone)
      + '&subject=' + encodeURIComponent(subject)
      + '&message=' + encodeURIComponent(message)
      + '&captcha=' + encodeURIComponent(captcha)
      + '&captcha_token=' + encodeURIComponent(captchaToken.value);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', dawAjax.url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      isSubmitting = false;
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalHTML;

      try {
        var data = JSON.parse(xhr.responseText);
        if (data.success) {
          showMessage(data.data.message || 'Message sent successfully!', 'success');
          form.reset();
          loadCaptcha();
        } else {
          showMessage((data.data && data.data.message) || 'An error occurred.', 'error');
          loadCaptcha();
        }
      } catch (e) {
        showMessage('Unexpected server response. Please try again.', 'error');
      }
    };
    xhr.onerror = function () {
      isSubmitting = false;
      submitBtn.disabled = false;
      submitBtn.innerHTML = originalHTML;
      showMessage('Network error. Please try again.', 'error');
    };
    xhr.send(params);
  });
})();
