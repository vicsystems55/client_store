<template>
    <div class="row product-adding">
        <div class="col-md-6">
            <div class="add-product">

                <div class="d-flex flex-wrap justify-content-between">
                    <div class="">
                        <div class="form-group ">

                            <!-- //  video decision -->
                            <div onclick="document.getElementById('img1').click()"
                                :class="resolveMediatype(productimg1) ? 'p-2 ' : 'd-none p-2 '">
                                <video id="_vidpreviewimg1" width="200" height="200" controls>
                                    <source src="movie.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div :class="resolveMediatype(productimg1) ? 'd-none' : ''">
                                <img v-if="productimg6" onclick="document.getElementById('img1').click()" id="_previewimg1"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'productimg1'">

                                <img v-else onclick="document.getElementById('img1').click()" id="_previewimg1"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'https://www.lifewire.com/thmb/8MhWKwi4GEGiYRT6P56TBvyrkYA=/1326x1326/smart/filters:no_upscale()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg'">

                            </div>

                        </div>
                        <div class="text-center d-none">
                            <input @change="previewFile4" ref="file" type="file" id="img1">

                        </div>

                        <div class="form-group text-center d-none">
                            <button @click="uploadAvatar()" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group ">

                            <!-- //  video decision -->
                            <div onclick="document.getElementById('img2').click()"
                                :class="resolveMediatype(productimg2) ? 'p-2 ' : 'd-none p-2 '">
                                <video id="_vidpreviewimg2" style="object-fit: cover;" width="200" height="200" controls>
                                    <source src="movie.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div :class="resolveMediatype(productimg2) ? 'd-none' : ''">
                                <img v-if="productimg6" onclick="document.getElementById('img2').click()" id="_previewimg2"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'productimg2'">

                                <img v-else onclick="document.getElementById('img2').click()" id="_previewimg2"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'https://www.lifewire.com/thmb/8MhWKwi4GEGiYRT6P56TBvyrkYA=/1326x1326/smart/filters:no_upscale()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg'">

                            </div>

                        </div>
                        <div class="text-center d-none">
                            <input @change="previewFile4" ref="file" type="file" id="img2">

                        </div>

                        <div class="form-group text-center d-none">
                            <button @click="uploadAvatar()" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group ">

                            <!-- //  video decision -->
                            <div onclick="document.getElementById('img3').click()"
                                :class="resolveMediatype(productimg3) ? 'p-2 ' : 'd-none p-2 '">
                                <video id="_vidpreviewimg3" style="object-fit: cover;" width="200" height="200" controls>
                                    <source src="movie.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div :class="resolveMediatype(productimg3) ? 'd-none' : ''">
                                <img v-if="productimg6" onclick="document.getElementById('img3').click()" id="_previewimg3"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'productimg3'">

                                <img v-else onclick="document.getElementById('img3').click()" id="_previewimg3"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'https://www.lifewire.com/thmb/8MhWKwi4GEGiYRT6P56TBvyrkYA=/1326x1326/smart/filters:no_upscale()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg'">

                            </div>

                        </div>
                        <div class="text-center d-none">
                            <input @change="previewFile4" ref="file" type="file" id="img3">

                        </div>

                        <div class="form-group text-center d-none">
                            <button @click="uploadAvatar()" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group ">

                            <!-- //  video decision -->
                            <div onclick="document.getElementById('img4').click()"
                                :class="resolveMediatype(productimg4) ? 'p-2 ' : 'd-none p-2 '">
                                <video id="_vidpreviewimg4" style="object-fit: cover;" width="200" height="200" controls>
                                    <source src="movie.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div :class="resolveMediatype(productimg4) ? 'd-none' : ''">
                                <img v-if="productimg6" onclick="document.getElementById('img4').click()" id="_previewimg4"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'productimg4'">

                                <img v-else onclick="document.getElementById('img4').click()" id="_previewimg4"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'https://www.lifewire.com/thmb/8MhWKwi4GEGiYRT6P56TBvyrkYA=/1326x1326/smart/filters:no_upscale()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg'">

                            </div>

                        </div>
                        <div class="text-center d-none">
                            <input @change="previewFile4" ref="file" type="file" id="img4">

                        </div>

                        <div class="form-group text-center d-none">
                            <button @click="uploadAvatar()" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group ">

                            <!-- //  video decision -->
                            <div onclick="document.getElementById('img5').click()"
                                :class="resolveMediatype(productimg5) ? 'p-2 ' : 'd-none p-2 '">
                                <video id="_vidpreviewimg5" style="object-fit: cover;" width="200" height="200" controls>
                                    <source src="movie.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div :class="resolveMediatype(productimg5) ? 'd-none' : ''">
                                <img v-if="productimg6" onclick="document.getElementById('img4').click()" id="_previewimg5"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'productimg5'">

                                <img v-else onclick="document.getElementById('img5').click()" id="_previewimg5"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'https://www.lifewire.com/thmb/8MhWKwi4GEGiYRT6P56TBvyrkYA=/1326x1326/smart/filters:no_upscale()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg'">

                            </div>

                        </div>
                        <div class="text-center d-none">
                            <input @change="previewFile4" ref="file" type="file" id="img5">

                        </div>

                        <div class="form-group text-center d-none">
                            <button @click="uploadAvatar()" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </div>

                    <div class="">
                        <div class="form-group ">

                            <!-- //  video decision -->
                            <div onclick="document.getElementById('img7').click()"
                                :class="resolveMediatype(productimg7) ? 'p-2 ' : 'd-none p-2 '">
                                <video id="_vidpreviewimg7" style="object-fit: cover;" width="200" height="200" controls>
                                    <source src="movie.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div :class="resolveMediatype(productimg7) ? 'd-none' : ''">
                                <img v-if="productimg6" onclick="document.getElementById('img7').click()" id="_previewimg7"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'productimg7'">

                                <img v-else onclick="document.getElementById('img7').click()" id="_previewimg7"
                                    style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                    :src="'https://www.lifewire.com/thmb/8MhWKwi4GEGiYRT6P56TBvyrkYA=/1326x1326/smart/filters:no_upscale()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg'">

                            </div>

                        </div>
                        <div class="text-center d-none">
                            <input @change="previewFile4" ref="file" type="file" id="img7">

                        </div>

                        <div class="form-group text-center d-none">
                            <button @click="uploadAvatar()" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </div>




                </div>




            </div>
        </div>
        <div class="col-md-6">

            <div class="form-group">
      <label for="product-name">Product Name:</label>
      <input type="text" id="product-name" class="form-control"  v-model="product_name" required />
    </div>

    <!-- Other product details fields -->

    <div class="form-group">
      <label for="category">Category:</label>
      <select id="category" v-model="selectedCategory" @change="loadSubcategories" class="form-control" >
        <option value="">Select a Category</option>
        <option v-for="category in categories" :key="category.index" :value="category.id">{{ category.categoryName }}</option>
      </select>
    </div>

    <div v-if="subcategories.length" class="form-group">
      <label for="subcategory">Subcategory:</label>
      <select id="subcategory" v-model="selectedSubcategory" class="form-control" >
        <option value="">Select a Subcategory</option>
        <option v-for="subcategory in subcategories" :key="subcategory.id" :value="subcategory.id">{{ subcategory.categoryName }}</option>
      </select>
    </div>

    <div class="form-group">
      <label for="brand">Brand:</label>
      <select id="brand" v-model="selectedBrand" class="form-control" >
        <option value="">Select a Brand</option>

        <option v-for="brand in brands" :key="brand.id">{{ brand.categoryName }}</option>
      </select>
    </div>



    <!-- Additional product attributes fields based on category and subcategory -->

        <button @click="createProduct()" class="btn btn-primary" >Submit</button>


        </div>
    </div>
