function sendMail() {
        var link =
          "mailto:ousseneoued@gmail.com" +
          "?cc=eouompeba@gmail.com" +
          "&subject=" +
          encodeURIComponent(document.getElementById("msg_subject").value) +
          "&body=" +
          encodeURIComponent(document.getElementById("message").value);
        window.location.href = link;
      }