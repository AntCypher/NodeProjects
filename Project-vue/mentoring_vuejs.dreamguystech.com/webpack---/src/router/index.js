import Vue from 'vue'
import Router from 'vue-router'

/** For  Website**/
import Index from '@/components/website/Index'
import MentorDashboard from '@/components/website/mentor/Index'
import BookingSummary from '@/components/website/mentor/BookingSummary'
import ScheduleTimings from '@/components/website/mentor/ScheduleTimings'
import MentorChat from '@/components/website/mentor/Chat'
import MenteeList from '@/components/website/mentor/MenteeList'
import MenteeProfile from '@/components/website/mentor/MenteeProfile'
import MentorBlog from '@/components/website/mentor/Blog'
import MentorBlogDetails from '@/components/website/mentor/BlogDetails'
import MentorAddBlog from '@/components/website/mentor/AddBlog'
import MentorEditBlog from '@/components/website/mentor/EditBlog'
import Invoices from '@/components/website/mentor/Invoices'
import InvoiceView from '@/components/website/mentor/InvoiceView'
import MentorProfileSettings from '@/components/website/mentor/ProfileSettings'
import Reviews from '@/components/website/mentor/Reviews'
import MentorRegister from '@/components/website/mentor/Register'
import SearchMentor from '@/components/website/mentee/SearchMentor'
import MentorProfile from '@/components/website/mentee/MentorProfile'
import Bookings from '@/components/website/mentee/Bookings'
import Checkout from '@/components/website/mentee/Checkout'
import BookingSuccess from '@/components/website/mentee/BookingSuccess'
import MenteeDashboard from '@/components/website/mentee/Index'
import Favourites from '@/components/website/mentee/Favourites'
import MenteeChat from '@/components/website/mentee/Chat'
import MenteeProfileSettings from '@/components/website/mentee/ProfileSettings'
import ChangePassword from '@/components/website/mentee/ChangePassword'
import MapGrid from '@/components/website/mentee/MapGrid'
import MapList from '@/components/website/mentee/MapList'
import MenteeRegister from '@/components/website/mentee/Register'
import Bloglist from '@/components/website/blog/BlogList'
import Bloggrid from '@/components/website/blog/BlogGrid'
import VoiceCall from '@/components/website/pages/Voicecall'
import VideoCall from '@/components/website/pages/Videocall'
import Component from '@/components/website/pages/Components'
import WebsiteBlankpage from '@/components/website/pages/BlankPage'
import WebSiteLogin from '@/components/website/pages/Login'
import RegisterPage from '@/components/website/pages/Register'
import WebsiteForgotPassword from '@/components/website/pages/ForgotPassword'
import Booking from '@/components/website/Booking'
import Appointments from '@/components/website/mentor/Appointments'

/** For  Admin**/
import Indexadmin from '@/components/admin/index'
import Mentor from '@/components/admin/mentor'
import Mentee from '@/components/admin/mentee'
import Bookinglist from '@/components/admin/bookinglist'
import Categories from '@/components/admin/categories'
import Transactionlist from '@/components/admin/transactionslist'
import Settings from '@/components/admin/settings'
import Invoicereport from '@/components/admin/invoicereport'
import Profile from '@/components/admin/profile'
import Blog from '@/components/admin/blog'
import Blogdetails from '@/components/admin/blogdetails'
import Addblog from '@/components/admin/addblog'
import Editblog from '@/components/admin/editblog'
import Login from '@/components/admin/login'
import Register from '@/components/admin/register'
import Forgotpassword from '@/components/admin/forgotpassword'
import Lockscreen from '@/components/admin/lockscreen'
import Error404 from '@/components/admin/error404'
import Error500 from '@/components/admin/error500'
import Blankpage from '@/components/admin/blankpage'
import Components from '@/components/admin/components'
import Formbasicinputs from '@/components/admin/formbasicinputs'
import Forminputgroups from '@/components/admin/forminputgroups'
import Formhorizontal from '@/components/admin/formhorizontal'
import Formvertical from '@/components/admin/formvertical'
import Formmask from '@/components/admin/formmask'
import Formvalidation from '@/components/admin/formvalidation'
import Tablesbasic from '@/components/admin/tablesbasic'
import Datatables from '@/components/admin/datatables'
import Invoice from '@/components/admin/invoice'

