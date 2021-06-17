<template>
    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner">
            <vue-custom-scrollbar class="scroll-area"  :settings="settings" @ps-scroll-y="scrollHanle">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title"> 
                        <span><home-icon size="1x" class="custom-class"></home-icon> Main</span>
                    </li>
                    <li> 
                        <router-link to="/admin/index"><span>Dashboard</span></router-link>
                    </li>
                    <li> 
                        <router-link to="/admin/mentor"><span>Mentor</span></router-link>
                    </li>
                    <li> 
                        <router-link to="/admin/mentee"><span>Mentee</span></router-link>
                    </li>
                    <li> 
                        <router-link to="/admin/bookinglist"><span>Booking List</span></router-link>
                    </li>
                    <li> 
                        <router-link to="/admin/categories"><span>Categories</span></router-link>
                    </li>
                    <li> 
                        <router-link to="/admin/transactionslist"><span>Transactions</span></router-link>
                    </li>
                    <li> 
                        <router-link to="/admin/settings"><span>Settings</span></router-link>
                    </li>
                    <li class="submenu">
                        <a href="#"><span> Reports</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><router-link to="/admin/invoicereport">Invoice Reports</router-link></li>
                        </ul>
                    </li>
                    <li class="menu-title"> 
                        <span><file-text-icon size="1x" class="custom-class"></file-text-icon> Pages</span>
                    </li>
                    <li> 
                        <router-link to="/admin/profile"><span>My Profile</span></router-link>
                    </li>
                    <li class="submenu"> 
                        <a href="#"><span>Blog</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><router-link to="/admin/blog"> Blog </router-link></li>
                            <li><router-link to="/admin/blogdetails"> Blog Details </router-link></li>
                            <li><router-link to="/admin/addblog"> Add Blog </router-link></li>
                            <li><router-link to="/admin/editblog"> Edit Blog </router-link></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><span> Authentication </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><router-link to="/admin/login"> Login </router-link></li>
                            <li><router-link to="/admin/register"> Register </router-link></li>
                            <li><router-link to="/admin/forgotpassword"> Forgot Password </router-link></li>
                            <li><router-link to="/admin/lockscreen"> Lock Screen </router-link></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><span> Error Pages </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><router-link to="/admin/error404">404 Error </router-link></li>
                            <li><router-link to="/admin/error500">500 Error </router-link></li>
                        </ul>
                    </li>
                    <li> 
                        <router-link to="/admin/blankpage"><span>Blank Page</span></router-link>
                    </li>
                    <li class="menu-title"> 
                        <span> <star-icon size="1x" class="custom-class"></star-icon> UI Interface</span>
                    </li>
                    <li> 
                        <router-link to="/admin/components"><span>Components</span></router-link>
                    </li>
                    <li class="submenu">
                        <a href="#"><span> Forms </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><router-link to="/admin/formbasicinputs">Basic Inputs </router-link></li>
                            <li><router-link to="/admin/forminputgroups">Input Groups </router-link></li>
                            <li><router-link to="/admin/formhorizontal">Horizontal Form </router-link></li>
                            <li><router-link to="/admin/formvertical"> Vertical Form </router-link></li>
                            <li><router-link to="/admin/formmask"> Form Mask </router-link></li>
                            <li><router-link to="/admin/formvalidation"> Form Validation </router-link></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="#"><span> Tables </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><router-link to="/admin/tablesbasic">Basic Tables </router-link></li>
                            <li><router-link to="/admin/datatables">Data Table </router-link></li>
                        </ul>
                    </li>
                    <li class="submenu">
                        <a href="javascript:void(0);"><span>Multi Level</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li class="submenu">
                                <a href="javascript:void(0);"> <span>Level 1</span> <span class="menu-arrow"></span></a>
                                <ul style="display: none;">
                                    <li><a href="javascript:void(0);"><span>Level 2</span></a></li>
                                    <li class="submenu">
                                        <a href="javascript:void(0);"> <span> Level 2</span> <span class="menu-arrow"></span></a>
                                        <ul style="display: none;">
                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                            <li><a href="javascript:void(0);">Level 3</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="javascript:void(0);"> <span>Level 2</span></a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="javascript:void(0);"> <span>Level 1</span></a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </vue-custom-scrollbar>
        </div>
    </div>
    <!-- /Sidebar -->
</template>
<script>
      import vueCustomScrollbar from 'vue-custom-scrollbar'
     import "vue-custom-scrollbar/dist/vueScrollbar.css"
     import { HomeIcon } from 'vue-feather-icons'
     import { FileTextIcon } from 'vue-feather-icons'
     import { StarIcon } from 'vue-feather-icons'
     export default {
  components: {
    vueCustomScrollbar,
    HomeIcon,
    FileTextIcon,
    StarIcon
  },
  mounted() {
    var $wrapper = $('.main-wrapper');
	var $pageWrapper = $('.page-wrapper');
      // Sidebar
	
	var Sidemenu = function() {
		this.$menuItem = $('#sidebar-menu a');
	};
      $('#sidebar-menu a').on('click', function (e) {
        if ($(this).parent().hasClass('submenu')) {
          e.preventDefault();
        }
        if (!$(this).hasClass('subdrop')) {
          $('ul', $(this).parents('ul:first')).slideUp(350);
          $('a', $(this).parents('ul:first')).removeClass('subdrop');
          $(this).next('ul').slideDown(350);
          $(this).addClass('subdrop');
        } else if ($(this).hasClass('subdrop')) {
          $(this).removeClass('subdrop');
          $(this).next('ul').slideUp(350);
        }
      });
      $('#sidebar-menu ul li.submenu a.active').parents('li:last').children('a:first').addClass('active').trigger('click');

	
	// Mobile menu sidebar overlay
	
	$('body').append('<div class="sidebar-overlay"></div>');
	$(document).on('click', '#mobile_btn', function() {
		$wrapper.toggleClass('slide-nav');
		$('.sidebar-overlay').toggleClass('opened');
		$('html').addClass('menu-opened');
		return false;
	});
	
	// Sidebar overlay
	
	$(".sidebar-overlay").on("click", function () {
		$wrapper.removeClass('slide-nav');
		$(".sidebar-overlay").removeClass("opened");
		$('html').removeClass('menu-opened');
	});
	
    },
  computed: {
        currentpage() {
          return this.$route.path;
        },
      },
  data() {
      return {
        settings: {
suppressScrollX: true,
},
        activeClass: 'active',
      };
              //  isactive : true
    },
    methods: {
    scrollHanle(evt) {
      console.log(evt)
    }
  },
}
</script>
<style>
    .scroll-area {
      position: relative;
      margin: auto;
      height: calc(100vh - 60px);
      background-color: transparent !important;
  }
  .sidebar-menu ul li a.active {
    background-color: transparent;
    color: #1879cd;
}
.sidebar-menu ul ul a.active {
    color: #1879cd;
    text-decoration: underline;
    background-color: unset;
}
</style>


// WEBPACK FOOTER //
// src/components/layouts/admin/Sidebar.vue