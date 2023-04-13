<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.css'>
  <style>
    .loading-message {
      color: #fff;
    }
  </style>

</head>

<body>

  <div id="app">
    <loading-screen :is-loading="isLoading"></loading-screen>
  </div>

  <script src='https://cdnjs.cloudflare.com/ajax/libs/vue/2.2.1/vue.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/please-wait/0.0.5/please-wait.min.js'></script>

  <script>
    Vue.component('loading-screen', {
      template: '<span :title="isLoading"></span>',
      props: ['isLoading'],
      data() {
        return {
          pleaseWaitInstance: null
        };

      },
      mounted() {
        this.updatePleaseWait();
      },
      beforeUpdate() {
        this.updatePleaseWait();
      },
      methods: {
        updatePleaseWait() {
          if (this.isLoading && this.pleaseWaitInstance == null) {
            this.pleaseWaitInstance = pleaseWait({
              logo: '../images/LOGOS/logoP.png',
              backgroundColor: '#030B13',
            });
          }
          if (!this.isLoading && this.pleaseWaitInstance != null) {
            this.pleaseWaitInstance.finish();
          }
        }
      }
    });



    new Vue({
      el: '#app',
      data: {
        isLoading: true
      },

      mounted() {
        setTimeout(() => {
          this.isLoading = false;
        }, 5000);
      }
    });
  </script>