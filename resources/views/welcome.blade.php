
    @extends('layouts.base')

    @section('content')
   <!-- Start offcanvas filter sidebar -->
   <div class="offcanvas__filter--sidebar widget__area">
    <button type="button" class="offcanvas__filter--close" data-offcanvas>
        <svg class="minicart__close--icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="32" d="M368 368L144 144M368 144L144 368"></path></svg> <span class="offcanvas__filter--close__text">Close</span>
    </button>
    <div class="offcanvas__filter--sidebar__inner">
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Search</h2>
            <form class="widget__search--form" action="#">
                <label>
                    <input class="widget__search--form__input border-0" placeholder="Search by" type="text">
                </label>
                <button class="widget__search--form__btn"  type="submit" aria-label="search button">
                    <svg class="widget__search--form__btn--svg" xmlns="http://www.w3.org/2000/svg" width="25.51" height="22.443" viewBox="0 0 512 512"><path d="M221.09 64a157.09 157.09 0 10157.09 157.09A157.1 157.1 0 00221.09 64z" fill="none" stroke="currentColor" stroke-miterlimit="10" stroke-width="32"></path><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="32" d="M338.29 338.29L448 448"></path></svg>
                </button>
            </form>
        </div>
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Categoriessss</h2>
            <example-component></example-component>
            <ul class="widget__categories--menu">
                <li class="widget__categories--menu__list">
                    <label class="widget__categories--menu__label d-flex align-items-center">
                        <img class="widget__categories--menu__img" src="assets/img/product/small-product1.webp" alt="categories-img">
                        <span class="widget__categories--menu__text">Denim Jacket</span>
                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                        </svg>
                    </label>
                    <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product2.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product3.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product4.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Western denim</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product5.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="widget__categories--menu__list">
                    <label class="widget__categories--menu__label d-flex align-items-center">
                        <img class="widget__categories--menu__img" src="assets/img/product/small-product2.webp" alt="categories-img">
                        <span class="widget__categories--menu__text">Oversize Cotton</span>
                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394" >
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                        </svg>
                    </label>
                    <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product2.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product3.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product4.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Western denim</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product5.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="widget__categories--menu__list">
                    <label class="widget__categories--menu__label d-flex align-items-center">
                        <img class="widget__categories--menu__img" src="assets/img/product/small-product3.webp" alt="categories-img">
                        <span class="widget__categories--menu__text">Dairy & chesse</span>
                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                        </svg>
                    </label>
                    <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product2.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product3.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product4.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Western denim</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product5.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="widget__categories--menu__list">
                    <label class="widget__categories--menu__label d-flex align-items-center">
                        <img class="widget__categories--menu__img" src="assets/img/product/small-product4.webp" alt="categories-img">
                        <span class="widget__categories--menu__text">Shoulder Bag</span>
                        <svg class="widget__categories--menu__arrowdown--icon" xmlns="http://www.w3.org/2000/svg" width="12.355" height="8.394">
                            <path  d="M15.138,8.59l-3.961,3.952L7.217,8.59,6,9.807l5.178,5.178,5.178-5.178Z" transform="translate(-6 -8.59)" fill="currentColor"></path>
                        </svg>
                    </label>
                    <ul class="widget__categories--sub__menu">
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product2.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Jacket, Women</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product3.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Woolend Jacket</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product4.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Western denim</span>
                            </a>
                        </li>
                        <li class="widget__categories--sub__menu--list">
                            <a class="widget__categories--sub__menu--link d-flex align-items-center" href="shop.html">
                                <img class="widget__categories--sub__menu--img" src="assets/img/product/small-product5.webp" alt="categories-img">
                                <span class="widget__categories--sub__menu--text">Mini Dresss</span>
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        <div class="single__widget price__filter widget__bg">
            <h2 class="widget__title position__relative h3">Filter By Price</h2>
            <form class="price__filter--form" action="#">
                <div class="price__filter--form__inner mb-15 d-flex align-items-center">
                    <div class="price__filter--group">
                        <label class="price__filter--label" for="Filter-Price-GTE2">From</label>
                        <div class="price__filter--input border-radius-5 d-flex align-items-center">
                            <span class="price__filter--currency">$</span>
                            <input class="price__filter--input__field border-0" id="Filter-Price-GTE2" name="filter.v.price.gte" type="number" placeholder="0" min="0" max="250.00">
                        </div>
                    </div>
                    <div class="price__divider">
                        <span>-</span>
                    </div>
                    <div class="price__filter--group">
                        <label class="price__filter--label" for="Filter-Price-LTE2">To</label>
                        <div class="price__filter--input border-radius-5 d-flex align-items-center">
                            <span class="price__filter--currency">$</span>
                            <input class="price__filter--input__field border-0" id="Filter-Price-LTE2" name="filter.v.price.lte" type="number" min="0" placeholder="250.00" max="250.00">
                        </div>
                    </div>
                </div>
                <button class="price__filter--btn primary__btn" type="submit">Filter</button>
            </form>
        </div>
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Dietary Needs</h2>
            <ul class="widget__form--check">
                <li class="widget__form--check__list">
                    <label class="widget__form--check__label" for="check5">Denim shirt</label>
                    <input class="widget__form--check__input" id="check5" type="checkbox">
                    <span class="widget__form--checkmark"></span>
                </li>
                <li class="widget__form--check__list">
                    <label class="widget__form--check__label" for="check6">Need Winter</label>
                    <input class="widget__form--check__input" id="check6" type="checkbox">
                    <span class="widget__form--checkmark"></span>
                </li>
                <li class="widget__form--check__list">
                    <label class="widget__form--check__label" for="check7">Fashion Trends</label>
                    <input class="widget__form--check__input" id="check7" type="checkbox">
                    <span class="widget__form--checkmark"></span>
                </li>
                <li class="widget__form--check__list">
                    <label class="widget__form--check__label" for="check8">Oversize Cotton</label>
                    <input class="widget__form--check__input" id="check8" type="checkbox">
                    <span class="widget__form--checkmark"></span>
                </li>
            </ul>
        </div>
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Top Rated Product</h2>
            <div class="product__sidebar">
                <div class="small__product d-flex align-items-center mb-20">
                    <div class="small__product--thumbnail position__relative">
                        <a class="small__product--link display-block" href="product-details.html">
                            <img class="small__product--img display-block" src="assets/img/product/small-product1.webp" alt="product-img">
                        </a>
                    </div>
                    <div class="small__product--content">
                        <h3 class="small__product--title h4"><a href="product-details.html">Advanced Analytic </a></h3>
                        <div class="small__product--price">
                            <span class="current__price">$245</span>
                            <span class="price__divided"></span>
                            <span class="old__price"> $356</span>
                        </div>
                        <ul class="rating small__product--rating d-flex">
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list"><span class="rating__list--text">( 5.0)</span></li>
                        </ul>
                    </div>
                </div>
                <div class="small__product d-flex align-items-center mb-20">
                    <div class="small__product--thumbnail position__relative">
                        <a class="small__product--link display-block" href="product-details.html">
                            <img class="small__product--img display-block" src="assets/img/product/small-product2.webp" alt="product-img">
                        </a>
                    </div>
                    <div class="small__product--content">
                        <h3 class="small__product--title h4"><a href="product-details.html">Advanced To Watch  </a></h3>
                        <div class="small__product--price">
                            <span class="current__price">$255</span>
                            <span class="price__divided"></span>
                            <span class="old__price"> $375</span>
                        </div>
                        <ul class="rating small__product--rating d-flex">
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list"><span class="rating__list--text">( 5.0)</span></li>
                        </ul>
                    </div>
                </div>
                <div class="small__product d-flex align-items-center">
                    <div class="small__product--thumbnail position__relative">
                        <a class="small__product--link display-block" href="product-details.html">
                            <img class="small__product--img display-block" src="assets/img/product/small-product3.webp" alt="product-img">
                        </a>
                    </div>
                    <div class="small__product--content">
                        <h3 class="small__product--title h4"><a href="product-details.html">Lorem ipsum dolor. </a></h3>
                        <div class="small__product--price">
                            <span class="current__price">$230</span>
                            <span class="price__divided"></span>
                            <span class="old__price"> $330</span>
                        </div>
                        <ul class="rating small__product--rating d-flex">
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list">
                                <span class="rating__list--icon">
                                    <svg class="rating__list--icon__svg" xmlns="http://www.w3.org/2000/svg" width="11.105" height="11.732" viewBox="0 0 10.105 9.732">
                                    <path data-name="star - Copy" d="M9.837,3.5,6.73,3.039,5.338.179a.335.335,0,0,0-.571,0L3.375,3.039.268,3.5a.3.3,0,0,0-.178.514L2.347,6.242,1.813,9.4a.314.314,0,0,0,.464.316L5.052,8.232,7.827,9.712A.314.314,0,0,0,8.292,9.4L7.758,6.242l2.257-2.231A.3.3,0,0,0,9.837,3.5Z" transform="translate(0 -0.018)" fill="currentColor"></path>
                                    </svg>
                                </span>
                            </li>
                            <li class="rating__list"><span class="rating__list--text">( 5.0)</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="single__widget widget__bg">
            <h2 class="widget__title position__relative h3">Brands</h2>
            <ul class="widget__tagcloud">
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Wooden</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Chair</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Modern</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Fabric  </a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Shoulder </a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Winter</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Accessories</a></li>
                <li class="widget__tagcloud--list"><a class="widget__tagcloud--link" href="shop.html">Dress </a></li>
            </ul>
        </div>
    </div>
    </div>
    <!-- End offcanvas filter sidebar -->

    <!-- Start header area -->
    @include('inc.header')
    <!-- End header area -->


    <main class="main__content_wrapper">

        <!-- Start breadcrumb section -->
        <section class="breadcrumb__section breadcrumb__bg" style="background-position: center left;">
            <div class="container">
                <div class="row row-cols-1">
                    <div class="col">
                        <div class="breadcrumb__content">
                            <h1 class="breadcrumb__content--title mb-10">{{$storeDetails->store_name}}</h1>
                            <ul class="breadcrumb__content--menu d-flex">
                                <li class="breadcrumb__content--menu__items"><a href="index.html">Home</a></li>
                                <li class="breadcrumb__content--menu__items"><span class="text__dark">Shop </span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End breadcrumb section -->

        <store-front-component></store-front-component>


    </main>

    <!-- Start footer section -->
    @include('inc.footer')
    <!-- End footer section -->

    <!-- Quickview Wrapper -->
 
<!-- Quickview Wrapper End -->
    @endsection


