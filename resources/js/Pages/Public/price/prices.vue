<script setup></script>
<template>
    <section class="w-full h-screen py-10">
        <div class="text-center mb-10">
            <h1 class="font-bold text-3xl mb-2">Pricing Table</h1>
            <h4 class="text-gray-600">This is a simple TailwindCSS pricing table.</h4>
        </div>
        <div class="max-w-3xl mx-auto flex flex-col md:flex-row px-2 md:px-0">
            <div class="w-full md:w-1/3 bg-white rounded-lg shadow hover:shadow-xl transition duration-100 ease-in-out p-6 md:mr-4 mb-10 md:mb-0">
                <h3 class="text-gray-600 text-lg">Base</h3>
                <p class="text-gray-600 mt-1"><span class="font-bold text-black text-4xl">$69</span> /Month</p>
                <p class="text-sm text-gray-600 mt-2">For most businesses that want to optimize web queries.</p>
                <div class="text-sm text-gray-600 mt-4">
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> All limited links</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Own analytics platform</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Chat support</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Optimize hashtags</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Unlimited users</p>
                </div>
                <button class="w-full text-purple-700 border border-purple-700 rounded hover:bg-purple-700 hover:text-white hover:shadow-xl transition duration-150 ease-in-out py-4 mt-4">Choose Plan</button>
            </div>
            <div class="w-full md:w-1/3 text-white bg-purple-700 rounded-lg shadow hover:shadow-xl transition duration-100 ease-in-out p-6 md:mr-4 mb-10 md:mb-0">
                <h3 class="text-lg">Popular</h3>
                <p class="mt-1"><span class="font-bold text-4xl">$99</span> /Month</p>
                <p class="text-sm opacity-75 mt-2">For most businesses that want to optimize web queries.</p>
                <div class="text-sm mt-4">
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> All limited links</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Own analytics platform</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Chat support</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Optimize hashtags</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Unlimited users</p>
                </div>
                <button class="w-full text-purple-700 bg-white rounded opacity-75 hover:opacity-100 hover:shadow-xl transition duration-150 ease-in-out py-4 mt-4">Choose Plan</button>
            </div>
            <div class="w-full md:w-1/3 bg-white rounded-lg shadow hover:shadow-xl transition duration-100 ease-in-out p-6 mb-10 md:mb-0">
                <h3 class="text-gray-600 text-lg">Enterprise</h3>
                <p class="text-gray-600 mt-1"><span class="font-bold text-black text-4xl">$299</span> /Month</p>
                <p class="text-sm text-gray-600 mt-2">For most businesses that want to optimize web queries.</p>
                <div class="text-sm text-gray-600 mt-4">
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> All limited links</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Own analytics platform</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Chat support</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Optimize hashtags</p>
                    <p class="my-2"><span class="fa fa-check-circle mr-2 ml-1"></span> Unlimited users</p>
                </div>
                <button class="w-full text-purple-700 border border-purple-700 rounded hover:bg-purple-700 hover:text-white hover:shadow-xl transition duration-150 ease-in-out py-4 mt-4">Choose Plan</button>
            </div>
        </div>
    </section>
</template>
