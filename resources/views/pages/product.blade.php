@extends('layouts.template')

@section('content')
    <!-- Start Hero -->
    <section class="relative table w-full py-20 lg:py-24 bg-gray-50 dark:bg-slate-800">
        <div class="container relative">
            <div class="grid grid-cols-1 mt-14">
                <h3 class="text-3xl leading-normal font-semibold">Product</h3>
            </div><!--end grid-->

            <div class="relative mt-3">
                <ul class="tracking-[0.5px] mb-0 inline-block">
                    <li class="inline uppercase text-[13px] font-bold duration-500 ease-in-out hover:text-indigo-600"><a href="{{ route('pages.index') }}">Zandoshop</a></li>
                    <li class="inline text-base text-slate-950 dark:text-white mx-0.5"><i class="uil uil-angle-right-b"></i></li>
                    <li class="inline uppercase text-[13px] font-bold text-indigo-600" aria-current="page">Product</li>
                </ul>
            </div>
        </div><!--end container-->
    </section><!--end section-->
    <!-- End Hero -->

    <!-- Start -->
    <section class="relative md:py-24 py-16">
        <div class="container">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center gap-[30px]">
                <div class="lg:col-span-9 md:col-span-8">
                    <h3 class="text-xl leading-normal font-semibold">Showing 1-8 of 16 results</h3>
                </div>

                <div class="lg:col-span-3 md:col-span-4 md:text-end">
                    <label class="font-semibold hidden"></label>
                    <select class="form-select form-input w-full py-2 px-3 h-10 bg-transparent dark:bg-slate-900 dark:text-slate-200 rounded outline-none border border-gray-200 focus:border-indigo-600 dark:border-gray-800 dark:focus:border-indigo-600 focus:ring-0">
                        <option selected>Sort by latest</option>
                        <option>Sort by popularity</option>
                        <option>Sort by rating</option>
                        <option>Sort by price: low to high</option>
                        <option>Sort by price: high to low</option>
                    </select>
                </div>
            </div><!--end grid-->

            <div class="grid lg:grid-cols-4 md:grid-cols-3 sm:grid-cols-2 grid-cols-1 mt-8 gap-[30px]">
                <div class="group">
                    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="assets/images/shop/items/s1.jpg" alt="">

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>

                        <ul class="list-none absolute top-[10px] start-4">
                            <li><a href="javascript:void(0)" class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Branded T-Shirt</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end content-->

                <div class="group">
                    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="assets/images/shop/items/s2.jpg" alt="">

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>

                        <ul class="list-none absolute top-[10px] start-4">
                            <li><a href="javascript:void(0)" class="bg-green-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">Featured</a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Shopping Bag</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end content-->

                <div class="group">
                    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="assets/images/shop/items/s3.jpg" alt="">

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Elegent Watch</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end content-->

                <div class="group">
                    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="assets/images/shop/items/s4.jpg" alt="">

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Casual Shoes</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end content-->

                <div class="group">
                    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="assets/images/shop/items/s5.jpg" alt="">

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>

                        <ul class="list-none absolute top-[10px] start-4">
                            <li><a href="javascript:void(0)" class="bg-orange-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">New</a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Earphones</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end content-->

                <div class="group">
                    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="assets/images/shop/items/s6.jpg" alt="">

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Elegent Mug</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end content-->

                <div class="group">
                    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="assets/images/shop/items/s7.jpg" alt="">

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Sony Headphones</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end content-->

                <div class="group">
                    <div class="relative overflow-hidden shadow dark:shadow-gray-800 group-hover:shadow-lg group-hover:dark:shadow-gray-800 rounded-md transition-all duration-500">
                        <img src="assets/images/shop/items/s8.jpg" alt="">

                        <div class="absolute -bottom-20 group-hover:bottom-3 start-3 end-3 transition-all duration-500">
                            <a href="shop-cart.html" class="py-2 px-5 inline-block font-semibold tracking-wide border align-middle transition duration-500 ease-in-out text-base text-center bg-slate-900 border-slate-900 text-white w-full rounded-md">Add to Cart</a>
                        </div>

                        <ul class="list-none absolute top-[10px] end-4 opacity-0 group-hover:opacity-100 transition-all duration-500">
                            <li><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-heart"></i></a></li>
                            <li class="mt-1"><a href="shop-item-detail.html" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-eye-outline"></i></a></li>
                            <li class="mt-1"><a href="javascript:void(0)" class="h-8 w-8 inline-flex items-center justify-center tracking-wide align-middle transition duration-500 ease-in-out text-base text-center rounded-full bg-indigo-600 hover:bg-indigo-700 border-indigo-600 hover:border-indigo-700 text-white"><i class="mdi mdi-bookmark-outline"></i></a></li>
                        </ul>

                        <ul class="list-none absolute top-[10px] start-4">
                            <li><a href="javascript:void(0)" class="bg-blue-600 text-white text-[10px] font-bold px-2.5 py-0.5 rounded h-5">Sale</a></li>
                        </ul>
                    </div>

                    <div class="mt-4">
                        <a href="shop-item-detail.html" class="hover:text-indigo-600 text-lg font-semibold">Wooden Stools</a>
                        <div class="flex justify-between items-center mt-1">
                            <p class="text-green-600">$16.00 <del class="text-red-600">$21.00</del></p>
                            <ul class="font-medium text-amber-400 list-none">
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                                <li class="inline"><i class="mdi mdi-star"></i></li>
                            </ul>
                        </div>
                    </div>
                </div><!--end content-->
            </div><!--end grid-->

            <div class="grid md:grid-cols-12 grid-cols-1 mt-8">
                <div class="md:col-span-12 text-center">
                    <nav aria-label="Page navigation example">
                        <ul class="inline-flex items-center -space-x-px">
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-s-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                    <i class="uil uil-angle-left text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">1</a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">2</a>
                            </li>
                            <li>
                                <a href="#" aria-current="page" class="z-10 w-[40px] h-[40px] inline-flex justify-center items-center text-white bg-indigo-600 border border-indigo-600">3</a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">4</a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 hover:text-white bg-white dark:bg-slate-900 border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">5</a>
                            </li>
                            <li>
                                <a href="#" class="w-[40px] h-[40px] inline-flex justify-center items-center text-slate-400 bg-white dark:bg-slate-900 rounded-e-lg hover:text-white border border-gray-100 dark:border-gray-700 hover:border-indigo-600 dark:hover:border-indigo-600 hover:bg-indigo-600 dark:hover:bg-indigo-600">
                                    <i class="uil uil-angle-right text-[20px] rtl:rotate-180 rtl:-mt-1"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div><!--end grid-->
        </div><!--end container-->

        <div class="container relative md:mt-24 mt-16">
            <div class="grid md:grid-cols-12 grid-cols-1 items-center">
                <div class="lg:col-span-5 md:col-span-6">
                    <img src="assets/images/illustrator/envelope.svg" class="mx-auto d-block" alt="">
                </div>

                <div class="lg:col-span-7 md:col-span-6">
                    <span class="bg-indigo-600/5 text-indigo-600 text-xs font-bold px-2.5 py-0.5 rounded h-5">Mobile Apps</span>
                    <h4 class="md:text-3xl text-2xl lg:leading-normal leading-normal font-medium my-4">Available for your <br> Smartphones</h4>
                    <p class="text-slate-400 max-w-xl mb-0">Search all the open positions on the web. Get your own personalized salary estimate. Read reviews on over 30000+ companies worldwide.</p>
                    <div class="my-5">
                        <a href=""><img src="assets/images/app/app.png" class="m-1 inline-block" alt=""></a>

                        <a href=""><img src="assets/images/app/playstore.png" class="m-1 inline-block" alt=""></a>
                    </div>

                    <div class="inline-block">
                        <div class="pt-4 flex items-center border-t border-gray-100 dark:border-gray-700">
                            <i data-feather="smartphone" class="me-2 text-indigo-600 h-10 w-10"></i>
                            <div class="content">
                                <h6 class="text-base font-medium">Install app now on your cellphones</h6>
                                <a href="" class="relative inline-block font-semibold tracking-wide align-middle text-base text-center border-none after:content-[''] after:absolute after:h-px after:w-0 hover:after:w-full after:end-0 hover:after:end-auto after:bottom-0 after:start-0 after:transition-all after:duration-500 text-indigo-600 hover:text-indigo-600 after:bg-indigo-600 duration-500 ease-in-out">Learn More <i class="uil uil-angle-right-b"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--end gird-->
        </div><!--end container-->
    </section><!--end section-->
    <!-- End -->
@endsection
