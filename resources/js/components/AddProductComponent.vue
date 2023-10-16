<template>
    <div class="row product-adding">
        <div class="col-md-7">
            <div class="add-product">

                <div class="d-flex flex-wrap justify-content-around">
                    <div class="">
                        <div class="form-group ">

                            <!-- //  video decision -->
                            <div v-if="resolveMediatype(productimg1)">
                                <video id="_previewimg1"
                                onclick="document.getElementById('img1').click()"
                                width="320" height="240" controls>
                                    <source src="movie.mp4" type="video/mp4">
                                    <source src="movie.ogg" type="video/ogg">
                                    Your browser does not support the video tag.
                                </video>
                            </div>
                            <div v-else>
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
                            <img v-if="productimg6" onclick="document.getElementById('img2').click()" id="_previewimg2"
                                style="height: 200px; width: 200px; object-fit: cover;" class="shadow" :src="'productimg2'">

                            <img v-else onclick="document.getElementById('img2').click()" id="_previewimg2"
                                style="height: 200px; width: 200px; object-fit: cover;" class="shadow"
                                :src="'https://www.lifewire.com/thmb/8MhWKwi4GEGiYRT6P56TBvyrkYA=/1326x1326/smart/filters:no_upscale()/cloud-upload-a30f385a928e44e199a62210d578375a.jpg'">

                        </div>
                        <div class="text-center d-none">
                            <input @change="previewFile4" ref="file" type="file" id="img2">

                        </div>

                        <div class="form-group text-center d-none">
                            <button @click="uploadAvatar()" class="btn btn-primary btn-sm">Upload</button>
                        </div>
                    </div>


                </div>




            </div>
        </div>
        <div class="col-md-5">

            <h4>Previe</h4>

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




        }
    },


    mounted() {
        console.log('add product')
    },

    props: ['productid'],

    methods: {
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
                var preview = document.getElementById("_preview" + event.target.id);
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
    }

}
</script>
