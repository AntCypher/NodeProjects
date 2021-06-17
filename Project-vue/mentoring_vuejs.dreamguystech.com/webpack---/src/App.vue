<template>
  <div id="app">
    <loader></loader>
     <router-view :key="$route.fullPath"> </router-view>
  </div>
</template>

<script>
export default {
  name: 'App',
   beforeCreate() {
      this.$nextTick(function () {
          if(window.location.pathname.includes("admin")) {
            var head  = document.getElementsByTagName('head')[0];
            var link  = document.createElement('link');
            link.id   = "mycss";
            link.rel  = 'stylesheet';
            link.type = 'text/css';
            link.href = 'https://mentoring-vuejs.dreamguystech.com/template/static/css/admin/style.css';
            head.appendChild(link);
            } else  {
            var head  = document.getElementsByTagName('head')[0];
            var link  = document.createElement('link');
            link.id   = "mycss1";
            link.rel  = 'stylesheet';
            link.type = 'text/css';
            link.href = 'https://mentoring-vuejs.dreamguystech.com/template/static/css/website/style.css';
            head.appendChild(link);
            }
      })
  },
}
</script>



// WEBPACK FOOTER //
// src/App.vue