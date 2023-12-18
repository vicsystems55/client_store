<template>
    <div class="page-body">
        <div class="m-5"></div>
        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="page-header">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="page-header-left">
                            <h3>Product List
                                <small></small>
                            </h3>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <ol class="breadcrumb pull-right">
                            <li class="breadcrumb-item">
                                <a href="index.html">
                                    <i data-feather="home"></i>
                                </a>
                            </li>
                            <li class="breadcrumb-item">Physical</li>
                            <li class="breadcrumb-item active">Product List</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- Container-fluid Ends-->



        <!-- Container-fluid starts-->
        <div class="container-fluid">
            <div class="search-container col-md-8 mx-auto py-3 d-flex justify-content-start">
                <input type="text" class="form-control" placeholder="Search product">
                <button class="btn btn-primary">Search</button>
            </div>
            <div class="row products-admin ratio_asos">



                <div v-for="product in products" :key="product.index" class="col-xl-3 col-sm-6">
                    <div class="card">
                        <div class="card-body product-box">
                            <div class="img-wrapper">
                                <div class="front">
                                    <a href="javascript:void(0)">
                                        <img style="height: 140px; object-fit: cover;"  :src="resolveImg(product.images[0].img_url)"
                                            class="img-fluid blur-up lazyload bg-img" alt=""></a>
                                    <div class="product-hover">
                                        <ul>
                                            <li>
                                                <button class="btn" type="button" data-original-title="" title=""><i
                                                        class="ti-pencil-alt"></i></button>
                                            </li>
                                            <li>
                                                <button class="btn"><i class="ti-trash"></i></button>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="product-detail">
                                <div class="rating"><i class="fa fa-star"></i> <i class="fa fa-star"></i> <i
                                        class="fa fa-star"></i> <i class="fa fa-star"></i> <i class="fa fa-star"></i>
                                </div>
                                <a :href="'/all-products/product-details/'+product.id">
                                    <h6>{{ product.name }}</h6>
                                </a>
                                <h4>NGN {{ product.price }}</h4>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
        <!-- Container-fluid Ends-->
    </div>
</template>
<script>
export default {
    name: 'ProductsComponent',
    data() {
        return {
            products: [],
        }
    },
    props: ['vueurl'],
    mounted() {
        this.getProducts()
    },
    methods: {
        resolveImg(asset){

            return this.vueurl+'storage/'+asset;

        },
        getProducts() {

            axios({
                url: this.vueurl + 'api/v1/products',
                method: 'get',
                headers: {
                    'Access-Control-Allow-Origin': '*',
                    'Content-type': 'application/json',
                    'Accept': 'application/json',
                    'Authorization': 'Bearer ' + localStorage.getItem('user_token')
                }

            }).then((response) => {

                this.products = response.data


                console.log(response)



            }).catch((error) => {

                this.loading = false
                console.log(error)
            })



        }
    },
}
</script>