</template>
<script>

export default {

    data() {
        return {
            productimg1: '',
            productimg2: '',
            productimg3: '',
            productimg4: '',
            productimg5: '',
            productimg6: '',
            productimg7: '',

            product_name: '',

            selectedSubcategory: '',
            selectedCategory: '',



            brands: [],
            subcategories:[],
            categories:[],

            brands: [],
            selectedBrand: '',







        }
    },


    mounted() {
        console.log('add product')
        this.getCategories()
        this.getBrands()

    },

    props: ['productid'],

    methods: {

        getBrands(){
            axios({
                    url: '/api/v1/product-category',
                    method: 'get',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                    },
                    params: {
                        invoice_code: localStorage.getItem('invoice_code'),
                        type: 'brands'
                    }

                }).then((response) => {

                    this.brands = response.data
                    console.log(response)



                }).catch((error) => {

                    this.loading = false
                    console.log(error)
                })


        },

        getCategories(){

            axios({
                    url: '/api/v1/product-category',
                    method: 'get',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-type': 'application/json',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                    },
                    data: {
                        invoice_code: localStorage.getItem('invoice_code')
                    }

                }).then((response) => {

                    this.categories = response.data
                    console.log(response)



                }).catch((error) => {

                    this.loading = false
                    console.log(error)
                })

        },

        loadSubcategories( selectedSubcategory){


            const selectedCategoryObject = this.categories.find(category => category.id === this.selectedCategory);

            if (selectedCategoryObject) {
            // Extract subcategories from the selected category
            this.subcategories = selectedCategoryObject.subcategories || []

            }
        },


        addToCart() {
            // console.log(this.$parent.$children[1])
            if (localStorage.getItem('user_token')) {

                this.$parent.$children[1].addProduct(this.productid)
            } else {
                return window.location.href = '/auth'

            }
        },

        resolveMediatype(_mediaType) {



            if (_mediaType) {

                if (_mediaType.type.startsWith('video/')) {
                    return true;
                } else {
                    return false;
                }

            } else {
                return false;
            }

        },

        previewFile4(event) {




            console.log(event)

            if (event.target.files.length > 0) {
                var src = URL.createObjectURL(event.target.files[0]);


                if (event.target.files[0].type.startsWith('video/')) {
                    var preview = document.getElementById("_vidpreview" + event.target.id);
                } else {
                    var preview = document.getElementById("_preview" + event.target.id);
                }
                preview.src = src;



                // preview.style.display = "block";
            }
            if (event.target.id == 'img1') {

                this.productimg1 = event.target.files[0]
            }

            if (event.target.id == 'img2') {

                this.productimg2 = event.target.files[0]
            }

            if (event.target.id == 'img3') {

                this.productimg3 = event.target.files[0]
            }

            if (event.target.id == 'img4') {

                this.productimg4 = event.target.files[0]
            }

            if (event.target.id == 'img5') {

                this.productimg5 = event.target.files[0]
            }


            if (event.target.id == 'img7') {

                this.productimg7 = event.target.files[0]
            }

            console.log(this.productimg1, this.productimg2, this.productimg3)

        },

        uploadAvatar() {
            let formData = new FormData();

            formData.append('avatar', this.file);
            formData.append('type', 'avatar');

            axios({
                url: process.env.VUE_APP_URL + '/api/profiles',
                method: 'post',
                data: formData,
                headers: {
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token'),
                    'Content-Type': 'multipart/form-data'
                }
            })
                .then((response) => {

                    // toast.success('Profile picture Updated');

                    console.log(response)
                })
                .catch((response) => {

                    console.log(response)
                })


        },



        createProduct(){

            const formData = new FormData();

            formData.append('productImg1', this.productimg1);
            formData.append('productImg2', this.productimg2);
            formData.append('productImg3', this.productimg3);
            formData.append('productImg4', this.productimg4);
            formData.append('productImg5', this.productimg5);
            formData.append('productImg7', this.productimg7);

            formData.append('product_name', this.product_name);
            formData.append('selectedSubcategory', this.selectedSubcategory);
            formData.append('selectedCategory', this.selectedCategory);
            formData.append('selectedBrand', this.selectedBrand);

            axios({
                    url: '/api/v1/products',
                    method: 'post',
                    headers: {
                        'Access-Control-Allow-Origin': '*',
                        'Content-type': 'multipart/form-data',
                        'Accept': 'application/json',
                        'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                    },
                    data: formData

                }).then((response) => {


                    console.log(response)



                }).catch((error) => {

                    this.loading = false
                    console.log(error)
                })
        }
    }

}
</script>
