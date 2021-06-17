<template>
    <section class="section popular-courses">
            <div class="container">
                <div class="section-header text-center">
                    <span>Mentoring Goals</span>
                    <h2>Popular Mentors</h2>
                    <p class="sub-title">Do you want to move on next step? Choose your most popular leaning mentors, it will help you to achieve your professional goals.</p>
                </div>
                <carousel :items="4" :margin="30" :responsive="{0:{items:1,nav:false},600:{items:4,nav:true}}">
                    <div class="course-box" v-for="item in mentors" :key="item.id">
                        <div class="product">
                            <div class="product-img">
                                <router-link to="/mentee/mentor-profile">
                                    <img class="img-fluid" alt="" :src="loadImg(item.image)" width="600" height="300">
                                </router-link>
                            </div>
                            <div class="product-content">
                                <h3 class="title"><router-link to="/mentee/mentor-profile">{{item.name}}</router-link></h3>
                                <div class="author-info">
                                    <div class="author-name">
                                        {{item.specialist}}
                                    </div>
                                </div>
                                <div class="rating">							
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star filled"></i>
                                    <i class="fas fa-star"></i>
                                    <span class="d-inline-block average-rating">{{item.rating}}</span>
                                </div>
                                <div class="author-country">
                                    <p class="mb-0"><i class="fas fa-map-marker-alt"></i>{{item.location}}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </carousel>
            </div>
    </section>
</template>

<script>
import mentors from '../../assets/json/website/popularmentors.json';
const images = require.context('@/assets/img/website/user', false, /\.png$|\.jpg$/)

export default {
    data() {
        return {
            mentors: mentors  
        }
    },
    methods: {
        loadImg(imgPath) {
            return images('./' + imgPath)
        },
        
    },
}
</script>


// WEBPACK FOOTER //
// src/components/website/PopularMentors.vue