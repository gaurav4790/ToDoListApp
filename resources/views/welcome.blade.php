<x-guest-layout>
    <div class="min-h-screen bg-gradient-to-br from-blue-50 to-indigo-100">
        <!-- Navigation -->
        <nav class="container mx-auto px-6 py-4">
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                    </svg>
                    <span class="ml-2 text-xl font-bold text-gray-800">WebReinvent</span>
                </div>
               
            </div>
        </nav>

        <!-- Hero Section -->
        <div class="container mx-auto px-6 py-16 md:py-24">
            <div class="flex flex-col md:flex-row items-center">
                <div class="md:w-1/2 mb-12 md:mb-0">
                    <h1 class="text-4xl md:text-5xl font-bold text-gray-800 leading-tight mb-6">
                        Organize Your Life with <span class="text-indigo-600">WebReinvent</span>
                    </h1>
                    <p class="text-xl text-gray-600 mb-8">
                        The most intuitive todo list app designed for modern teams and individuals.
                        Boost productivity and never miss a deadline again.
                    </p>
                    <div class="flex flex-col sm:flex-row space-y-4 sm:space-y-0 sm:space-x-4">
                        <a href="#" class="bg-indigo-600 text-white px-6 py-3 rounded-md text-center font-medium hover:bg-indigo-700 transition duration-300">
                            Start for Free
                        </a>
                        <a href="#" class="border border-gray-300 text-gray-700 px-6 py-3 rounded-md text-center font-medium hover:bg-gray-50 transition duration-300 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM9.555 7.168A1 1 0 008 8v4a1 1 0 001.555.832l3-2a1 1 0 000-1.664l-3-2z" clip-rule="evenodd" />
                            </svg>
                            Watch Demo
                        </a>
                    </div>
                    <p class="mt-4 text-gray-500 text-sm">
                        No credit card required • 14-day free trial
                    </p>
                </div>
                <div class="md:w-1/2">
                    <div class="bg-white p-6 rounded-xl shadow-lg">
                        <div class="flex items-center mb-4">
                            <div class="h-3 w-3 bg-red-500 rounded-full mr-2"></div>
                            <div class="h-3 w-3 bg-yellow-500 rounded-full mr-2"></div>
                            <div class="h-3 w-3 bg-green-500 rounded-full"></div>
                        </div>
                        <div class="space-y-4">
                            <div class="flex items-center">
                                <input type="checkbox" class="h-5 w-5 text-indigo-600 rounded focus:ring-indigo-500 mr-3">
                                <span class="text-gray-800">Complete project proposal</span>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" class="h-5 w-5 text-indigo-600 rounded focus:ring-indigo-500 mr-3" checked>
                                <span class="text-gray-400 line-through">Team standup meeting</span>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" class="h-5 w-5 text-indigo-600 rounded focus:ring-indigo-500 mr-3">
                                <span class="text-gray-800">Review design mockups</span>
                                <span class="ml-auto bg-blue-100 text-blue-800 text-xs px-2 py-1 rounded-full">Design</span>
                            </div>
                            <div class="flex items-center">
                                <input type="checkbox" class="h-5 w-5 text-indigo-600 rounded focus:ring-indigo-500 mr-3">
                                <span class="text-gray-800">Prepare client presentation</span>
                                <span class="ml-auto bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded-full">Urgent</span>
                            </div>
                            <div class="pt-2 mt-4 border-t border-gray-100">
                                <input type="text" placeholder="Add new task..." class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="bg-white py-16">
            <div class="container mx-auto px-6">
                <h2 class="text-3xl font-bold text-center text-gray-800 mb-12">Why Choose WebReinvent?</h2>
                <div class="grid md:grid-cols-3 gap-8">
                    <div class="text-center p-6 rounded-lg hover:shadow-md transition duration-300">
                        <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Secure & Reliable</h3>
                        <p class="text-gray-600">Your data is encrypted and backed up daily. Never lose your tasks again.</p>
                    </div>
                    <div class="text-center p-6 rounded-lg hover:shadow-md transition duration-300">
                        <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Time Tracking</h3>
                        <p class="text-gray-600">Built-in time tracking helps you stay on schedule and meet deadlines.</p>
                    </div>
                    <div class="text-center p-6 rounded-lg hover:shadow-md transition duration-300">
                        <div class="bg-indigo-100 w-16 h-16 mx-auto rounded-full flex items-center justify-center mb-4">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-600" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                            </svg>
                        </div>
                        <h3 class="text-xl font-semibold mb-2">Team Collaboration</h3>
                        <p class="text-gray-600">Share lists, assign tasks, and collaborate seamlessly with your team.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- CTA Section -->
        <div class="bg-indigo-600 py-16">
            <div class="container mx-auto px-6 text-center">
                <h2 class="text-3xl font-bold text-white mb-6">Ready to boost your productivity?</h2>
                <p class="text-xl text-indigo-100 mb-8 max-w-2xl mx-auto">Join thousands of professionals who trust WebReinvent to organize their work and life.</p>
                <a href="#" class="bg-white text-indigo-600 px-8 py-3 rounded-md font-medium hover:bg-gray-100 transition duration-300 inline-block">
                    Get Started - It's Free
                </a>
                <p class="mt-4 text-indigo-200 text-sm">No credit card required • 14-day free trial</p>
            </div>
        </div>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row justify-between">
                    <div class="mb-8 md:mb-0">
                        <div class="flex items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-indigo-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                            </svg>
                            <span class="ml-2 text-xl font-bold">WebReinvent</span>
                        </div>
                        <p class="mt-4 text-gray-400 max-w-xs">The simplest way to organize your tasks and boost productivity.</p>
                    </div>
                    <div class="grid grid-cols-2 md:grid-cols-3 gap-8">
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Product</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white">Features</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Pricing</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Integrations</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Company</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white">About</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Careers</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Contact</a></li>
                            </ul>
                        </div>
                        <div>
                            <h3 class="text-lg font-semibold mb-4">Resources</h3>
                            <ul class="space-y-2">
                                <li><a href="#" class="text-gray-400 hover:text-white">Blog</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Help Center</a></li>
                                <li><a href="#" class="text-gray-400 hover:text-white">Tutorials</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="border-t border-gray-700 mt-12 pt-8 flex flex-col md:flex-row justify-between items-center">
                    <p class="text-gray-400 mb-4 md:mb-0">© 2023 WebReinvent. All rights reserved.</p>
                    <div class="flex space-x-6">
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-white">
                            <svg class="h-6 w-6" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</x-guest-layout>
