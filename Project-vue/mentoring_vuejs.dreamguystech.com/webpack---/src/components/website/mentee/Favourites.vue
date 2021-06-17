<template>
    <div class="main-wrapper">
        <layout-header1></layout-header1>
        <breadcrumb16></breadcrumb16>
        <!-- Page Content -->
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-5 col-lg-4 col-xl-3 theiaStickySidebar">
                            <sidebar1></sidebar1>
						</div>
						<div class="col-md-7 col-lg-8 col-xl-9">
							<div class="row row-grid">
								<div class="col-md-6 col-lg-4" v-for="item in favourites" :key="item.id">
									<div class="profile-widget">
										<div class="user-avatar">
											<router-link to="/mentee/mentor-profile">
												<img class="img-fluid" alt="User Image" :src="loadImg(item.image)">
											</router-link>
											<a href="javascript:void(0)" class="fav-btn">
												<i class="far fa-bookmark"></i>
											</a>
										</div>
										<div class="pro-content">
											<h3 class="title">
												<router-link to="/mentee/mentor-profile">{{item.name}}</router-link> 
												<i class="fas fa-check-circle verified"></i>
											</h3>
											<p class="speciality">{{item.specialist}}</p>
											<div class="rating">
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<i class="fas fa-star filled"></i>
												<span class="d-inline-block average-rating">{{item.ratings}}</span>
											</div>
											<ul class="available-info">
												<li>
													<i class="fas fa-map-marker-alt"></i>{{item.location}}
												</li>
												<li>
													<i class="far fa-clock"></i>{{item.available_on}}
												</li>
												<li>
													<i class="far fa-money-bill-alt"></i>{{item.fees}} <i class="fas fa-info-circle" data-toggle="tooltip" title="Lorem Ipsum"></i>
												</li>
											</ul>
											<div class="row row-sm">
												<div class="col-6">
													<router-link to="/mentee/mentor-profile" class="btn view-btn">View Profile</router-link>
												</div>
												<div class="col-6">
													<router-link to="/booking" class="btn book-btn">Book Now</router-link>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>

							<div class="blog-pagination mt-4">
								<nav>
									<ul class="pagination justify-content-center">
										<li class="page-item disabled">
											<a class="page-link" href="#" tabindex="-1"><i class="fas fa-angle-double-left"></i></a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">1</a>
										</li>
										<li class="page-item active">
											<a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#">3</a>
										</li>
										<li class="page-item">
											<a class="page-link" href="#"><i class="fas fa-angle-double-right"></i></a>
										</li>
									</ul>
								</nav>
							</div>

						</div>
					</div>
				</div>

			</div>		
			<!-- /Page Content -->
        <layout-footer></layout-footer>
    </div>
</template>


<script>
import favourites from '../../../assets/json/website/favourites.json'
const images = require.context('@/assets/img/website/user', false, /\.png$|\.jpg$/)
export default {
    data() {
        return {
            favourites: favourites
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
// src/components/website/mentee/Favourites.vue