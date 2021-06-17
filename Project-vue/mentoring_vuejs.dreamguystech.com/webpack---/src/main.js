// The Vue build version to load with the `import` command
// (runtime-only or standalone) has been set in webpack.base.conf with an alias.
import Vue from 'vue'
import App from './App'
import router from './router'
import {
    BarChart
} from 'vue-morris'
import {
    LineChart
} from 'vue-morris'
import LayoutHeader from '@/components/layouts/website/Header'
import LayoutHeader1 from '@/components/layouts/website/Header1'
import LayoutHeaderAdmin from '@/components/layouts/admin/Header'
import LayoutSidebar from '@/components/layouts/admin/Sidebar'
import LayoutFooter from '@/components/layouts/website/Footer'
import SideBar from '@/components/layouts/website/mentor/SideBar'
import SideBar1 from '@/components/layouts/website/mentee/SideBar'
import HomeBanner from '@/components/website/HomeBanner'
import MentoringFlow from '@/components/website/MentoringFlow'
import PopularMentors from '@/components/website/PopularMentors'
import LearningPath from '@/components/website/LearningPath'
import Blogs from '@/components/website/Blogs'
import Statistics from '@/components/website/Statistics'
import Loader from '@/components/website/Loader'
import LatestPosts from '@/components/website/mentor/LatestPosts'
import Tags from '@/components/website/mentor/Tags'
import BlogCategories from '@/components/website/mentor/BlogCategories'
import SearchBar from '@/components/website/mentor/SearchBar'

/** Breadcrumbs**/
import Breadcrumb from '@/components/breadcrumb/Dashboard'
import Breadcrumb1 from '@/components/breadcrumb/MyBookings'
import Breadcrumb2 from '@/components/breadcrumb/ScheduleTimings'
import Breadcrumb3 from '@/components/breadcrumb/MenteeList'
import Breadcrumb4 from '@/components/breadcrumb/MenteeProfile'
import Breadcrumb5 from '@/components/breadcrumb/Blog'
import Breadcrumb6 from '@/components/breadcrumb/BlogDetails'
import Breadcrumb7 from '@/components/breadcrumb/AddBlog'
import Breadcrumb8 from '@/components/breadcrumb/EditBlog'
import Breadcrumb9 from '@/components/breadcrumb/Invoices'
import Breadcrumb10 from '@/components/breadcrumb/ProfileSettings'
import Breadcrumb11 from '@/components/breadcrumb/Reviews'
import Breadcrumb12 from '@/components/breadcrumb/SearchResults'
import Breadcrumb13 from '@/components/breadcrumb/MentorProfile'
import Breadcrumb14 from '@/components/breadcrumb/Checkout'
import Breadcrumb15 from '@/components/breadcrumb/BookingSuccess'
import Breadcrumb16 from '@/components/breadcrumb/Favourites'
import Breadcrumb17 from '@/components/breadcrumb/ChangePassword'
import Breadcrumb18 from '@/components/breadcrumb/BlogList'
import Breadcrumb19 from '@/components/breadcrumb/BlogGrid'
import Breadcrumb20 from '@/components/breadcrumb/Components'
import Breadcrumb21 from '@/components/breadcrumb/BlankPage'
import Breadcrumb22 from '@/components/breadcrumb/InvoiceView'
import Breadcrumb23 from '@/components/breadcrumb/Booking'
import Breadcrumb24 from '@/components/breadcrumb/Appointments'

import carousel from 'vue-owl-carousel'
let Bootstrap = require('bootstrap')
import 'bootstrap/dist/css/bootstrap.css'
import './assets/fontawesome/css/fontawesome.min.css'
import './assets/fontawesome/css/all.min.css'

// if(window.location.href.includes("admin")) {
//   require('./assets/css/admin/style.css');
// }else {
//   require('./assets/css/website/style.css');
// }
import Raphael from 'raphael/raphael'
global.Raphael = Raphael
Vue.config.productionTip = false

/*Global Components */
Vue.component('layout-header', LayoutHeader);
Vue.component('layout-header1', LayoutHeader1);
Vue.component('layout-headeradmin', LayoutHeaderAdmin);
Vue.component('sidebar', SideBar);
Vue.component('sidebar1', SideBar1);
Vue.component('layout-footer', LayoutFooter);
Vue.component('layout-sidebar', LayoutSidebar);
Vue.component('home-banner', HomeBanner);
Vue.component('mentoring-flow', MentoringFlow);
Vue.component('popular-mentors', PopularMentors);
Vue.component('learning-path', LearningPath);
Vue.component('statistics', Statistics);
Vue.component('blogs', Blogs);
Vue.component('carousel', carousel);
Vue.component('latest-posts', LatestPosts);
Vue.component('search-bar', SearchBar);
Vue.component('blog-categories', BlogCategories);
Vue.component('tags', Tags);
Vue.component('loader', Loader);

/** Breadcrumbs **/
Vue.component('breadcrumb', Breadcrumb);
Vue.component('breadcrumb1', Breadcrumb1);
Vue.component('breadcrumb2', Breadcrumb2);
Vue.component('breadcrumb3', Breadcrumb3);
Vue.component('breadcrumb4', Breadcrumb4);
Vue.component('breadcrumb5', Breadcrumb5);
Vue.component('breadcrumb6', Breadcrumb6);
Vue.component('breadcrumb7', Breadcrumb7);
Vue.component('breadcrumb8', Breadcrumb8);
Vue.component('breadcrumb9', Breadcrumb9);
Vue.component('breadcrumb10', Breadcrumb10);
Vue.component('breadcrumb11', Breadcrumb11);
Vue.component('breadcrumb12', Breadcrumb12);
Vue.component('breadcrumb13', Breadcrumb13);
Vue.component('breadcrumb14', Breadcrumb14);
Vue.component('breadcrumb15', Breadcrumb15);
Vue.component('breadcrumb16', Breadcrumb16);
Vue.component('breadcrumb17', Breadcrumb17);
Vue.component('breadcrumb18', Breadcrumb18);
Vue.component('breadcrumb19', Breadcrumb19);
Vue.component('breadcrumb20', Breadcrumb20);
Vue.component('breadcrumb21', Breadcrumb21);
Vue.component('breadcrumb22', Breadcrumb22);
Vue.component('breadcrumb23', Breadcrumb23);
Vue.component('breadcrumb24', Breadcrumb24);

new Vue({
    el: '#app',
    router,
    components: {
        App
    },
    template: '<App/>'
})



// WEBPACK FOOTER //
// ./src/main.js