Vue.use(Router)
const router = new Router({
    mode: 'history',
    base: 'template',
    routes: [{
            path: '/',
            name: 'index',
            component: Index
        },
        {
            path: '/mentor/index',
            name: 'mentor-dashboard',
            component: MentorDashboard
        },
        {
            path: '/mentor/mentee-list',
            name: 'mentor-mentee-list',
            component: MenteeList
        },
        {
            path: '/mentor/mentee-profile',
            name: 'mentor-mentee-profile',
            component: MenteeProfile
        },
        {
            path: '/mentor/my-bookings',
            name: 'mentor-bookings',
            component: BookingSummary
        },
        {
            path: '/mentor/schedule-timings',
            name: 'mentor-schedule-timings',
            component: ScheduleTimings
        },
        {
            path: '/mentor/chat',
            name: 'mentor-chat',
            component: MentorChat
        },
        {
            path: '/mentor/blog',
            name: 'mentor-blog',
            component: MentorBlog
        },
        {
            path: '/mentor/blog-details',
            name: 'mentor-blog-details',
            component: MentorBlogDetails
        },
        {
            path: '/mentor/add-blog',
            name: 'add-blog',
            component: MentorAddBlog
        },
        {
            path: '/mentor/invoices',
            name: 'mentor-invoices',
            component: Invoices
        },
        {
            path: '/mentor/invoice-view',
            name: 'mentor-invoice-view',
            component: InvoiceView
        },
        {
            path: '/mentor/edit-blog',
            name: 'edit-blog',
            component: MentorEditBlog
        },
        {
            path: '/mentor/profile-settings',
            name: 'mentor-profile-settings',
            component: MentorProfileSettings
        },
        {
            path: '/mentor/reviews',
            name: 'mentor-reviews',
            component: Reviews
        },
        {
            path: '/mentor/register',
            name: 'mentor-register',
            component: MentorRegister
        },
        {
            path: '/mentee/mentor-search',
            name: 'mentor-search-results',
            component: SearchMentor
        },
        {
            path: '/blog/blog-list',
            name: 'blog-list',
            component: Bloglist
        },
        {
            path: '/blog/blog-grid',
            name: 'blog-grid',
            component: Bloggrid
        },
        {
            path: '/pages/login',
            name: 'website-login',
            component: WebSiteLogin
        },
        {
            path: '/pages/voice-call',
            name: 'voice-call',
            component: VoiceCall
        },
        {
            path: '/pages/video-call',
            name: 'video-call',
            component: VideoCall
        },
        {
            path: '/pages/components',
            name: 'page-components',
            component: Component
        },
        {
            path: '/pages/blank-page',
            name: 'blank-page',
            component: WebsiteBlankpage
        },

        {
            path: '/pages/register',
            name: 'register-page',
            component: RegisterPage
        },
        {
            path: '/pages/forgot-password',
            name: 'website-forgot-password',
            component: WebsiteForgotPassword
        },
        {
            path: '/booking',
            name: 'booking',
            component: Booking
        },
        {
            path: '/mentor/appointments',
            name: 'mentor-appointments',
            component: Appointments
        },
        {
            path: '/mentee/mentor-profile',
            name: 'mentee-mentor-profile',
            component: MentorProfile
        },
        {
            path: '/mentee/bookings',
            name: 'mentee-bookings',
            component: Bookings
        },
        {
            path: '/mentee/checkout',
            name: 'mentee-checkout',
            component: Checkout
        },
        {
            path: '/mentee/booking-success',
            name: 'booking-success',
            component: BookingSuccess
        },
        {
            path: '/mentee/index',
            name: 'mentee-dashboard',
            component: MenteeDashboard
        },
        {
            path: '/mentee/favourites',
            name: 'mentee-favourites',
            component: Favourites
        },
        {
            path: '/mentee/chat',
            name: 'mentee-chat',
            component: MenteeChat
        },
        {
            path: '/mentee/profile-settings',
            name: 'mentee-profile-settings',
            component: MenteeProfileSettings
        },
        {
            path: '/mentee/change-password',
            name: 'change-password',
            component: ChangePassword
        },
        {
            path: '/mentee/map-grid',
            name: 'map-grid',
            component: MapGrid
        },
        {
            path: '/mentee/map-list',
            name: 'map-list',
            component: MapList
        },
        {
            path: '/mentee/register',
            name: 'mentee-register',
            component: MenteeRegister
        },
        {
            path: '/admin/index',
            name: 'indexss',
            component: Indexadmin
        },
        {
            path: '/admin/mentor',
            name: 'mentor',
            component: Mentor
        },
        {
            path: '/admin/mentee',
            name: 'mentee',
            component: Mentee
        },
        {
            path: '/admin/bookinglist',
            name: 'bookinglists',
            component: Bookinglist
        },
        {
            path: '/admin/categories',
            name: 'categoriess',
            component: Categories
        },
        {
            path: '/admin/transactionslist',
            name: 'transactionlists',
            component: Transactionlist
        },
        {
            path: '/admin/settings',
            name: 'settings',
            component: Settings
        },
        {
            path: '/admin/invoicereport',
            name: 'invoicereport',
            component: Invoicereport
        },
        {
            path: '/admin/profile',
            name: 'profile',
            component: Profile
        },
        {
            path: '/admin/blog',
            name: 'blog',
            component: Blog
        },
        {
            path: '/admin/blogdetails',
            name: 'blogdetails',
            component: Blogdetails
        },
        {
            path: '/admin/addblog',
            name: 'addblog',
            component: Addblog
        },
        {
            path: '/admin/editblog',
            name: 'editblog',
            component: Editblog
        },
        {
            path: '/admin/login',
            name: 'login',
            component: Login
        },
        {
            path: '/admin/register',
            name: 'register',
            component: Register
        },
        {
            path: '/admin/forgotpassword',
            name: 'forgotpassword',
            component: Forgotpassword
        },
        {
            path: '/admin/lockscreen',
            name: 'lockscreen',
            component: Lockscreen
        },
        {
            path: '/admin/error404',
            name: 'error404',
            component: Error404
        },
        {
            path: '/admin/error500',
            name: 'error500',
            component: Error500
        },
        {
            path: '/admin/blankpage',
            name: 'blankpage',
            component: Blankpage
        },
        {
            path: '/admin/components',
            name: 'components',
            component: Components
        },
        {
            path: '/admin/formbasicinputs',
            name: 'formbasicinputs',
            component: Formbasicinputs
        },
        {
            path: '/admin/forminputgroups',
            name: 'forminputgroups',
            component: Forminputgroups
        },
        {
            path: '/admin/formhorizontal',
            name: 'formhorizontal',
            component: Formhorizontal
        },
        {
            path: '/admin/formvertical',
            name: 'formvertical',
            component: Formvertical
        },
        {
            path: '/admin/formmask',
            name: 'formmask',
            component: Formmask
        },
        {
            path: '/admin/formvalidation',
            name: 'formvalidation',
            component: Formvalidation
        },
        {
            path: '/admin/tablesbasic',
            name: 'tablesbasic',
            component: Tablesbasic
        },
        {
            path: '/admin/datatables',
            name: 'datatables',
            component: Datatables
        },
        {
            path: '/admin/invoice',
            name: 'invoice',
            component: Invoice
        },
    ],
    linkActiveClass: "active",
})
export default router


// WEBPACK FOOTER //
// ./src/router/index.js