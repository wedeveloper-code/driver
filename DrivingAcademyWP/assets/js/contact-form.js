(function () {
  'use strict';

  var form = document.getElementById('dawContactForm');
  if (!form) return;

  var captchaQuestion = document.getElementById('captchaQuestion');
  var captchaInput = document.getElementById('captchaAnswer');
  var captchaToken = document.getElementById('captchaToken');
  var messageBox = document.getElementById('formMessage');
  var submitBtn = form.querySelector('button[type="submit"]');

  function loadCaptcha() {
    var xhr = new XMLHttpRequest();
    xhr.open('POST', dawAjax.url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      if (xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);
        if (data.success) {
          captchaQuestion.textContent = data.data.question;
          captchaToken.value = data.data.token;
        }
      }
    };
    xhr.send('action=daw_captcha_generate');
  }

  loadCaptcha();

  function showMessage(text, type) {
    messageBox.textContent = text;
    messageBox.className = 'form-message form-message--' + type;
    messageBox.style.display = 'block';
  }

  function hideMessage() {
    messageBox.style.display = 'none';
  }

  form.addEventListener('submit', function (e) {
    e.preventDefault();
    hideMessage();

    var name = form.querySelector('[name="name"]').value.trim();
    var email = form.querySelector('[name="email"]').value.trim();
    var message = form.querySelector('[name="message"]').value.trim();
    var captcha = captchaInput.value.trim();

    if (!name || !email || !message) {
      showMessage('Please fill in all required fields.', 'error');
      return;
    }

    var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailRegex.test(email)) {
      showMessage('Please enter a valid email address.', 'error');
      return;
    }

    if (!captcha) {
      showMessage('Please answer the CAPTCHA question.', 'error');
      return;
    }

    submitBtn.disabled = true;
    var originalText = submitBtn.textContent;
    submitBtn.textContent = 'Sending...';

    var params = 'action=daw_contact'
      + '&nonce=' + encodeURIComponent(dawAjax.nonce)
      + '&name=' + encodeURIComponent(name)
      + '&email=' + encodeURIComponent(email)
      + '&message=' + encodeURIComponent(message)
      + '&captcha=' + encodeURIComponent(captcha)
      + '&captcha_token=' + encodeURIComponent(captchaToken.value);

    var xhr = new XMLHttpRequest();
    xhr.open('POST', dawAjax.url, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onload = function () {
      submitBtn.disabled = false;
      submitBtn.textContent = originalText;

      if (xhr.status === 200) {
        var data = JSON.parse(xhr.responseText);
        if (data.success) {
          showMessage(data.data.message, 'success');
          form.reset();
          loadCaptcha();
        } else {
          showMessage(data.data.message || 'An error occurred.', 'error');
          loadCaptcha();
        }
      } else {
        showMessage('Network error. Please try again.', 'error');
      }
    };
    xhr.onerror = function () {
      submitBtn.disabled = false;
      submitBtn.textContent = originalText;
      showMessage('Network error. Please try again.', 'error');
    };
    xhr.send(params);
  });
})();
